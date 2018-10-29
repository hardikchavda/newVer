<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Auth;
use Redirect;



class AdminController extends Controller {

    public function login() {

        return view('admin.login');
    }

    public function logincheck(Request $req) {
        $uname = $req->fnm;
        $password = $req->lnm;
       // dd(Auth::attempt(['name' => $uname, 'password' => $password]));
        if (Auth::attempt(['name' => $uname, 'password' => $password])) {
            return redirect()->intended('admin/home');
        } else {
            return Redirect::to('admin/login');
        }
        
    }

    public function logout() {
        Auth::logout();
        return redirect('admin/login');
    }
    
     public function home() {
        return view('admin.home');
    }

}
