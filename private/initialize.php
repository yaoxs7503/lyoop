<?php

ob_start();

define("PRIVATE_PATH",dirname(__FILE__));
// echo dirname(__FILE__);
define("PROJECT_PATH",dirname(PRIVATE_PATH));
// echo PROJECT_PATH;
define("PUBLIC_PATH",PROJECT_PATH . '/public');
define("SHARED_PATH",PRIVATE_PATH . '/shared');


$public_end=strpos($_SERVER['SCRIPT_NAME'],'/public')+7;
// var_dump($_SERVER['SCRIPT_NAME']);

// echo $public_end;
$doc_root=substr($_SERVER['SCRIPT_NAME'],0,$public_end);
define("WWW_ROOT",$doc_root);
// var_dump($doc_root);

require_once('functions.php');
require_once('database.php');
require_once('query_functions.php');
$db=db_connect();

// $database=db_connect();
?>