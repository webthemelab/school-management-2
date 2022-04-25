<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classs;
use App\Models\Section;
use App\Models\Student;
use Image;

class StudentController extends Controller
{
    //add student
    public function addStudent(){

        $classses = Classs::all();
        $sections = Section::all();
        return view('backend.student.add_student',compact('classses','sections'));
    }//end method

    //store student
    public function storeStudent(Request $request){

        //from validation
        $request->validate([
            'registration'=>'required|unique:students'
        ]);

        //image upload
        $img=$request->file('image');
         $imageName=rand().'.'.$img->getClientOriginalName();




         $image_url='upload/student_images/'.$imageName;

        Image::make($img)->resize(640,426)->save($image_url);


        //signature upload
        $signature=$request->file('signature');
        $signatureName=rand().'.'.$signature->getClientOriginalName();


        $signature_url='upload/student_signature/'.$signatureName;

       Image::make($signature)->resize(640,426)->save($signature_url);


        //data insert
        $student = new Student();
        $student->roll = $request->roll;
        $student->registration=$request->registration;
        $student->class_id=$request->class_id;
        $student->section_id=$request->section_id;
        $student->student_year=$request->student_year;
        $student->student_name=$request->student_name;
        $student->father_name=$request->father_name;
        $student->mother_name=$request->mother_name;
        $student->email=$request->email;
        $student->dob=$request->dob;
        $student->guardian_phone=$request->guardian_phone;
        $student->present_vill=$request->present_vill;
        $student->present_post=$request->present_post;
        $student->present_thana=$request->present_thana;
        $student->present_dist=$request->present_dist;
        $student->perma_vill=$request->perma_vill;
        $student->perma_post=$request->perma_post;
        $student->perma_thana=$request->perma_thana;
        $student->perma_dist=$request->perma_dist;
        $student->status=1;
        $student->image=$image_url;
        $student->signature=$signature_url;
        $student->save();
        return redirect()->back()->with('message','Student Info Saved Successfully');


    }//end method


}//end class
