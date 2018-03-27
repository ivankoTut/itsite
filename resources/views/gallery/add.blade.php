
@extends('layout')
@section('userjs')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')

    <div style="text-align: center">
        <label>Добавить Галерею:</label></div>
    <hr>

    <form role="form" class="form-inline" action="/gallery/save" method="post" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">


        <div class="row">
            <div class="col-md-8  col-md-offset-2" style="background-color: #d0e9c6; padding: 12px;border-radius: 8px;">



                <div class="row">


                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <label class="pull-left">Название:</label>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <input type="text" name="name" required="required">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-5 col-md-offset-1">
                            <label class="pull-left">Ссылка:</label>
                        </div>
                        <div class="col-md-5 col-md-offset-1">
                            <input type="text" name="url" >
                        </div>
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