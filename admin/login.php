<?php
include_once 'db.php';
if(isset($_POST['login'])){

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

$sql = "SELECT * FROM users WHERE username=:username";
$stmt = $db->prepare($sql);


//bind parameter ke query
$params = array(
    ":username" => $username
);

$stmt->execute($params);

$user = $stmt->fetch(PDO::FETCH_ASSOC);

// jika user terdaftar
if($user){
    // verifikasi password
    if(password_verify($password, $user["password"])){
        // buat Session
        session_start();
        $_SESSION["user"] = $user;
        // login sukses, alihkan ke halaman timeline
        header("Location: list.php");
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>Login CRUD Berita</title>
<style> 
h3, body {
    font-family: Arial, Helvetica, sans-serif;
    background-color:#E6E6FA;
    }

form {
    padding : 50px 20px;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid DodgerBlue;
    background-color:#E6E6FA;
}

input[type=text]:focus, input[type=password]:focus {
  border-bottom: 2px solid LightSteelBlue;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

input[type=submit]:hover {
  opacity: 0.8;
}

.container {
  padding: 50px 400px;
  text-align: center;
}
</style>
</head>
<body>
<div class="container">
<h3>Login Disini</h3>
<form action="" method="post">
<input type="text" name="username" placeholder="Username">
<br><br>
<input type="password" name="password" placeholder="Password">
<br><br>
<input type="submit" value="login" name="login">
</form>
</div>
</body>
</html>