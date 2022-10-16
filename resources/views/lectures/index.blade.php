
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
                        <h1>Paskaitos</h1>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary float-end me-3" href="{{ route('lectures.create') }}">Pridėti paskaitą</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Paskaita</th>
                                <th>Priskirta grupei</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lectures as $lecture)
                                <tr>
                                    <td>{{ $lecture->name }}</td>
                                    <td>
                                        @foreach($groups as $group)
                                            @if($lecture->group_id == $group->id)
                                                {{$group->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td><a class="btn btn-info" href="{{ route('lecture.files', $lecture->id) }}">Failai</a></td>
                                    <td><a class="btn btn-success float-end" href="{{ route('lectures.edit', $lecture->id) }}">Redaguoti</a> </td>
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
