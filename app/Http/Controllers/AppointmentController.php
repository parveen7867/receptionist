<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
class AppointmentController extends Controller
{
    public function indexappointment(){
        $appointment=Appointment::all();
        return view('appointment.appointmentlist',['appointment'=>$appointment]);
    }
    public function addappointment(){
        $doctor=Doctor::all();
        $Patient=Patient::all();
        return view('appointment.addnewappointment',['doctor'=>$doctor,'Patient'=>$Patient]);
    }
    public function storeappointment(Request $request){
        $request->validate([
            'FirstName' => 'required',
            'appointmentdate' => 'required',
            'FirstName' => 'required', 
            'Department' => 'required', 
            'problem' => 'required',
            'status' => 'required',
        ]);
    
        $appointment = Appointment::create([
            'patient_id' => $request->FirstName,
            'appointmentdate' => $request->appointmentdate,
            'problem' => $request->problem,
            'status' => $request->status,
            'doctor_id' => $request->FirstName, 

        ]);
    
        if($appointment){
            return redirect()
                ->route('index.appointment')
                ->with('success', 'Appointment Added Successfully');
        }
    }
function editappointment($id){
    $appointment=Appointment::find($id);
    return view('appointment.editappointment',['appointment'=>$appointment]); 
    
 }
   function updateappointment(Request $request){
    $appointment =Appointment::find($request->id);
   
    $appointment->patient_id=$request->FirstName;
    $appointment->appointmentdate=$request->appointmentdate;
    $appointment->problem=$request->problem;
    $appointment->status=$request->status;
    $appointment->doctor_id=$request->FirstName;
    $appointment->doctor_id=$request->Department;

        if($appointment->save()){
          return redirect()->route('index.appointment')->with('success','Updated Successfully');
       }
   }
 
   function deleteappointment(Request $request, $id){
    Appointment::where('id','=',$id)->delete($request->all());
    return redirect()->route('index.appointment')->with('success1','Deleted Successfully');
 }
}
