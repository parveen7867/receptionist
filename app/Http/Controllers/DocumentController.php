<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\Doctor;

class DocumentController extends Controller
{
    public function indexdocument(){
        $document=Document::all();
        return view('patient.documentlist',['document'=>$document]);
        
        
    }
    public function adddocument(){
        $doctor=Doctor::all();
        return view('patient.adddocument',['doctor'=>$doctor]);
        
    }
   
    function storedocument(Request $request){
        $request->validate([
        ]);

        $document=Document::create([
            
            'file'=>$request->file,
            'patientid'=>$request->patientid,
           'documenttitle'=>$request->documenttitle,
           'doctor_id'=>$request->doctor,
             
        ]);
        if($document){
            return redirect()
                   ->route('index.document')
                   ->with('success','Patient Added Sulccessfully');
    }
}

function editdocument($id){
    $document=Document::find($id);
    return view('Patient.editdocument',['document'=>$document]); 
    
 }
   function updatedocument(Request $request){
    $document = Document::find($request->id);
    
    $document->file=$request->file;
    $document->patientid=$request->patientid;
    $document->doctor_id=$request->doctorname;
    $document->documenttitle=$request->documenttitle;
    
    
        if($document->save()){
          return redirect()->route('index.document')->with('success','Updated Successfully');
       }
   }
 
   function deletedocument(Request $request, $id){
    Document::where('id','=',$id)->delete($request->all());
    return redirect()->route('index.document')->with('success1','Deleted Successfully');
 }
}
