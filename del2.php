<?php
require_once "includes/functions.php";

if($_SERVER['REQUEST_METHOD']==='POST'){

  $res = empty($_POST['number'])?'':escape($_POST['number']);

  if(!empty($res)){
  require "includes/db_connect.php";
  $sql2 = "
  DELETE FROM
  tasks
  WHERE task_id=$res";

   if($conn->query($sql2)===true){
    header('location: index.php');

  }else{
    die('you can not delete that task');
  }

//var_dump($res);
}

}
