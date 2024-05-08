<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Permission;
use App\Http\Requests\CreateAccountRequest;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = $this->getAllCustomer();
		return view('admin.customer.index')->with([
            'customers'            => $result['customers'],
            'permissions'        => $result['permissions'],
        ]);
    }

    public function getAllCustomer()
    {
        $result['customers'] = Account::where('ma_quyen', 2)->latest()->paginate(5);
        $result['permissions'] = Permission::where('id','<>', 0)->get();
        return $result;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customer.add');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateAccountRequest $request)
    {
        $customer = new Account;
        $data = $request->all();

        if($customer->create($data))
        {
            return redirect()->route('admin.customer.index')->with('success',('Thêm thông tin khách hàng thành công!'));
        }else{
            return redirect()->route('admin.customer.index')->withErrors('Thêm thông tin khách hàng thất bại!');
        }
        

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
            if (empty(request()->search)) {
                $result = $this->getAllCustomer();
                info($result['customers']);
                $view =  view('admin.customer.table')->with([
                    'customers'   => $result['customers'],
                    'permissions' => $result['permissions'],
                ])->render();
                return response()->json(['html' => $view]);
            }
            $result = $this->getAllCustomer();
            $result['customers'] = Account::latest()->where('ten', 'LIKE', '%' . $request->search . '%')->paginate(5);
            $view = view('admin.customer.table')->with([
                'customers'   => $result['customers'],
                'permissions' => $result['permissions'],
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
        $customer = Account::find($id);
        $permissions = Permission::where('id','<>', 0)->get();
        return view('admin.customer.edit',compact('customer', 'permissions'));
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
        $customer = Account::find($id); 
        $data = $request->all();
        // dd($data);
        if($customer->update($data))
        {
            return redirect()->route('admin.customer.index')->with('success',('Sửa thông tin khách hàng thành công!'));
        }else{
            return redirect()->route('admin.customer.index')->withErrors('Sửa thông tin khách hàng thất bại!');
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
        $customer = Account::find($id); 
        if($customer->delete())
        {
            return redirect()->route('admin.customer.index')->with('success',('Xóa thông tin khách hàng thành công!'));
        }else{
            return redirect()->route('admin.customer.index')->withErrors('Xóa thông tin khách hàng thất bại!');
        }
    }
}
