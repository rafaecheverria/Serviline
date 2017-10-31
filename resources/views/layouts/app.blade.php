<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Serviline</title>
    <!-- CSS  -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('css/materialize.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/toastr.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('css/cards.css') !!}
</head>
<body>
    <div class="wrapper">
      @include('layouts.menu')
        <div class="main-panel">
          @yield('content')   
        </div>
         @include('layouts.footer')
    </div>
  <!--  Scripts-->
  {!! Html::script('https://code.jquery.com/jquery-2.1.1.min.js') !!}
  {!! Html::script('js/materialize.js') !!}
  {!! Html::script('js/init.js') !!}
  {!! Html::script('js/javascript.js') !!}
  {!! Html::script('js/jquery.rut.js') !!}
  {!! Html::script('js/valida_rut.js') !!}
  {!! Html::script('js/toastr.js') !!}
  </body>
</html>
