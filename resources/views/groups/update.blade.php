@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card bg-warning bg-opacity-10">
                    <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Redagavimas</div>
                    <div class="card-body">

                        <form action="{{ route('groups.update', $group->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Grupės pavadinimas</label>
                                <input class="form-control" type="text" name="name" value="{{ $group->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Dėstytojas</label>
                                <select class="form-control" name="lector_id">

                                    @foreach($users as $user)
                                        <option
                                            value="{{$user->id}}" {{$group->lector_id == $user->id ? 'selected' : ''}}>{{ $user->name }} {{ $user->surname }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Kursai</label>
                                <select class="form-control" name="course_id">
                                    <option selected>Pasirinkti</option>
                                    @foreach($courses as $course)
                                        <option
                                           value="{{$course->id}}" {{$group->course_id == $course->id ? 'selected' : ''}} > {{$course->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kursų pradžia</label>
                                <input class="form-control" type="date" name="start" value="{{ $group->start }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kursų pabaiga</label>
                                <input class="form-control" type="date" name="end" value="{{ $group->end }}">
                            </div>

                            <button class="btn btn-success float-end">Išsaugoti</button>
                            <a class="btn btn-warning mx-3 float-start" href="{{ route('groups.index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
