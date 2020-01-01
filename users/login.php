<?php
session_start();

if(isset($_SESSION['loggedIN'])){
  header("Location:success.php");
}
if(isset($_POST['login'])){
  $connection=new mysqli('localhost','root','','search');
  $email=$connection->real_escape_string($_POST['emailPHP']);
  // $email=$_POST['emailPHP'];
  $password=md5($connection->real_escape_string($_POST['passwordPHP']));
  // var_dump($password);
  $data=$connection->query("SELECT id FROM users WHERE email='$email' AND password='$password'");
  if($data->num_rows>0){
    $_SESSION['loggedIN']='1';
    $_SESSION['email']=$email;
    exit('<font color="green">登录成功</font>');
    // header('Location: success.php');
    // exit();
  }else{
  // exit("用户和密码" .$email. "=". $password ."测试");
  exit('<font color="red">登录失败</font>');
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>

</head>
<body>
 <form action="login.php" method="POST">
 <input type="text" name="" id="email" placeholder="Email">
 <input type="password" name="" id="password">
 <input type="button" value="登录" id="login"> 
 </form> 
 <p id="response"></p>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="login.js"></script>
</html>