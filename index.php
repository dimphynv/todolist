
<?php //show all records database
//get all data from database
//include database connection

require "includes/db_connect.php";

$sql = "SELECT * FROM tasks";
$result = $conn->query($sql);

include_once "includes/header.php"?>

    <div class="container">
      <div class="row">

        <div class= "col-8 offset-2">
          <h1 class="text-center mt-4 mb-4 text-primary">To do list</h1>
          <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Task</th>
      <th scope="col">Completed</th>
      <th></th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    <?php if($result->num_rows>0): ?>
    <?php  while($row = $result->fetch_assoc()): ?>
      <tr>
        <th scope="row"><?php echo $row['task_id']; ?></th>
        <td><?php echo $row['task'] ?></td>
        <td><?php echo $row['completed'] ?></td>
        <td></td>
        <td></td>
      </tr>
    <?php endwhile; ?>
    <?php endif; ?>


  </tbody>
</table>

<a href="add.php">Voeg een nieuwe toe |</a>
<a href="del.php"> Verwijder een taak |</a>
<a href="edit.php"> Bewerk een taak </a>


        </div>
      </div>
    </div>
<?php
include_once "includes/footer.php";
