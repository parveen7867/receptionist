<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Doctor;
use App\Models\User;

class DoctorController extends Controller
{

     function doctoradminlogin(){
        return view('admin.adminlogin');
     }
     function store(Request $request){
    $request->validate(
        ['email'=>'required|email',
         'password'=>'required',
        ]
    );
    if(Auth::guard('doctor')->attempt([
        'email'=>$request->email,
        'password'=>$request->password,
    ])){
        return redirect()
            ->instead(route('doctor.dashboard'))
            ->with('success', 'doctor Added Successfully');
    }
     }
      function doctorDashboard(){

         $doctors=Doctor::all()->count();
         return view('admin.doctordashboard',['doctors'=>$doctors]);
     }
   

     function addnewdoctor($id) {
        $user = User::find($id);
        $doctor = Doctor::find($id);
        if (!$doctor) {
          return redirect()->back()->withErrors(['error' => 'Doctor not found.']);
        }
      
        return view('Doctor.doctoraddnew', ['user' => $user, 'doctor' => $doctor]);
      }
      
    
    function storedoctor(Request $request){
        $userId = $request->input('user_id');
        $request->validate([
            'Picture' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'FirstName' => 'required|string|alpha|max:255',
            'LastName' => 'required|string|alpha|max:255',
            'Department' => 'required|string|alpha|max:255',
            'EmailAddress' => 'required|email|max:255|unique:doctors',
            'Password' => 'required|string|min:6',
            'Sex' => 'required|in:male,female,Other',
            'Contactnumber' => 'required|numeric|digits:10',
            'DateofBirth' => 'required|date',

        ]);
    
        if ($request->hasFile('Picture')) {
        
            $file_name = time() . '.' . $request->file('Picture')->getClientOriginalExtension();
            $request->file('Picture')->move('images/doctors/', $file_name);
    
            
            $doctor = Doctor::create([
                'Picture' => 'images/doctors/' . $file_name,
                'FirstName' => $request->FirstName,
                'LastName' => $request->LastName,
                'Department' => $request->Department,
                'EmailAddress' => $request->EmailAddress,
                'Password' => Hash::make($request->Password),
                'Sex' => $request->Sex,
                'Contactnumber'=>$request->Contactnumber,
                'DateofBirth' => $request->DateofBirth,
                'user_id'=>$request->$userId
            ]);
        
            if ($doctor) {
                return response()->json([
                    'message'=>'doctor added successflly',
                    'doctor'=>$doctor,
                    'stats'=>200,
                ]);
                   
            }else{
                return response()->json([
                    'message'=>'something went wrong',
                    'doctor'=>$doctor,
                    'stats'=>500,
                ],500);  }
        }
    }
  
        
    }
    
function editdoctor($id){
    $doctor=Doctor::find($id);
    return view('Doctor.editdoctor',['doctor'=>$doctor]); 
    
 }
  function updatedoctor(Request $request) {
    $doctor = Doctor::find($request->id);
    
    $doctor->FirstName = $request->FirstName;
    $doctor->LastName = $request->LastName;
    $doctor->Department = $request->Department;
    $doctor->EmailAddress = $request->EmailAddress;
    $doctor->Password = Hash::make($request->Password);
    $doctor->Sex = $request->Sex;
    $doctor->Contactnumber = $request->Contactnumber;
    $doctor->DateofBirth = $request->DateofBirth;

    if ($request->hasFile('Picture')) {
        
        if (file_exists(_path($doctor->Picture))) {
            unlink(_path($doctor->Picture));
        }

        $file_name = time() . '.' . $request->file('Picture')->getClientOriginalExtension();
        $request->file('Picture')->move('images/doctors/', $file_name);

      
        $doctor->Picture = 'images/doctors/' . $file_name;
    }

    if ($doctor->save()) {
        return redirect()->route('doctor.list')->with('success', 'Updated Successfully');
    }
}
function deletedoctor(Request $request, $id){
    Doctor::where('id','=',$id)->delete($request->all());
    return redirect()->route('doctor.list')->with('success1','Deleted Successfully');
   }

 function viewdoctor($id)
{
    $doctor = Doctor::find($id);

    if (!$doctor) {
        return redirect()->route('doctor.list')->with('error', 'Doctor not found');
    }

    return view('doctor.view', ['doctor' => $doctor]);
}
 function index()
{
    
    return response()->json(Doctor::get(), 200);

         
}







