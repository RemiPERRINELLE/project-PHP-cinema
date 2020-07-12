<div class="col-4 mb-2">
  <div class="card">
    <img src="<?php echo $row['image']; ?>" class="card-img-top" alt="image">
    <div class="card-body">
      <h5 class="card-title"><?php echo $row['title']; ?></h5>
      <p class="card-text"><?php echo $row['description']; ?></p>
      <a href="http://localhost:8888/nextformationPHP/site-cine/movieland.php?id=<?php echo $row['id']; ?>" class="btn btn-dark btn-block">Voir</a>
    </div>
  </div>
</div>