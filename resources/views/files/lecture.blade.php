
@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header m-3">
                        <h2>Paskaita </h2>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-warning mx-3 float-start mb-3" href="{{ route('lectures.index') }}">Atgal</a>
{{--                        <a class="btn btn-primary float-end me-3" href="{{ route('files.create') }}">Pridėti failą</a>--}}
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Failai</th>
                                <th>Tipas</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->name }}</td>
                                    <td>{{ $file->file }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
