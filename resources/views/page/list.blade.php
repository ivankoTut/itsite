@extends('layout')
@section('userjs')
@endsection
@section('content')

    <div class="row pagelist center-block">
        <div class="col-md-8 col-md-offset-1 stringpagelist">
            <a href="/page/add"><input type="button" class="btn-success" value="Добавить"></a>
        </div>
        <hr>

        @foreach($p as $c)
            <div class="col-md-8 col-md-offset-1 stringpagelist">
                <a href="/page/del/{{$c->id}}">
                    <img src="/img/delete2.png" class="imgdel" alt="Удалить">
                </a>
                <a href="/page/edit/{{$c->id}}">{{$c->label}}</a>

            </div>

        @endforeach


    </div>
@endsection
