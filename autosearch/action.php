<?php
$conn=new mysqli("localhost",'root','','search');
if($conn->connect_error){
  die("连接失败".$conn->connect_error);
}

if(isset($_POST['query'])){
  $inpText=$_POST['query'];
  $query="SELECT country,count(country) as numbers FROM php_auto WHERE country LIKE '%$inpText%'";
  $result=$conn->query($query);
  if($result->num_rows>0){
    while($row=$result->fetch_assoc()){
      echo "<a href='#' class='list-group-item list-group-item-action border-1'>".$row['country']. "<span class='float-right pull-right badge badge-dark'>".$row['numbers'] ."</span></a>"; 
      // echo "<p>你好</p>";
    }
  }
  else{
    echo "<p class='list-group-item border-1'>没有找到记录</p>";
  }
}

?>