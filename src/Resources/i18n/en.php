<?php declare(strict_types=1);

return [
    'and' => 'and',
    'or'  => 'or',

    'rule.default'                => ':attribute is not valid',
    'rule.accepted'               => ':attribute must be one of: :accepted',
    'rule.after'                  => ':attribute must be a date after :time',
    'rule.alpha'                  => ':attribute only allows alphabetic characters',
    'rule.alpha_dash'             => ':attribute only allows a-z, 0-9, _ and -',
    'rule.alpha_num'              => ':attribute only allows alphabetic and numeric characters',
    'rule.alpha_spaces'           => ':attribute may only contain alphabetic characters and spaces',
    'rule.array'                  => ':attribute must be an array',
    'rule.before'                 => ':attribute must be a date before :time.',
    'rule.between'                => ':attribute must be between :min and :max',
    'rule.boolean'                => ':attribute must be a boolean',
    'rule.date'                   => ':attribute is not valid date format',
    'rule.default_value'          => ':attribute default is :default',
    'rule.different'              => ':attribute must be different to :field',
    'rule.digits'                 => ':attribute must be numeric and must have an exact length of :length',
    'rule.digits_between'         => ':attribute be numeric and must have a length between :min and :max',
    'rule.email'                  => ':attribute is not a valid email address',
    'rule.exists'                 => ':attribute must match an existing record',
    'rule.extension'              => ':attribute must be a :allowed_extensions file',
    'rule.float'                  => ':attribute must be a floating point number',
    'rule.in'                     => ':attribute must be one of :allowed_values',
    'rule.integer'                => ':attribute must be integer',
    'rule.ip'                     => ':attribute must be a valid IP address',
    'rule.ipv4'                   => ':attribute must be a valid IPv4 address',
    'rule.ipv6'                   => ':attribute must be a valid IPv6 address',
    'rule.json'                   => ':attribute must be a valid JSON string',
    'rule.lowercase'              => ':attribute must be lowercase',
    'rule.max'                    => ':attribute maximum is :max',
    'rule.mimes'                  => ':attribute file type must be :allowed_types',
    'rule.min'                    => ':attribute minimum is :min',
    'rule.not_in'                 => ':attribute must not be one of :disallowed_values',
    'rule.numeric'                => ':attribute must be numeric',
    'rule.phone_number'           => ':attribute is not a valid E.164 phone number',
    'rule.present'                => ':attribute must be present',
    'rule.prohibited'             => ':attribute is not allowed',
    'rule.prohibited_if'          => ':attribute is not allowed if :field has value(s) :values',
    'rule.prohibited_unless'      => ':attribute is not allowed if :field does not have value(s) :values',
    'rule.regex'                  => ':attribute does not meet required format',
    'rule.rejected'               => ':attribute must be one of: :rejected',
    'rule.required'               => ':attribute is required',
    'rule.required_if'            => ':attribute is required if :field has a value of :values',
    'rule.required_unless'        => ':attribute is required if :fields has one of :values',
    'rule.required_with'          => ':attribute is required with :fields',
    'rule.required_with_all'      => ':attribute is required with all of :fields',
    'rule.required_without'       => ':attribute is required when :fields are empty',
    'rule.required_without_all'   => ':attribute is required when :fields are all empty',
    'rule.same'                   => ':attribute must be the same as :field',
    'rule.string'                 => ':attribute must be a string',
    'rule.unique'                 => ':attribute must be unique, :value already exists',
    'rule.uploaded_file'          => ':attribute is not a valid uploaded file',
    'rule.uploaded_file.min_size' => ':attribute file is too small, minimum size is :min_size',
    'rule.uploaded_file.max_size' => ':attribute file is too large, maximum size is :max_size',
    'rule.uploaded_file.type'     => ':attribute file type must be :allowed_types',
    'rule.uppercase'              => ':attribute must be uppercase',
    'rule.url'                    => ':attribute is not a valid URL',
    'rule.uuid'                   => ':attribute is not a valid UUID or is NIL',
];
