<?php require_once('../../../private/initialize.php'); ?>
<?php

// $id=$_GET['id'];
$id=$_GET['id'] ??  '1';
$subject=find_subject_by_id($id);

$name=$_GET['name'] ??  'null';
// echo h($id);

?>

<a href="show.php?name=<?php echo u('John Doe'); ?>">Link</a><br/>
<?php echo urldecode($name)?>
<a href="show.php?company=<?php echo u('Widget&More'); ?>">Link</a><br/>
<div class="subject show">
  <dl>
  <dt>ID号</dt>
  <dd><?php echo h($subject['id']); ?>
</dd>
</dl>
<dl>
  <dt>目录名字</dt>
  <dd><?php echo h($subject['menu_name']) ?></dd>
</dl>
<dl>
  <dt>位置</dt>
  <dd><?php echo h($subject['position']) ?></dd>
</dl>
<a href="show.php?query=<?php echo u('!#*?');?>">Link</a><br/>
</div>
