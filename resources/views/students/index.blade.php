@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header m-3"><h2>Grupė</h2></div>
                    <div class="card-body">
                    <a class="btn btn-warning mx-3 float-start mb-3" href="{{ route('groups.index') }}">Atgal</a>
                        <table class="table m-3 ">
                            <thead>
                            <tr>
                                <th>Vardas</th>
                                <th>Pavardė</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($groups->students as $student)
                                @foreach($users as $user)
                                    @if($student->user_id == $user->id)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->surname }}</td>
                                        </tr>
                                    @endif
                                @endforeach
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
