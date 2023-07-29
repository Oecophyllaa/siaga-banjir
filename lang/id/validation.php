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

    'accepted'             => 'Isian :attribute harus diterima.',
    'accepted_if'          => 'Isian :attribute harus diterima ketika :other bernilai :value.',
    'active_url'           => 'Isian :attribute bukan URL yang sah.',
    'after'                => 'Isian :attribute harus tanggal setelah :date.',
    'after_or_equal'       => 'Isian :attribute harus tanggal sesudah atau sama dengan :date.',
    'alpha'                => 'Isian :attribute hanya boleh berisi huruf.',
    'alpha_dash'           => 'Isian :attribute hanya boleh berisi huruf, angka, dan strip.',
    'alpha_num'            => 'Isian :attribute hanya boleh berisi huruf dan angka.',
    'array'                => 'Isian :attribute harus berupa sebuah array.',
    'ascii'                => 'Isian :attribute hanya boleh berisi karakter dan simbol alfanumerik.',
    'before'               => 'Isian :attribute harus tanggal sebelum :date.',
    'before_or_equal'      => 'Isian :attribute harus tanggal sebelum atau sama dengan :date.',
    'between'              => [
        'numeric' => 'Isian :attribute harus antara :min dan :max.',
        'file'    => 'Isian :attribute harus antara :min dan :max kilobytes.',
        'string'  => 'Isian :attribute harus antara :min dan :max karakter.',
        'array'   => 'Isian :attribute harus antara :min dan :max item.',
    ],
    'boolean'              => 'Isian :attribute harus berupa true atau false',
    'confirmed'            => 'Konfirmasi :attribute tidak cocok.',
    'current_password'     => 'Kata sandi salah.',
    'date'                 => 'Isian :attribute bukan tanggal yang valid.',
    'date_equals'          => 'Isian :attribute harus berupa tanggal yang sama dengan :date.',
    'date_format'          => 'Isian :attribute tidak cocok dengan format :format.',
    'decimal'              => 'Isian :attribute harus memiliki :decimal tempat desimal.',
    'declined'             => 'Isian :attribute harus ditolak.',
    'declined_if'          => 'Isian :attribute harus ditolak ketika :other bernilai :value.',
    'different'            => 'Isian :attribute dan :other harus berbeda.',
    'digits'               => 'Isian :attribute harus berupa angka :digits.',
    'digits_between'       => 'Isian :attribute harus antara angka :min dan :max.',
    'dimensions'           => 'Isian :attribute harus merupakan dimensi gambar yang sah.',
    'distinct'             => 'Isian :attribute memiliki nilai yang duplikat.',
    'doesnt_end_with'      => 'Isian :attribute tidak boleh diakhiri dengan salah satu dari yang berikut: :values.',
    'doesnt_start_with'    => 'Isian :attribute tidak boleh dimulai dengan salah satu dari yang berikut: :values.',
    'email'                => 'Isian :attribute harus berupa alamat surel yang valid.',
    'ends_with'            => 'Isian :attribute harus diakhiri dengan salah satu dari berikut ini: :values.',
    'enum'                 => 'Isian :attribute yang dipilih tidak valid.',
    'exists'               => 'Isian :attribute yang dipilih tidak valid.',
    'file'                 => 'Isian :attribute harus berupa file.',
    'filled'               => 'Isian :attribute wajib diisi.',
    'gt'                   => [
        'numeric' => 'Isian :attribute harus lebih besar dari :value.',
        'file'    => 'Isian :attribute harus lebih besar dari :value kilobytes.',
        'string'  => 'Isian :attribute harus lebih besar dari :value karakter.',
        'array'   => 'Isian :attribute harus lebih besar dari :value items.',
    ],
    'gte'                  => [
        'numeric' => 'Isian :attribute harus lebih besar dari atau sama dengan :value.',
        'file'    => 'Isian :attribute harus lebih besar dari atau sama dengan :value kilobytes.',
        'string'  => 'Isian :attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array'   => 'Isian :attribute harus memiliki :value item atau lebih.',
    ],
    'image'                => 'Isian :attribute harus berupa gambar.',
    'in'                   => 'Isian :attribute yang dipilih tidak valid.',
    'in_array'             => 'Isian :attribute tidak terdapat dalam :other.',
    'integer'              => 'Isian :attribute harus merupakan bilangan bulat.',
    'ip'                   => 'Isian :attribute harus berupa alamat IP yang valid.',
    'ipv4'                 => 'Isian :attribute harus berupa alamat IPv4.',
    'ipv6'                 => 'Isian :attribute harus berupa alamat IPv6.',
    'json'                 => 'Isian :attribute harus berupa JSON string yang valid.',
    'lowercase'            => 'Isian :attribute harus huruf kecil.',
    'lt'                   => [
        'numeric' => 'Isian :attribute harus lebih kecil dari :value.',
        'file'    => 'Isian :attribute harus lebih kecil dari :value kilobytes.',
        'string'  => 'Isian :attribute harus lebih kecil dari :value karakter.',
        'array'   => 'Isian :attribute harus memiliki kurang dari :value item.',
    ],
    'lte' => [
        'numeric' => 'Isian :attribute harus lebih kecil dari atau sama dengan :value.',
        'file'    => 'Isian :attribute harus lebih kecil dari atau sama dengan :value kilobytes.',
        'string'  => 'Isian :attribute harus lebih kecil dari atau sama dengan:value karakter.',
        'array'   => 'Isian :attribute tidak boleh lebih dari :value item.',
    ],
    'mac_address' => 'Isian :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array'   => 'Isian :attribute tidak boleh memiliki lebih dari :max item.',
        'file'    => 'Isian :attribute tidak boleh lebih besar dari :max kilobyte.',
        'numeric' => 'Isian :attribute tidak boleh lebih besar dari :max.',
        'string'  => 'Isian :attribute tidak boleh lebih besar dari :max karakter.',
    ],
    'max_digits'  => 'Isian :attribute tidak boleh lebih dari :max digit.',
    'mimes'       => 'Isian :attribute harus berupa file bertipe: :values.',
    'mimetypes'   => 'Isian :attribute harus berupa file bertipe: :values.',
    'min' => [
        'array'   => 'Isian :attribute harus memiliki setidaknya :min item.',
        'file'    => 'Isian :attribute minimal harus :min kilobyte.',
        'numeric' => 'Isian :attribute minimal harus :min.',
        'string'  => 'Isian :atribut harus setidaknya :min karakter.',
    ],
    'min_digits'       => 'Isian :atribut harus memiliki setidaknya :min digit.',
    'missing'          => 'Isian kolom :attribute harus hilang.',
    'missing_if'       => 'Isian kolom :attribute harus hilang ketika :other bernilai :value.',
    'missing_unless'   => 'Isian kolom :attribute harus hilang kecuali :other bernilai :value.',
    'missing_with'     => 'Isian kolom :attribute harus hilang ketika :values itu muncul.',
    'missing_with_all' => 'Isian kolom :attribute must be missing when :values itu muncul.',
    'multiple_of'      => 'Isian :attribute harus kelipatan dari :value.',
    'not_in'           => 'Isian :attribute yang dipilih tidak valid.',
    'not_regex'        => 'Format isian :attribute tidak valid.',
    'numeric'          => 'Isian :attribute harus berupa angka.',
    'password' => [
        'letters'       => 'Isian :attribute harus berisi setidaknya satu huruf.',
        'mixed'         => 'Isian :attribute harus berisi setidaknya satu huruf besar dan satu huruf kecil.',
        'numbers'       => 'Isian :attribute harus berisi setidaknya satu angka.',
        'symbols'       => 'Isian :attribute harus berisi setidaknya satu symbol.',
        'uncompromised' => ':attribute yang diberikan terlalu lemah. Ubah :attribute dengan yang lain.',
    ],
    'present'              => 'Isian kolom :attribute harus ada.',
    'prohibited'           => 'Isian kolom :attribute dilarang.',
    'prohibited_if'        => 'Isian kolom :attribute dilarang ketika :other bernilai :value.',
    'prohibited_unless'    => 'Isian kolom :attribute dilarang kecuali :other ada dalam :values.',
    'prohibits'            => 'Isian kolom :attribute melarang isian :other muncul.',
    'regex'                => 'Format isian :attribute tidak valid.',
    'required'             => 'Isian :attribute wajib diisi.',
    'required_array_keys'  => ':attribute harus berisi data untuk: :values.',
    'required_if'          => 'Isian :attribute wajib diisi ketika :other bernilai :value.',
    'required_if_accepted' => 'Isian :attribute wajib diisi ketika :other diterima.',
    'required_unless'      => 'Isian :attribute wajib diisi kecuali :other ada di :values.',
    'required_with'        => 'Isian :attribute wajib diisi ketika :values ada.',
    'required_with_all'    => 'Isian :attribute wajib diisi ketika :values ada.',
    'required_without'     => 'Isian :attribute wajib diisi ketika :values tidak ada.',
    'required_without_all' => 'Isian :attribute wajib diisi ketika tidak ada :nilai yang ada.',
    'same'                 => 'Isian :attribute dan :other harus cocok.',
    'size' => [
        'array'   => 'Isian :attribute harus berisi :size item.',
        'file'    => 'Isian :attribute harus :size kilobyte.',
        'numeric' => 'Isian :attribute harus :size.',
        'string'  => 'Isian :attribute harus :size karakter.',
    ],
    'starts_with' => 'Isian :attribute harus dimulai dengan salah satu dari yang berikut: :values.',
    'string'      => 'Isian :attribute harus berupa string.',
    'timezone'    => 'Isian :attribute harus berupa zona waktu yang valid.',
    'unique'      => 'Isian :attribute sudah diambil.',
    'uploaded'    => 'Isian :attribute gagal diunggah.',
    'uppercase'   => 'Isian :attribute harus huruf besar.',
    'url'         => 'Isian :attribute harus berupa URL yang valid.',
    'ulid'        => 'Isian :attribute harus berupa ULID yang valid.',
    'uuid'        => 'Isian :attribute harus berupa UUID yang valid.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
