
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
                    <div class="card-header ms-3 mt-3">
                        <h1>Kursai</h1>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary float-end me-3" href="{{ route('courses.create') }}">Naujas kursas</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Kursas</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($courses as $course)
                                <tr>
                                    <td>{{ $course->name }}</td>

                                    <td><a class="btn btn-success float-end" href="{{ route('courses.edit', $course->id) }}">Redaguoti</a> </td>
                                    <td style="width:  10%">
                                        <form action="{{ route('courses.destroy', $course->id) }}" method="post">
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
