@extends('layouts.app')

@section('content')
<div class="row">
<div class="slider">
    <ul class="slides">
      <li>
        <img src="img/slider_3.png"> <!-- random image -->
        <div class="caption left-align">
          <h3>Nuevas tecnologías para tu negocio</h3>
          <h5 class="light grey-text text-lighten-3 ">que faciliten los procesos internos.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider_4.jpg"> <!-- random image -->
        <div class="caption right-align">
          <h3>Publicidad en pantallas LED de gran impacto</h3>
          <h5 class="light grey-text text-lighten-3">Informa a tus clientes.</h5>
        </div>
      </li>
      <li>
        <img src="img/slider_8.jpeg"> <!-- random image -->
        <div class="caption left-align">
          <h3>Solución empresarial integral</h3>
          <h5 class="light grey-text text-lighten-3">mejora los procesos de tu empresa.</h5>
        </div>
      </li>
    </ul>
  </div>
</div>
<div class="row">
  <div class="container">
    <div class="section">
      <div class="card">
            <div class="card-content">
                {!! Form::open(['route' => 'contacto.store','method' => 'POST','id' => 'form_contacto']) !!}
            <div class="row">
              <div class="input-field col s12 m4">
                {!! Form::select('size', ['L' => 'Large', 'S' => 'Small']); !!}
              </div>
              <div class="input-field col s12 m5">
                {!! Form::email('email', null, ['autocomplete' => 'off']); !!}
                {!! Form::label('email', 'Correo Electrónico'); !!}
              </div>
          {!! Form::close() !!} 
           <div class="input-field col s12 m2">
              {!! link_to('#', 'Buscar',['id' => 'guardar' , 'class' => 'indigo darken-4 waves-effect waves-light btn']); !!}
           </div>
            </div>
        </div>
    </div>
  </div>
</div>
</div>
<div class="row">
  <div class="parallax-container valign-wrapper">
    <div class="section no-pad-bot">
      <div class="container">
        <div class="row center">
          <h5 class="header col s12 light">A modern responsive front-end framework based on Material Design</h5>
        </div>
      </div>
    </div>
    <div class="parallax"><img src="background2.jpg" alt="Unsplashed background img 2"></div>
  </div>
