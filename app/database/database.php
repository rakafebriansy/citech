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

// sign up
if (isset($_POST['simpan'])) {
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = registerUser($conn, $username, $email, $password);

  if ($result) {
      // echo "Registrasi berhasil. Anda dapat masuk sekarang.";
      header("Location: ../views/login/index.php");
      exit();
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


// $email = "";
// $password = "";
// $err = "";
// $sukses = "";

// if(isset($_POST['simpan'])){
//   $email = $_POST['email'];
//   $password = $_POST['password'];
//   $konfirmasi_password = $_POST['konfirmasi_password'];

//   if($email == '' or $password == '' or $konfirmasi_password == ''){
//     $err .= "<li>Silahkan masukkan semua isian.</li>";
//   }

//   if($email != ''){
//     $sql1 = "SELECT email_address FROM account WHERE email_address = '$email";
//     $q1 = mysqli_query($conn, $sql1);
//     $n1 = mysqli_num_rows($q1);
//     if($n1 > 0){
//       $err .= "<li>Email yang anda masukkan sudah terdaftar</li>";
//     }

//     if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
//       $err .= "<li>Email yang anda masukkan tidak valid</li>";
//     }
//   }

//   if($password != $konfirmasi_password){
//     $err .= "</li>Not Matched</li>";
//   }

//   if(empty($err)){

//     $sql1 = "INSERT INTO account(email_address,password) VALUES('$email','$password')";
//     $q1 = mysqli_query($conn, $sql1);
//     if($q1){
//       $sukses = "Successfull";
//     }
//   }
// }

?>