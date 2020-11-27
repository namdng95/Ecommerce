<?php

return [
    'attribute' => [
        'username' => 'Tên người dùng',
        'email' => 'Email',
        'password' => 'Mật khẩu',
        're_password' => 'Nhập lại mật khẩu',
        'fullname' => 'Tên đầy đủ',
        'birthday' => 'Ngày sinh',
        'phone' => 'Số điện thoại',
        'facebook' => 'Facebook',
        'avatar' => 'Ảnh đại diện',
    ],
    'date'  => ':attribute không phải là ngày hợp lệ.',
    'email'  => ':attribute phải là địa chỉ email hợp lệ.',
    'image'  => ':attribute phải là một hình ảnh.',
    'max'  => [
        'numeric'  => ':attribute không được lớn hơn :max.',
        'string'  => ':attribute không được lớn hơn :max ký tự.',
    ],
    'min'  => [
        'numeric'  => ':attribute không được nhỏ hơn :max.',
        'string'  => ':attribute không được nhỏ hơn :max ký tự.',
    ],
    'numeric'  => ':attribute phải là một số.',
    'regex'  => ':attribute định dạng không hợp lệ.',
    'required'  => ':attribute là trường bắt buộc.',
    'same'  => ':attribute và :other phải được trùng khớp.',
    'string'  => ':attribute phải là một chuỗi.',
    'unique'  => ':attribute đã được sử dụng..',
];
