<?php
function find_all_subjects(){
global $db; 
$sql="SELECT * FROM subjects ";
$sql.="ORDER BY position ASC";
$result=mysqli_query($db,$sql);
confirm_result_set($result);
return $result;
}

function find_subject_by_id($id){
  global $db;
  $sql="SELECT * FROM subjects ";
  $sql.="WHERE id='" . $id ."'";
  $result=mysqli_query($db,$sql);
  $subject=mysqli_fetch_assoc($result);
  mysqli_free_result($result);
  return $subject;
}

// function fetch_assoc($result_set){
//   while($subject=mysqli_fetch_assoc($result_set)){
//       echo $subject['id'];
//   }
//   return $subject;
// }

?>