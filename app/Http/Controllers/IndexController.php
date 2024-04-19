<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patient;

class IndexController extends Controller
{
    function doctorlist() {
    
        $doctor = Doctor::all();
     return view('list.doctorlist',['doctor'=>$doctor]);   
        }
    
        function patientlist()
        {
            $patient = Patient::all();
            return view('list.patientlist', compact('patient'));
        
        }
        function viewdoctor($id)
        {
            $doctor = Doctor::find($id);
        
            if (!$doctor) {
                return redirect()->route('doctor.list')->with('error', 'Doctor not found');
            }
        
            return view('doctor.view', ['doctor' => $doctor]);
        }
        function deletedoctor(Request $request, $id){
            Doctor::where('id','=',$id)->delete($request->all());
            return redirect()->route('doctor.list')->with('success1','Deleted Successfully');
           }

    }

