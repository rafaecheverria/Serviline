<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */

    'accepted'             => '<b>:attribute</b> debe ser aceptado.',
    'active_url'           => '<b>:attribute</b> no es una URL válida.',
    'after'                => '<b>:attribute</b> debe ser una fecha posterior a :date.',
    'after_or_equal'       => '<b>:attribute</b> debe ser una fecha posterior o igual a :date.',
    'alpha'                => '<b>:attribute</b> sólo debe contener letras.',
    'alpha_dash'           => '<b>:attribute</b> sólo debe contener letras, números y guiones.',
    'alpha_num'            => '<b>:attribute</b> sólo debe contener letras y números.',
    'array'                => '<b>:attribute</b> debe ser un conjunto.',
    'before'               => '<b>:attribute</b> debe ser una fecha anterior a :date.',
    'before_or_equal'      => '<b>:attribute</b> debe ser una fecha anterior o igual a :date.',
    'between'              => [
        'numeric' => '<b>:attribute</b> tiene que estar entre :min - :max.',
        'file'    => '<b>:attribute</b> debe pesar entre :min - :max kilobytes.',
        'string'  => '<b>:attribute</b> tiene que tener entre :min - :max caracteres.',
        'array'   => '<b>:attribute</b> tiene que tener entre :min - :max ítems.',
    ],
    'boolean'              => 'El campo <b>:attribute</b> debe tener un valor verdadero o falso.',
    'confirmed'            => 'La confirmación de <b>:attribute</b> no coincide.',
    'date'                 => '<b>:attribute</b> no es una fecha válida.',
    'date_format'          => '<b>:attribute</b> no corresponde al formato :format.',
    'different'            => '<b>:attribute</b> y :other deben ser diferentes.',
    'digits'               => '<b>:attribute</b> debe tener :digits dígitos.',
    'digits_between'       => '<b>:attribute</b> debe tener entre :min y :max dígitos.',
    'dimensions'           => 'Las dimensiones de la imagen <b>:attribute</b> no son válidas.',
    'distinct'             => 'El campo <b>:attribute</b> contiene un valor duplicado.',
    'email'                => '<b>:attribute</b> no es un correo válido',
    'exists'               => '<b>:attribute</b> es inválido.',
    'file'                 => 'El campo <b>:attribute</b> debe ser un archivo.',
    'filled'               => 'El campo <b>:attribute</b> es obligatorio.',
    'image'                => '<b>:attribute</b> debe ser una imagen.',
    'in'                   => '<b>:attribute</b> es inválido.',
    'in_array'             => 'El campo <b>:attribute</b> no existe en :other.',
    'integer'              => '<b>:attribute</b> debe ser un número entero.',
    'ip'                   => '<b>:attribute</b> debe ser una dirección IP válida.',
    'ipv4'                 => '<b>:attribute</b> debe ser un dirección IPv4 válida',
    'ipv6'                 => '<b>:attribute</b> debe ser un dirección IPv6 válida.',
    'json'                 => 'El campo <b>:attribute</b> debe tener una cadena JSON válida.',
    'max'                  => [
        'numeric' => '<b>:attribute</b> no debe ser mayor a :max.',
        'file'    => '<b>:attribute</b> no debe ser mayor que :max kilobytes.',
        'string'  => '<b>:attribute</b> no debe ser mayor que :max caracteres.',
        'array'   => '<b>:attribute</b> no debe tener más de :max elementos.',
    ],
    'mimes'                => '<b>:attribute</b> debe ser un archivo con formato: :values.',
    'mimetypes'            => '<b>:attribute</b> debe ser un archivo con formato: :values.',
    'min'                  => [
        'numeric' => 'El tamaño de <b>:attribute</b> debe ser de al menos :min.',
        'file'    => 'El tamaño de <b>:attribute</b> debe ser de al menos :min kilobytes.',
        'string'  => '<b>:attribute</b> debe contener al menos :min caracteres.',
        'array'   => '<b>:attribute</b> debe tener al menos :min elementos.',
    ],
    'not_in'               => '<b>:attribute</b> es inválido.',
    'numeric'              => '<b>:attribute</b> debe ser numérico.',
    'present'              => 'El campo <b>:attribute</b> debe estar presente.',
    'regex'                => 'El formato de <b>:attribute</b> es inválido.',
    'required'             => 'El campo <b>:attribute</b> es obligatorio.',
    'required_if'          => 'El campo <b>:attribute</b> es obligatorio cuando :other es :value.',
    'required_unless'      => 'El campo <b>:attribute</b> es obligatorio a menos que :other esté en :values.',
    'required_with'        => 'El campo <b>:attribute</b> es obligatorio cuando :values está presente.',
    'required_with_all'    => 'El campo <b>:attribute</b> es obligatorio cuando :values está presente.',
    'required_without'     => 'El campo <b>:attribute</b> es obligatorio cuando :values no está presente.',
    'required_without_all' => 'El campo <b>:attribute</b> es obligatorio cuando ninguno de :values estén presentes.',
    'same'                 => '<b>:attribute</b> y :other deben coincidir.',
    'size'                 => [
        'numeric' => 'El tamaño de <b>:attribute</b> debe ser :size.',
        'file'    => 'El tamaño de <b>:attribute</b> debe ser :size kilobytes.',
        'string'  => '<b>:attribute</b> debe contener :size caracteres.',
        'array'   => '<b>:attribute</b> debe contener :size elementos.',
    ],
    'string'               => 'El campo <b>:attribute</b> debe ser una cadena de caracteres.',
    'timezone'             => 'El <b>:attribute</b> debe ser una zona válida.',
    'unique'               => '<b>:attribute</b> ya ha sido registrado.',
    'uploaded'             => 'Subir <b>:attribute</b> ha fallado.',
    'url'                  => 'El formato <b>:attribute</b> es inválido.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom'               => [
        'password' => [
            'min' => 'La <b>:attribute</b> debe contener más de :min caracteres',
        ],
        'email' => [
            'unique' => 'El <b>:attribute</b> ya ha sido registrado.',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes'           => [
        'name'                  => 'nombre',
        'username'              => 'usuario',
        'email'                 => 'correo electrónico',
        'first_name'            => 'nombre',
        'last_name'             => 'apellido',
        'password'              => 'contraseña',
        'password_confirmation' => 'confirmación de la contraseña',
        'city'                  => 'ciudad',
        'country'               => 'país',
        'address'               => 'dirección',
        'phone'                 => 'teléfono',
        'mobile'                => 'móvil',
        'age'                   => 'edad',
        'sex'                   => 'sexo',
        'gender'                => 'género',
        'year'                  => 'año',
        'month'                 => 'mes',
        'day'                   => 'día',
        'hour'                  => 'hora',
        'minute'                => 'minuto',
        'second'                => 'segundo',
        'title'                 => 'título',
        'content'               => 'contenido',
        'body'                  => 'contenido',
        'description'           => 'descripción',
        'excerpt'               => 'extracto',
        'date'                  => 'fecha',
        'time'                  => 'hora',
        'subject'               => 'asunto',
        'message'               => 'mensaje',
    ],

];