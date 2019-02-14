<?php
require_once "includes/header.php";
require_once "includes/footer.php";
require_once "index.php";


 ?>
<form class="" action="edit2.php" method="post">
  <label class="col-3 offset-3 text-left mt-4" for="number">Welke taak wilt u aanpassen?</label>
  <input class="col-1 mt-4" type="number" name="number"  min="1" max="20">
  <label class="col-3 offset-3 text-left mt-4" for="aanpassing">Voer aanpassing in</label>
  <input class="col-3 mt-4" type="text" name="aanpassing" ><br>
  <input class="col-2 offset-3 mt-4" type="radio" name="completed" value="completed">completed
  <input class="col-2 mt-4" type="radio" name="completed" value="not_completed">not completed
  <br>
  <input class="col-2 offset-6 mt-4" type="submit" name="Aanpassen">
</form>

<?php

 ?>
