<?php

namespace App\Http\Controllers;

use App\User;
//use Dotenv\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller {
	public function login() {
		return view( 'auth.login' );
	}

	public function doLogin( Request $r ) {
		$r->validate( [
			'email' => 'required|email',
			'pass'  => 'required|min:8',
		], $this->messages() );
		$users = User::select( 'id', 'email', 'password' )
		             ->where( 'email', '=', $r->get( 'email' ) )
		             ->where( 'active', '=', '1' )->get();
		if ( count( $users ) == 1 ) {
			$u = $users[0];
			if ( $u->email == $r->get( 'email' ) && Hash::check($r->get( 'pass' ),$u->password) ) {
				$u=User::select('id','name', 'email', 'password', 'group', 'avt', 'phone', 'gender','studentcode','dateofbirth')
				       ->where( 'id', '=', $u->id )
				       ->where( 'active', '=', '1' )->first();
				Session::put('auth',$u);
				return view('auth.loginok');
			} else {
				return redirect()->back()
				                 ->withInput($r->only('email'))
				                 ->withErrors(['mes'=>'Bạn đã nhập sai Email hoặc Password']);
			}
		} else {
			return redirect()->back()->withInput($r->only('email'))->withErrors(['mes'=>'Bạn đã nhập sai Email hoặc Password']);
		}
	}

	private function messages() {
		return [
			'email.required' => 'Bạn cần phải nhập Email.',
			'pass.required'  => 'Bạn cần phải nhập Password.',
			'email.email'    => 'Định dạng Email bị sai.',
			'pass.min'       => 'Password phải nhiều hơn 8 ký tự.',
		];
	}
	public function doSignup(Request $request){
		$validator= Validator::make($request->all(),[
				'email'=>'required',
//				'pass'=>'required|min:8',
				'password' => 'required|confirmed|min:8',
			]);
		$user= new User;
		$user->email= $request->email;
		$user->name= $request->name;
		$user->phone= $request->phone;
		$user->password= bcrypt($request->password);
		$user->phone= $request->phone;
		$user->gender= $request->gender;

		$user->save();
		return redirect()->back()->withErrors($validator, 'signup');
	}
	public function profile(Request $request){
		return view('auth.profile');
	}
	public function doProfile(Request $request){

		Session::get('auth')->name=$request->name;
		Session::get('auth')->email=$request->email;
		Session::get('auth')->phone=$request->phone;
		Session::get('auth')->studentcode=$request->studentcode;
		Session::get('auth')->dateofbirth=$request->dateofbirth;
		Session::get('auth')->gender=$request->gender;
		Session::get('auth')->save();
		echo $request->input('gender');

		return view('auth.profile');
	}
	public  function doLogout(){
		Session::forget('auth');
		return view('auth.login');
	}

	public function editProfile(){

		return view('auth.editprofile');
	}

}
