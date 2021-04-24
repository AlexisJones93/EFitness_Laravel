<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use Auth;

class UserController extends Controller
{
    public function getSignup(){
        return view('users.signup');
    }

    public function postSignup(Request $request){
        $this->validate($request, [
            'email'=>'email|required|unique:users',
            'password'=>'required|min:4'
            ]);

        $user = new User([
            'email'=>$request->input('email'),
            'password'=> bcrypt($request['password'])
        ]);

        $user->save();
        return redirect()->route('pages.clothes');
    }

    public function getLogin(){
        return view('users.login');
    }

    public function postLogin(Request $request){
        $this->validate($request, [
            'email'=>'email|required',
            'password'=>'required|min:4'
        ]);

        if(Auth::attempt(['email'=> $request->input('email'),'password'=>$request->input('password')])){
            return redirect()->route('users.profile');
        }
        return redirect()->route('users.login');
       
    }

    public function getProfile(){
        return view('users.profile');
    }

    public function getLogOut(){
        Auth::logout();
        return redirect()->back();
    }






}
