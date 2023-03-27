<?php
require "includes/configuration.inc.php";
require "includes/db-configuration.inc.php";
?>

<!doctype html>
<html lang="en">

<head>
  <title>FAQs</title>
  <p></p>
  <?php require $meta; ?>
  <?php require $bootstrapCss; ?>
  <script src="scripts/script.js"></script>
  <link rel="stylesheet" href="assets/css/style.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" type="text/css" href="./assets/css/loading.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>

  <?php include "includes/loading/loading.php" ?>
  <?php require $navigation; ?>

  <!--Tutorial Cards-->
  <section class="tutor pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-center">
            <div class="info-padding ">
              <h4 class="title-card">What is called "Shell"? What are its responsibilities?</h4>
              <span class="subtitle"> <b></b> </span>
              <p>interface between the user & the system - execute commands and set user operations</p>
              <a class="btn btn-sm btn-outline-dark" href="./tutorials.php">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="info-padding ">
              <h4 class="title-card">Format of UNIX command syntax</h4>
              <span class="subtitle redTeam"> <b></b> </span>
              <p>Command (-argument) (-argument) (-argument) (filename)</p>
              <a class="btn btn-sm btn-outline-dark" href="./tutorials.php">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="info-padding ">
              <h4 class="title-card">rm in UNIX</h4>
              <span class="subtitle"> <b></b> </span>
              <p>"rm" - delete files, "-r" - delete directory & subdirectory, "*" - all entries</p>
              <a class="btn btn-sm btn-outline-dark" href="./tutorials.php">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="info-padding ">
              <h4 class="title-card">UNIX responsibilities</h4>
              <span class="subtitle"> <b></b> </span>
              <p>program execution, input/output redirection, filename, pipeline hook, environment control</p>
              <a class="btn btn-sm btn-outline-dark" href="./tutorials.php">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="info-padding ">
              <h4 class="title-card">Absolute path in UNIX</h4>
              <span class="subtitle"> <b></b> </span>
              <p>refers to the exact path as defined from root directory</p>
              <a class="btn btn-sm btn-outline-dark" href="./tutorials.php">learn more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="info-padding ">
              <h4 class="title-card">Related path in UNIX</h4>
              <span class="subtitle"> <b></b> </span>
              <p>refers to the path related to the current location.</p>
              <a class="btn btn-sm btn-outline-dark" href="./tutorials.php">learn more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Section-->

  <?php require $footer; ?>
  <?php require $bootstrapScripts; ?>

  <!-- loading javascript component -->
  <script src="./scripts/loading.js"></script>
</body>

</html>