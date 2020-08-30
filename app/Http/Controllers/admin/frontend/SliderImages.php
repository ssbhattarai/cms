<?php

namespace App\Http\Controllers\admin\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ImageSlider;


class SliderImages extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $allImages = ImageSlider::all();
        return view('admin.pages.frontend.sliderimage', compact('allImages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $image = $request->file('file');
        $avatarName = $image->getClientOriginalName();
        $image->move(public_path('frontend/imageslider/'),$avatarName);
         
        $imageUpload = new ImageSlider();
        $imageUpload->filename = $avatarName;
        $imageUpload->save();
        return response()->json(['success'=>$avatarName]);
    }

    public function fileDestroy(Request $request)
    {
        $filename =  $request->get('filename');
        ImageSlider::where('filename',$filename)->delete();
        $path=public_path().'/frontend/imageslider/'.$filename;
        if (file_exists($path)) {
            unlink($path);
        }
        return $filename;  
    }
}
