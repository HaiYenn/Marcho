<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// khai báo sử dụng loginRequest
use App\Http\Requests\Login\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Models\register;
class AdminRegisterController extends Controller
{

    

    /**
     * @param LoginRequest $request
     * @return RedirectResponse
     */
    public function postregister(Request $req)
    {
        $register = new register();
        $model = $register->add($req);
        if ($model != null) {
            return redirect()->route('admin.login');
        }else{
            return back();
        }
    }

    /**
     * action admincp/logout
     * @return RedirectResponse
     */
    public function getregister()
    {
        return  view('admin.pages.Register.register');
    }

}