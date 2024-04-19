<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bed;
class BedController extends Controller
{
    public function indexbed(){
        $bed=Bed::all();
        return view('Bed.bedlist',['bed'=>$bed]);
    }
    public function addbed(){
        return view('Bed.addbed');
        
    }
    public function storebed(Request $request) {
        $request->validate([
            'category' => 'required', 
            'description' => 'required|string|max:255',
            'status' => 'required|in:Active,Inactive',

            
        ]);
        $bed = Bed::create([
            'category' => $request->category,
           
            'description' => $request->description,
            
            'status' => $request->status,
            
        ]);
        if ($bed) {
            return redirect()
                ->route('index.bed')
                ->with('success', 'bed Added Successfully');
        }
    }
    function editbed($id){
        $bed=Bed::find($id);
        return view('Bed.editbed',['bed'=>$bed]); 
        
     }
     public function updatebed(Request $request) {
        $bed = Bed::find($request->id);
        
        $bed->description = $request->description;
        $bed->category = $request->category;
        $bed->status = $request->status;
        

if($bed->save()){
    return redirect()->route('index.bed')->with('success','Updated Successfully');
 }
}
function deletebed(Request $request, $id){
    Bed::where('id','=',$id)->delete($request->all());
    return redirect()->route('index.bed')->with('success1','Deleted Successfully');
   }

}