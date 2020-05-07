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

    'accepted' => 'Thuộc tính :attribute phải được chấp nhận.',
    'active_url' => 'Thuộc tính :attribute không phải là đường dẫn hợp lệ.',
    'after' => 'Thuộc tính :attribute phải là ngày sau ngày :date.',
    'after_or_equal' => 'Thuộc tính :attribute phải là ngày bằng hoặc sau ngày :date.',
    'alpha' => 'Thuộc tính :attribute chỉ chứa những ký tự.',
    'alpha_dash' => 'Thuộc tính :attribute chỉ chứa những ký tự, số, và dấu gạch ngang.',
    'alpha_num' => 'Thuộc tính :attribute chỉ chứa những ký tự và số,.',
    'array' => 'Thuộc tính :attribute phải là một mảng.',
    'before' => 'Thuộc tính :attribute phải là ngày trước ngày :date.',
    'before_or_equal' => 'Thuộc tính :attribute phải là ngày trước hoặc bằng ngày :date.',
    'between' => [
        'numeric' => 'Thuộc tính :attribute phải trong khoảng :min và :max.',
        'file' => 'Thuộc tính :attribute phải trong khoảng :min và :max kb.',
        'string' => 'Thuộc tính :attribute phải trong khoảng :min và :max ký tự.',
        'array' => 'Thuộc tính :attribute phải trong khoảng :min và :max phần tử.',
    ],
    'boolean' => 'Thuộc tính :attribute phải là true hoặc false.',
    'confirmed' => 'Thuộc tính :attribute xác nhận không trùng khớp.',
    'date' => 'Thuộc tính :attribute là ngày không hợp lệ.',
    'date_format' => 'Thuộc tính :attribute không đúng định dạng :format.',
    'different' => 'Thuộc tính :attribute và :other phải khác nhau.',
    'digits' => 'Thuộc tính :attribute phải có :digits chữ số.',
    'digits_between' => 'Thuộc tính :attribute phải nằm giữa :min và :max chữ số.',
    'dimensions' => 'Thuộc tính :attribute có kích thước hình ảnh không hợp lệ.',
    'distinct' => 'Thuộc tính :attribute có giá trị trùng lặp.',
    'email' => 'Thuộc tính :attribute phải la một địa chỉ email hợp lệ.',
    'exists' => 'Thuộc tính :attribute được chọn không hợp lệ.',
    'file' => 'Thuộc tính :attribute phải là một tập tin.',
    'filled' => 'Thuộc tính :attribute được yêu cầu.',
    'image' => 'Thuộc tính :attribute phải là một hình ảnh.',
    'in' => 'Thuộc tính :attribute được chọn không hợp lệ.',
    'in_array' => 'Thuộc tính :attribute không tồn tại trong :other.',
    'integer' => 'Thuộc tính :attribute phải là một số nguyên.',
    'ip' => 'Thuộc tính :attribute phải là một địa chỉ IP hợp lệ.',
    'json' => 'Thuộc tính :attribute phải là một chuỗi JSON hợp lệ.',
    'max' => [
        'numeric' => 'Thuộc tính :attribute không thể  lớn hơn :max.',
        'file' => 'Thuộc tính :attribute không thể  lớn hơn :max kb.',
        'string' => 'Thuộc tính :attribute không thể  lớn hơn :max ký tự.',
        'array' => 'Thuộc tính :attribute không thể  nhiều hơn :max phần tử.',
    ],
    'mimes' => 'Thuộc tính :attribute phải là một tập tin loại: :values.',
    'mimetypes' => 'Thuộc tính :attribute phải là một tập tin loại: :values.',
    'min' => [
        'numeric' => 'Thuộc tính :attribute ít nhất phải :min.',
        'file' => 'Thuộc tính :attribute ít nhất phải :min kb.',
        'string' => 'Thuộc tính :attribute ít nhất phải :min ký tự.',
        'array' => 'Thuộc tính :attribute ít nhất phải :min phần tử.',
    ],
    'not_in' => 'Thuộc tính :attribute được chọn không hợp lệ.',
    'numeric' => 'Thuộc tính :attribute phải là một số.',
    'present' => 'Thuộc tính :attribute phải tồn tại.',
    'regex' => 'Thuộc tính :attribute định dạng không hợp lệ.',
    'required' => 'Thuộc tính :attribute được yêu cầu.',
    'required_if' => 'Thuộc tính :attribute được yêu cầu khi :other là :value.',
    'required_unless' => 'Thuộc tính :attribute bắt buộc trừ khi :other trong :values.',
    'required_with' => 'Thuộc tính :attribute bắt buộc khi :values tồn tại.',
    'required_with_all' => 'Thuộc tính :attribute bắt buộc khi :values tồn tại.',
    'required_without' => 'Thuộc tính :attribute bắt buộc khi :values không tồn tại.',
    'required_without_all' => 'Thuộc tính :attribute bắt buộc khi không có :values tồn tại.',
    'same' => 'Thuộc tính :attribute và :other phải giống nhau.',
    'size' => [
        'numeric' => 'Thuộc tính :attribute phải :size.',
        'file' => 'Thuộc tính :attribute phải :size kb.',
        'string' => 'Thuộc tính :attribute phải :size ký tự.',
        'array' => 'Thuộc tính :attribute phải chứa :size phần tử.',
    ],
    'string' => 'Thuộc tính :attribute phải là một chuỗi.',
    'timezone' => 'Thuộc tính :attribute phải là một khu vực hợp lệ.',
    'unique' => 'Thuộc tính :attribute đã tồn tại.',
    'uploaded' => 'Thuộc tính :attribute không tải lên được.',
    'url' => 'Thuộc tính :attribute định dạng không hợp lệ.',

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

    'attributes' => [
        'hash_id_invalid' => 'ID không hợp lệ.'
    ],

];
