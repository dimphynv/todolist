
<?php
require_once "includes/header.php";
require_once "includes/footer.php";
require_once "includes/db_connect.php";
require_once "index.php";

 ?>
<form class="" action="del2.php" method="post">

 <label class="col-3 offset-3 text-left mt-4" for="number">Welke taak wilt u verwijderen?</label>
 <input class="col-1 mt-4" type="number" name="number"  min="1" max="20">
 <input type="submit" name="Verwijder">

</form>
