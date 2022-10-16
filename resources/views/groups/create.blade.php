@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card bg-warning bg-opacity-10">
                <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Pridėti grupę</div>
                <div class="card-body">
                    <form action="{{ route('groups.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Pavadinimas</label>
                            <input class="form-control" type="text" name="name" placeholder="Įvesti">
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Kursai</label>
                            <select name="course_id" class="form-control" required>
                                <option value="" disabled selected>Pasirinkti</option>
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{ $course->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Dėstytojas</label>
                            <select name="lector_id" class="form-control" required>
                                <option value="" disabled selected>Pasirinkti</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}"> {{$user->name}} {{$user->surname}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kursų pradžia</label>
                            <input class="form-control" type="date" name="start">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Kursų pabaiga</label>
                            <input class="form-control" type="date" name="end">
                        </div>

                        <button class="btn btn-success float-end">Pridėti</button>
                        <a class="btn btn-warning mx-3 float-start" href="{{ route('groups.index') }}">Atgal</a>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection
