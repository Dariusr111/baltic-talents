@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card bg-warning bg-opacity-10">
                    <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Redagavimas</div>
                    <div class="card-body">
                        <form action="{{ route('users.update', $user->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input class="form-control" type="text" name="name" value="{{ $user->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input class="form-control" type="text" name="surnname" value="{{ $user->surname }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input class="form-control" type="text" name="email" value="{{ $user->email }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input class="form-control" type="text" name="name" value="{{ $user->phone }}">
                            </div>
                            <button class="btn btn-success float-end">Išsaugoti</button>
                            <a class="btn btn-warning mx-3 float-start" href="{{ route('user.index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
