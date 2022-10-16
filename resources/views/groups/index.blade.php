
{{--php artisan--}}
{{--npm run dev--}}
{{--http://localhost/baltictalents/public/login--}}
{{--http://localhost/baltictalents/public/groups--}}
{{--darius.r111@gmail.com darius1234--}}



@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ms-3 mt-3">
                        <h1>Grupės</h1>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary float-end me-3" href="{{ route('groups.create') }}">Pridėti grupę</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Grupė</th>
                                <th>Kursas</th>
                                <th>Lektorius</th>
                                <th>Kurso pradžia</th>
                                <th>Kurso pabaiga</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($groups as $group)
                                <tr>
                                    <td>{{ $group->name }}</td>
{{--                                    <td>{{ $group->course_id }}</td>--}}
                                    <td>
                                        @foreach($courses as $course)
                                            @if($group->course_id == $course->id)
                                                {{$course->name}}
                                            @endif
                                        @endforeach
                                    </td>
{{--                                    <td>{{ $group->lector_id }}</td>--}}
                                    <td>
                                        @foreach($users as $user)
                                            @if($group->lector_id == $user->id)
                                                {{$user->name}} {{$user->surname}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td>{{ $group->start }}</td>
                                    <td>{{ $group->end }}</td>
                                    <td><a class="btn btn-secondary" href="{{ route('group.lectures', $group->id) }}">Paskaitos</a></td>
{{--                                    <td><a class="btn btn-info" href="{{ route('lecture.files', $group->id) }}">Failai</a></td>--}}
                                    <td><a class="btn btn-warning float-end" href="{{ route('group.students', $group->id) }}">Studentai</a> </td>
                                    <td><a class="btn btn-success float-end" href="{{ route('groups.edit', $group->id) }}">Redaguoti</a> </td>
                                    <td style="width:  10%">
                                        <form action="{{ route('groups.destroy', $group->id) }}" method="post">
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
