@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card bg-warning bg-opacity-10">
                    <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Sukurti kursą</div>
                    <div class="card-body">
                        <form action="{{ route('courses.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Kurso pavadinimas</label>
                                <input class="form-control" type="text" name="name" placeholder="Įvesti">
                            </div>
                            <button class="btn btn-success float-end">Pridėti</button>
                            <a class="btn btn-warning mx-3 float-start" href="{{ route('courses.index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
