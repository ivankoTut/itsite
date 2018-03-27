@extends('layout')
@section('userjs')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="row catfl3 ">
        <form role="form" class="form-inline" action="/page/save" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">



            <div class="row">
                <div class="col-md-8"
                     style="background-color: #d0e9c6; padding: 12px;border-radius: 8px;">


                    <div class="row">
                        <label>ID</label>
                        <input type="number" width="40" name="id" value="{{$p->id}}" readonly="readonly" class="right">

                        <div class="col-md-5">
                            <label>Заголовок</label>
                            <input type="text" class="text-info" name="label" value="{{$p->label}}">


                        </div>

                        <div class="col-md-5">
                            <label>Файлы</label>
                            <input type="file" class="text-info" name="file[]" multiple="multiple">
                        </div>




                        <div class="col-md-10">
                            <label>Описание:</label><br>
                            <textarea name="text" id="text">
            {{$p->text}}

        </textarea>

                            <script>
                                CKEDITOR.replace('text');
                            </script>
                            <br>

                        </div>

                        <div class="col-md-4 col-md-offset-5">
                            <button type="submit" class="btn btn-success"
                                    style="text-align: center; position:relative;">Сохранить
                            </button>
                        </div>
                    </div>

        </form>


    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-1">
            <form name="savefiles" action="/file/update" method="post">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="id_page" value="{{$p->id}}">
                @foreach($p->files() as $f)
                    <table>
                        <tr>
                            <td><input type="hidden" value="{{$f->id}}" name="id[]">{{$f->id}} </td>
                            <td><input value="{{$f->label}}" name="label[]">
                            <td>{{$f->url}}</td>
                            </td><td><a href="/file/delete/{{$f->id}}" style="background-color: red;">удалить</a></td>
                        </tr>
                    </table>
                @endforeach

                <div class="col-md-4 col-md-offset-5">
                    <button type="submit" class="btn btn-warning"
                            style="text-align: center; position:relative;">Сохранить
                    </button>
                </div>
            </form>

            <hr>

        </div>


    </div>
@endsection
