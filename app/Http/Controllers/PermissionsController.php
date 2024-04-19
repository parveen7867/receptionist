<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Permission;
class PermissionsController extends Controller
{
    public function perindex(){
        $perlist=Permission::all();
        return view('permissions.permissionlist',['perlist'=>$perlist]);
    }
    public function peradd(){
        return view('permissions.addpermission');
        
    }
    function storeper(Request $request){
        $per=Permission::create([
            'RoleName'=>$request->RoleName,
            
        ]);
        
        if($per){
            return redirect()
                   ->route('per.index')
                   ->with('success','product Added Sulccessfully');
    }
}
function editper($id){
    $per=Permission::find($id);
    return view('permissions.editpermission',['per'=>$per]); 
    
 }
   function updateper(Request $request){
    $per = Permission::find($request->id);
    $per->RoleName=$request->RoleName;
    

       
        if($per->save()){
          return redirect()->route('per.index')->with('success','Updated Successfully');
       }
   }
 
   function deleteper(Request $request, $id){
    permission::where('id','=',$id)->delete($request->all());
    return redirect()->route('per.index')->with('success1','Deleted Successfully');
 }
}
