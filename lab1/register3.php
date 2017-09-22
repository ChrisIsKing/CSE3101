<?
    /*************************************************************
     * register3.php
     *
     * Christopher Clarke
     * christopher.clarke@uog.edu.gy
     *
     * Implements a registration form for University Registration. Reports
     * registration via email. Redirects user to index3.php upon error.
     *
     * Code adapted from: http://cs75.tv/2012/summer/
     *****************************************************************/

    // validate submission
    if (!empty($_POST["name"]) && !empty($_POST["gender"]) && !empty($_POST["school"]))
    {
        // fills up email
        $to = "christopher.Clarke@uog.edu.gy";
        $subject = "Registration";
        $body = "This person just registered:\n\n" .
         $_POST["name"] . "\n" .
         $_POST["gender"] . "\n" .
         $_POST["school"];
        $headers = "From: mail@uogregister.com\r\n";
    } else {
      // redirect user to index3 page
      header("Location: index3.php");
      exit;
    }
?>

<!DOCTYPE html>

<html>
  <head>
    <title>University Registration</title>
  </head>
  <body>
      You are registered!  (Really.)
  </body>
</html>
