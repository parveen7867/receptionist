<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;
use App\Models\Permission;



class RoleController extends Controller
{ 
    public function rolepermform(){
        return view('roleofpermissions.rolepermissionform');
    }
     
    public function roleindex(){
        $rolelist=Role::all();
        return view('roleofpermissions.rolelist',['rolelist'=>$rolelist]);
    }
    public function roleadd(){
       $permission=Permission::all();
        return view('roleofpermissions.roleaddnew',['permission'=>$permission]);
        
    }
    function storerole(Request $request){
        $role=Role::create([
            'permission_id'=>$request->permission,
            
        ]);
        
        if($role){
            return redirect()
                   ->route('role.index')
                   ->with('success','product Added Sulccessfully');
    }
}
function editrole($id){
    $role=Role::find($id);
    return view('roleofpermissions.roleedit',['role'=>$role]); 
    
 }
   function updaterole(Request $request){
    $role = Role::find($request->id);
    $role->RoleName=$request->RoleName;
    

       
        if($role->save()){
          return redirect()->route('role.index')->with('success','Updated Successfully');
       }
   }
 
   function deleterole(Request $request, $id){
    Role::where('id','=',$id)->delete($request->all());
    return redirect()->route('role.index')->with('success1','Deleted Successfully');
 }
}


