<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $imgs = Image::simplepaginate(12);
        return view('image.index',compact('imgs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('image.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request->all();
        $this->validate($request,[
            'image'=>'required',
        ]);
        $img=new Image();
        if($request->hasFile('image')){
            $file=$request->file('image');
            $extention= $file->getClientOriginalExtension();
            $fileName=time().'.'.$extention;
            $file->move('images/',$fileName);
            $img->image=$fileName;
        }
        $img->save();
        return redirect('/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        return view('image.show',compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('image.edit',compact('image'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $this->validate($request,[
            'image'=>'required',
        ]);

        if($request->hasFile('image')){
            $file=$request->file('image');
            $extention= $file->getClientOriginalExtension();
            $fileName=time().'.'.$extention;
            $file->move('images/',$fileName);
            $image->image=$fileName;
        }
        $image->update();
        return redirect('/image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        $image->delete();
        return redirect('/image');
    }
}
