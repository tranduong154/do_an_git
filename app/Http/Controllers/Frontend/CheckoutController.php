<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\FootballPitch;
use App\Models\PutPitchDetail;
use App\Models\PutPitch;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footballPitchs = FootballPitch::all();
        return view('frontend.checkout.index', compact('footballPitchs'));
    }

    public function showHistory()
    {
        $user_id = Auth::user()->id;
        $historyOrders = PutPitchDetail::latest()
            ->where('ma_tk', $user_id)
            ->paginate(10);
        
        // dd($historyOrders);
        return view('frontend.checkout.history', compact('historyOrders'));
    }

    
    public function showVnpay()
    {
        return view('frontend.vnpay.index');
        
    }

    function RandomString($lenght)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randstring = '';
        for ($i = 0; $i < $lenght; $i++) {
            $randstring = $characters[rand(0, strlen($characters)-1)];
        }
        return $randstring;
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPayment(Request $request)
    {
        $vnp_TxnRef = $this->RandomString(15); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
        $vnp_OrderInfo = $request->order_desc;
        $vnp_OrderType = $request->order_type;
        $vnp_Amount = $request->amount;
        $vnp_Locale = $request->language;
        $vnp_BankCode = $request->bank_code;
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        
        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_Amount" => $vnp_Amount * 100,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_TxnRef" => $vnp_TxnRef,
            "vnp_TmnCode" => env('VNP_TMN_CODE'),
            "vnp_ReturnUrl" => route('frontend.checkout.history'),
           
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }

        ksort($inputData);

        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';
        }

        $vnp_Url = env('VNP_URL') . "?" . $query;
        if (env('VNP_HASH_SECRET')) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, env('VNP_HASH_SECRET'));//  
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }

        // dd($vnp_Url);

        return redirect($vnp_Url);

       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ngayDat = Carbon::now();
        if(session()->has('order')){
            $orders = session()->get('order');
            foreach ($orders as $key => $order) {
                PutPitchDetail::create([
                    "ma_tk" => Auth::user()->id,
                    "ma_dat_san" => $order['ma_dat_san'],
                    "ma_san" => $order['ma_san'],
                    "khung_gio" => $order['khung_gio'],
                    "gia_san" => $order['gia_san'],
                    "ma_loai_dv" => $order['ma_loai_dv'],
                    "gia_nuoc" => $order['gia_nuoc'],
                    "so_luong_dv" => $order['so_luong_dv'],
                    "ngay_su_dung" => $order['ngay_su_dung'],
                    "gia_tien" =>$order['gia_tien']
                ]);

                PutPitch::create([
                    'ma_tk' => Auth::user()->id,
                    'ngay_dat' => $ngayDat->toDateString(),
                    'ten_nguoi_dat' => Auth::user()->ten,
                    'sdt_nguoi_dat' => Auth::user()->sdt,
                    'ma_trang_thai' => 2
                ]);
            }
            $orders = session()->forget('order');
        } 
        return redirect()->route('frontend.checkout.success');
    }

    /**
     * search.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        if($request->ajax()){
            $result = [];
            $user_id = Auth::user()->id;
            $nowDate = Carbon::now(); 
            $today = $nowDate->toDateString();
            $footballPitchs = FootballPitch::all();

            if (empty(request()->search)) {
                $historyOrders = PutPitchDetail::where('ma_tk', $user_id)
                    ->orderBy('created_at', 'desc')
                    ->paginate(5);

                $view =  view('frontend.checkout.table')->with([
                    'historyOrders'   => $historyOrders,
                    'footballPitchs'  => $footballPitchs,
                    'today'           => $today  
                ])->render();
                return response()->json(['html' => $view]);
            }
            if($request->search == 'da_dat') {
                $result['historyOrders'] = PutPitchDetail::orderBy('created_at', 'desc')->where('ma_tk', $user_id)->where('ngay_gio_huy', null)->paginate(5);
            } else {
                $result['historyOrders'] = PutPitchDetail::orderBy('created_at', 'desc')->where('ma_tk', $user_id)->where('ngay_gio_huy','<>', null)->paginate(5);
            }

            $view = view('frontend.checkout.table')->with([
                'historyOrders'   => $result['historyOrders'],
                'footballPitchs'   => $footballPitchs,
                'today'           => $today  
            ])->render();
            return response()->json(['html' => $view]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('frontend.checkout.success');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all());
        $date = Carbon::now();
        $today = $date->toDateTimeString();
        $putPitchDetail = PutPitchDetail::find($id);
        $putPitch = PutPitch::find($id);
        dd($putPitch);
        $putPitchDetail->ngay_gio_huy = $today;
        $putPitch->ma_trang_thai = 3;
        $putPitchDetail->update();
        $putPitch->update();
        return redirect()->back()->with('success',('Hủy đặt sân thành công!'));
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        $putPitchDetail = PutPitchDetail::find($id); 
        $putPitch = PutPitch::find($id); 
        if($putPitchDetail->delete() && $putPitch->delete())
        {
            return redirect()->route('frontend.checkout.showHistory')->with('success',('Xóa lịch sử đặt sân thành công!'));
        }else{
            return redirect()->route('frontend.checkout.showHistory')->withErrors('Xóa lịch sử đặt sân thất bại!');
        }
    }
    public function deleteSession()
    {
        if(!empty($_GET['valID'])) {
            $idOrder = $_GET['valID'];
            if(session()->has('order')) {
                $order = session()->get('order');
                foreach($order as $key => $val) {
                    if($key == $idOrder) {
                        unset($order[$key]);
                    }
                }
                session()->put('order', $order);
            }else {
                echo "Session does not exist!";
            }
        }
        return redirect()->route('frontend.checkout.index');

    }
}