<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;
use Image;

class SliderController extends Controller
{
    //add slider
    public function addSlider(){
        return view('backend.slider.add_slider');
    }//end method



    //store slider
    public function storeSlider(Request $request){
         //image upload
         $img=$request->file('image');
         $imageName=rand().'.'.$img->getClientOriginalName();


         $image_url='upload/slider_images/'.$imageName;

        Image::make($img)->resize(1680,900)->save($image_url);


        //insert data
        $slider=new Slider();

        $slider->title=$request->title;
        $slider->image=$image_url;

        $slider->save();

        return redirect()->back()->with('message','Slider added successfully');


    }//end method


    //view slider
    public function viewSlider(){
        $sliders=Slider::all();
        return view('backend.slider.view_slider',compact('sliders'));
    }//


    //deactive slider
    public function deactiveSlider($id){
        $slider=Slider::find($id);
        $slider->status=0;
        $slider->save();
        return redirect()->back()->with('message','Slider deactivated successfully');


    }//end method

    //active slider
    public function activeSlider($id){
        $slider = Slider::find($id);
        $slider->status=1;
        $slider->save();
        return redirect()->back()->with('message','Slider activated successfully');


    }//end method
    //Edit slider
    public function editSlider($id){

        $slider= Slider::find($id);
        return view('backend.slider.edit_slider',compact('slider'));
    }//end method

    //update slider
    public function updateSlider(Request $request){
        $slider=Slider::find($request->id);
        $old_image=$slider->image;

        if($request->image){
            unlink($old_image);

         $img=$request->file('image');
         $imageName=rand().'.'.$img->getClientOriginalName();


         $image_url='upload/slider_images/'.$imageName;

        Image::make($img)->resize(1680,900)->save($image_url);

        $slider->image=$image_url;
        }


        $slider->title=$request->title;
        $slider->status=$request->status;

        $slider->save();

        return redirect('/view/slider')->with('message','Slider updated successfully');
    }//end method

    //delete slider
    public function deleteSlider($id){

        $slider=Slider::find($id);
        $image= $slider->image;
        unlink($image);
        $slider->delete();
        return redirect('/view/slider')->with('message','Slider deleted successfully');

    }//end method










}//end main
