<?php

namespace App\Http\Controllers;

use App\Files;
use Illuminate\Http\Request;
use App\Http\Requests\UploadFileRequest;


class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $docs = Files::all();
      
        return view('file_upload.index', compact('docs'));
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
    public function store(UploadFileRequest $request)
    {
        $dt = now();
        foreach ($request->file('doc.*') as $key => $file) {
            $extension = $file->extension();
            //$path = $file->storeAs('public/images', "my_photo.$key.$extension");
            $path = $file->storeAs('public/files', implode('.', [
                $dt->format('YmdHis'),
                $key,
                $extension
            ]));

            $file = new Files();
            $file->name = $request->get('name');
            $file->path = $path;
            $file->save();       
        }

        return redirect()->route('loadFiles')->with('success','file uploaded successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Files $files)
    {
        //
    }
}
