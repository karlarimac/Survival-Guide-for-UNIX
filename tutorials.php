<?php
require "includes/configuration.inc.php";
require "includes/db-configuration.inc.php";
?>

<?php

include "../../dbConnection.php";
if ($mysqli) {

  if (!empty($_POST['fName']) && !empty($_POST['eMail']) && !empty($_POST['lName'])) {

    $prepSql = "INSERT into tutorialMessage (first, second, last) values (?, ?, ?)";
    $stmt = $mysqli->prepare($prepSql);
    $stmt->bind_param("sss", $_POST['fName'], $_POST['eMail'] ,$_POST['lName']);
    $stmt->execute();
    $stmt->close();
  }

}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Tutorials</title>
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
  <!--Header-->
  <?php require $navigation; ?>
  <header class=" text-white text-center">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-12 mx-auto mb-2 pb-5 mt-2 pt-5 ">
          <div class="text-light text-center">
            <h2 class="display-2">Tutorials</h2>
            <p>Step by step and easy to learn tutorials to help you guide throughout your UNIX development cycle. Get hands-on experience with the usage of UNIX types & commands. Develop a learning mindset with the focus on problem-solving and how to interact the best with the UNIX environemnt.</p>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--Tutorial Cards-->
  <section class="tutor pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">

              <h4 class="title-card">Checking current position</h4>
              <span class="subtitle"> <b>Part I</b> </span>
              <p>Open the UNIX Terminal on your device either named as Terminal-Command Line Prompt. </p>
               <p>To first start navigating the UNIX system, it is best to know your current position, which is in this case your home directory. In other words, with this command we will print the current working directory. 
                To identify this position type <b>pwd</b>.
                This command is one of the most used commands, as it provides the user constant knowledge of current position.           
