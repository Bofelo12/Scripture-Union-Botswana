<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadVideoRequest;
use App\Video;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos = Video::all();
        return view('videos', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //uploading photo
        //$path = $request->file('photo')->store('public/images');
        //uploading a photo with a name
         $name = $request->get('name');
         $extension = $request->file('video')->extension();
         $path = $request->file('video')->storeAs('public/videos', $name.'.' . $extension);
        //$dt = now();
        //foreach ($request->file('video.*') as $key => $file) {
          ///  $extension = $file->extension();
            //$path = $file->storeAs('public/images', "my_photo.$key.$extension");
           // $path = $file->storeAs('public/videos', implode('.', [
             //   $dt->format('YmdHis'),
               // $key,
                //$extension
            ///]));

            $video = new Video();
            $video->name = $request->get('name');
            $video->path = $path;
            $video->save();       
        //}

        return view('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
