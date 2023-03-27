<?php
$pages = array(
  "mission.php" => "Mission",
  "unix.php" => "Unix",
  "tutorials.php" => "Tutorials",
  "faqs.php" => "FAQs",
  "rubric.php" => "Rubric",
  "references.php" => "References",
  "comments.php" => "Comments"
);
function isActive($url){
  $currentPage = $_SERVER["REQUEST_URI"];
  $urlParts = explode("/", $currentPage);
  $currentUrl = end($urlParts);
  return $currentUrl === $url ? 'active' : '';
}
?>
<nav class="nes navbar navbar-expand-sm navbar-dark pt-5 mb-5">
  <div class="container">
    <a href="index.php" class="navbar-brand">UNIX</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav ml-auto">
        <?php
        foreach ($pages as $url => $title) {
          $activeClass = isActive($url);
          $link = "
            <li class='nav-item  $activeClass'>
              <a class='nav-link' href='$url'>$title</a>
            </li>
          ";
          echo $link;
        }
        ?>
      </ul>
    </div>
  </div>
</nav>

