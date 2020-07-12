<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <title>My site news</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <!-- Header -->
    <?php include('./app/views/header.php'); ?>
    <!-- Nav -->
    <?php include('./app/views/navigation.php'); ?>
    <div class="container">
      <!-- Slider -->
      <?php include('./app/views/slider.php'); ?>
      <!-- Content -->
      <div class="row mt-3">
        <!-- Movies -->
        <div class="col-9">
          <!-- Content Articles -->
          <div class="mt-2 mb-2">
            <!-- Row Movies -->
            <?php include('./app/controllers/articles.php'); ?>
          </div>
        </div>
        <!-- Block right -->
        <div class="col-3">
          <!-- Login -->
          <div class="row">
            <div class="col">
               <h4>Sign in</h4>
            </div>
          </div>
          <!-- Publicity -->
          <?php include('./app/views/publicity.php'); ?>
        </div>
      </div>
    </div>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>