

<!doctype html>
<html lang="en">

<head>
  <title>Unix Survival Guide</title>
  <!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">  <script src="scripts/script.js"></script>
  <link rel="stylesheet" href="assets/css/style.css?v=1651545000">
  <link rel="stylesheet" type="text/css" href="./assets/css/loading.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
</head>

<body>

  <!-- loading -->
<div id="loading">
    <div class="loading-icon">
    </div>
</div>  <nav class="nes navbar navbar-expand-sm navbar-dark pt-5 mb-5">
  <div class="container">
    <a href="index.php" class="navbar-brand">UNIX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        
            <li class='nav-item  '>
              <a class='nav-link' href='mission.php'>Mission</a>
            </li>
          
            <li class='nav-item  '>
              <a class='nav-link' href='unix.php'>Unix</a>
            </li>
          
            <li class='nav-item  '>
              <a class='nav-link' href='tutorials.php'>Tutorials</a>
            </li>
          
            <li class='nav-item  '>
              <a class='nav-link' href='faqs.php'>FAQs</a>
            </li>
          
            <li class='nav-item  '>
              <a class='nav-link' href='rubric.php'>Rubric</a>
            </li>
          
            <li class='nav-item  '>
              <a class='nav-link' href='references.php'>References</a>
            </li>
          
            <li class='nav-item  '>
              <a class='nav-link' href='comments.php'>Comments</a>
            </li>
                </ul>
    </div>
  </div>
</nav>

  <header class="pt-5 mt-5">
    <div class="container h-100">
      <div class="row h-100">
        <div class="col-lg-7 ">
          <!--Hero Header-->
          <div class="header-content mx-auto">
            <h2 class="title display-4">Unix Survival Guide</h2>
            <p class="lead white">Simple and easy-to-use surivial guide for begginers.</p>
            <div>
              <a href="./unix.php" class="btn btn-light nav-btn  mt-2 pr-5 pl-5 pt-3 pb-3 mb-3">DOCUMENTATION</a>
              <a href="./tutorials.php" class="btn btn-primary nav-btn  mt-2 ml-4 pr-5 pl-5 pt-3 pb-3 mb-3 ">TUTORIALS</a>
            </div>
          </div>
        </div>
        <!--Hero Image-->
        <div class="col-lg-5 my-auto pb-5 ">
          <img src="assets/media/unix-gif.gif" class="unix-img img-fluid mb-5" alt="">
        </div>
      </div>
    </div>
  </header>
  <!--Section I: Unix-->
  <section id="about" class="about bg-light pb-5 pt-5">
    <div class="container">
      <div class="row content">
        <div class="col-lg-6">
          <h2>What is Unix?</h2>
          <img src="assets/media/unix-code.png" class="img-fluid pr-5 mr-5" alt="Unix code">
        </div>
        <div class="col-lg-6 pt-lg-5 mt-lg-5 intro-text ">
          <h3>Unix is a family of multitasking, multiuser computer operating systems</h3>
          <p>
           derive from the original AT&T Unix, whose development started in 1969 at the Bell Labs research center by Ken Thompson, Dennis Ritchie, and others.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Section II: Tutorials-->
  <section id="tutorial" class="tutorial text-center mb-5 mt-5">
    <div class="container " data-aos="fade-up">
      <div class="section-title pb-4 pt-4 ">
        <h2>UNIX Survival Guide & Workshop</h2>
        <p>With a lot of hands-on tutorials you will learn everything about UNIX. What are UNIX commands, how to use the terminal and how to create your projects with it.</p>
      </div>

      <!--Tutorial Cards -->
      <div class="d-flex justify-content-center blue mb-3">
        <div class="green" id="tutorial-one"></div>
      </div>
      <div class="d-flex justify-content-center blue mb-5">
        <div class="green" id="tutorial-two"></div>
      </div>
      <div class="row d-flex justify-content-center">
        <div class="col-lg-3 col-md-6">
          <div class="box p-2">
          <span class="ultimate">BEGINNER</span>
            <h3 class="one">UNIX</h3>
            <h4 class="two"> Commands</h4>
            <ul class="list">
              <li class="card-list">basic UNIX commands</li>
              <li class="card-list">shell script</li>
              <li class="card-list">filename & environment</li>
              <li class="card-list">directory & subdirectory</li>
            </ul>
            <div class="download">
              <a href="./faqs.php" class="btn try" id="errorContainer" onclick="freeGroovy()">See more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
          <div class="box p-2 ">
            <h3 class="one read">How-To-UNIX</h3>
            <h4 class="two"> How-To </h4>
            <ul class="list">
              <li class="card-list">use UNIX</li>
              <li class="card-list">UNIX environment</li>
              <li class="card-list">interact with UNIX</li>
              <li class="card-list">course & documentation</li>
            </ul>
            <div class="download">
              <a href="./unix.php" class="btn try" onclick="PremiumGroovy()">See more</a>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
          <div class="box p-2">
            <h3 class="one">FAQ</h3>
            <h4 class="two"> Contact us </h4>
            <ul class="list">
              <li class="card-list">learn more</li>
              <li class="card-list">problem-solving mindset</li>
              <li class="card-list">join UNIX survival guide</li>
              <li class="card-list">leave a comment!</li>
            </ul>
            <div class="download">
              <a href="./comments.php" class="btn try" onclick="PremiumGroovy()">See more</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Footer-->
  <footer class="bg-light text-center mt-4">
    <div class="container">
        <div class="row">
            <div class="pt-4 col-md-12 col-sm-12 col-xs-12">
                <div class=" text-center">
                    <p>&copy; Copyright <strong>The Group 2022</strong></p>
                    <p> <strong> Designed by The Group for UNIX</strong> </p>
                </div>

            </div>
        </div>
    </div>
</footer>  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- loading javascript component -->
  <script src="./scripts/loading.js"></script>

</body>

</html>