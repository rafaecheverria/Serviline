@component('mail::message')
# Introduction

Remitente: **{{$datos->nombres}}**<br>
Correo Electrónico: **{{$datos->email}}**<br>
Mensaje: **{{$datos->mensaje}}**

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
