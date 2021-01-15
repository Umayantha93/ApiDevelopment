<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{
    
    public function getAllStudents(){

        $students = Student::all();

    foreach($students as $student) { 
        echo $student;
    }

    }
    public function createStudent(Request $request){
        $student = new Student;
        $student->name = $request->name;
        $student->course = $request->course;
        $student->save();

        // return $response()->json(["Message" => "Stdent Record Created"], 201);
        return response("Record Entered");
    }

    public function getStudent($id){

        
        
        if(Student::where('id', $id)->exists()){
            $student = Student::findOrFail($id);
            return $student;
                
        }else{
             return response("The ID is not Vallid");
        }

    }
    public function updateStudent(Request $request, $id){
        if (Student::where('id', $id)->exists()) {
            $student = Student::find($id);
            $student->name = $request->name;
            $student->course = $request->course;
            $student->save();

            return response("Values Successfully Updated");
        }else{
            return response("Error");
        }
    }
    public function deleteStudent($id){
        if(Student::where('id', $id)->exists()){
            $student = Student::find($id);
            $student->delete();
            
            return response("The Data Successfully deleted");
                
        }else{
             return response("The ID is not Vallid");
        }
    }
}
