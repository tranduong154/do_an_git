<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FootballPitch;
use App\Models\PriceTime;
use App\Http\Requests\CreateFootBallPitchRequest;

class FootballPitchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footballPitchs = FootballPitch::latest()->paginate(5);
        return view('admin.football_pitch.index', compact('footballPitchs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.football_pitch.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateFootBallPitchRequest $request)
    {
        $footballPitch = new FootballPitch;
        $data = $request->all();
        if($footballPitch->create($data))
        {
            return redirect()->route('admin.football_pitch.index')->with('success',('Thêm thông tin sân bóng thành công!'));
        }else{
            return redirect()->route('admin.football_pitch.index')->withErrors('Thêm thông tin sân bóng thất bại!');
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
        $footballPitch = FootballPitch::find($id);
        return view('admin.football_pitch.edit', compact('footballPitch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateFootBallPitchRequest $request, $id)
    {
        $footballPitch = FootballPitch::find($id); 
        $data = $request->all();
        // dd($data);
        if($footballPitch->update($data))
        {
            return redirect()->route('admin.football_pitch.index')->with('success',('Sửa thông tin sân bóng thành công!'));
        }else{
            return redirect()->route('admin.football_pitch.index')->withErrors('Sửa thông tin sân bóng thất bại!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $footballPitch = FootballPitch::find($id); 
        if($footballPitch->delete())
        {
            return redirect()->route('admin.football_pitch.index')->with('success',('Xóa thông tin sân bóng thành công!'));
        }else{
            return redirect()->route('admin.football_pitch.index')->withErrors('Xóa thông tin sân bóng thất bại!');
        }
    }

    public function priceTime() 
    {
        $priceTimes = PriceTime::paginate(5);
        return view('admin.price_time.index', compact('priceTimes'));
    }

    public function editPriceTime($id)
    {
        $priceTime = PriceTime::find($id);
        return view('admin.price_time.edit', compact('priceTime'));
    }

    public function editPostPriceTime(Request $request, $id)
    {
        $priceTime = PriceTime::find($id);
        $data = $request->all();
        if($priceTime->update($data))
        {
            return redirect()->route('admin.football_pitch.priceTime')->with('success',('Sửa giá khung giờ thành công!'));
        }else{
            return redirect()->route('admin.football_pitch.priceTime')->withErrors('Sửa giá khung giờ thất bại!');
        }
    }

}
