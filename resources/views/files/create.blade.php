@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card bg-warning bg-opacity-10">
                    <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Pridėti failą</div>
                    <div class="card-body">
                        <form action="{{ route('files.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Failo pavadinimas</label>
                                <input class="form-control" type="text" name="name" placeholder="Įvesti">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Failo tipas</label>
                                <input class="form-control" type="text" name="file" placeholder="Įvesti">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Priskirti paskaitai</label>
                                <select name="lecture_id" class="form-control" required>
                                    <option value="" disabled selected>Pasirinkti</option>
                                    @foreach($lectures as $lecture)
                                        <option value="{{$lecture->id}}">{{ $lecture->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-success float-end">Pridėti</button>
                            <a class="btn btn-warning mx-3 float-start" href="{{ route('files.index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
