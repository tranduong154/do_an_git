<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Regulation;
use App\Http\Requests\CreateRegulationRequest;

class RegulationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $regulations = Regulation::latest()->paginate(5);
        return view('admin.Regulation.index', compact('regulations'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.Regulation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateRegulationRequest $request)
    {
        $regulations = new Regulation;
        $data = $request->all();
        if($regulations->create($data))
        {
            return redirect()->route('admin.regulation.index')->with('success',('Thêm thông tin qui định thành công!'));
        }else{
            return redirect()->route('admin.regulation.index')->withErrors('Thêm thông tin qui định thất bại!');
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
        $regulation = Regulation::find($id);
        return view('admin.regulation.edit', compact('regulation'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateRegulationRequest $request, $id)
    {
        $regulation = Regulation::find($id); 
        $data = $request->all();
        // dd($data);
        if($regulation->update($data))
        {
            return redirect()->route('admin.regulation.index')->with('success',('Sửa thông tin qui định thành công!'));
        }else{
            return redirect()->route('admin.regulation.index')->withErrors('Sửa thông tin qui định thất bại!');
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
        $regulation = Regulation::find($id); 
        if($regulation->delete())
        {
            return redirect()->route('admin.regulation.index')->with('success',('Xóa thông tin qui định thành công!'));
        }else{
            return redirect()->route('admin.regulation.index')->withErrors('Xóa thông tin qui định thất bại!');
        }
    }
}
