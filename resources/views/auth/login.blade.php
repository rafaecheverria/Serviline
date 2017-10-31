<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1"/>
  <title>Serviline</title>
    <!-- CSS  -->
    {!! Html::style('https://fonts.googleapis.com/icon?family=Material+Icons') !!}
    {!! Html::style('css/materialize.css') !!}
    {!! Html::style('css/toastr.css') !!}
    {!! Html::style('css/font-awesome.min.css') !!}
    {!! Html::style('css/auth.css') !!}

</head>
<body style="background-image: url(/img/servicios/bg_azul_2.jpg);">
    <div class="section"></div>
  <main>
    <center>
      <div class="section"></div>
      <div class="section"></div>

      <div class="container">
        <div class="z-depth-5 grey lighten-3 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
        <div class="row">
          <div class="card-content">
                 <div class="form-header orange darken-4 z-depth-3">
                   <p class="flow-text white-text">INICIAR SESIÓN</p>
                </div>
            </div>
            <img class="responsive-img" style="width: 150px; height: 150px; margin-top: 20px;"  src="https://vsnseguridad.online.com.ni/ChatPublico/img/icon_user.png"/>
        </div>
          {!! Form::open(['route' => 'login','method' => 'POST','id' => 'form_login','action' => 'login']) !!}
        {{ csrf_field() }}
        <div class="row">
            <div class="input-field">
                {!! Form::text('email', null, ['autofocus', 'required']); !!}
                {!! Form::label('email', 'Email'); !!}
            </div>
        </div>

        <div class="row">
            <div class="input-field">
                {!! Form::password('password', null, ['type' => 'password' ,'class' => 'awesome', 'required']); !!}
                {!! Form::label('Password', 'Contraseña'); !!}
            </div>
        </div>

        <div class="row">
            {!! link_to('#', 'Ingresar',['id' => 'ingresar' , 'class' => 'col s12 btn btn-large waves-effect  indigo darken-4']); !!}
        </div>
        <div class="row">
            <div class="col s12 m7">
           <a href="{{ url('/password/reset') }}">
                ¿Olvido su contraseña?
            </a>
        </div>
        <div class="col s12 m5">
             <a href="{{url('register')}}">Crear Cuenta</a>
        </div>
        </div>
        {!! Form::close() !!}    
        </div>
      </div>
    </center>

    <div class="section"></div>
    <div class="section"></div>
  </main>

  {!! Html::script('https://code.jquery.com/jquery-2.1.1.min.js') !!}
  {!! Html::script('js/materialize.js') !!}
  {!! Html::script('js/init.js') !!}
  {!! Html::script('js/javascript.js') !!}
  {!! Html::script('js/toastr.js') !!}
  </body>
</html>