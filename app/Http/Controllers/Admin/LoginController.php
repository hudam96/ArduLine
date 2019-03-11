<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    protected function guard()
    {
        return Auth::guard('admin');
    }
    public function username()
    {
        return 'username';
    }
    public function redirectPath()
    {
        return '/admin/dashboard';
    }
    public function ShowLoginForm(){
        return view('admin.auth.login');
    }
}
