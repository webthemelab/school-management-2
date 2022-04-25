<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classs;
use App\Models\Section;

class SectionController extends Controller
{
    public function viewSection(){

        $classses=Classs::all();
        $sections =Section::all();

        return view('backend.section.section_view',compact('classses', 'sections'));
    }//end method

    public function storeSection(Request $request){

        $section = new Section();
        $section->class_id = $request->class_id;
        $section->Section_name = $request->section_name;
        $section->save();

        return redirect()->back()->with('message','Section added successfully');
    }//end method

    public function editSection($id){

        $section =Section::find($id);
        $classes = Classs::all();

        return view('backend.section.section_edit',compact('section','classes'));

    }//end method

    public function updateSection(Request $request){

        $section =Section::find($request->id);
        $section->class_id = $request->class_id;
        $section->section_name = $request->section_name;
        $section->save();
        return redirect('/view/section')->with('message','Section updated successfully');

    }//end method

    public function deleteSection($id){

        $section =Section::find($id);
        $section->delete();
        return redirect('/view/section')->with('message','Section delete successfully');

    }//end method



}//end class
