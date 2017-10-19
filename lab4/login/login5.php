<?
    /**
     * login5.php
     *
     * A simple login module that checks a username and password
     * against a MySQL table with no encryption.
     *
     */

    // enable sessions
    session_start();

    // connect to database
    if (($connection = mysql_connect("localhost", "test", "test")) === false)
        die("Could not connect to database");

    // select database
    if (mysql_select_db("test", $connection) === false)
        die("Could not select database");

    // if username and password were submitted, check them
    if (isset($_POST["user"]) && isset($_POST["pass"]))
    {
        // prepare SQL
        $sql = sprintf("SELECT * FROM users WHERE username='%s'",
                       mysql_real_escape_string($_POST["user"]));

        // execute query
        $result = mysql_query($sql);
        if ($result === false)
            die("Could not query database");

        // check whether we found a row
        if (mysql_num_rows($result) == 1)
        {
            // fetch row
            $row = mysql_fetch_assoc($result);

            var_dump($row);

            // check password
            if ($row["password"] == $_POST["pass"])
            {
                // remember that user's logged in
                $_SESSION["authenticated"] = true;

                // redirect user to home page, using absolute path, per
                // http://us2.php.net/manual/en/function.header.php
                $host = $_SERVER["HTTP_HOST"];
                $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
                header("Location: http://$host$path/home.php");
                exit;
            }
        }
    }
?>

<!DOCTYPE html>

<html>
  <head>
    <title>Log In</title>
  </head>
  <body>
    <form action="login5.php" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td>
            <input name="user" type="text"></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><input name="pass" type="password"></td>
        </tr>
        <tr>
          <td></td>
          <td><input type="submit" value="Log In"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
