<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Doctor;
class ScheduleController extends Controller
{
    
 
    public function indexschedule(){
        $schedule=Schedule::all();
        return view('schedule.schelist',['schedule'=>$schedule]);
    }
    public function addschedule(){
        $doctor=Doctor::all();
        return view('schedule.scheaddnew',['doctor'=>$doctor]);
        
    }
    function storeschedule(Request $request){
        $validatedData = $request->validate([
          
                'Day' => 'required',
                'StartTime' => 'required',
                 'EndTime' => 'required',
                'PerPatientTime' => 'required',
                  'SerialVisibility' => 'required',
                  'Status' => 'required',
        ]);
        
        $schedule=Schedule::create([
            
            'Day'=>$request->Day,
            'StartTime'=>$request->StartTime,
            'EndTime'=>$request->EndTime,
            'PerPatientTime'=>$request->PerPatientTime,
            'SerialVisibility'=>$request->SerialVisibility,
            'Status'=>$request->Status,
            'doctor_id'=>$request->doctor,
            
          
        ]);
        
        if($schedule){
            return redirect()
                   ->route('index.schedule')
                   ->with('success','schedule Added Sulccessfully');
    }
}
    function editschedule($id){
    $schedule=Schedule::find($id);
    return view('schedule.scheedit',['schedule'=>$schedule]); 
    
 }
   function updateschedule(Request $request){
    $schedule = Schedule::find($request->id);
   
    $schedule->Day=$request->Day;
    $schedule->StartTime=$request->StartTime;
    $schedule->EndTime=$request->EndTime;
    $schedule->PerPatientTime=$request->PerPatientTime;
    $schedule->SerialVisibility=$request->SerialVisibility;
    $schedule->Status=$request->Status;
    $schedule->doctor_id=$request->FirstName;

        if($schedule->save()){
          return redirect()->route('index.schedule')->with('success','Updated Successfully');
       }
   }
 
   function deleteschedule(Request $request, $id){
    Schedule::where('id','=',$id)->delete($request->all());
    return redirect()->route('index.schedule')->with('success1','Deleted Successfully');
 }
}
