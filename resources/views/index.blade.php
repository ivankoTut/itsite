@extends('layout')
@section('SEO')
  @inject('S', 'App\Settings')
    <title>{{$S->name}}{{$S->get('title')}}</title>
    <meta name="Description" content="{{$S->get('description')}}">
    <meta name="keywords" content="{{$S->name}},{{$S->get('keywords')}}">
@endsection
@section('first')
@endsection
@section('userjs')
@endsection
@section('content')
    <div class="row m_kub4_row">
        @foreach($k as $c)
            <div class="col-md-4  col-xs-4 m_kub4"
                onmouseover="this.style.backgroundImage='url(/upload/photo/{{$c->img()}})';"
                onmouseout="this.style.backgroundImage='';" >
                <div class="row">
                    <div class="col-md-12" >
                        {{$c->name}};
                    </div>
                    <div class="col-md-12">
                       <ul>

                    @foreach($c->getNotes() as $n)
                        <li><a href="/{{$c->key}}/{{$n['url']}}">{{$n['label']}}</a></li>
                    @endforeach

                       </ul>
                    </div>



                </div>
            </div>
        @endforeach

    </div>
@endsection
