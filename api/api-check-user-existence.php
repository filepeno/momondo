<?php

function _check_user_existense($email)
{
    $existing_users = [
        [
            'user_email' => 'john@doe.com',
            'user_password' => 'pw123',
            'user_first_name' => 'John',
            'user_last_name' => 'Doe',
            'user_img' => '/assets/img/profile-images/filip-xs.jfif'
        ],
        [

            'user_email' => 'jane@doe.com',
            'user_password' => 'pw123',
            'user_first_name' => 'Jane',
            'user_last_name' => 'Doe',
            'user_img' => ''
        ],
        [

            'user_email' => 'a@a.com',
            'user_password' => 'password',
            'user_first_name' => 'Santiago',
            'user_last_name' => 'Superman',
            'user_img' => ''
        ]
    ];

    foreach ($existing_users as $user) {
        if ($user['user_email'] == $email) {
            return $user;
        }
    }
    http_response_code(400);
    echo json_encode([
        'info' => 'user does not exist',
        'email' => $email
    ]);
    exit();
}
