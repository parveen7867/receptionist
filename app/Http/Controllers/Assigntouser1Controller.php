<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\permission;
use App\Models\User;
use App\Models\Assignuser;

class Assigntouser1Controller extends Controller
{
    public function assignindex(){
        $assignlist=Assignuser::all();
        return view('assignuser.assignlist',['assignlist'=>$assignlist]);
    }
    public function assignadd(){
        $perlist=Permission::all();
        $userlist=User::all();
        return view('assignuser.assignaddnew',['perlist'=>$perlist,'userlist'=>$userlist]);
        
    }
    function storeassign(Request $request){
        $assign=Assignuser::create([
            'permission_id'=>$request->permission,
            'user_id'=>$request->user,
            
        ]);
        
        if($assign){
            return redirect()
                   ->route('assign.index')
                   ->with('success','assignduct Added Sulccessfully');
    }
}
function editassign($id){
    $assign=Assignuser::find($id);
    return view('assignofpermissions.assignedit',['assign'=>$assign]); 
    
 }
   function updateassign(Request $request){
    $assign = Assignuser::find($request->id);
    $assign->assignName=$request->assignName;
    

       
        if($assign->save()){
          return redirect()->route('assign.index')->with('success','Updated Successfully');
       }
   }
 
   function deleteassign(Request $request, $id){
    Assignuser::where('id','=',$id)->delete($request->all());
    return redirect()->route('assign.index')->with('success1','Deleted Successfully');
 }
}
