<?php
require_once('../../../private/initialize.php');
    $menu_name=$_POST['menu_name'] ?? '';
    $position=$_POST['position'] ?? '';
    $visible=$_POST['visible'] ?? '';
insert_subject($menu_name,$position,$visible);
?>