<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Models\Lecture;
use Illuminate\Http\Request;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lectures=Lecture::all();
        $groups=Group::all();
        return view('lectures.index',['lectures'=>$lectures, 'groups'=>$groups]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lectures=Lecture::all();
        $groups=Group::all();
        return view('lectures.create',['lectures'=>$lectures, 'groups'=>$groups]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lecture=new Lecture();
        $lecture->name=$request->name;
        $lecture->group_id=$request->group_id;
        $lecture->date=$request->date;
        $lecture->save();
        return redirect()->route('lectures.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function show(Lecture $lecture)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function edit(Lecture $lecture)
    {
        $groups = Group::all();
        return view('lectures.update', ['lecture' => $lecture, 'groups'=>$groups]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lecture $lecture)
    {
        $lecture->name = $request->name;
        $lecture->group_id = $request->group_id;
        $lecture->date=$request->date;
        $lecture->save();

        return redirect()->route('lectures.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Lecture  $lecture
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lecture $lecture)
    {
        $lecture->delete();
        return redirect()->route('lectures.index');
    }


    public function groupLectures ($group_id){

        $lectures=Lecture::where('group_id', $group_id)->get();
        return view('lectures.group',['lectures'=>$lectures]);
    }


}
