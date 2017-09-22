<?
    /*************************************************************
     * register2.php
     *
     * Christopher Clarke
     * christopher.clarke@uog.edu.gy
     *
     * Implements a registration form for University Registration. Informs
     * user of any errors using php embedded HTML
     *
     * Code adapted from: http://cs75.tv/2012/summer/
     *****************************************************************/
?>

<!DOCTYPE html>

<html>
  <head>
    <title>University Registration</title>
  </head>
  <body>
    <? if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["school"])): ?>
      You must provide your name, gender, and school!  Go <a href="index2.php">back</a>.
    <? else: ?>
      You are registered!  (Well, not really.)
    <? endif ?>
  </body>
</html>
