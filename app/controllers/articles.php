<?php

  if(isset($_GET['type'])) {
    include('./app/models/get-article-by-type.php');
  } else if (isset($_GET['search'])) {
	include('./app/models/article-search.php');
  } else {
    include('./app/models/articles.php');
  }

  include('./app/views/articles/index.php');

  $mysqli->close();

?>