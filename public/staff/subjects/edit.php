<?php require_once('../../../private/initialize.php'); ?>
<?php
$test=$_GET['test'] ?? '';
$id=$_GET['id'];
$menu_name='';
$position='';
$visible='';
$subject=find_subject_by_id($id);
if(!isset($_GET['id'])){
  redirect_to("index.php");
}
// insert_subject($menu_name,$position,$visible);
if (is_post_request()) {
    $subject=[];
    $subject['id']=$id;
    $subject['menu_name']=$_POST['menu_name'] ?? '';
    $subject['position']=$_POST['position'] ?? '';
    $subject['visible']=$_POST['visible'] ?? '';

    update_subject($subject,$id);
        // echo "参数<br />";
    // echo "目录名字:" .$menu_name ."<br />";
    // echo "地址" .$position ."<br/>";
    // echo "地位" .$visible ."<br/>";
}else{
}



?>
<div class="subject new">
<h1>编辑对象</h1>
<form action="edit.php?id=<?php echo h(u($id)); ?>" method="post">
<dl></dl>
  <dt>目录名字</dt>
  <dd><input type="text" name="menu_name" value="<?php echo h($subject['menu_name']); ?>"></dd>
  <dd>
  <select name="position" id="">
  <option value="1" <?php if($subject['position']=="1") {
      echo "selected";
  }?>>1</option>
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
<input type="submit" value="编辑对象">
</div>
</form>
</div>
