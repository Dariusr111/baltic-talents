@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header ms-3 mt-3">
                        <h1>Failai</h1>
                    </div>
                    <div class="card-body">
                        <a class="btn btn-primary float-end me-3" href="{{ route('files.create') }}">Pridėti failą</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Failas</th>
                                <th>Tipas</th>
                                <th>Priskirta paskaitai</th>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($files as $file)
                                <tr>
                                    <td>{{ $file->name }}</td>
                                    <td>{{ $file->file }}</td>
{{--                                    <td>{{ $file->lecture_id }}</td>--}}
                                    <td>
                                        @foreach($lectures as $lecture)
                                            @if($file->lecture_id == $lecture->id)
                                                {{$lecture->name}}
                                            @endif
                                        @endforeach
                                    </td>
                                    <td><a class="btn btn-success float-end" href="{{ route('files.edit', $file->id) }}">Redaguoti</a> </td>
                                    <td style="width:  10%">
                                        <form action="{{ route('files.destroy', $file->id) }}" method="post">
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
