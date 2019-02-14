<?php
require_once "includes/functions.php";

if($_SERVER['REQUEST_METHOD']==='POST'){

$number = empty($_POST['number'])?'':escape($_POST['number']);
$aanpassing = empty($_POST['aanpassing'])?'':escape($_POST['aanpassing']);
$completed = empty($_POST['completed'])?'':escape($_POST['completed']);
$cc = 0;
var_dump($_POST);

if($completed === "completed"){
  $cc = 1;
}else $cc = 0;

}
var_dump($cc);
if(!empty($number)){
  require "includes/db_connect.php";
  $sql3 = "UPDATE tasks SET task = '$aanpassing', completed = '$cc'  WHERE task_id = '$number'";
  if($conn->query($sql3)===true){



    header('location: index.php');
  }else{
    die('er ging iets fout');
  }
}



 ?>
