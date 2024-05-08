<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PutPitch;
use App\Models\PutPitchDetail;
use Illuminate\Support\Carbon;

class ChartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.chart.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $tuNgay = $data['tu_ngay'];
        $denNgay = $data['den_ngay'];

        $thongKe = PutPitchDetail::whereBetween('ngay_su_dung', [$tuNgay, $denNgay])->orderBy('ngay_su_dung', 'ASC')->get();
        $countThongKe = count($thongKe);
        if($countThongKe > 0) {
            foreach($thongKe as $key => $val) {
                $chart_data[] = array(
                    'ngay_su_dung' => $val->ngay_su_dung,
                    'tongTien' => $val->gia_tien,
                );
            }
        }else {

            $chart_data[] = array(
                'ngay_su_dung' => '',
                'tongTien' => '',
            );
        }
        
        echo $data = json_encode($chart_data);

    }

    public function autoChart() {

        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

        $thongKe = PutPitchDetail::whereBetween('ngay_su_dung', [$sub7days, $now])->orderBy('ngay_su_dung', 'ASC')->get();
        $countThongKe = count($thongKe);
        if($countThongKe > 0) {
            foreach($thongKe as $key => $val) {
                $chart_data[] = array(
                    'ngay_su_dung' => $val->ngay_su_dung,
                    'tongTien' => $val->gia_tien,
                );
            }
        } else {
            $chart_data[] = array(
                'ngay_su_dung' => '',
                'tongTien' => '',
            );
        }

        echo $data = json_encode($chart_data);

    }

    public function searchMonth(Request $request) 
    {
        $data = $request->all();

        $dauThangNay = Carbon::now('Asia/Ho_Chi_Minh')->startOfMonth()->toDateString();
        $dauThangTruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->startOfMonth()->toDateString();
        $cuoiThangTruoc = Carbon::now('Asia/Ho_Chi_Minh')->subMonth()->endOfMonth()->toDateString();
        
        $sub7days = Carbon::now('Asia/Ho_Chi_Minh')->subdays(7)->toDateString();
        $now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();
        if($data['dashboard_value'] == '7ngay') {
            $thongKe = PutPitchDetail::whereBetween('ngay_su_dung', [$sub7days, $now])->orderBy('ngay_su_dung', 'ASC')->get();
        } else if ($data['dashboard_value'] == 'thangTruoc') {
            $thongKe = PutPitchDetail::whereBetween('ngay_su_dung', [$dauThangTruoc, $cuoiThangTruoc])->orderBy('ngay_su_dung', 'ASC')->get();
        } else {
            $thongKe = PutPitchDetail::whereBetween('ngay_su_dung', [$dauThangNay, $now])->orderBy('ngay_su_dung', 'ASC')->get();
        }

        $countThongKe = count($thongKe);
        if($countThongKe > 0) {
            foreach($thongKe as $key => $val) {
                $chart_data[] = array(
                    'ngay_su_dung' => $val->ngay_su_dung,
                    'tongTien' => $val->gia_tien,
                );
            }
        } else {
            $chart_data[] = array(
                'ngay_su_dung' => '',
                'tongTien' => '',
            );
        }

        echo $data = json_encode($chart_data);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
