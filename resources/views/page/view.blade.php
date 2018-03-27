@extends('layout')
@section('SEO')
  @inject('S', 'App\Settings')
    <title>{{$f->name}}!{{$S->get('title')}}</title>
    <meta name="Description" content="{{$S->get('description')}}">
    <meta name="keywords" content="{{$f->name}},{{$S->get('keywords')}}">
@endsection
@section('first')
@endsection
@section('userjs')
@endsection
@section('content')

    <h1 style="text-align: center">{{$f->label or ''}} </h1>
    <div class="container">
        <div class="row">

            <div class="col-md-10 col-md-offset-1">
                {!! $f->text  or ''!!}

            </div>

        </div>
    </div>
@endsection

