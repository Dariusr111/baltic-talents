@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card bg-warning bg-opacity-10">
                    <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Redagavimas</div>
                    <div class="card-body">
                        <form action="{{ route('files.update', $file->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Failo pavadinimas</label>
                                <input class="form-control" type="text" name="name" value="{{ $file->name }}">
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Failo tipas</label>
                                <input class="form-control" type="text" name="file" value="{{ $file->file }}">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Priskirti paskaitai</label>
                                <select class="form-control" name="lecture_id">
                                    @foreach($lectures as $lecture)
                                        <option
                                            value="{{$lecture->id}}" {{$file->lecture_id == $lecture->id ? 'selected' : ''}}>{{ $lecture->name }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button class="btn btn-success float-end">Išsaugoti</button>
                            <a class="btn btn-warning mx-3 float-start" href="{{ route('files.index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
