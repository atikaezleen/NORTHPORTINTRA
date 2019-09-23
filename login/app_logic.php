<?php 

session_start();
$errors = [];
$user_id = "";
// connect to database
include('db.php');

// LOG USER IN


/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/
if (isset($_POST['reset-password'])) {
  $email = pg_escape_string($con, $_POST['email']);
  // ensure that the user exists on our system
  $query ="SELECT email FROM tbl_employee WHERE email='$email'";
  $results = pg_query($con, $query);

  if (empty($email)) {
    array_push($errors, "Your email is required");
  }else if(pg_num_rows($results) <= 0) {
    array_push($errors, "Sorry, no user exists on our system with that email");
  }
  // generate a unique random token of length 100
  $token = bin2hex(random_bytes(50));

  if (count($errors) == 0) {
    // store token in the password-reset database table against the user's email
    $sql = "INSERT INTO password_resets(email, token) VALUES ('$email', '$token')";
    $results = pg_query($con, $sql);

    // Send email to user with the token in a link they can click on
    $to = $email;
    $subject = "Reset your password on examplesite.com";
    $msg = "Hi there, click on this <a href=\"http://localhost/NORTHPORTINTRA/login_intra/new_pass.php?token=" . $token . "\">link</a> to reset your password on our site";
    $msg = wordwrap($msg,70);
    $headers = "From: fahim@northport.com.my";
    mail($to, $subject, $msg, $headers);
    header('location: http://localhost/NORTHPORTINTRA/login_intra/pending.php?email=' . $email);
  }
}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
  $new_pass = pg_escape_string($con, $_POST['new_pass']);
  $new_pass_c = pg_escape_string($con, $_POST['new_pass_c']);

  // Grab to token that came from the email link
  $token = $_SESSION['token'];
  if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
  if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
  if (count($errors) == 0) {
    // select email address of user from the password_reset table 
    $sql = "SELECT email FROM password_resets WHERE token='$token' LIMIT 1";
    $results = pg_query($con, $sql);
    $email = pg_fetch_assoc($results)['email'];

    if ($email) {
      $new_pass = md5($new_pass);
      $sql = "UPDATE tbl_employee SET password='$new_pass' WHERE email='$email'";
      $results = pg_query($con, $sql);
      header('location: index.php');
    }
  }
}
?>
