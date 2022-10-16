@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card bg-warning bg-opacity-10">
                    <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Redagavimas</div>
                    <div class="card-body">
                        <form action="{{ route('lectures.update', $lecture->id) }}" method="post"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label class="form-label">Paskaitos pavadinimas</label>
                                <input class="form-control" type="text" name="name" value="{{ $lecture->name }}">
                            </div>

                            <div class="mb-3">
                                <label for="" class="form-label">Priskirti grupei</label>
                                <select class="form-control" name="group_id">
                                    @foreach($groups as $group)
                                        <option
                                            value="{{$group->id}}" {{$lecture->group_id == $group->id ? 'selected' : ''}}>{{ $group->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Sukūrimo data</label>
                                <input class="form-control" type="date" name="date" value="{{ $lecture->date }}">
                            </div>

                            <button class="btn btn-success float-end">Išsaugoti</button>
                            <a class="btn btn-warning mx-3 float-start" href="{{ route('lectures.index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
