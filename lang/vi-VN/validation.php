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

    'accepted' => 'Trường :attribute phải được chấp nhận.',
    'active_url' => 'Trường :attribute không phải là URL hợp lệ.',
    'after' => 'Trường :attribute phải là ngày sau :date.',
    'after_or_equal' => 'Trường :attribute phải là ngày sau hoặc bằng :date.',
    'alpha' => 'Trường :attribute chỉ được chứa chữ cái.',
    'alpha_dash' => 'Trường :attribute chỉ được chứa chữ cái, số và dấu gạch ngang.',
    'alpha_num' => 'Trường :attribute chỉ được chứa chữ cái và số.',
    'array' => 'Trường :attribute phải là một mảng.',
    'before' => 'Trường :attribute phải là ngày trước :date.',
    'before_or_equal' => 'Trường :attribute phải là ngày trước hoặc bằng :date.',
    'between' => [
        'numeric' => 'Trường :attribute phải nằm trong khoảng từ :min đến :max.',
        'file' => 'Trường :attribute phải có kích thước từ :min đến :max kilobyte.',
        'string' => 'Trường :attribute phải có từ :min đến :max ký tự.',
        'array' => 'Trường :attribute phải có từ :min đến :max phần tử.',
    ],

    'confirmed' => 'Xác nhận trường :attribute không khớp.',
    'date' => 'Trường :attribute không phải là ngày hợp lệ.',
    'date_format' => 'Trường :attribute không khớp với định dạng :format.',
    'different' => 'Trường :attribute và :other phải khác nhau.',
    'digits' => 'Trường :attribute phải có :digits chữ số.',
    'digits_between' => 'Trường :attribute phải có từ :min đến :max chữ số.',
    'dimensions' => 'Trường :attribute có kích thước hình ảnh không hợp lệ.',

    'email' => 'Trường :attribute phải là địa chỉ email hợp lệ.',

    'file' => 'Trường :attribute phải là một tệp.',
    'filled' => 'Trường :attribute là bắt buộc.',
    'image' => 'Trường :attribute phải là một hình ảnh.',

    'in_array' => 'Trường :attribute không tồn tại trong :other.',
    'integer' => 'Trường :attribute phải là số nguyên.',
    'ip' => 'Trường :attribute phải là địa chỉ IP hợp lệ.',
    'json' => 'Trường :attribute phải là chuỗi JSON hợp lệ.',
    'max' => [
        'numeric' => 'Trường :attribute không được lớn hơn :max.',
        'file' => 'Trường :attribute không được lớn hơn :max kilobyte.',
        'string' => 'Trường :attribute không được dài hơn :max ký tự.',
        'array' => 'Trường :attribute không được có nhiều hơn :max phần tử.',
    ],
    'mimes' => 'Trường :attribute phải là tệp có định dạng: :values.',
    'mimetypes' => 'Trường :attribute phải là tệp có định dạng: :values.',
    'min' => [
        'numeric' => 'Trường :attribute phải ít nhất là :min.',
        'file' => 'Trường :attribute phải ít nhất :min kilobyte.',
        'string' => 'Trường :attribute phải ít nhất :min ký tự.',
        'array' => 'Trường :attribute phải có ít nhất :min phần tử.',
    ],

    'numeric' => 'Trường :attribute phải là số.',

    'regex' => 'Định dạng trường :attribute không hợp lệ.',

    'required_with_all' => 'Trường :attribute là bắt buộc khi :values có mặt.',

    'same' => 'Trường :attribute và :other phải khớp nhau.',
    'size' => [
        'numeric' => 'Trường :attribute phải là :size.',
        'file' => 'Trường :attribute phải có kích thước :size kilobyte.',
        'string' => 'Trường :attribute phải có :size ký tự.',
        'array' => 'Trường :attribute phải chứa :size phần tử.',
    ],
    'string' => 'Trường :attribute phải là chuỗi ký tự.',
    'timezone' => 'Trường :attribute phải là múi giờ hợp lệ.',

    'url' => 'Định dạng trường :attribute không hợp lệ.',

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

    // Internal validation logic for Panel
    'internal' => [
        'variable_value' => 'Biến :env',
        'invalid_password' => 'Mật khẩu được cung cấp không hợp lệ cho tài khoản này.',
    ],
];
