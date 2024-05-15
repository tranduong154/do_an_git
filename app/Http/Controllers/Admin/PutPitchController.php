<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PutPitch;
use App\Models\StatusPutPitch;
use App\Models\FootballPitch;
use App\Models\Service;
use App\Models\PriceTime;
use App\Http\Requests\CreatePutPitchRequest;
use App\Models\PutPitchDetail;
use Carbon\Carbon;
use \Illuminate\Http\Response;

class PutPitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->getAllPutPitch();
		return view('admin.put_pitch.index')->with([
            'putPitchs'            => $result['putPitchs'],
            'statusPutPitchs'      => $result['statusPutPitchs'],
            'footballPitchs'        => $result['footballPitch']
        ]);
    }

    public function getAllPutPitch()
    {
        $result['putPitchs'] = PutPitchDetail::join('dat_san', 'dat_san.id', '=', 'chi_tiet_dat_san.id')
            ->orderBy('chi_tiet_dat_san.ngay_su_dung', 'desc')
            ->paginate(5);
        $result['statusPutPitchs'] = StatusPutPitch::all();
        $result['footballPitch'] =  FootballPitch::all();
        $result['service'] =  Service::all();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $result = $this->getAllPutPitch();
        return view('admin.put_pitch.add')->with([
            'listFootballPitch'            => $result['footballPitch'],
            'statusPutPitchs'        => $result['statusPutPitchs'],
            'listService'     => $result['service'],
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $maDatSan = $request->ma_dat_san;
        $khungGio = $request->khung_gio;
        $loaiDV = $request->ma_loai_dv;
        $soLuongDV = $request->so_luong_dv;
        $maDatSan = rand(1000, 10000);
        $ngayDat = Carbon::now();

        $priceTime = PriceTime::where('khung_gio', FootballPitch::LIST_TIME_ORDER[$khungGio])->first(); 
        $priceService = Service::where('ma_loai_dv', FootballPitch::LIST_SERVICE_ORDER[$loaiDV])->first();

        $giaTien =  $priceTime->gia_tien + ($priceService->gia_tien *  $soLuongDV);

        PutPitchDetail::create([
            "ma_dat_san" => $maDatSan,
            "ma_san" =>  $request->ma_san,
            "khung_gio" => $khungGio,
            "ma_loai_dv" => $loaiDV,
            "so_luong_dv" => $soLuongDV,
            "ngay_su_dung" => $request->ngay_su_dung,
            "gia_tien" => $giaTien
        ]);

        PutPitch::create([
            'ngay_dat' => $ngayDat->toDateString(),
            'ten_nguoi_dat' => $request->ten_nguoi_dat,
            'sdt_nguoi_dat' => $request->sdt_nguoi_dat,
            'ma_trang_thai' => 1
        ]);

        return redirect()->route('admin.putPitch.index')->with('success',('Thêm thông tin đặt sân thành công!'));
    }

    /**
     * search.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(Request $request)
    {
        info($request->all());
        if($request->ajax()){
            $result = [];
            if (empty(request()->search)) {
                $result = $this->getAllPutPitch();
                $view =  view('admin.put_pitch.table')->with([
                    'putPitchs'            => $result['putPitchs'],
                    'statusPutPitchs'        => $result['statusPutPitchs'],
                    'footballPitchs'        => $result['footballPitch']
                ])->render();
                return response()->json(['html' => $view]);
            }
            $result = $this->getAllPutPitch();
            $query = PutPitchDetail::join('dat_san', 'dat_san.id', '=', 'chi_tiet_dat_san.id')
                ->orderBy('created_at', 'desc');
            if($request->search == 'da_dat') {
                $result['putPitchs'] = $query
                    ->where('ngay_gio_huy', null)
                    ->paginate(5);
            } else if($request->search == 'da_huy') { 
                $result['putPitchs'] = $query
                    ->where('ngay_gio_huy','<>', null)
                    ->paginate(5);
            } else {
                $result['putPitchs'] = PutPitchDetail::join('dat_san', 'dat_san.id', '=', 'chi_tiet_dat_san.id')
                    ->where('dat_san.ten_nguoi_dat', 'LIKE', '%' . $request->search . '%')
                    ->orderBy('chi_tiet_dat_san.created_at', 'desc')
                    ->paginate(5);

            }
            $view = view('admin.put_pitch.table')->with([
                'putPitchs'   => $result['putPitchs'],
                'statusPutPitchs' => $result['statusPutPitchs'],
                'footballPitchs'        => $result['footballPitch']
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
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $today = Carbon::now()->toDateString();
        $putPitch = PutPitch::join('chi_tiet_dat_san', 'chi_tiet_dat_san.id', '=', 'dat_san.id')
            ->where('dat_san.id', $id)
            ->first();

        // dd($putPitchDetail);
        $result = $this->getAllPutPitch();
        return view('admin.put_pitch.edit')->with([
            'listFootballPitch' => $result['footballPitch'],
            'statusPutPitchs'   => $result['statusPutPitchs'],
            'listService'       => $result['service'],
            'putPitch'          => $putPitch,
        ]);
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
        $maDatSan = $request->ma_dat_san;
        $khungGio = $request->khung_gio;
        $loaiDV = $request->ma_loai_dv;
        $soLuongDV = $request->so_luong_dv;

        $putPitch = PutPitch::find($id); 
        $putPitchDetail = PutPitchDetail::find($id); 

        $priceTime = PriceTime::where('khung_gio', FootballPitch::LIST_TIME_ORDER[$khungGio])->first(); 
        $priceService = Service::where('ma_loai_dv', FootballPitch::LIST_SERVICE_ORDER[$loaiDV])->first();

        $data = $request->all();
        $giaTien =  $priceTime->gia_tien + ($priceService->gia_tien *  $soLuongDV);

        $data['gia_tien'] = $giaTien;

        if($request->ma_trang_thai == 3) {
            $data['ngay_gio_huy'] = Carbon::now()->toDateString();
        }else {
            $data['ngay_gio_huy'] = null;
        }

        if($putPitch->update($data) && $putPitchDetail->update($data))
        {
            return redirect()->route('admin.putPitch.index')->with('success',('Sửa thông tin đặt sân thành công!'));
        }else{
            return redirect()->route('admin.putPitch.index')->withErrors('Sửa thông tin đặt sân thất bại!');
        }
    }

    /**
     * orderSearch a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function orderSearch()
    {
        // info(request()->all());
        $footballPitch = request()->footballPitch;
        $dateRequest = request()->dateRequest;

        $putPitchDetails = PutPitchDetail::when(!empty($footballPitch), function ($q) use ($footballPitch) {
            return $q->where('ma_san', $footballPitch );
        })->when(!empty($dateRequest), function ($q) use ($dateRequest) {
            return $q->where('ngay_su_dung', $dateRequest );
        })->get();

        return response()->json([
            'status'    => Response::HTTP_OK,
            'data'      => $putPitchDetails,
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $putPitchDetail = PutPitchDetail::find($id); 
        $putPitch = PutPitch::find($id);
        $service = Service::where('ma_loai_dv', $putPitchDetail->ma_loai_dv)->first();
        $tongDonVi = $service->don_vi + (int) $putPitchDetail->so_luong_dv;
        $service->update(['don_vi' => $tongDonVi]);

        if($putPitchDetail->delete() && $putPitch->delete())
        {
            return redirect()->route('admin.putPitch.index')->with('success',('Xóa thông tin đặt sân thành công!'));
        }
        return redirect()->route('admin.putPitch.index')->withErrors('Xóa thông tin đặt sân thất bại!');
    }
}
