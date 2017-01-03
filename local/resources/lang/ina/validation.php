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

    'accepted'             => 'The :attribute must be accepted.',
    'active_url'           => 'The :attribute is not a valid URL.',
    'after'                => 'The :attribute must be a date after :date.',
    'alpha'                => 'The :attribute may only contain letters.',
    'alpha_dash'           => 'The :attribute may only contain letters, numbers, and dashes.',
    'alpha_num'            => 'The :attribute may only contain letters and numbers.',
    'array'                => 'The :attribute must be an array.',
    'before'               => 'The :attribute must be a date before :date.',
    'between'              => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file'    => 'The :attribute must be between :min and :max kilobytes.',
        'string'  => 'The :attribute must be between :min and :max characters.',
        'array'   => 'The :attribute must have between :min and :max items.',
    ],
    'boolean'              => 'The :attribute field must be true or false.',
    'confirmed'            => 'The :attribute confirmation does not match.',
    'date'                 => 'The :attribute is not a valid date.',
    'date_format'          => 'The :attribute does not match the format :format.',
    'different'            => 'The :attribute and :other must be different.',
    'digits'               => 'The :attribute must be :digits digits.',
    'digits_between'       => 'The :attribute must be between :min and :max digits.',
    'distinct'             => 'The :attribute field has a duplicate value.',
    'email'                => 'Kolom :attribute harus diisi dengan format email yang benar.',
    'exists'               => 'The selected :attribute is invalid.',
    'filled'               => 'The :attribute field is required.',
    'image'                => 'The :attribute must be an image.',
    'in'                   => 'The selected :attribute is invalid.',
    'in_array'             => 'The :attribute field does not exist in :other.',
    'integer'              => 'The :attribute must be an integer.',
    'ip'                   => 'The :attribute must be a valid IP address.',
    'json'                 => 'The :attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file'    => 'The :attribute may not be greater than :max kilobytes.',
        'string'  => 'The :attribute may not be greater than :max characters.',
        'array'   => 'The :attribute may not have more than :max items.',
    ],
    'mimes'                => 'The :attribute must be a file of type: :values.',
    'min'                  => [
        'numeric' => 'The :attribute must be at least :min.',
        'file'    => 'The :attribute must be at least :min kilobytes.',
        'string'  => 'The :attribute must be at least :min characters.',
        'array'   => 'The :attribute must have at least :min items.',
    ],
    'not_in'               => 'The selected :attribute is invalid.',
    'numeric'              => 'Kolom :attribute harus diisi dengan angka.',
    'present'              => 'The :attribute field must be present.',
    'regex'                => 'The :attribute format is invalid.',
    'required'             => 'Kolom :attribute tidak boleh kosong.',
    'required_if'          => 'The :attribute field is required when :other is :value.',
    'required_unless'      => 'The :attribute field is required unless :other is in :values.',
    'required_with'        => 'The :attribute field is required when :values is present.',
    'required_with_all'    => 'The :attribute field is required when :values is present.',
    'required_without'     => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same'                 => 'The :attribute and :other must match.',
    'size'                 => [
        'numeric' => 'The :attribute must be :size.',
        'file'    => 'The :attribute must be :size kilobytes.',
        'string'  => 'The :attribute must be :size characters.',
        'array'   => 'The :attribute must contain :size items.',
    ],
    'string'               => 'The :attribute must be a string.',
    'timezone'             => 'The :attribute must be a valid zone.',
    'unique'               => 'The :attribute has already been taken.',
    'url'                  => 'The :attribute format is invalid.',

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
        'gambar' => [
            'required' => 'Gambar harus ada dan tidak boleh lebih dari 1 MB.',
            'image' => 'Kolom gambar hanya boleh berisi file gambar.',
            'max' => 'Kolom gambar tidak boleh lebih dari 1000 KB atau 1 MB.',
            'mimes' => 'Kolom gambar hanya boleh diisi file *.jpg, *.jpeg, *.bmp, *.png.'
        ],
        'id_kategori' => [
            'required' => 'Kategori harus dipilih.'
        ],
        'nama_warga' => [
            'required' => 'Kolom nama harus diisi.'
        ],
        'foto' => [
            'required' => 'Foto harus ada dan tidak boleh lebih dari 1 MB.',
            'image' => 'Kolom Foto hanya boleh berisi file gambar.',
            'max' => 'Kolom Foto tidak boleh lebih dari 1000 KB atau 1 MB.',
            'mimes' => 'Kolom Foto hanya boleh diisi file *.jpg, *.jpeg, *.bmp, *.png.'
        ],
        'sejarah' => [
            'required' => 'Sejarah tidak boleh kosong',
        ],
        'visi_misi' => [
            'required' => 'visi & misi tidak boleh kosong',
        ],
        'peta' => [
            'required' => 'Peta harus ada dan tidak boleh lebih dari 1 MB.',
            'image' => 'Kolom Peta hanya boleh berisi file gambar.',
            'max' => 'Kolom Peta tidak boleh lebih dari 1000 KB atau 1 MB.',
            'mimes' => 'Kolom Peta hanya boleh diisi file *.jpg, *.jpeg, *.bmp, *.png.'
        ],
        'geografis' => [
            'required' => 'Kondisi Geografis tidak boleh kosong',
        ],
        'ekonomi' => [
            'required' => 'Keadaan Ekonomi tidak boleh kosong',
        ],
        'prasarana' => [
            'required' => 'Prasarana dan Sarana tidak boleh kosong',
        ],
        'pemerintahan' => [
            'required' => 'Pemerintahan tidak boleh kosong',
        ],
        'id_dusun' => [
            'required' => 'Dusun harus dipilih.'
        ],
        'id_rw' => [
            'required' => 'RW harus dipilih.'
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
