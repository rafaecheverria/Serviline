@extends('layouts.app')

@section('content')
<div class="container">
	<div class="section">
		<div class="row">	

			<div class="col s12 m7">

		        <div class="card card-principal">
		          <div class="row">
		            <div class="card-content">
		              <div class="form-header orange darken-4 z-depth-5">
		                <p class="flow-text white-text">CONTÁCTENOS</p>
		              </div>
		            </div>
		          </div>

		         <div class="card-content">
		          	{!! Form::open(['route' => 'contacto.store','method' => 'POST','id' => 'form_contacto']) !!}
						<div class="row">
							<div class="input-field col s12 m6">
								{!! Form::text('nombres', null, ['autocomplete' => 'off', 'autofocus', 'required']); !!}
								{!! Form::label('nombres', 'Nombres'); !!}
							</div>
							<div class="input-field col s12 m6">
								{!! Form::text('apellidos',null, ['autocomplete' => 'off']); !!}
								{!! Form::label('apellidos', 'Apellidos'); !!}
							</div>
						</div>
						<div class="row">
							<div class="input-field col s12 m6">
								{!! Form::text('telefono',null, ['autocomplete' => 'off']); !!}
								{!! Form::label('Telefono', 'Telefono'); !!}
							</div>
							<div class="input-field col s12 m6">
								{!! Form::email('email', null, ['autocomplete' => 'off']); !!}
								{!! Form::label('email', 'Correo Electrónico'); !!}
							</div>
						</div>
						<div class="row">
					        <div class="input-field col s12">
					          {!! Form::textarea('mensaje', null, ['data-length' =>'500','class' => 'materialize-textarea', 'autocomplete' => 'off']) !!}
					          {!! Form::label('mensaje', 'Déjanos tu mensaje'); !!}
					        </div>
					     </div>
					{!! Form::close() !!}	
		        </div>

	    		<div class="card-action right-align">
					{!! link_to('#', 'Enviar',['id' => 'guardar' , 'class' => 'indigo darken-4 waves-effect waves-light btn']); !!}
				</div>

    		</div>
		</div>
		<div class="col s12 m5">
				<ul class="collapsible" data-collapsible="accordion">
					<li>
						<div class="collapsible-header active"><i class="material-icons blue-text">phone</i>Contacto Telefónico</div>
						<div class="collapsible-body">
							<p>Atendemos de Lunes a Viernes desde las 8:00 hasta las 19:00 horas </p>
							<b>+56957590687</b><br>
							<b>+56997650140</b><br>
							<b>+56974837110</b>
						</div>
					</li>
					<li>
					<div class="collapsible-header"><i class="material-icons green-text">place</i>Síguenos en nuestras Redes Sociales</div>
					<div class="collapsible-body center">
						<a class="btn-floating btn-large waves-effect waves-light light-blue darken-3" href="http://www.facebook.com" target="_blank"><span class="fa fa-facebook fa-1x"></span></a>
						<a class="btn-floating btn-large waves-effect waves-light light-blue light-blue lighten-1" href="#!"><span class="fa fa-twitter"></span></a>
						<a class="btn-floating btn-large waves-effect waves-light light-blue darken-3" href="https://www.linkedin.com/in/serviline-limitada/" target="_blank"><span class="fa fa-linkedin"></span></a>
						<a class="btn-floating btn-large waves-effect waves-light red" href="#!"><span class="fa fa-youtube"></span></a>
					</div>
					</li>
					<li>
						<div class="collapsible-header"><i class="material-icons deep-purple-text darken-4">email</i>Correo Electrónico</div>
						<div class="collapsible-body"><span>Cuando usted envíe el Fomulario de contacto, recibiremos su mensaje al mail <b>contacto@serviline.cl</b></span></div>
					</li>
				</ul>
			</div>

	  	</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="card-content">
			<div style="width: 100%; height: 250px;">
				{!! Mapper::render() !!}
			</div>
		</div>
	</div>
</div>
@endsection