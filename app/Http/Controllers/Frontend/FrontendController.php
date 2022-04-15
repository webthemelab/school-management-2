<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Slider;

class FrontendController extends Controller
{
    //frontend home page view
    public function index(){
        $sliders=Slider::orderBy('id','desc')->where('status',1)->get();
        return view('frontend.index',compact('sliders'));
    }//end method










}//end main
