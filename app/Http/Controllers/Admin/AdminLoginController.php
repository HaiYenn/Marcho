<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// khai báo sử dụng loginRequest
use App\Http\Requests\Login\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
class AdminLoginController extends Controller
{

    public function getlogin()
    {

        return view('admin.pages.login.indexLogin');

    }

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function postlogin(LoginRequest $request)
    {
        $login = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if (Auth::attempt($login)) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->back()->with('status', 'Email hoặc Password không chính xác');
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function getlogout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }

}