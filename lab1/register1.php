<?
    /*************************************************************
     * register1.php
     *
     * Christopher Clarke
     * christopher.clarke@uog.edu.gy
     *
     * Implements a registration form for University Registration.  Redirects
     * user to index1.php upon error.
     *
     * Code adapted from: http://cs75.tv/2012/summer/
     *****************************************************************/

     // validate submission
    if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["school"]))
    {
        //redirect user back to index1.php
        header("Location: index1.php");
        exit;
    }
?>

<!DOCTYPE html>

<html>
  <head>
    <title>University Registration</title>
  </head>
  <body>
    You are registered! (Well, not really.)
  </body>
</html>
