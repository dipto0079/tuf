<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminLoginRequest;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function postLogin(AdminLoginRequest $request)
    {
        $admin = Admin::where('email', '=', $request->get("email"))->where('status', '!=', 5)->first();
        if ($admin) {
            if (Auth::guard('admin')->attempt(['email' => $request->get("email"), 'password' => $request->get('password')])) {
                return redirect()->route('admin.getDashboard');
            } else {
                return redirect()->back()->with(['dismiss' => 'Login Field']);
            }
        } else {
            return redirect()->back()->with(['dismiss' => 'Login Field']);
        }
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function getDashboard(){
        return view('admin.dashboard');
    }
}
