<?php

namespace App\Http\Controllers;
use App\userinfo;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class testC extends Controller {

    public function main() {
        
        $usr1 = userinfo::findOrFail(6);        
        return view('home',compact('usr1'));
        
        
        
        //dd($usr);
//       $loc= "Rajkot";
//       //return view('testc')->with('name',$name)->with('loc',$loc);
//       //return view('testc')->withName($name)->withLoc($loc);
//       return view('testc')->with(compact('name', 'loc'));
//        $name = "Kishorsinh";
//        $name1 = "Suraj";
//        $data = ['abcd', 'sdsds'
//        ];
//        $data1 = true;
//        $check = DB::Connection()->getDatabaseName();
//        $data2 = DB::select("select firstname,lastname from userinfo where firstname=?",['Kishorsinh']);
//        if (!empty($data2)) {           
//           return view('home',compact('name','name1','data','data1','data2','check'));
//        } else {
//            DB::insert("insert into userinfo (firstname,lastname,age,city,address,contactno,gender) values(?,?,?,?,?,?,?)",['Kishorsinh','vala','21','Rajkot','Rajkot','888444555','Male']);
//            return view('home',compact('name','name1','data','data1','data2','check'));
//        }     
    }

    public function abtus() {
       $name = "Kishorsinh";
        $name1 = "Suraj";
        $data = ['abcd', 'sdsds'
        ];
        $data1 = true;
        $check = DB::Connection()->getDatabaseName();
        $data2 = DB::select("select firstname,lastname from userinfo where firstname=:f",['f'=>'Kishorsinh']);
        if (!empty($data2)) {           
           return view('aboutus',compact('name','name1','data','data1','data2','check'));
        } else {
            DB::insert("insert into userinfo (firstname,lastname,age,city,address,contactno,gender) values(?,?,?,?,?,?,?)",['Kishorsinh','vala','21','Rajkot','Rajkot','888444555','Male']);
            return view('aboutus',compact('name','name1','data','data1','data2','check'));
        }  
    }

    public function cntus() {
        $name = "Kishorsinh";
        $name1 = "Suraj";
        $data = ['abcd', 'sdsds'
        ];
        $data1 = true;
        $check = DB::Connection()->getDatabaseName();
        $data2 = DB::select("select firstname,lastname from userinfo where firstname=?",['Kishorsinh']);
        if (!empty($data2)) {           
           return view('contactus',compact('name','name1','data','data1','data2','check'));
        } else {
            DB::insert("insert into userinfo (firstname,lastname,age,city,address,contactno,gender) values(?,?,?,?,?,?,?)",['Kishorsinh','vala','21','Rajkot','Rajkot','888444555','Male']);
            return view('contactus',compact('name','name1','data','data1','data2','check'));
        }  
    }

    public function pg2() {
        return view('page2');
    }
    
    public function rgs()
    {
        return view('registeration');
    }

    public function formsubmit(Request $req) //form-submit
    {
//        Request This is global method
        
        $usr = new userinfo();        
        $usr->firstname = $req->fnm;
        $usr->lastname = $req->lnm;
        $usr->age = $req->age;
        $usr->city= $req->ct;
        $usr->address= $req->ad;
        $usr->contactno = $req->cnt;
        $usr->gender = $req->gd;
        $usr->save();
        return back();
        
        // Cookies Encrypted  
        
    }
}


