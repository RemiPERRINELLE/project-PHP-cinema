<?php
  include('./app/models/index.php');

  $sql = "SELECT * FROM movies WHERE title LIKE '%".$_GET['search']."%'
  OR description LIKE '%".$_GET['search']."%'";

  $results = $mysqli->query($sql);


?>