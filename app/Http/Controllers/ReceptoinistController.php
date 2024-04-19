<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\receptionist;
class ReceptoinistController extends Controller
{
    public function receptionistlogin(){
        return view('admin.adminlogin');
     }
     function storereceptionist(Request $request){
    $receptionists=$request->receptionists(
        ['email'=>'required|email',
         'password'=>'required',
        ]
    );
    if(Auth::guard('receptionist')->attempt([
        'email'=>$request->email,
        'password'=>$request->password,
    ])){
        return redirect()
            ->instead(route('receptionist.dashboard'))
            ->with('success', 'receptionist Added Successfully');
    }
     }
    public  function receptionistDashboard(){
         $receptionists=Receptionist::all()->count();
         return view('admin.receptionistdashboard',['receptionists'=>$receptionists,]);
     }
}
