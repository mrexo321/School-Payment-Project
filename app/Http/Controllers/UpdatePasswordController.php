<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('profile.password.edit');
    }

    public function update(Request $request)
    {


        $data = [
            'current_password' => 'required|min:4',
            'password_confirmation' => 'required|min:4'
        ];

        $validatedData = $request->validate($data);

        $checkHash = Hash::check($validatedData['current_password'] , auth()->user()->password);

        $samePassword = Hash::check($validatedData['password_confirmation'] , auth()->user()->password);


        if($checkHash){

            $validatedData['password_confirmation'] = Hash::make($validatedData['password_confirmation']);
            if($samePassword){
                throw ValidationException::withMessages([
                    'current_password' => "Password cannot be same as before"
                ]);
            }
            $changedPassword = User::find(auth()->user()->id);
            $changedPassword->password = $validatedData['password_confirmation'];
            $changedPassword->save();
            Alert::success('Success' , 'Password Succesfully Changed');
            return back();
        }

        throw ValidationException::withMessages([
                'current_password' => "Password does not match from our record"
        ]);




    }


}
