<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="/css/site.css" rel="stylesheet">

        <!-- Styles -->

        <script src="JS_Style/spinmenu.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.2.6/jquery.min.js"></script>
        <script type="text/javascript">
            eye.isVertical = 0; //if it's vertical or horizontal [0|1]

            eye.w = 380; // item's width
            eye.h = 20; // height
            eye.r = 280; // menu's radius
            eye.v = 90; // velocity
            eye.s = 4; // scale in space (for 3D effect)
            eye.x =screen.width/2;// 900; // x offset from point of insertion on page
            eye.y = screen.height/2 -eye.r;//400; // y offset from point of insertion on page
            eye.color = '#D4E6F0'; // normal text color
            eye.colorover = '#D4E6F0'; // mouseover text color
            eye.backgroundcolor = '#3B8DBD'; // normal background color
            eye.backgroundcolorover = '#3B8DBD'; // mouseover background color
            eye.bordercolor = '#0D525C'; //border color
            eye.fontsize = 24; // font size
            eye.fontfamily = 'verdana'; //font family
            if (document.getElementById) {
                document.write('<div id="spinanchor" style="height:' + eval(eye.h + 20) + '"></div>')
                eye.anchor = document.getElementById('spinanchor')
                eye.spinmenu();
                eye.x += getposOffset(eye.anchor, "left") //relatively position it
                eye.y += getposOffset(eye.anchor, "top")  //relatively position it

                //menuitem:   eye.spinmenuitem(text, link, target)
                eye.spinmenuitem("<div class='mnu'>CODESCRATCHER</div>", "http://www.codescratcher.com/");
                eye.spinmenuitem("<div class='mnu'>ASP.NET</div>", "http://www.codescratcher.com/category/asp-net/");
                eye.spinmenuitem("<div class='mnu'>WPF</div>", "http://www.codescratcher.com/category/wpf/");
                eye.spinmenuitem("<div class='mnu'>WINDOWS FORMS</div>", "http://www.codescratcher.com/category/windows-forms/");
                eye.spinmenuitem("<div class='mnu'>JAVASCRIPT</div>", "http://www.codescratcher.com/category/javascript/");
                eye.spinmenuitem("<div class='mnu'>JQUERY</div>", "http://www.codescratcher.com/category/jquery/");
                eye.spinmenuitem("<div class='mnu'>SQL SERVER</div>", "http://www.codescratcher.com/category/sql-server/");
                eye.spinmenuitem("<div class='mnu'>FLASH</div>", "http://www.codescratcher.com/category/flash/");
                eye.spinmenuclose();
            }
        </script>



    </head>
    <body>



     <div style="font-family: Palatino Linotype; font-size: 45px; font-weight: bold; text-align: center;
        margin: 15px; margin-top: 165px; margin-bottom: 150px;top: 50%; left: 50%; position: absolute;">
     </div>






    </body>
</html>
