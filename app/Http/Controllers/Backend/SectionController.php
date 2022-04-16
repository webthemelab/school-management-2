<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classs;
use App\Models\Section;

class SectionController extends Controller
{
    //view section
    public function viewSection(){
        $classes=Classs::all();
        $sections=Section::all();
        return view('backend.section.section_view',compact('classes','sections'));
    }//end section


    //store section
    public function storeSection(Request $request){
        $section=new Section();

        $section->class_id=$request->class_id;

        $section->section_name=$request->section_name;

        $section->save();

        return redirect()->back()->with('message','Section added successfully');
    }//end class


    //edit section
    public function editSection($id){
        $section=Section::find($id);
        $classes=Classs::all();

        return view('backend.section.section_edit',compact('section','classes'));
    }//end section


    //update section
    public function updateSection(Request $request){
        $section=Section::find($request->id);

        $section->class_id=$request->class_id;

        $section->section_name=$request->section_name;

        $section->save();

        return redirect('/view/section')->with('message','Section updated successfully');
    }//end method


    //delete section
    public function deleteSection($id){
        $section=Section::find($id)->delete();
        return redirect('/view/section')->with('message','Section deleted successfully');

    }//end method




}//end main
