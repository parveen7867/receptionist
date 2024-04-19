<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Patient;
use App\Models\User;
use App\Models\Doctor;

class HpatientController extends Controller
{
    function patientlogin()
    {
        return view('patient.patientlogin');
    }
   
    public function patientloginstore(Request $request)
    {
    
        if (Auth::guard('patient')->attempt([
            'email' => $request->email,
            'password' => $request->password,
            
        ])){
           dd('success');
          return redirect()->route('patient.dashboard')->with('success',"loged in successfully");
        }else{
          return redirect()->back()->with('error','Not Registered');
        }
    }
        
    function patientDashboard($id)
    {
        $patient = Patient::find($id);
    
        if ($patient) {
            return view('dashboard.patientdashboard', ['patient' => $patient]);
        } else {
            return redirect()->route('patient.login')->with('error', 'Patient not found');
        }
    }
  
    function addnewPatient($id) 
    {
        $user = User::find($id);   
        $patient = Patient::find($id);  
        
        return view('patient.addpatient', ['user' => $user, 'patient' => $patient]);
    }
    

    
    function StorePatientData(Request $request)
    {
        $userId = $request->input('user_id');
        $request->validate([
            'Picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'FirstName' => 'required|string|alpha|max:255',
            'LastName' => 'required|string|alpha|max:255',
            'email' => 'required|email|unique:patients,email',
            'password' => 'required',
            'Sex' => 'required',
            'Bloodgroup' => 'required|in:A+,A-,O,B+,B-',
            'DateofBirth' => 'required',
            'Status' => 'required',
        ]);
    
        if ($request->hasFile('Picture')) {
            $file_name = time() . '.' . $request->file('Picture')->getClientOriginalExtension();
            $request->file('Picture')->move('images/patients/', $file_name);
        }
    
        $patient = Patient::create([
            'Picture' => 'images/patients/' . $file_name,
            'FirstName' => $request->FirstName,
            'LastName' => $request->LastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'Sex' => $request->Sex,
            'Bloodgroup' => $request->Bloodgroup,
            'DateofBirth' => $request->DateofBirth,
            'Status' => $request->Status,
            'user_id' => $userId, 
        ]);
    
        if ($patient) {
            return redirect()->route('allpatient.index',['id' => $userId])->with('success', 'patient Added Successfully');
        } else {
            return redirect()->back()->with('error', 'not added');
        }
    }
    function indexpatient($id)
{
    $patient = Patient::findOrFail($id);
    return view('patient.patientlist', compact('patient'));

}
function allindexpatient()
{
    $patient = Patient::all();
    return response()->json(Patient::get(), 200);

}

    function editpatient($id){
        $patient=Patient::find($id);
      
        return view('patient.editpatient',['patient'=>$patient]); 
        
     }
      function updatepatient(Request $request) {
        $patient = Patient::find($request->id);
        	
        if(!$patient){
            return redirect()->route('index.Patients');

        }
        $validate=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'Picture'=>'required',
          ]);
        $patient->FirstName = $request->FirstName;
        $patient->LastName = $request->LastName;
        $patient->email = $request->email;
        $patient->password = Hash::make($request->password);
        $patient->Sex = $request->Sex;
        $patient->DateofBirth = $request->DateofBirth;
        $patient->Status=$request->Status;
        if ($request->hasFile('Picture')) {
            
            if (file_exists(_path($patient->Picture))) {
                unlink(_path($patient->Picture));
            }
            $file_name = time() . '.' . $request->file('Picture')->getClientOriginalExtension();
            $request->file('Picture')->move('images/patients/', $file_name);
    
          
            $patient->Picture = 'images/patients/' . $file_name;
        }
    
        if ($patient->save()) {
            return redirect()->route('index.Patient')->with('success', 'Updated Successfully');
        }
    }
    function deletepatient(Request $request, $id){
        Patient::where('id','=',$id)->delete($request->all());
        return redirect()->route('patient.list')->with('success1','Deleted Successfully');
       }

       public function hsappointments($id)
       {
           $patient = Patient::findOrFail($id);
           $appointments = $patient->appointments;
           $doctor = Doctor::all();
       
           return view('patient.patientappointment', compact('patient', 'appointments', 'doctor'));
       }
       function view($id)
{
    $patient= Patient::find($id);

    if (!$patient) {
        return redirect()->route('patient.list')->with('error', 'patient not found');
    }

    return view('patient.view', ['patient' => $patient]);
}   
  
function patientview($user_id, $patient_id){
    error_log("User ID: $user_id, Patient ID: $patient_id");

    $user = User::where('id', $patient_id)->first();
    $patient = Patient::where('id', $patient_id)->first();

    if (!$patient) {
        dd("not found");
        return redirect()->back()->with('error', 'patient not found.');
    }

}
function invoice($id){
    $patients=Patient::findOrFail($id);
    $payments=$patients->payments;
    return view('Patient/list.invoice',compact('patients','payments'));
  }


  function indexdoctor()
  {
      
      return response()->json(Doctor::get(), 200);
        
  }

}
