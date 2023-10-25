<?php
session_start();

$conn = new mysqli('localhost', 'root', '', 'prokidz');

$errors = [];

function registerUser($conn, $username, $email, $password) {

  // $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

  $query = "INSERT INTO account (username, email_address, password) VALUES ('$username', '$email', '$password')";
  $result = mysqli_query($conn, $query);

  return $result;
}

function loginUser($conn, $email, $password) {
  $query = "SELECT * FROM account WHERE email_address = '$email'";
  $result = mysqli_query($conn, $query);

  if ($result && mysqli_num_rows($result) > 0) {
      $user = mysqli_fetch_assoc($result);
      // var_dump(password_verify($password, $user['password']));die;
      // if (password_verify($password, $user['password'])) {
      //     var_dump("true");die;
      //     return $user;
      // }
      // else {
      //   var_dump($password);die;
      // }
      if ($password == $user['password']) {
        return $user;
      }
  }
  return 0;
}

function sendmessage($conn, $email, $message) {
  $query = "INSERT INTO contact (email, message) VALUES ('$email', '$message')";
  $hasil = mysqli_query($conn, $query);

  return $hasil;
}

// sign up
if (isset($_POST['simpan'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = registerUser($conn, $username, $email, $password);

  if ($result) {
      echo "Registrasi berhasil. Anda dapat masuk sekarang.";
      // header("Location: ../views/login/index.php");
      // exit();
  } else {
      echo "Registrasi gagal. Silakan coba lagi.";
  }
}
    
// login
if (isset($_POST['auth'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $user = loginUser($conn, $email, $password);

    if ($user) {
        // echo "Selamat datang, " . $user['email_address'];
        $_SESSION["user"] = $user;
        header("Location: ../views/home/index.php");
    } else if ($user == 0) {
      $_SESSION["gagal"] = true;
      header("Location: ../views/login/index.php");
    }
}

// contact faq
if (isset($_POST['send1'])) {
  $email = $_POST['email'];
  $message = $_POST['message'];

  $hasil = sendmessage($conn, $email, $message);
    if ($hasil) {
        // echo "Berhasil.";
        header("Location: ../views/faq/index.php");
        // exit();
    } else {
      echo "gagal";
    }
}

// contact panduan
if (isset($_POST['send2'])) {
  $email = $_POST['email'];
  $message = $_POST['message'];

  $hasil = sendmessage($conn, $email, $message);
    if ($hasil) {
        // echo "Berhasil.";
        header("Location: ../views/panduan/index.php");
        // exit();
    } else {
      echo "gagal";
    }
}

?>