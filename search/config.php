<?php
  function connection(){
    $conn=new mysqli("localhost","root","","search");
    if ($conn->connect_error) {
        die("连接失败". $conn->connect_error);
    }else{
      // echo "连接成功";
    }
    return $conn;
  }
  $db=connection();
  function fetch_all(){
    global $db;
    $stmt=$db->prepare("SELECT * FROM live_search");
    $stmt->execute();
    $result=$stmt->get_result();
    // $row=$result->fetch_assoc();
    return $result;
  }
  

?>