<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->session()->has('Admin_login'))
        {
          $request->session()->put('Admin_login',$request->email);
          return redirect('admin/dashbord');
        }
        else
        {
          return view('admin.login');
        }
        return view('admin.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function auth(Request $request)
    { 
       //return $request->post(); 

       $email = $request->post('email');
       $pass = $request->post('password');

       $result = Admin::where(['email'=> $email,'password'=>$pass])->get();

       //echo "<pre>";
       //print_r($result);

       if(isset($result['0']->id))
       {
        $request->session()->put('Admin_login',$request->email);
        $request->session()->put('Admin_id',$result['0']->id);
        return redirect('admin/dashbord');
       }
       else
       {
        $request->session()->flash('error','Please enter valid Login details');
        return redirect('login');
       }
    }

    public function dashbord()
    {
        return view('admin.dashbord');
    }
  
 
}
