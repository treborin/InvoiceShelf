<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'Se debe aceptar :attribute.',
    'active_url' => ':attribute no es una URL válida.',
    'after' => ':attribute debe ser una fecha posterior a :date.',
    'alpha' => ':attribute solo debe contener letras.',
    'alpha_dash' => ':attribute solo debe contener letras, números, y guiones.',
    'alpha_num' => 'The :attribute solo debe contener letras y números.',
    'array' => ':attribute debe ser un array.',
    'before' => ':attribute debe ser una fecha anterior a :date.',
    'between' => [
        'numeric' => ':attribute debe ser entre :min y :max.',
        'file' => ':attribute debe ser entre :min y :max kilobytes.',
        'string' => ':attribute debe ser entre :min y :max caracteres.',
        'array' => ':attribute debe tener entre :min y :max items.',
    ],
    'boolean' => 'El campo :attribute debe ser verdadero ofalso.',
    'confirmed' => 'La confirmación :attribute no coincide.',
    'date' => ':attribute no es una fecha válida.',
    'carbon_date_format' => ':attribute no tiene el formato :format.',
    'moment_date_format' => ':attribute no tiene el formato :format.',
    'different' => ':attribute y :other deben ser distintos.',
    'digits' => ':attribute debe tener :digits dígitos.',
    'digits_between' => ':attribute debe tener entre :min y :max dígitos.',
    'dimensions' => 'La imagen :attribute tiene dimensiones no válidas.',
    'distinct' => 'El campo :attribute tiene un valor duplicado.',
    'email' => ':attribute debe ser un email válido.',
    'exists' => 'Seleccin :attribute no inválida.',
    'file' => ':attribute debe ser un archivo.',
    'filled' => 'Campo :attribute obligatorio.',
    'image' => ':attribute debe ser ina imagen.',
    'in' => 'Selección :attribute no válida.',
    'in_array' => 'El campo :attribute no existe en :other.',
    'integer' => ':attribute debe ser un entero.',
    'ip' => ':attribute debe ser una dirección IP válida.',
    'json' => ':attribute debe ser una cadena JSON válida.',
    'max' => [
        'numeric' => ':attribute no puede ser mayor de :max.',
        'file' => ':attribute no puede ser mayor de than :max kilobytes.',
        'string' => ':attribute no puede contener más de :max caracteres.',
        'array' => ':attribute no puede tener más de :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'El archivo :attribute debe ser del tipo: :values.',
    'min' => [
        'numeric' => ':attribute debe ser al menos :min.',
        'file' => ':attribute debe ser de al menos :min kilobytes.',
        'string' => ':attribute debe tener al menos :min characters.',
        'array' => ':attribute debe contener al menos :min items.',
    ],
    'not_in' => 'Seleccionado :attribute no válido.',
    'numeric' => ':attribute debe ser un número.',
    'present' => 'El campo :attribute debe estar presente.',
    'regex' => 'El formato :attribute no inválido.',
    'required' => 'El campo :attribute es obligatorio.',
    'required_if' => 'El campo :attribute es obligatorio cuando :other es :value.',
    'required_unless' => 'El campo :attribute es obligatorio, a menos que :other esté en :values.',
    'required_with' => 'El campo :attribute es obligatorio cuando :values existe.',
    'required_with_all' => 'El campo :attribute es obligatorio cuando :values existe.',
    'required_without' => 'El campo :attribute es obligatorio cuando :values no existe.',
    'required_without_all' => 'El campo :attribute es es obligatorio cuando ninguno de estos :values existen.',
    'same' => ':attribute y :other deben coincidir.',
    'size' => [
        'numeric' => ':attribute debe ser :size.',
        'file' => ':attribute de be tener :size kilobytes.',
        'string' => ':attribute debe contener :size caracteres.',
        'array' => ':attribute debe contener :size items.',
    ],
    'string' => ':attribute debe ser una cadena.',
    'timezone' => 'La zona :attribute debe ser válida.',
    'unique' => ':attribute ya existe.',
    'uploaded' => 'Carga de :attribute fallida.',
    'url' => 'Formato de :attribute no válido.',

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

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
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

    'attributes' => [],

];
