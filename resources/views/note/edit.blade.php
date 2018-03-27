@extends('layout')
@section('userjs')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="row catfl3">

        <div style="text-align: center">
            <label>Добавить обьявление:</label></div>
        <hr>

        <form role="form" class="form-inline" action="/note/editsave" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="id" value="{{ $f->id }}">


            <div class="row">
                <div class="col-md-8" style="background-color: #d0e9c6; padding: 12px;border-radius: 8px;">



                    <div class="row">


                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <label class="pull-left">Название:</label>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <input type="text" name="label" value="{{$f->label}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <label class="pull-left">URL:</label>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <input type="text" name="url" value="{{$f->url}}">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <label class="pull-left">Категория:</label>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <select name="kat">
                                    @foreach($kat as $c)
                                        <option value="{{$c->id}}"
                                        <?php
                                            if($c->id == $f->kat) echo 'selected';

                                            ?>
                                        >{{$c->name}}</option>
                                    @endforeach


                                </select>
                            </div>
                        </div>


                        <div class="row">
                            @foreach($f->getImgs() as $i)
                                <div class="col-md-3 col-md-offset-1" style="background: url(/upload/photo/{{$i->url}}) 100% 100% no-repeat; background-size: cover; height:200px;width:200px;">
                                    <a href="/imgdel/{{$i->id}}">удалить</a>
                                </div>


                            @endforeach
                            <hr>
                        </div>


                        <div class="row">
                            <div class="col-md-5 col-md-offset-1">
                                <label class="pull-left">Фото:</label>
                            </div>
                            <div class="col-md-5 col-md-offset-1">
                                <input type="file" name="foto[]" multiple="multiple">
                            </div>
                        </div>


                    </div>
                    <div class="col-md-10">
                        <label>Описание:</label><br>
                        <textarea name="text" id="text">
            {!! $f->text !!}
        </textarea>

                        <script>
                            CKEDITOR.replace('text' );
                        </script><br>

                    </div>

                    <div class="col-md-4 col-md-offset-5">
                        <button type="submit" class="btn btn-success" style="text-align: center; position:relative;" >Сохранить</button>
                    </div>
                </div>
        </form>

    </div>
@endsection
