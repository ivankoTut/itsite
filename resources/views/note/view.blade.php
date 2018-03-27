@extends('layout')
@section('SEO')
    <title> mmaks IT</title>
    <meta name="Description" content="IT">
    <meta name="keywords" content="asterisk,veeam,exchange,1C,windows,linux,centos,L2TP,openvpn,IT,cbcflvby,cisco,mikrotik,zyxel,dlink">
@endsection
@section('first')
@endsection
@section('userjs')
    <link rel="stylesheet" href="/highlight/styles/default.css">
    <script src="/highlight/highlight.pack.js"></script>
    <script>hljs.initHighlightingOnLoad();</script>
@endsection
@section('content')

    <h1 style="text-align: center">{{$f->label or ''}} </h1>
    <div class="container">
        <div class="row">

            <div class="col-md-11 col-md-offset-1">
                {!! $f->text  or ''!!}

            </div>

        </div>
    </div>
@endsection
