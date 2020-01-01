<?php require_once('../../../private/initialize.php'); ?>

<?php
$test=$_GET['test'] ?? '';

// if($test==404){
//   error_404();
//   exit();
// }elseif($test==500){
//   error_500();
//   exit();
// }elseif($test=='redirect'){
//   header("Location: index.php");
//   exit();
// }
// else{
//   echo "网页没有问题";
// }

switch ($test) {
  case '404':
    error_404();
    break;
  case '500':
    error_500();
  break;
  case 'redirect':
    header("Location: 'index.php'");
  break;
  default:
  echo "网页正常";
    break;
}


?>
<div class="subject new">
<h1>创造</h1>
<form action="create.php" method="post">
<dl></dl>
  <dt>目录名字</dt>
  <dd><input type="text" name="menu_name"></dd>
  <dd>
  <select name="position" id="">
  <option value="1">1</option>
  </select>
  </dd>
</dl>
<dl>
<dt>Visible</dt>
<dd>
<input type="hidden" name="visible" value="0"> 
<input type="checkbox" name="visible" value="1"> 
</dd>
</dl>
<div id="operations">
<input type="submit" value="创建对象">
</div>
</form>
</div>
