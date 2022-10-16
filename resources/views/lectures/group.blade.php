
{{--php artisan--}}
{{--npm run dev--}}
{{--http://localhost/baltictalents/public/login--}}
{{--http://localhost/baltictalents/public/courses--}}
{{--darius.r111@gmail.com darius1234--}}



@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header m-3"><h2>Grupė</h2></div>
                    <div class="card-body">
                        <a class="btn btn-warning mx-3 float-start mb-3" href="{{ route('groups.index') }}">Atgal</a>
                        <a class="btn btn-primary float-end me-3" href="{{ route('lectures.create') }}">Pridėti paskaitą</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Paskaita</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lectures as $lecture)
                                <tr>
                                    <td>{{ $lecture->name }}</td>
                                    <td><a class="btn btn-success float-end" href="{{ route('lectures.edit', $lecture->id) }}">Koreguoti</a> </td>
                                    <td style="width:  10%">
                                        <form action="{{ route('lectures.destroy', $lecture->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger float-end ms-3 me-2">Ištrinti</button>
                                        </form>
                                    </td>
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
