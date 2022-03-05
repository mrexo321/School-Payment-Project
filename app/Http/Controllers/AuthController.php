<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    //



    public function indexLog()
    {
        //
        return view('login.index');
    }

    public function indexReg()
    {
        return view('register.index');
    }

    public function store(Request $request)
    {
        $data = [
            'username' => 'required|unique:users',
            'identifier' => 'unique:users',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:4',
            'passwordConfirmation' => 'required|min:4'
        ];


        $validatedData = $request->validate($data);

        if($validatedData['passwordConfirmation'] !== $validatedData['password']){
            throw ValidationException::withMessages(['password' => "Password Doesn't Match"]);
        }

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['identifier'] = 'U' . strtolower(Str::random(32));

        $registeredUser = User::create($validatedData);

        Auth::loginUsingId($registeredUser->id);
        Alert::success('Success' , 'Register Success');
        return redirect('/');
    }



    public function authenticate(Request $request)
    {

        $data = [
            'email' => 'required',
            'password' => 'required|min:4',
        ];

        $remember_me = $request->has('remember_me') ? true : false;

        $validatedData = $request->validate($data);




        if(Auth::attempt($validatedData , $remember = $remember_me)){
            if(auth()->user()->role == 'admin' || auth()->user()->role == 'petugas'){
                Alert::success('Success' , 'Login Success');
                return redirect()->intended('/dashboard');
            }

            Alert::success('Success' , 'Login Success');
            return redirect()->intended('/');
        }else{
            Alert::error('Failed' , 'email/password incorrect');
            return back();
        }


    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        Alert::success('Success' , 'Logout Success');
        return redirect()->intended('/');
    }


}
