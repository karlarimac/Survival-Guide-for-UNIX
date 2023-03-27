<?php
require "includes/configuration.inc.php";
require "includes/db-configuration.inc.php";
?>
<!doctype html>
<html lang="en">

<head>
  <title>What is Unix?</title>
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

  <?php include "includes/loading/loading.php"?>
  <?php require $navigation; ?>
  <!--Header-->
  <header class=" text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto mb-5 pb-5 mt-5 pt-5 ">
          <h1 class="display-3"> What is Unix? </h1>
          <h3>Unix is a family of multitasking, multiuser computer operating systems that derive from the original AT&T Unix, whose development started in 1969 at the Bell Labs research center by Ken Thompson, Dennis Ritchie, and others.</h3>
          <h6 class="mt-3">Scroll to keep reading</h6>
        </div>
      </div>
    </div>
  </header>
  <!-- Unix Showcases -->
  <section class="showcase text-black bg-light intro-text">
    <div class="container-fluid p-0 ">
      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 imgBg showcase-img">
          <img src="assets/media/unix-green.png" class="showcase-image" alt="Unix">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text ">
          <h2 class="showcase-exp">UNIX systems</h2>
          <p class="lead mb-0 showcase-exp"> also have a graphical user interface (GUI) similar to Microsoft Windows which provides an easy to use environment. However, knowledge of UNIX is required for operations which aren't covered by a graphical program, or for when there is no windows interface available, for example, in a telnet session.</p>
        </div>
      </div>

      <div class="row no-gutters">
        <div class="col-lg-6 imgBg  showcase-img">
          <img src="assets/media/unix-line.jpeg" class="showcase-image" alt="Unix">
        </div>
        <div class="col-lg-6 my-auto showcase-text ">
          <h2 class="showcase-exp">Types of UNIX</h2>
          <p class="showcase-exp lead mb-0 ">
          There are many different versions of UNIX, although they share common similarities. The most popular varieties of UNIX are Sun Solaris, GNU/Linux, and MacOS X. Linux in its turn is packaged in a form known as a Linux distribution. There are several Linux distributions, both free and commercial.

ISU has a campus site subscription to Red Hat Enterprise Linux (RHEL), providing access for university-owned equipment as well as personal access to students, faculty, and staff. All our clusters are running RHEL. </p>
        </div>
      </div>

      <div class="row no-gutters">
        <div class="col-lg-6 order-lg-2 imgBg showcase-img">
          <img src="assets/media/unix-command.png" class="showcase-image" alt="Unix">
        </div>
        <div class="col-lg-6 order-lg-1 my-auto showcase-text ">
          <h2 class="showcase-exp  ">The UNIX operating system</h2>
          <p class="showcase-exp lead mb-0">The UNIX operating system is made up of three parts; the kernel, the shell and the programs.

.</p>
        </div>
      </div>

    </div>
  </section>
  <?php require $footerDark; ?>
  <?php require $bootstrapScripts; ?>

  <!-- loading javascript component -->
  <script src="./scripts/loading.js"></script>

</body>

</html>