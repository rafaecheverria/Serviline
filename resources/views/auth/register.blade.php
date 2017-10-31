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
                   <p class="flow-text white-text">REGISTRARSE</p>
                </div>
            </div>
            <!--<img class="responsive-img" style="width: 150px; height: 150px; margin-top: 20px;"  src="https://vsnseguridad.online.com.ni/ChatPublico/img/icon_user.png"/>-->
        </div>
          {!! Form::open(['route' => 'register','method' => 'POST','id' => 'form_register','action' => 'register']) !!}

            {{ csrf_field() }}
            
            {!! Form::hidden('avatar', 'default.jpg') !!}

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::text('rut',null,['id' => 'rut', 'autofocus', 'required' ,'autocomplete' => 'off', 'autofocus']); !!}
                    {!! Form::label('rut', 'Rut'); !!}
                </div>
                <div class="input-field col s12">
                    {!! Form::text('name', null, ['required', 'autocomplete' => 'off']); !!}
                    {!! Form::label('name', 'Nombres'); !!}
                </div>
         
                
            </div>
            <div class="row">
                <div class="input-field col s12">
                    {!! Form::text('last_name', null, ['required', 'autocomplete' => 'off']); !!}
                    {!! Form::label('last_name', 'Apellidos'); !!}
                </div>
                <div class="input-field col s12">
                    {!! Form::text('address', null,['data-length' => '50','autocomplete' => 'off']); !!}
                    {!! Form::label('direccion', 'Dirección'); !!}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::text('email', null, ['required', 'autocomplete' => 'off']); !!}
                    {!! Form::label('email', 'Email'); !!}
                </div>

                <div class="input-field col s12">
                    {!! Form::text('phone', null, ['required', 'autocomplete' => 'off']); !!}
                    {!! Form::label('phone', 'Teléfono'); !!}
                </div>
            </div>

            <div class="row">
                <div class="input-field col s12">
                    {!! Form::password('password', null, ['required', 'autocomplete' => 'off']); !!}
                    {!! Form::label('password', 'Contraseña'); !!}
                </div>
       
                <div class="input-field col s12">
                    {!! Form::password('password_confirmation', null, ['id' => 'password-confirm', 'required']); !!}
                    {!! Form::label('password', 'Confirmar Contraseña'); !!}
                </div>
            </div>
{!! Form::close() !!}  
<div class="row">
            {!! link_to('#','Registrar',['id' => 'registrar' , 'class' => 'col s12 btn btn-large waves-effect  indigo darken-4']); !!}
        </div>
        <div class="row align-center">
            <div class="col s12">
                 <a href="{{url('login')}}">Ya tengo una Cuenta</a>
            </div>
        </div> 
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
  {!! Html::script('js/jquery.Rut.js') !!}
  {!! Html::script('js/valida_rut.js') !!}
  {!! Html::script('js/toastr.js') !!}

  </body>
</html>

