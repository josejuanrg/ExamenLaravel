<?php

namespace service_control\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Session;
use Redirect;

class LoginController extends Controller
{
    public function index(){
    	return view('login');
    }
    public function authenticate(Request $request){
    	$email = $request->get('email');
        $password=$request->get('password');
        
        $check = DB::table('users')->where(['email'=>$email,'password'=>$password])->get();
        if (count($check)>0) {
        	$infoUser['id'] = $check[0]->id;
            $infoUser['email'] = $check[0]->email;
            $infoUser['status'] = $check[0]->status;
            $infoUser['role_id'] = $check[0]->role_id;
            Session::put('userSession', $infoUser);
            if($infoUser['role_id']==2){
            	return Redirect::to('/user-panel');
            }else{
        		return Redirect::to('/admin-panel');
            }
        }else{
        	return Redirect::to('/iniciar-sesion');
        }
    }
    public function loadHomeAdmin(){
    	$session = Session::get('userSession');
        $dataView['session'] = $session;
        $dataView['users']=DB::table('users')
        ->select('*')
        ->join('roles','users.role_id','=','roles.id')
        ->get();

    	return view('admin-panel',['dataView'=>$dataView]);
    }
     public function loadHomeUser(){
     	$session = Session::get('userSession');
        $dataView['session'] = $session;
    	return view('user-panel',['dataView'=>$dataView]);
    }
    public function logout(){
    	$session = Session::get('userSession');
        Session::flush();
        return Redirect::to('/iniciar-sesion');
    }
}
