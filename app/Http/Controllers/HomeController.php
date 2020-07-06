<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{
    public function signIn(Request $request){
        $rules = [
            'username'=> 'required',
            'password' => 'required'
        ];


        $validator  = Validator::make($request->all(),$rules);

        if($validator->fails()){
            return redirect()->back()->with(['errors' => $validator->errors()]);
        }

        if(auth()->attempt(['email' => $request['username'],'password' => $request['password']])){
            $user = User::query()->where('email',$request['username'])->first();
            Auth::login($user);
            return redirect('/dashboard');
        }else{
            //TODO handle auth failed
        }
    }

    public function dashboard(){
        return view('dashboard.index');
    }
}
