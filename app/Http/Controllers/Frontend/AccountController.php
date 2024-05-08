<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Account;
use Illuminate\Support\Facades\Auth;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    
    public function register() {
        return view('frontend.account.register');
    }
    
    public function postRegister(Request $request)
    {   
        $password = $request->password;
        $pass_confirm = $request->pass_confirm;
        if($password == $pass_confirm) {
            if ($request->email == 'quanly@gmail.com') {
                $maQuyen = 0;
            } else if ($request->email == 'nhanvien@gmail.com') {
                $maQuyen = 1;
            } else {
                $maQuyen = 2;
            }
            $dataUser = [
                'ten'       => $request->name,
                'email'      => $request->email,
                'sdt'      => $request->phone,
                'password'   => bcrypt($password),
                'ma_quyen'      => $maQuyen,
            ];

            if(Account::create($dataUser)) {
                return redirect()->back()->with('success',('Đăng ký thành công. Vui lòng đăng nhập!'));
            }
            return redirect()->back()->withErrors('Đăng ký thất bại.');
        }
        return redirect()->back()->withErrors('Mật khẩu phải trùng nhau!.');
        
    }
    public function login() {
        return view('frontend.account.login');
    }

    public function postLogin(Request $request)
    {
        $login = [
            'email' => $request->email,
            'password'=> $request->password
        ];

        $remember = false;

        if($request->remember_me){
            $remember = true;
        }
        if ($this->doLogin($login, $remember)) {
            if( Auth::check() && Auth::user()->ma_quyen == 0 || Auth::user()->ma_quyen == 1 ){
                return redirect('admin/index');
            }
            return redirect('frontend/index')->with('success',('Đăng nhập thành công.'));;
        }else{
            return redirect()->back()->withErrors('Email hoặc mật khẩu không đúng.');
        }
    }
    /**
     * Do login
     *
     * @param $attempt
     * @param $remember
     * @return bool
     */
    protected function doLogin($attempt, $remember)
    {
        
        if (Auth::attempt($attempt, $remember)) {
            return true;
        } else {
            return false;
        }
    }

    public function logout()
    {
        if(Auth::check()){
            Auth::logout();
            $orders = session()->forget('order');
        }
        return redirect()->route('frontend.account.login');
        
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
        //
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
