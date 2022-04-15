<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Classs;

class ClasssController extends Controller
{
    public function viewClass(){
        $classses=Classs::all();
        return view('backend.class.view_classs',compact('classses'));
    }//end method

    public function storeClass(Request $request){

        $classses=new Classs();

        $classses->class=$request->class;
        $classses->save();

        return redirect()->back()->with('message','Class added successfully');
    }//end method

    public function editClass($id){

        $class =Classs::find($id);
        return view('backend.class.edit_classs',compact('class'));
    }//end method

    public function updateClass(Request $request){

        $classses =Classs::find($request->id);
        $classses->class=$request->class;
        $classses->save();
        return redirect('/view/class')->with('message','Class edit successfully');


    }//end method

    public function deleteClass($id){

        $classses=Classs::find($id);
        $classses->delete();
        return redirect('/view/class')->with('message','Class deleted successfully');

    }//end method






}//end class
