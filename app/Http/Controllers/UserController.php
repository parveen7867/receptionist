<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    function userlogin()
    {
        return view('user.userlogin');
    }
    public function userlogout()
    {
        Auth::logout();

        return redirect()->route('user.login');
    }
    public function storeuserlogin(Request $request)
    {
        if (Auth::guard('user')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])) {
            $user = Auth::guard('user')->user();
            return redirect()->route('user.dashboard', $user)->with('success', 'Logged in successfully');
        } else {
            return redirect()->route('user.login')->with('error', 'Not Registered');
        }
    }
    
    
    public function userDashboard(User $user)
    {
        return view('dashboard.userdashboard', ['user' => $user]);
    }
    

    function useraddnew()
    {
        return view('user.useraddnew');
    }

    function storeuser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'pic' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
    
        $user = User::create([
            'name' => $request->name,
            'pic' => $request->pic,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
    
        if ($user) {
            return redirect()->route('user.dashboard', ['id' => $user->id]);
        }
    }
    
    function roleadd()
    {
        return view('Admin.role');
    }

    function selectrole(Request $request)
    {
        if ($request->role == 'patient') {
            return view('patient.patientlogin');
        } else {
            return view('user.userlogin');
        }
    }
}
