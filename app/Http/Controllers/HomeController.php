<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        $request->session()->put(['name'=>'test session name']);
//        echo  $request->session()->get('name');
//        session(['global_name'=>'hello world']);
        
//        session(['lastname'=>'test last name']);
//        echo session('lastname');
//        $request->session()->flush();
//        return $request->session()->all();
//      return  session('name');
//        return $request->session()->all();
//        $request->session()->flash('message', 'This is the flash message');
//        $request->session()->reflash(); 
//        $request->session()->keep('message');
        echo $request->session()->get('message');
         return $request->session()->all();
//        return view('home');
    }
}
