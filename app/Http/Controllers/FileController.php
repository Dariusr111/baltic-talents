<?php

namespace App\Http\Controllers;

use App\Models\File;
use App\Models\Lecture;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files=File::all();
        $lectures=Lecture::all();
        return view('files.index',['files'=>$files, 'lectures'=>$lectures]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $files=File::all();
        $lectures=Lecture::all();
        return view('files.create',['files'=>$files, 'lectures'=>$lectures]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file=new File();
        $file->lecture_id=$request->lecture_id;
        $file->file=$request->file;
        $file->name=$request->name;
        $file->save();
        return redirect()->route('files.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function show(File $file)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function edit(File $file)
    {
        $lectures = Lecture::all();
        return view('files.update', ['file' => $file, 'lectures'=>$lectures]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, File $file)
    {
        $file->lecture_id = $request->lecture_id;
        $file->file = $request->file;
        $file->name = $request->name;
        $file->save();

        return redirect()->route('files.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\File  $file
     * @return \Illuminate\Http\Response
     */
    public function destroy(File $file)
    {
        $file->delete();
        return redirect()->route('files.index');
    }

    public function lectureFiles ($lecture_id){

        $files=File::where('lecture_id', $lecture_id)->get();
        $lectures=Lecture::all();
        return view('files.lecture',['files'=>$files, 'lectures'=>$lectures]);
    }



}
