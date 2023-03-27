<?php
  ini_set('display_errors', 1);
  ini_set('display_startup_errors', 1);
  error_reporting(E_ALL);
  $dir = __DIR__;
  $htmlPath = "$dir/html";
  $bootstrapPath = "$dir/bootstrap";
  $navigationPath = "$dir/navigation";
  $meta = "$htmlPath/html-meta.inc.php";
  $bootstrapCss = "$bootstrapPath/bootstrap-css.inc.php";
  $bootstrapScripts = "$bootstrapPath/bootstrap-scripts.inc.php";
  $navigation = "$navigationPath/navigation.inc.php";
  $footer = "$htmlPath/html-footer.inc.php";
  $footerDark = "$htmlPath/html-footerDark.inc.php";
?>