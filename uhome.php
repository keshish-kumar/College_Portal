<?php
     session_start();
     $UN=$_SESSION['UN'];
     echo"Welcome".$UN;
   
   echo"<br><br><a href='edit.php'>Edit</a>";
echo"<br><br><a href='logout.php'>logout</a>";

?>