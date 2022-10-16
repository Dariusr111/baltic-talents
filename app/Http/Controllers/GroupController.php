<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Group;
use App\Models\Group_user;
use App\Models\User;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $groups= Group::all();
        $users= User::all();
        $courses=Course::all();
        return view('groups.index',['groups'=>$groups, 'users'=>$users, 'courses'=>$courses]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $groups= Group::all();
        $users= User::all();
        $courses=Course::all();
        return view('groups.create',['groups'=>$groups, 'users'=>$users, 'courses'=>$courses]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $group=new Group();
        $group->name=$request->name;
        $group->course_id=$request->course_id;
        $group->lector_id=$request->lector_id;
        $group->start=$request->start;
        $group->end=$request->end;
        $group->save();

        return redirect()->route('groups.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
       //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $courses = Course::all();
        $users = User::all();
        return view('groups.update', ['group' => $group, 'courses' => $courses, 'users' => $users]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $group->name = $request->name;
        $group->course_id = $request->course_id;
        $group->lector_id = $request->lector_id;
        $group->start = $request->start;
        $group->end = $request->end;
        $group->save();

        return redirect()->route('groups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $group->delete();
        return redirect()->route('groups.index');
    }

    public function display($name, Request $request)
    {
        $file = storage_path('app/groups/' . $name);
        return response()->file($file);
    }

    public function groupStudents ($user_id){
        $groups=Group::find($user_id);
        $students=Group_user::where('user_id', $user_id)->get();
        $users=User::all();
        return view('students.index',['students'=>$students, 'groups'=>$groups, 'users'=>$users]);
    }






}
