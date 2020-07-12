<?php
  include('./app/models/index.php');

  $sql = "SELECT * FROM movies WHERE type = ".$_GET['type'];

  $results = $mysqli->query($sql);


?>