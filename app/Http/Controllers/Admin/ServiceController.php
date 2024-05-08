<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Http\Requests\CreateServiceRequest;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::latest()->paginate(5);
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.service.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateServiceRequest $request)
    {
        $service = new Service;
        $data = $request->all();
        if($service->create($data))
        {
            return redirect()->route('admin.service.index')->with('success',('Thêm thông tin dịch vụ thành công!'));
        }else{
            return redirect()->route('admin.service.index')->withErrors('Thêm thông tin dịch vụ thất bại!');
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
        $service = Service::find($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CreateServiceRequest $request, $id)
    {
        $service = Service::find($id); 
        $data = $request->all();
        // dd($data);
        if($service->update($data))
        {
            return redirect()->route('admin.service.index')->with('success',('Sửa thông tin dịch vụ thành công!'));
        }else{
            return redirect()->route('admin.service.index')->withErrors('Sửa thông tin dịch vụ thất bại!');
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
        $service = Service::find($id); 
        if($service->delete())
        {
            return redirect()->route('admin.service.index')->with('success',('Xóa thông tin dịch vụ thành công!'));
        }else{
            return redirect()->route('admin.service.index')->withErrors('Xóa thông tin dịch vụ thất bại!');
        }
    }
}
