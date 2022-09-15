<?php



function _check_user_existense($existing_users, $email)
{
    foreach ($existing_users as $user) {
        if ($user['user_email'] == $email) {
            return $user;
        }
    }
    http_response_code(400);
    echo json_encode(['info' => 'user does not exist']);
    exit();
}
