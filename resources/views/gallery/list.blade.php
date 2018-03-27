@extends('layout')
@section('userjs')
@endsection
@section('content')
    <div class="container">
        <div class="row pagelist center-block">
            <div class="col-md-8 col-md-offset-1 stringpagelist center-block">
                <a href="/gallery/add"><input type="button" class="btn-success" value="Добавить"></a>
            </div>

            <div class="col-md-8 col-md-offset-1 stringpagelist">
                <h5 style="float: left;">Галереи</h5>
                <br>
            </div>

            @foreach($p as $c)
                <div class="col-md-8 col-md-offset-1 stringpagelist">
                    <a href="/gallery/delete/{{$c->id}}">
                        <img src="/img/delete2.png" class="imgdel" alt="Удалить">
                    </a>
                    <a href="/gallery/edit/{{$c->id}}">{{$c->name}}</a>

                </div>

            @endforeach

        </div>
    </div>



@endsection