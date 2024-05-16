@extends('welcome')
@section('video')
    {{asset('src/ferma_video.mp4')}}
@endsection
@section('preview')
    <h1>Отзывы наших клиентов</h1>
@endsection
@section('content')
    <form method="post" class="m-5">
        @csrf
        <h1 class="mb-3">Поделитесь своим комментарием</h1>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Адрес электронной почты</label>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Мы никогда никому не передадим вашу электронную почту.</div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Номер телефна</label>
            <input type="text" class="form-control" name="number" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Ваше имя</label>
            <input type="text" class="form-control" name="FIO" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Ваш комментарий</label>
            <textarea class="form-control" name="review" id="exampleFormControlTextarea1" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
    @foreach($reviews as $review)
        <div class="row">
            <div class="col-lg-4 d-flex">
                <h3>{{$review->FIO}}</h3>
                <span class="ms-3">{{Carbon\Carbon::make($review->created_at)->format('d.m.Y')}}</span>
            </div>
            <p>{{$review->review}}</p>
        </div>
    @endforeach
@endsection
