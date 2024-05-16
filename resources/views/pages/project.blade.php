@extends('welcome')
@section('poster')
    http://127.0.0.1:8001/storage/{{$project->img}}
@endsection
@section('preview')
    <h1>{{$project->name}}</h1>
@endsection
@section('content')
    <div class="mt-5">
        <hr>
        <div class="mt-5">
            <hr>
            <div class="mt-5">
                <hr>
                <div class="mt-5">
                    {!! $project->page !!}
                </div>
            </div>
        </div>
    </div>
@endsection
