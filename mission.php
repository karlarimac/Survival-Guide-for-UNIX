<?php
require "includes/configuration.inc.php";
require "includes/db-configuration.inc.php";
?>
<!doctype html>
<html lang="en">

<head>
  <title>Our Mission</title>
  <?php require $meta; ?>
  <?php require $bootstrapCss; ?>
  <script src="scripts/script.js"></script>
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
  <header class=" text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto mb-5 pb-5 mt-5 pt-5 ">
          <h1 class="Display-4 main-title"> What is our Mission? </h1>
          <h4>Our mission as an IT group is to create A UNIX survival kit for beginners. Unix is hard to master computer operating systems. There is a lot to learn about it. With beginner-friendly tutorials and a lot of pictures, we will make someone's life a lot easier. </h4>
        </div>
      </div>
    </div>
  </header>
  <div class="container-fluid text-light text-center">
    <div class="row">
      <div class="col-sm-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-boxes" viewBox="0 0 16 16">
          <path d="M7.752.066a.5.5 0 0 1 .496 0l3.75 2.143a.5.5 0 0 1 .252.434v3.995l3.498 2A.5.5 0 0 1 16 9.07v4.286a.5.5 0 0 1-.252.434l-3.75 2.143a.5.5 0 0 1-.496 0l-3.502-2-3.502 2.001a.5.5 0 0 1-.496 0l-3.75-2.143A.5.5 0 0 1 0 13.357V9.071a.5.5 0 0 1 .252-.434L3.75 6.638V2.643a.5.5 0 0 1 .252-.434L7.752.066ZM4.25 7.504 1.508 9.071l2.742 1.567 2.742-1.567L4.25 7.504ZM7.5 9.933l-2.75 1.571v3.134l2.75-1.571V9.933Zm1 3.134 2.75 1.571v-3.134L8.5 9.933v3.134Zm.508-3.996 2.742 1.567 2.742-1.567-2.742-1.567-2.742 1.567Zm2.242-2.433V3.504L8.5 5.076V8.21l2.75-1.572ZM7.5 8.21V5.076L4.75 3.504v3.134L7.5 8.21ZM5.258 2.643 8 4.21l2.742-1.567L8 1.076 5.258 2.643ZM15 9.933l-2.75 1.571v3.134L15 13.067V9.933ZM3.75 14.638v-3.134L1 9.933v3.134l2.75 1.571Z" />
        </svg>
        <h4 class="mt-3">Tutorials</h4>
        <p>Good Tutorials</p>
      </div>
      <div class="col-sm-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-bug-fill" viewBox="0 0 16 16">
          <path d="M4.978.855a.5.5 0 1 0-.956.29l.41 1.352A4.985 4.985 0 0 0 3 6h10a4.985 4.985 0 0 0-1.432-3.503l.41-1.352a.5.5 0 1 0-.956-.29l-.291.956A4.978 4.978 0 0 0 8 1a4.979 4.979 0 0 0-2.731.811l-.29-.956z" />
          <path d="M13 6v1H8.5v8.975A5 5 0 0 0 13 11h.5a.5.5 0 0 1 .5.5v.5a.5.5 0 1 0 1 0v-.5a1.5 1.5 0 0 0-1.5-1.5H13V9h1.5a.5.5 0 0 0 0-1H13V7h.5A1.5 1.5 0 0 0 15 5.5V5a.5.5 0 0 0-1 0v.5a.5.5 0 0 1-.5.5H13zm-5.5 9.975V7H3V6h-.5a.5.5 0 0 1-.5-.5V5a.5.5 0 0 0-1 0v.5A1.5 1.5 0 0 0 2.5 7H3v1H1.5a.5.5 0 0 0 0 1H3v1h-.5A1.5 1.5 0 0 0 1 11.5v.5a.5.5 0 1 0 1 0v-.5a.5.5 0 0 1 .5-.5H3a5 5 0 0 0 4.5 4.975z" />
        </svg>
        <h4 class="mt-3">Bugs</h4>
        <p>Bug fixes</p>
      </div>
      <div class="col-sm-4">
        <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-cpu-fill" viewBox="0 0 16 16">
          <path d="M6.5 6a.5.5 0 0 0-.5.5v3a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-3a.5.5 0 0 0-.5-.5h-3z" />
          <path d="M5.5.5a.5.5 0 0 0-1 0V2A2.5 2.5 0 0 0 2 4.5H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2v1H.5a.5.5 0 0 0 0 1H2A2.5 2.5 0 0 0 4.5 14v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14h1v1.5a.5.5 0 0 0 1 0V14a2.5 2.5 0 0 0 2.5-2.5h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14v-1h1.5a.5.5 0 0 0 0-1H14A2.5 2.5 0 0 0 11.5 2V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5a.5.5 0 0 0-1 0V2h-1V.5zm1 4.5h3A1.5 1.5 0 0 1 11 6.5v3A1.5 1.5 0 0 1 9.5 11h-3A1.5 1.5 0 0 1 5 9.5v-3A1.5 1.5 0 0 1 6.5 5z" />
        </svg>
        <h4 class="mt-3">Technology </h4>
        <p>Used a lot</p>
      </div>
    </div>
    <br><br>
  </div>
  <?php require $footer; ?>
  <?php require $bootstrapScripts; ?>

  <!-- loading javascript component -->
  <script src="./scripts/loading.js"></script>

</body>

</html>