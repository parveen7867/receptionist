<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bedcategory;
class BedcategoryController extends Controller

{
    public function indexbedcategory(){
        $bedcategory=Bedcategory::all();
        return view('Bed.bedcategorylist',['bedcategory'=>$bedcategory]);
    }
    public function addbedcategory(){
        return view('Bed.addbedcategory');
        
    }
    public function storebedcategory(Request $request) {
        $request->validate([
            'bedcategory' => 'required', 
            'bedcount' => 'required|Integer',
            'bedno' => 'required|Integer',
            'description' => 'required',
            'status' => 'required|in:Active,Inactive',

            
        ]);
        $bedcategory = Bedcategory::create([
            'bedcategory' => $request->bedcategory,
            'bedcount' => $request->bedcount,
            'bedno' => $request->bedno,
            'description' => $request->description,
            'status' => $request->status,
            
        ]);
        if ($bedcategory) {
            return redirect()
                ->route('index.bedcategory')
                ->with('success', 'bedcategory Added Successfully');
        }
    }
    function editbedcategory($id){
        $bedcategory=Bedcategory::find($id);
        return view('Bed.editbedcategory',['bedcategory'=>$bedcategory]); 
        
     }
     public function updatebedcategory(Request $request) {
        $bedcategory = Bedcategory::find($request->id);
        
        $bedcategory->description = $request->description;
        $bedcategory->bedcategory = $request->bedcategory;
        $bedcategory->bedcount = $request->bedcount;
        $bedcategory->bedno = $request->bedno;
        $bedcategory->status = $request->status;
        

if($bedcategory->save()){
    return redirect()->route('index.bedcategory')->with('success','Updated Successfully');
 }
}
function deletebedcategory(Request $request, $id){
    Bedcategory::where('id','=',$id)->delete($request->all());
    return redirect()->route('index.bedcategory')->with('success1','Deleted Successfully');
   }
}
