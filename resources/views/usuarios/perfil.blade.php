@extends('layouts.app')
@section('content')
<div class="container">
  <div class="section">
    <div class="row center-align">
      <div id="fondo-imagen" class="col s12 m3">
        <a href="#" class="tooltipped" data-position="bottom" data-delay="50" data-tooltip="Click para subir una Imagen"><img class=" avatarImage circle responsive-img z-depth-2 hoverable" src="/img/{{ $user->avatar }}"></a>
      </div>
      <div class="col s12 m8">
        <div class="card card-principal">
          <div class="row">
            <div class="card-content">
              <div class="form-header orange darken-4 z-depth-2">
                <p class="flow-text white-text">MIS DATOS</p>
              </div>
            </div>
          </div>
          <div class="col s12 m4">
            {!! Form::open(['method' => 'POST', 'files' => true,'id' => 'avatarForm']); !!}
            <div class="file-field input-field">
              {!! Form::file('avatar', ['id' => 'avatarInput', 'hidden' => true]); !!}         
              <div class="file-path-wrapper">
                <input class="file-path validate" name="avatar" hidden="true" placeholder="Selecciona una imagen">     
              </div>
            </div>
            {!! Form::close() !!} 
          </div>
          <div class="card-content">
            {!! Form::open(['id' => 'form_profile']) !!}
            
            {!! Form::text('id', $user->id,['id' => 'id', 'hidden' => true]); !!}    
              <div class="row">
                <div class="input-field col s12 m6">
                  {!! Form::text('rut', $user->rut, ['autofocus','readonly', 'required' ,'autocomplete' => 'off', 'autofocus', 'required']); !!}
                  {!! Form::label('rut', 'Rut'); !!}
                </div>
                <div class="input-field col s12 m6">
                  {!! Form::text('name', $user->name, ['autocomplete' => 'off', 'required']); !!}
                  {!! Form::label('nombres', 'Nombres'); !!}
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6">
                  {!! Form::text('last_name',$user->last_name, ['autocomplete' => 'off']); !!}
                  {!! Form::label('apellidos', 'Apellidos'); !!}
                </div>
                <div class="input-field col s12 m6">
                  {!! Form::email('email', $user->email, ['autocomplete' => 'off']); !!}
                  {!! Form::label('email', 'Correo Electrónico'); !!}
                </div>
              </div>
              <div class="row">
                <div class="input-field col s12 m6">
                  {!! Form::text('phone',$user->phone, ['autocomplete' => 'off']); !!}
                  {!! Form::label('Telefono', 'Telefono'); !!}
                </div>
                <div class="input-field col s12 m6">
                  {!! Form::text('address',$user->address, ['data-length' =>'50','autocomplete' => 'off']); !!}
                  {!! Form::label('direccion', 'Dirección'); !!}
                </div>
              </div>
            {!! Form::close() !!} 
          </div>
          <div class="card-action right-align"> 
          {!! link_to('#','Actualizar',['id' => 'update_profile' , 'class' => 'indigo darken-4 waves-effect waves-light btn']); !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection