<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class ApiController extends Controller
{
    
    public function getAllStudents(){


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

    }
    public function updateStudent(Request $request, $id){

    }
    public function deleteStudent($id){

    }
}
