<?php
require_once 'config.php';
$output='';
if(isset($_POST['query'])){
  $search=$_POST['query'];
  $stmt=$db->prepare("SELECT * FROM live_search WHERE first_name LIKE CONCAT('%',?,'%') OR last_name LIKE CONCAT('%',?,'%')");
  $stmt->bind_param("ss",$search,$search);
}
else{
  echo "查询失败";
  $stmt=$db->prepare("SELECT * FROM live_search");
}
$stmt->execute();
$result=$stmt->get_result();

if($result->num_rows>0){
  var_dump($result);
  $output="
<thead>
           <tr>
             <th>#</th>
             <th>First Name</th>
             <th>Last Name</th>
             <th>Email</th>
             <th>Gender</th>
           </tr>
         </thead>
         <tbody>
  ";
 while($row=$result->fetch_assoc()){
           $output.="<tr>
          <td>".$row['id']."</td>
          <td>".$row['first_name']."</td>
          <td>".$row['last_name']."</td>
          <td>".$row['email']."</td>
          <td>".$row['gender']."</td>
           </tr>";
}
$output.="</tbody>";
echo $output;
}else{
  $stmt=$db->prepare("SELECT * FROM live_search");
  // echo "<h3>没有记录找得到</h3>";
}
?>