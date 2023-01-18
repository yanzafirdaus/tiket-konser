<?php

namespace App\Http\Controllers;


use App\Models\AkunUser;
use Illuminate\Http\Request;

class AkunController extends Controller
{
    public function signIn(Request $request){
        $username = $request->username ? $request->username : '';
        $password = $request->password ? $request->password : '';

        $akun = AkunUser::where('username', $username)->where('password', $password)->first();

        if(isset($akun)){
            return redirect('/data-pesanan');
        }else{
            return back()->with('Username / Password Salah');
        }
    }
}
