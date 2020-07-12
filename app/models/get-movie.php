<?php
  include('./app/models/index.php');

  $sql = "SELECT * FROM movies WHERE id = ".$_GET['id'];

  $results = $mysqli->query($sql);


?>