<?php
//connect to db
//require "includes/db_connect.php";
//check if post is send
//check if name is entered
//connect to SQLiteDatabase
//push data in new row
//header(location: )
require_once "includes/functions.php";

if($_SERVER['REQUEST_METHOD']==='POST'){

$task = empty($_POST['task'])?'':escape($_POST['task']);

if(!empty($task)){
  require "includes/db_connect.php";
  $sql = "INSERT INTO tasks(task, completed)
  VALUES('$task', 0);
  ";
  if($conn->query($sql)===true){
    header('location: index.php');
  }else{
    die('oeps something went wrong');
  }
}




  //header('location: index.php');
}

 include_once "includes/header.php";
 ?>
<div class="container">
  <div class="row">
    <div class="col-8 offset-2">
      <h1 class="text-center">Add new task</h1>
<form  action="" method="post">
  <form>
  <div class="form-group">
    <label for="task">To do task</label>
    <input type="text" class="form-control" id="task" placeholder="Enter task" name='task'>

  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>





    </div>

  </div>

</div>


 <?php
 include_once "includes/footer.php";
