@extends('layout')
@section('SEO')
  @inject('S', 'App\Settings')
    <title>{{$S->name}}!{{$S->get('title')}}</title>
    
    <title>{{$S->get('title')}}</title>
    <meta name="Description" content="{{$S->get('description')}}">
    <meta name="keywords" content="{{$S->name}},{{$S->get('keywords')}}">
@endsection
@section('first')
@endsection
@section('userjs')
@endsection
@section('content')

    <h1 style="text-align: center">Хуй, поэтому -  <a href="/">На главную!</a> </h1>
    <
@endsection
