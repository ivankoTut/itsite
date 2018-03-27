@extends('layout')
@section('userjs')
@endsection
@section('content')
    <div class="row catfl3">
        <div class="col-md-offset-1 col-md-11">
        <h4>Категории задач</h4>
        <br>
        <hr>
        <form name="editnclass" method="post" action="/ukat/save">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="submit" class="btn btn-success"  value="Сохранить все">
            <br>
            <div id="nclass" class="row nclass">

                @if(isset($c))
                    @foreach( $c as $cn)
                        <input type="hidden" readonly="readonly" name="id[]" value="{{$cn->id}}">
                        <div class="col-md-2">

                        </div>
                        <div class="col-md-8">
                            <input type="text" name="name[]" value="{{$cn->name}}" style="width:96%;" >
                        </div>
                        <div  class="col-md-2">
                            <a href="/ukat/delete/{{$cn->id}}"> <img src="/img/delete2.png" class="imgdel"> </a>
                        </div>
                        <div style="clear: both"></div>

                    @endforeach
                @endif
            </div>
            <img src="/img/add.png" class="crossrefaddb"  onclick="ukataddedform();"> <br>

        </form>

        </div>
    </div>
@endsection


