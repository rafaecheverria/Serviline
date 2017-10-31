<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
	use Notifiable;
	
    protected $fillable = [
        'nombres', 'apellidos', 'telefono', 'email', 'mensaje'
    ];
}
