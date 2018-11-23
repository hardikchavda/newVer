<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\userInfoReq;
use App\User;
use Auth;
use App\userinfo;
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
        $tabl = userinfo::all();
        return view('admin.home', compact('tabl'));
    }

    public function edit($id) {
        $tabl = userinfo::findOrFail($id);
        return view('admin.edit')->withTabl($tabl);
    }

    public function delete($id) {
        $tabl = userinfo::findOrFail($id);
        return view('admin.delete')->withTabl($tabl);
    }

    public function update($id, Request $req) {

        $tabl = userinfo::findOrFail($id);
        $tabl->update($req->all());
        return redirect()->back();
    }

    public function destroy($id) {
        $tabl = userinfo::destroy($id);
        //return redirect('admin/home');
    }

    public function create() {
        return view('admin.create');
    }
    
      public function addition(userInfoReq $req) {
        $tabl = new userinfo();       
        $tabl::create($req->all());        
    }

}