</div>
  <div class="container">
    <div class="section">

      <div class="row">
        <div class="col s12 center">
          <ul class="collapsible popout" data-collapsible="accordion">
    <li>
      <div class="collapsible-header active"><i class="material-icons light-blue-text darken-4">filter_drama</i>5 Beneficios de la publicidad en pantallas gigantes LED</div>
      <div class="collapsible-body left-align">
        <ul class="collection">
          <li class="collection-item avatar">
            <i class="material-icons circle blue">autorenew</i>
            <span class="title"> <strong>Actualización Remota:</strong></span>
            <p>Con la implementación de publicidad en pantallas, la facilidad para la modificación de ofertas, personalización de mensajes o cambio en cualquier dato</p> 
            <p style="margin:-1% 0;">de tus spots está a sólo un click de distancia.</p>
            <a href="#!" class="secondary-content"><i class="material-icons blue-text">navigate_before</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle green">content_paste</i>
            <span class="title"> <strong>Dinamización de Contenido:</strong></span>
            <p>La transmisión de gráficos, animaciones y video convierten un anuncio estático en una experiencia sensorial para los transeúntes.</p> 
            <a href="#!" class="secondary-content"><i class="material-icons green-text">navigate_before</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle purple">visibility</i>
            <span class="title"> <strong>Visibilidad Garantizada:</strong></span>
            <p>Genera impacto desde grandes distancias emitiendo información más allá del ruido ambiental, las 24 horas durante todo el año.</p> 
            <a href="#!" class="secondary-content"><i class="material-icons purple-text">navigate_before</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle light-green">call_split</i>
            <span class="title"> <strong>Divide y venderás:</strong></span>
            <p>Garantiza un aumento considerable de visibilidad adecuada y mejora la experiencia publicitaria de la audiencia al seccionar tus anuncios de acuerdo </p> 
            <p style="margin:-1% 0;">a la zona, los horarios y el perfil del consumidor.</p>
            <a href="#!" class="secondary-content"><i class="material-icons light-green-text">navigate_before</i></a>
          </li>
          <li class="collection-item avatar">
            <i class="material-icons circle orange darken-4">nature_people</i>
            <span class="title"> <strong>Informa al consumidor:</strong></span>
            <p>El dotar al comprador de todos los detalles necesarios para interesarse en tu marca en cuestión de segundos implica una gran ventaja respecto</p> 
            <p style="margin:-1% 0;">a la competencia, pues lo dota de una gran cantidad de información respecto a sus productos sin necesidad de un contacto directo.</p>
            <a href="#!" class="secondary-content"><i class="material-icons orange-text darken-4">navigate_before</i></a>
          </li>
        </ul>
      </div>
    </li>


    <li>
      <div class="collapsible-header"><i class="material-icons deep-orange-text darken-4">place</i>¿Por qué es necesario que tu empresa tenga un sitio Web?</div>
      <div class="collapsible-body left-align">
      <ul class="collection">
          <li class="collection-item avatar">
            <i class="material-icons circle blue">arrow_forward</i>
            <span class="title"> <strong>Alcance mundial de su producto o servicio:</strong></span>
            <p>El propósito de toda nuestra publicidad y marketing es el posicionarnos en la mente del consumidor ¿no?, y mientras mas audiencia tenemos mucha mas probabilidad </p>
            <p style="margin:-1% 0;"> de reconocimiento tendremos. Pues, con un Sitio Web todas las personas con acceso a Internet (hoy en día son la mayoría) podrán conocer todo sobre su negocio</p>
            <p style="margin:-1% 0;">o empresa. Los podrá mantener al tanto de todas las noticias y promociones que usted desee. El nivel de clientes potenciales se elevará considerablemente y la</p>
            <p style="margin:-1% 0;">experiencia de sus clientes fijos será aun mejor.</p>
            <a href="#!" class="secondary-content"><i class="material-icons blue-text">navigate_before</i></a>
          </li>
      </ul>
      <ul class="collection">
          <li class="collection-item avatar">
            <i class="material-icons circle blue">arrow_forward</i>
            <span class="title"> <strong>Prestigio y Calidad de su Empresa:</strong></span>
            <p>¿Quien no quisiera que su empresa fuera considerada de alto prestigio y calidad? Esto no solo depende del producto y servicio o de lo que la empresa pueda decir</p>
            <p style="margin:-1% 0;">o dejar de decir. Ni tampoco depende estrictamente de las ventas. El consumidor no solamente compra por necesidad, sino por preferencia, por impulso</p>
            <p style="margin:-1% 0;">o por atracción a un determinado producto o servicio. Y al momento de tomar su decisión, la calidad y el prestigio casi siempre influyen. El prestigio y la calidad</p>
            <p style="margin:-1% 0;">se demuestra y que mejor manera de demostrarlo que con una pagina web de primer nivel.</p>
            <a href="#!" class="secondary-content"><i class="material-icons blue-text">navigate_before</i></a>
          </li>
      </ul>
      <ul class="collection">
          <li class="collection-item avatar">
            <i class="material-icons circle blue">arrow_forward</i>
            <span class="title"> <strong>Ventaja Competitiva:</strong></span>
            <p>Tener un buen sitio web puede ser la ventaja que te diferencie de tu competencia. No solamente crear una pagina web para tu negocio, sino saberla manejar y sacarle </p>
            <p style="margin:-1% 0;">el máximo provecho a esta herramienta tan poderosa. El facilitarle a tus clientes un sitio en Internet que los acerque a tu negocio para que puedan estar al tanto de tus</p>
            <p style="margin:-1% 0;">noticias, ofertas e información de una forma sencilla y atractiva va a mantenerlos interesados en ti sobre el resto de tus competidores. Hay miles de forma de atraer</p>
            <p style="margin:-1% 0;">a tus clientes a tu Sitio Web, pero una de las cosas mas difíciles es mantenerlos interesados en volver.</p>
            <a href="#!" class="secondary-content"><i class="material-icons blue-text">navigate_before</i></a>
          </li>
      </ul>
      </div>
    </li>
   </ul>
        </div>
      </div>
    </div>
  </div>

  @endsection