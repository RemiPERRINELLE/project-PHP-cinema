<?php

  $row = $results->fetch_assoc();
  $date = date("d F Y", strtotime($row['date']));

?>


<div class="row mt-3">
  <div class="col">
    <h1><?php echo $row['title']; ?></h1>
  </div>
</div>




<!-- Movies -->
<div class="row mt-3">


  <!-- Affiche Movies -->
  <div class="col-3">
    <img width="100%" src="<?php echo $row['image']; ?>" class="affiche" alt="image">
  </div>


  <!-- Infos Movies -->
  <div class="col-9">
    <ul class="list-group">
      <li class="list-group-item active"><?php echo $row['title']; ?></li>
      <li class="list-group-item">Date de sortie : <?php echo $date; ?></li>
      <li class="list-group-item">Type : <?php echo $row['type']; ?></li>
    </ul>
  </div>


  <!-- Infos Movies -->
  <div class="row">
    <div class="col">
      <h2 class="mt-3 mb-3">Synopsis</h2>
      <p><?php echo $row['description']; ?></p>
    </div>
  </div>



</div>





<!-- Trailer -->
<div class="row mt-3 mb-3">
  <h2>Trailer</h2>
  <div class="embed-responsive embed-responsive-16by9">
    <iframe class="embed-responsive-item" width="100%" src="<?php echo $row['trailer']; ?>?autoplay=1&controls=0"></iframe>
  </div>
</div>