@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-5">
                <div class="card bg-warning bg-opacity-10">
                    <div class="card-header bg-light bg-opacity-90 m-3 rounded text-center fs-3">Pridėti naudotoją</div>
                    <div class="card-body">
                        <form action="{{ route('users.store') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Vardas</label>
                                <input class="form-control" type="text" name="name" placeholder="Įvesti">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pavardė</label>
                                <input class="form-control" type="text" name="surname" placeholder="Įvesti">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">El. paštas</label>
                                <input class="form-control" type="text" name="email" placeholder="Įvesti">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Telefonas</label>
                                <input class="form-control" type="text" name="phone" placeholder="Įvesti">
                            </div>

                            <button class="btn btn-success float-end">Pridėti</button>
                            <a class="btn btn-warning mx-3 float-start" href="{{ route('users.index') }}">Atgal</a>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
