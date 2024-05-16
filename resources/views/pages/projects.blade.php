@extends('welcome')
@section('poster')
    {{asset('src/projects-banner.jpg')}}
@endsection
@section('preview')
    <h1>MilenaFerm – часть холдинга A7Agro</h1>
    <p>Идеи органического образа жизни, любовь к природе и уважение ко всему живому вдохновили нас на открытие и
        реализацию новых проектов, которые объединились в агропромышленный холдинг A7Agro.</p>
    <p>Приглашаем на небольшую экскурсию по направлениям деятельности холдинга A7Agro. Уверены, знакомство будет
        полезным как для физических, так и для юридических лиц. Будем рады сотрудничеству, ответим на вопросы и
        предложим самые эффективные форматы партнерства.</p>
@endsection
@section('content')
    <div class="mt-5">
        <hr>
        @foreach($projects as $project)
            @if($project->id % 2 == 0)
                <div class="row mt-5">
                    <div class="col-lg-8">
                        <h1>{{$project->name}}</h1>
                        {!! $project->preview !!}
                        <a href="{{route('project', ['project' => $project])}}">Перейти на страницу проекта...</a>
                    </div>
                    <div class="col-lg-4">
                        <img src="http://127.0.0.1:8001/storage/{{$project->img}}" alt="" class="w-100">
                    </div>
                </div>
            @else
                <div class="row mt-5">
                    <div class="col-lg-4">
                        <img src="http://127.0.0.1:8001/storage/{{$project->img}}" alt="" class="w-100">
                    </div>
                    <div class="col-lg-8">
                        <h1>{{$project->name}}</h1>
                        {!! $project->preview !!}
                        <a href="{{route('project', ['project' => $project])}}">Перейти на страницу проекта...</a>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
