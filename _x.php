<?php
define('_USER_FIRST_NAME_MIN_LEN', 1);
define('_USER_FIRST_NAME_MAX_LEN', 10);
define('_USER_LAST_NAME_MIN_LEN', 1);
define('_USER_LAST_NAME_MAX_LEN', 15);

define('_REGEX_STRING', '/^[a-zA-Z]+$/');

define('_REGEX_EMAIL', '/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/');

define('_USER_PASSWORD_MIN_LEN', 5);
define('_USER_PASSWORD_MAX_LEN', 10);



// ##############################
function _validate_user_first_name()
{
  $error_message = 'First name has to be min ' . _USER_FIRST_NAME_MIN_LEN . ' max ' . _USER_FIRST_NAME_MAX_LEN . ' characters';
  if (!isset($_POST['user_first_name'])) {
    _respond($error_message, 400);
  }
  $_POST['user_first_name'] = trim($_POST['user_first_name']);
  if (!preg_match(_REGEX_STRING, $_POST['user_first_name'])) {
    _respond($error_message, 400);
  }
  if (strlen($_POST['user_first_name']) < _USER_FIRST_NAME_MIN_LEN) {
    _respond($error_message, 400);
  }
  if (strlen($_POST['user_first_name']) > _USER_FIRST_NAME_MAX_LEN) {
    _respond($error_message, 400);
  }
  return $_POST['user_first_name'];
}

// ##############################
function _validate_user_last_name()
{
  $error_message = 'Last name has to be min ' . _USER_LAST_NAME_MIN_LEN . ' max ' . _USER_LAST_NAME_MAX_LEN . ' characters';
  if (!isset($_POST['user_last_name'])) {
    _respond($error_message, 400);
  }
  $_POST['user_last_name'] = trim($_POST['user_last_name']);
  if (strlen($_POST['user_last_name']) < _USER_LAST_NAME_MIN_LEN) {
    _respond($error_message, 400);
  }
  if (strlen($_POST['user_last_name']) > _USER_LAST_NAME_MAX_LEN) {
    _respond($error_message, 400);
  }
  return $_POST['user_last_name'];
}

// ##############################
function _validate_email()
{
  $error_message = 'Email missing or invalid';
  if (!isset($_POST['user_email'])) {
    _respond($error_message, 400);
  }
  $email = trim($_POST['user_email']);
  if (!preg_match(_REGEX_EMAIL, $email)) {
    _respond($error_message, 400);
  }
  return $_POST['user_email'];
}

// ##############################
function _validate_user_password()
{
  $error_message = 'password missing or invalid';
  if (!isset($_POST['user_password'])) {
    _respond($error_message, 400);
  }
  $_POST['user_password'] = trim($_POST['user_password']);
  if (strlen($_POST['user_password']) < _USER_PASSWORD_MIN_LEN) {
    _respond($error_message, 400);
  }
  if (strlen($_POST['user_password']) > _USER_PASSWORD_MAX_LEN) {
    _respond($error_message, 400);
  }
  return $_POST['user_password'];
}


// ##############################
function _validate_image()
{
  if ($_FILES['image']['error'] === UPLOAD_ERR_INI_SIZE) {
    _respond('image too large', 400);
  }

  $image_temp_name = $_FILES['image']['tmp_name']; // C:\xampp\tmp\php791.tmp || C:\xampp\tmp\php5245.tmp
  $target_dir = '/assets/img/profile-images';
  $target_file = $target_dir . basename($_FILES['image']['name']);
  $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION)); // just reads the extension of the file
  $image_mime = mime_content_type($_FILES['image']['tmp_name']); // reads the mime inside the file
  $accepted_image_formats = ['image/png', 'image/jpeg'];
  if (!in_array($image_mime, $accepted_image_formats)) {
    http_response_code(400);
    echo 'image not allowed';
    exit();
  }
  $random_image_name = bin2hex(random_bytes(5));
  switch ($image_mime) {
    case 'image/png':
      $random_image_name .= '.png';
      break;
    case 'image/jpeg':
      $random_image_name .= '.jpeg';
      break;
  }

  if (move_uploaded_file($_FILES['image']['tmp_name'], "{$_SERVER['DOCUMENT_ROOT']}{$target_dir}/{$random_image_name}")) {
    _respond('image uploaded', 200);
  }
}

// ##############################
function _respond($message = '',  $http_response_code = 200)
{
  header('Content-Type: application/json');
  http_response_code($http_response_code);
  $response = is_array($message) ? $message : ['info' => $message];
  echo json_encode($response);
  exit();
}
