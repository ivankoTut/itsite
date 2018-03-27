@extends('layout')
@section('SEO')
    @inject('S', 'App\Settings')
    <title>{{$f->name}}!{{$S->get('title')}}</title>
    <meta name="Description" content="{{$S->get('description')}}">
    <meta name="keywords" content="{{$f->name}},{{$S->get('keywords')}}">
@endsection
@section('userjs')
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    <script type="text/javascript" src="/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
    <link rel="stylesheet" href="/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
    <script type="text/javascript" src="/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
    <script type="text/javascript" src="/js/fancy.js"></script>
@endsection
@section('content')
    <div class="row catfl3 center-block">

        <div class="col-md-10 col-md-offset-1" style="text-align: center;" >

             <h4>{{$f->name or ''}}</h4>

        </div>


        <div class="col-md-11 col-md-offset-1" >

            <div class="gallery_object">
                @foreach($f->getImgs() as $i)
                    <a href="/upload/photo/{{$i->url}}" title="{{$f->name}}" rel="example_group"  class="fancybox">
                        <img src="/upload/photo/{{$i->url}}" alt="{{$f->name}}" width="200px" alt="{{$f->name}}">
                    </a>
                @endforeach
            </div>
        </div>


        <div class="col-md-8 col-md-offset-1" >

           <p>
               {!! $f->text !!}
           </p>
        </div>

    </div>


@endsection
