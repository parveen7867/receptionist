<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prescription;


class PrescriptionController extends Controller
{
    public function indexprescription(){
        $prescription=Prescription::all();
        return view('prescription.prescriptionlist',['prescription'=>$prescription]);

    }
    public function addprescription(){
        
        return view('prescription.addprescription');
        
    }
    function storeprescription(Request $request){
        $validatedData = $request->validate([
            'patientid' => 'required',
            'foodallergies' => 'required',
            'tendencybleed' => 'required',
            'heartdisease' => 'required',
            'highbloodpressure' => 'required',
            'diabetic' => 'required',
            'surgery' => 'required',
            'accident' => 'required',
        ]);
    
        $prescription = Prescription::create([
            'patientid' => $request->patientid,
            'foodallergies' => $request->foodallergies,
            'tendencybleed' => $request->tendencybleed,
            'heartdisease' => $request->heartdisease,
            'highbloodpressure' => $request->highbloodpressure,
            'diabetic' => $request->diabetic,
            'surgery' => $request->surgery,
            'accident' => $request->accident,
        ]);
    
        if ($prescription) {
            return redirect()
                ->route('index.prescription')
                ->with('success', 'Prescription Added Successfully');
        }
    }
    
    function editprescription($id){
    $prescription=Prescription::find($id);
    return view('prescription.editprescription',['prescription'=>$prescription]); 
    
 }
   function updateprescription(Request $request){
    $prescription = Prescription::find($request->id);
   
    $prescription->patientid=$request->patientid;
    $prescription->foodallergies=$request->foodallergies;
    $prescription->tendencybleed=$request->tendencybleed;
    $prescription->heartdisease=$request->heartdisease;
    $prescription-> highbloodpressure=$request->highbloodpressure;
    $prescription->diabetic=$request->diabetic;
    $prescription->surgery=$request->surgery;
    $prescription->accident=$request->accident;


        if($prescription->save()){
          return redirect()->route('index.prescription')->with('success','Updated Successfully');
       }
   }
 
   function deleteprescription(Request $request, $id){
    Prescription::where('id','=',$id)->delete($request->all());
    return redirect()->route('index.prescription')->with('success1','Deleted Successfully');
 }
    
}