</p> 
 
 
 



 
 </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Changing our position</h4>
              <span class="subtitle"> <b>Part II</b> </span>
              <p>In order to change your current position to a different directory where you wish to create a new directory, is it achieved with the command <b>cd directoryName</b>.</p><p> You must choose a directory that already exists within the list presented in the previous step.
 
 Another way to identify the current directory (.) and the parent directory (..)
  
 If at any point you find youself lost, the quickest ways of return back to the home directory is to use one of the two commands, <b>cd or cd ~</b></p>
            </div>
          </div>
        </div>
        <section class="tutor pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Making directory /file</h4>
              <span class="subtitle"> <b>Part III</b> </span>
              <p>In order to create a new directory through the terminal it is necessary to use the command <b>mkdir directoryName</b>.</p>
              <p>

              In order to create a new file through the terminal it is necessary to use the command <b>touch fileName</b>. You can check if your directory/file has been created with the help of Tutorial III.
 </p>


            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Pathnames</h4>
              <span class="subtitle"> <b>Part IV</b> </span>
              <p>In order to apply commands on files/directories that are not within your current working directory, it is necessary to either change your position to the wanted directory/file or skip directly to wanted position using its full pathname.
              Full pathname cotnains the names of all directories/files by which you reach your its destination.
 </p>
            </div>
          </div>
        </div>
        <section class="tutor pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Copying files</h4>
              <span class="subtitle"> <b>Part V</b> </span>
              <p>When you want to create a copy of a file within the current working directory, the command is simple,<b>cp fileName1 fileName2</b>, where fileName1 represents a file that already currently exists within the working directory, and fileName2 represents the name you will assign the new copied file.</p>
 <p>
 When you want to copy a file from one directory to another, it is necessary to move position to make the directory where you want the file to be copied your current working directory.
 Then when in the wanted directory, use <b>cd fullPathName</b> to the file/directory that you want to copy.
 
 </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Moving files</h4>
              <span class="subtitle"> <b>Part VI</b> </span>
              <p>This action is self-explanatory, where a file will be moved, rather than creating a copy. </p><p>Here we are going to end up with only one file, but in a different position.</p>
 
 <p>In order to achieve this action, it is necessary to use a command <b>mv filename1 directory1</b>, where the filename1 represents the file that will be moved to directory1.</p><p> This is similar to the action many of us are used to called drag & drop, where we achive same,  but in this case with only one command line.</p>
            </div>
          </div>
        </div><section class="tutor pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Removing files/ directories</h4>
              <span class="subtitle"> <b>Part VII</b> </span>
              <p>To remove/delete files/directories, it is done using the command <b>rm fileDirectoryName</b>. This command will allow you to delete files or only empty directories.
 
 </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Displaying content of the file</h4>
              <span class="subtitle"> <b>Part VIII</b> </span>
              <p>In order to display the content of the file we can use <b>cat filename.type</b> Pay attention to which type of file you are asking to be read, as many cannot be read through the terminal.</p>
            </div>
          </div>
        </div><section class="tutor pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Changing access rights</h4>
              <span class="subtitle"> <b>Part IX</b> </span>
              <p>In cases where to have a need to change access rights to a certain file/ directory, this can be achieved with a simple command like <b>chmod go-rwx fileName</b>.</p><p> Now this follows the rule where:
                <br> u=user<br>
                g=group<br>
                o=other <br>
                a=all<br>
                which represents the audience side, whereas the action side has:
                <br> r=read <br>
                w=write <br>
                x=execute <br>
                +=add permission<br>
                -=remove permission<br>
                
 
 </p>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Changing access rights</h4>
              <span class="subtitle"> <b>IX.I</b> </span>
              <p>Now depending on your need, the previously stated command can be altered in where you first define your audience, upon which the action will be made on.</p><p> Then follows the action either adding/removing permission.</p><p> Lastly, you define the action that will be set upon this audience.  </p>
              <p>A command like this for <b>chmod u-r fileNameUpToYourChoice</b>, which in translation defines that our user has been taken away the permission to read our file under name fileNameUpToYourChoice. </p>
              <br>
              <br>
              <br>
            </div>
          </div>
        </div>

        
  <!--Tutorial Cards-->
  <section class="tutor pb-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Unix Commands</h4>
              <span class="subtitle"> <b>Part I</b> </span>
              <p>basic UNIX commands you should know - beginners guide</p>
              <a class="btn btn-sm btn-outline-dark" href="https://www.youtube.com/watch?v=Cpxwo4atrEc">watch tutorial</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Unix Commands</h4>
              <span class="subtitle redTeam"> <b>Part II</b> </span>
              <p>UNIX shell tutorial & crash course</p>
              <a class="btn btn-sm btn-outline-dark" href="https://www.youtube.com/watch?v=8c1BL5b47kg">watch tutorial</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="resize_image">
              <img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt="">
            </div>
            <div class="info-padding ">
              <h4 class="title-card">Unix vs Linux</h4>
              <span class="subtitle"> <b>Beginner</b> </span>
              <p>how is Linux different to UNIX or are they the same thing?</p>
              <a class="btn btn-sm btn-outline-dark" href="https://www.youtube.com/watch?v=jowCUo_UGts">watch tutorial</a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="member d-flex align-items-center">
            <div class="resize_image"><img src="assets/media/video-tutorial.png" class="img-fluid rounded-circle" alt=""></div>
            <div class="info-padding ">
              <h4 class="title-card">Advanced UNIX Environment</h4>
              <span class="subtitle"> <b>Intermediate</b> </span>
              <p>System Calls & Library functions, File descriptors & processes</p>
              <a class="btn btn-sm btn-outline-dark" href="">watch interview</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </section>
  <!--Section-->
  <section class="bg-light mt-5">
    <div class="container p-4">
      <div class="row">
        <div class="col text-center ">
          <h2 class="heightTeam">Unix Survival Guide Course & Workshop</h2>
          <p>
          We are inviting you to join our online course & workshop "Unix Survival Guide" organized by various developers & software engineers. The topics & the workshop itself will be held throughout an interactive hands-on experience with writing various beginner-to-intermediate knowledge code.
          <br>
          <br>
          <b>WHO:</b> 
          <br>
          developers & software engineers
          <br>
          <br>
          <b>WHAT:</b> 
          <br>
          Unix Survival Guide - Course & Workshop
          <br>
          <br>
          <b>WHEN:</b> 
          <br>
          June 01, 06:00PM
          <br>
          <br>
          <b>WHERE:</b> 
          <br>
          <br>Zoom Meeting - Signup for the invite
          <br>
          <br>
          <b>WHY:</b> 
          <br>
          interactive hands-on experience in UNIX environment
          </p>
        </div>
      </div>
    </div>
  </section>
  <section class="intro-text">
    <div class=" container mt-5 pt-5 ">
      <div class="row ">
        <div class="col-lg-6 d-lg-block mt-5 ">
          <h1 class="header-title text-light ">Join an online workshop</h1>
          <h2 class="text-light">Signup now</h2>
        </div>
        <!--Form-->
        <div class="col-lg-5 form ">
          <div class="card text-center">
            <div class="card-body ">
              <form name="loginForm" action="" method="post">
                <div class="form-group">
                  <input required class="form-control form-control-lg" type="text" id="first" name="fName" placeholder="first name">
                </div>
                <div class="form-group">
                  <input required class="form-control form-control-lg" type="email" id="second" name="eMail" placeholder="enter your email">
                </div>
                <div class="form-group">
                  <input required class="form-control form-control-lg" type="text" id="last" name="lName" placeholder="enter message">
                  <div class="validate"></div>
                </div>
                <input type="submit" value="submit" class="btn btn-blue text-white btn-lg btn-block mb-2" name="submit"></input>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php require $footer; ?>
  <?php require $bootstrapScripts; ?>

  <!-- loading javascript component -->
  <script src="./scripts/loading.js"></script>

</body>

</html>