<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    @yield('SEO')

    <meta name="author" content="mmaks.xyz">

    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">


    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/scripts.js"></script>
    @yield('userjs')


</head>
<body>
<div class="container-fluid" style="position:relative; height: 100vh;">
    <div class="row">
        <div class="col-md-12 m_top">
            <!--  top block -->
            <a href="/">mmaks</a><br>
            @if(isset(Auth::user()->role))

                <a href="/crm">блокнот</a><br>
                <a href="/ukat/view">Категории в блокноте</a>


            @endif
        </div>
    </div>

    <br>
    @if(Session::has('alert'))
        <div class="panel panel-default panelalert grenalert"  >
            <div class="panel-body">
                {{Session::get('alert')}}
            </div>
        </div>
    @endif
    <br>
    <div id="myModal" class="b-popup"></div>

    <!-------------nav admin-------------------->
    @if(isset(Auth::user()->role) and Auth::user()->role==1)
        <nav class="navbar navbar-default" role="navigation" style="font-size:17px; font-weight: bold;">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                </div>
                <!-- Group the nav links, forms, drop-down menus and other elements for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav" >
                        <li  style="float: none;display: inline-block;"><a href="/note/list">Статьи</a></li>
                        <li  style="float: none;display: inline-block;"><a href="/page/list">Страницы</a></li>
                        <li  style="float: none;display: inline-block;"><a href="/gallery/list">Галереи</a></li>
                        <li  style="float: none;display: inline-block;"><a href="/crm">Блокнот</a></li>
                        <li  style="float: none;display: inline-block;"><a href="/ukat/view">Категории записей</a></li>
                        <li  style="float: none;display: inline-block;"><a href="/settings/view">Настройки/SEO</a></li>
                        <li  style="float: none;display: inline-block;"><a href="/kat/view">Категории</a></li>
                        <li style="float: none;display: inline-block;"><a href="/logout">Выход из режима администратора</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

    @endif()
<!-------------end nav admin-------------->



    @yield('content')
    <div class="row bottom m_bottom_rov text-center center-block" >
        <?php $i=0; ?>
        @while($i<12)
            <div class="col-md-2 col-xs-2 m_bottom_kub">
                bottom {{ $i+=2 }}
            </div>
        @endwhile
    </div>
</div>

</body>
</html>