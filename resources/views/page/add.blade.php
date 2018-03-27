@extends('layout')
@section('userjs')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="row catfl3 center-block">

        <div style="text-align: center">
            <label>Добавить страницу:</label></div>
        <hr>

        <form role="form" class="form-inline" action="/page/save" method="post" enctype="multipart/form-data">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">


            <div class="row">
                <div class="col-md-8"
                     style="background-color: #d0e9c6; padding: 12px;border-radius: 8px;">


                    <div class="row">

                        <div class="col-md-5">
                            <label>Заголовок</label>
                            <input type="text" class="text-info" name="label">


                        </div>


                        <div class="col-md-10">
                            <label>Описание:</label><br>
                            <textarea name="text" id="text">

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

    </div>
@endsection
