<?php
require "includes/configuration.inc.php";
require "includes/db-configuration.inc.php";
?>

<!doctype html>
<html lang="en">

<head>
  <title>Groovy</title>
  <?php require $meta; ?>
  <?php require $bootstrapCss; ?>
  <script src="scripts/script.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="./assets/css/loading.css">
</head>

<body id="transformer" onclick="changeimage()">

  <?php include "includes/loading/loading.php" ?>

  <?php require $navigation; ?>



  <section class="testimonials text-center text-light">
    <div class="container">
      <h1 class="display-4 redTeam">Groovy</h1>
      <h2 class="mb-5 titleRev">What people are saying...</h2>
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="spacing mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3 picutreSizeReviews" src="img/real_fans/fan_3.jpg" alt="">
            <h5>Fiona G.</h5>
            <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="spacing mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3 picutreSizeReviews" src="img/real_fans/fan_2.jpg" alt="">
            <h5>John D.</h5>
            <p class="font-weight-light mb-0">
              THE BEST !!!! I really like it, I recommend it to everyone! ✨🔥 This application is PERFECT.
            </p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="spacing mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3 picutreSizeReviews" src="img/real_fans/willSmith.jpg" alt="">
            <h5>Will S.</h5>
            <p class="font-weight-light mb-0">
              The app is great. I can listen to songs without exiting the app and I can also listen when I turn off the phone.
              I'm just listening to a song and writing this
            </p>
          </div>
        </div>

        <div class="col-lg-4 mb-4">
          <div class="spacing mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3 picutreSizeReviews" src="img/real_fans/fan_4.jpg" alt="">
            <h5>Tom R.</h5>
            <p class="font-weight-light mb-0">Soooo cool very well, I'm really impress</p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="spacing mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3 picutreSizeReviews" src="img/real_fans/fan_5.jpg" alt="">
            <h5>Mahoney J.</h5>
            <p class="font-weight-light mb-0">
              Super practical application that is easy to use. All. 5.</p>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="spacing mx-auto mb-5 mb-lg-0">
            <img class="img-fluid rounded-circle mb-3 picutreSizeReviews" src="img/real_fans/fan_6.jpg" alt="">
            <h5>Donald P.</h5>
            <p class="font-weight-light mb-0">
              Incredibly good app! I am very happy with it! That's it from me.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php require $footer; ?>

  <?php require $bootstrapScripts; ?>

  <!-- loading javascript component -->
  <script src="./scripts/loading.js"></script>

</body>

</html>