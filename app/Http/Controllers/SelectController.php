<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Selectoption;
use App\Models\Patient;
class SelectController extends Controller
{
   

    
 
    public function indexselect(){
        $select=Selectoption::all();
        return view('selectoption.selectlist',['select'=>$select]);
    }
    public function addselect(){
       
        return view('selectoption.addselect');
        
    }
    function storeselect(Request $request){
        $validatedData = $request->validate([
          
                'selectoption' => 'required',
               
        ]);
        
        $select=Selectoption::create([
            
            'selectoption'=>$request->selectoption,
            
           
          
        ]);
        
        if($select){
            return redirect()
                   ->route('index.prescription')
                   ->with('success','select Added Sulccessfully');
    }
}
    function editselect($id){
    $select=Selectoption::find($id);
    return view('selectoption.editselect',['select'=>$select]); 
    
 }
   function updateselect(Request $request){
    $select = Selectoption::find($request->id);
   
    $select->selectoption=$request->selectoption;
   
       }
   
 
   function deleteselect(Request $request, $id){
    Selectoption::where('id','=',$id)->delete($request->all());
    return redirect()->route('index.select')->with('success1','Deleted Successfully');
 }
}


