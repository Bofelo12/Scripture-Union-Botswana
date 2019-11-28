<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadPhotoRequest;
use App\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PhotoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$photos = Photo::all();
        $photos = Storage::files('public/images');
      
        return view('index', compact('photos'));
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
    public function store(UploadPhotoRequest $request)
    {
        //uploading photo
        //$path = $request->file('photo')->store('public/images');
        //uploading a photo with a name
        //$name = $request->get('name');
        //$extension = $request->file('photo')->extension();
        //$path = $request->file('photo')->storeAs('public/images', $name.'.' . $extension);
        $dt = now();
        foreach ($request->file('photo.*') as $key => $file) {
            $extension = $file->extension();
            //$path = $file->storeAs('public/images', "my_photo.$key.$extension");
            $path = $file->storeAs('public/images', implode('.', [
                $dt->format('YmdHis'),
                $key,
                $extension
            ]));

            $image = Image::make($file);
            $image->resize(318, 215);
            $photo = new Photo();
            $photo->path = $path;
            $photo->save();       
        }

        return view('success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
