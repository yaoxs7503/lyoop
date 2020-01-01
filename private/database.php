<?php
require_once('db_credentials.php');

function db_connect(){
  $connection=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
  confirm_db_connect();
  return $connection;
}

function db_disconnect($connection){
  if(isset($connection)){
    mysqli_close($connection);
  }
}

function  confirm_db_connect(){
  if(mysqli_connect_errno()){
    $msg="数据库连接失败";
    $msg.=mysqli_connect_error();
    $msg.="( 连接失败的号码是".mysqli_connect_errno().")";
    exit($msg);
  }
}
function confirm_result_set($result_set){
  if(!$result_set){
    exit("数据库查询失败");
  }
}

?>