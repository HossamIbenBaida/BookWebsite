<?php

namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session ;
class AdminController extends Controller
{
    public function admin(){
        return view('admin.dashboard');
    }
    public function adminlogin(){
        return view('admin.login');
    }
    public function access_account(Request $request ){
        $this->validate($request , ['username'=> 'required' ,
                                    'password'=>'required']);
    $admin = Admin::where('username', $request->input('username'))->first();
        if($admin){
            if(Hash::check($request->input('password') , $admin->password)){
                Session::put('admin' , $admin);
                return redirect('/admin');
            }else{
            return back()->with('status' , 'Bad username or password');
            }
    
        }else{
    
            return back()->with('status' , 'you do not have access');
        }
    
    }
    public function  logout(){
        Session::forget('admin');
        return redirect('/')  ;
    }
}
