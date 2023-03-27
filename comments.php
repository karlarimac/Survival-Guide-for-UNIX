<?php
require "includes/configuration.inc.php";
require "includes/db-configuration.inc.php";
?>

<?php

include "../../dbConnection.php";
if ($mysqli) {

  if (!empty($_POST['fName']) && !empty($_POST['lName'])) {

    $prepSql = "INSERT into groupsix (first, last) values (?, ?)";
    $stmt = $mysqli->prepare($prepSql);
    $stmt->bind_param("ss", $_POST['fName'], $_POST['lName']);
    $stmt->execute();
    $stmt->close();
  }

  $sql = "SELECT first, last FROM groupsix";
  $res = $mysqli->query($sql);
  if ($res) {
    while ($rowHolder = $res->fetch_assoc()) {
      $records[] = $rowHolder;
    }
  }
}

?>

<!doctype html>
<html lang="en">

<head>
  <title>Comments</title>
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


  <h1 class="text-center text-white">Leave a comment</h1>

  <div class="form col-lg-5 text-center mt-5">
    <div class="card text-center">
      <div class="card-body ">
        <h3>Contact us</h3>
        <form name="loginForm" action="comments.php" method="post">
          <div class="form-group">
            <input required class="form-control form-control-lg" type="text" id="first" name="fName" placeholder="username">
          </div>
          <div class="form-group">
            <input required class="form-control form-control-lg" type="text" id="last" name="lName" placeholder="enter comment">
          </div>
          <input type="submit" value="send your comment" class="btn btn-blue text-white btn-lg btn-block mb-2" name="submit"></input>
        </form>

      </div>
    </div>
  </div>

  <div class="text-center mt-5">
    <?php

    foreach ($records as $thisRow) {
      echo '<p class="usernameList"> <b>— USERNAME —</b> </p>';
      echo '<li class="firstList">' . $thisRow['first'] . '</li>';
      echo '<p class="commentList"> <b>— COMMENT: —</b> </p>';
      echo '<li class="lastList">' . $thisRow['last'] . '</li>';
      echo '<hr>';
    }

    ?>
  </div>

  <?php require $footer; ?>
  <?php require $bootstrapScripts; ?>

  <!-- loading javascript component -->
  <script src="./scripts/loading.js"></script>

</body>

</html>