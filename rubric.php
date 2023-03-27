<?php
require "includes/configuration.inc.php";
require "includes/db-configuration.inc.php";
?>
<!doctype html>
<html lang="en">

<head>
  <title>Rubric</title>
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
  <!--Rubric-->
  <div class="container">
    <div class="row">
      <div class="jumbotron mb-3">
        <h1 class="display-4 rubric-text">PHP</h1>
        <p class="lead">
        PHP is used throughout the website in its separate "includes" folder which includes and/or requires all needed PHP files in the HTML document and/or page. We have arranged them in folders based on their grouping functionality; bootstrap, html, loading and navigation. Our main purpose for using PHP in this case was to reduce code repetition & gain better and faster control over certain components.
        </p>
        <hr class="my-2">
      </div>
      <div class="jumbotron mb-3">
        <h1 class="display-4 rubric-text">Javascript</h1>
        <p class="lead">Javascript was used in multiple occassions throughout the website in its separate "scripts" folder. The first set of javascript components was based on validating forms and scroll-appear function, whilst the loading screen icon component was used in an entire website to ensure the full content is loaded before displaying it to the user.
        </p>
        <hr class="my-2">
      </div>
      <div class="jumbotron mb-3">
        <h1 class="display-4 rubric-text">Content</h1>
        <p class="lead">We used a lot of pictures and tutorials. 
We wanted to create an easy-to-use website where can u easily navigate through content and find answers to your questions.
        </p>
        <hr class="my-2">
      </div>
      <div class="jumbotron mb-3">
        <h1 class="display-4 rubric-text">Navigation</h1>
        <p class="lead">Simple to use navigation is a must for every good website. We have simple and modern-looking navigation.
        </p>
        <hr class="my-4">
      </div>
      <div class="jumbotron mb-3">
        <h1 class="display-4 rubric-text">Organization</h1>
        <p class="lead">Our content is well organized. There is a simple introduction to our website and what we do. The main part is "UNIX TUTORIALS" and that will be used the most.</p>
        <hr class="my-4">
      </div>
      <div class="jumbotron mb-3">
        <h1 class="display-4 rubric-text">Design</h1>
        <p class="lead">The "UNIX survival guide" Website is a modern-looking website and is up to date with modern trends in design.
        </p>
        <hr class="my-4">
      </div>
      <div class="jumbotron mb-3">
        <h1 class="display-4 rubric-text">HTML/CSS</h1>
        <p class="lead">HTML/CSS,sql,php,javascript are technologyes that are used for this website..</p>
        <hr class="my-4">
      </div>
    </div>
  </div>

  <?php require $footer; ?>
  <?php require $bootstrapScripts; ?>

  <!-- loading javascript component -->
  <script src="./scripts/loading.js"></script>

</body>

</html>