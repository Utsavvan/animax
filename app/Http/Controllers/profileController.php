<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use TCG\Voyager\Models\User;

class profileController extends Controller
{
    public function userid()
    {
//        $role = Auth::user()->role;
//        if ($role = "admin") {
        $id = Auth::user()->id;
        $email = Auth::user()->email;
        $username = Auth::user()->username;
        $name = Auth::user()->name;
//            $fname = Auth::user()->first_name;
//            $lname = Auth::user()->last_name;
            return view('profile', compact('id', 'email','username','name'));
//        } else {
//            return "you are not allowed";
//        }

    }

    public function changePassword(Request $request)
    {
        $input = $request->all();
        $user = User::find(auth()->user()->id);


        if($request->has('form2')){
            if (Hash::check($input['oldpassword'], $user->password)) {
                $id = Auth::user()->id;
                $users = User::find($id);
                $users->password = bcrypt($request->newpassword);
                $users->save();
//                dd('password updated successfully');
                session()->flash('message', 'Password updated succesfully');
                return redirect()->back();
            } else {
                session()->flash('message', 'Old password is incorrect');
                return redirect()->back();
            }
        }
        else{
            $id = Auth::user()->id;
            $users = User::find($id);
//            $users->first_name = $request->firstname;
//            $users->last_name = $request->lastname;
            $users->email = $request->email;
            $users->username = $request->username;
            $users->save();
            session()->flash('message1', 'Information updated succesfully');
            return redirect()->back();
        }
    }
}
