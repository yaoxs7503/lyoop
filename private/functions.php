<?php

function url_for($script_path){
  if($script_path[0]!='/'){
    $script_path="/". $script_path;
  }
  return WWW_ROOT . $script_path;
}
function u($string=""){
  return urlencode($string);
}

function h($string=""){
  return htmlspecialchars($string);
}
function error_404(){
header($_SERVER["SERVER_PROTOCOL"]. "404 Not Found");
exit();
}
function error_500(){
header($_SERVER["SERVER_PROTOCOL"]. "500 Internal Server Error");
exit();
}
function redirect_to($location){
  header("Location:" .$location);
  exit;
}
function is_post_request(){
  return $_SERVER['REQUEST_METHOD']=='POST';
}

function is_get_request(){
  return $_SERVER['REQUEST_METHOD']=='GET';
}

function insert_subject($menu_name, $position, $visible)
{
    if (is_post_request()) {
        global $db;
        $sql="INSERT INTO subjects ";
        $sql.="(menu_name,position,visible) ";
        $sql.="VALUES (";
        $sql.="'" . $menu_name ."',";
        $sql.="'" . $position ."',";
        $sql.="'" . $visible ."'";
        $sql.=")";
        $result=mysqli_query($db, $sql);
        if ($result) {
            // var_dump($result);
            $new_id=mysqli_insert_id($db);
            redirect_to('show.php?id='.$new_id);
        // redirect_to("create.php");
        } else {
            echo mysqli_error($db);
            db_disconnect($db);
            exit;
        }
        echo "Menu name: " .$menu_name . "<br />";
        echo "Position:" .$position ."<br />";
        echo "Visible" .$visible ."<br/>";
    }
}
function update_subject($subject,$id){
    global $db;
    $sql="UPDATE subjects SET ";
    $sql.="menu_name='". $subject['menu_name'] . "', ";
    $sql.="position='" . $subject['position'] ."', ";
    $sql.="visible='". $subject['visible'] ."' ";
    $sql.="WHERE id='" . $subject['id'] . "' ";
    $sql.="LIMIT 1";
    $result=mysqli_query($db,$sql);
    if($result){
      redirect_to('show.php?id='.$subject['id']);
    }else{
      var_dump($sql);
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
}

?>