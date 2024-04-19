<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Student;
use Carbon\Carbon;

class StudentController extends Controller
{ 

    public function __construct()
{
    $this->middleware('web');
}
    public function indexstudent()
    {
        $students = Student::all();
        if ($students->count() > 0) {
            return response()->json([
                'message' => 'student records are',
                'students' => $students,
                'status' => 200,
            ], 200);
        } else {
            return response()->json([
                'message' => 'student not record found',
                'students' => $students,
                'status' => 404,
            ], 404);
        }
    }
       function addstudent(){
      return view('studentadd')->withErrors([]);;

       }
    public function storestudent(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages(),
            ], 422);
        } else {
            $student = Student::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'address' => $request->input('address'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }

        if ($student) {
            return response()->json([
                'message' => 'students added successfully',
                'students' => $student,
                'status' => 200,
            ]);
        } else {
            return response()->json([
                'message' => 'something went wrong',
                'student' => $student,
                'status' => 500,
            ], 500);
        }
    }
    function studentid($id){
        $student=Student::find($id);
        if($student){
            return response()->json([
                'message' => 'students edit successfully',
                'student' => $student,
                'status' => 200,]);
        }else{
            return response()->json([
                'message' => 'no student found',
                'student' => $student,
                'status' => 404,
            ], 404); 
        }
    }
    function studentedit($id){
        $student=Student::find($id);
        if($student){
            return response()->json([
                'message' => 'students added successfully',
                'student' => $student,
                'status' => 200,]);
        }else{
            return response()->json([
                'message' => 'no student found',
                'student' => $student,
                'status' => 404,
            ], 404); 
        }
    }
    function studentupdate(Request $request,int $id){
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required',
            'password' => 'required',
            'address' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 422,
                'error' => $validator->messages(),
            ], 422);
        } else {
            $student = Student::find($id);

        if ($student) {

            $student->update([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'password' => $request->input('password'),
                'address' => $request->input('address'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
            return response()->json([
                'message' => 'students updated successfully',
                'students' => $student,
                'status' => 200,
            ]);
        } else {
            return response()->json([
                'message' => 'No such Student found',
                'student' => $student,
                'status' => 404,
            ], 404);
        }
    }
    }
    function studentdelete($id){
        $student=Student::find($id);
        if($student){
            $student->delete();
            return response()->json([
                'message' => 'deleted successfully',
                'students' => $student,
                'status' => 200,
            ]);
        }else{
            return response()->json([
                'message' => 'No such Student found',
                'student' => $student,
                'status' => 404,
            ], 404);
        }
    } 

}
