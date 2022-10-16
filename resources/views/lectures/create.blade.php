@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card bg-warning bg-opacity-10">
                    <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Pridėti paskaitą</div>
                    <div class="card-body">
                        <form action="{{ route('lectures.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Paskaitos pavadinimas</label>
                                <input class="form-control" type="text" name="name" placeholder="Įvesti">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Priskirti grupei</label>
                                <select name="group_id" class="form-control" required>
                                    <option value="" disabled selected>Pasirinkti</option>
                                    @foreach($groups as $group)
                                        <option value="{{$group->id}}">{{ $group->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sukūrimo data</label>
                                <input class="form-control" type="date" name="date">
                            </div>

                            <button class="btn btn-success float-end">Pridėti</button>
                            <a class="btn btn-warning mx-3 float-start" href="{{ route('lectures.index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
