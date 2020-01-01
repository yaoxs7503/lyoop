<?php require_once('../../../private/initialize.php'); ?>
<?php include(SHARED_PATH .'/staff_header.php');?>
<?php
$subject_set=find_all_subjects();
// var_dump($subjects);
// $subjects=[
//   ['id'=>'1','position'=>'1','visible'=>'1','menu_name'=>'About Globe Bank'],
//   ['id'=>'2','position'=>'2','visible'=>'1','menu_name'=>'Consumer'],
//   ['id'=>'3','position'=>'3','visible'=>'1','menu_name'=>'Business']
// ];

?>

<?php $page_title='Subjects'; ?>
<div id="content">
  <div class="subjects listing">
    <h1>Subjects</h1>
    <div class="actions">
      <a href="new.php" class="action" >新建对象</a>
    </div>
    <div class="list">
      <table>
      <tr>
        <th>ID</th>
        <th>Position</th>
        <th>Visible</th>
        <th>Name</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
       <?php
while ($subject=mysqli_fetch_assoc($subject_set)): ?>
<tr>
  <td><?php echo  $subject['id']; ?></td>
  <td><?php echo  $subject['position']; ?></td>
  <td><?php echo  $subject['visible'] ==1 ? 'true': 'false'; ?></td>
  <td><?php echo  $subject['menu_name']; ?></td>
  <td><a href="show.php?id=<?php echo $subject['id'] ?>">查看</a></td>
  <td><a href="edit.php?id=<?php echo h(u($subject['id'])); ?>">编辑</a></td>
</tr>
<?php endwhile; ?> 
      </table>
  <?php
mysqli_free_result($subject_set);
?>
    </div>
  </div>
</div>
<?php include(SHARED_PATH .'/staff_footer.php');?>
<?php echo error_404() ?>
