<?
    /*************************************************************
     * index7.php
     *
     * Christopher Clarke
     * christopher.clarke@uog.edu.gy
     *
     * Implements a registration form for University
     * Submits to itself. Pre-populates name, gender & school field upon error.
     * Generates list of schools via an array.
     *
     * Code adapted from: http://cs75.tv/2012/summer/
     *****************************************************************/

     //array of schools
     $schools = array(
       "Queens College",
       "Bishops High School",
       "St. Josephs High School"
     );

     // check if form was actually submitted
     if (isset($_POST["action"])) {
       if (empty($_POST["name"]) || empty($_POST["gender"]) || empty($_POST["school"]))
       {
           $error = true;
       }
     }
?>

<!DOCTYPE html>

<html>
  <head>
    <title>University Registration</title>
  </head>
  <body>
    <div style="text-align: center">
      <h1>Register for University</h1>
      <? if (isset($error)): ?>
        <div style="color: red">You must fill out the form!</div>
      <? endif ?>
      <br><br>
      <form action="index7.php" method="post">
        <table style="border: 0; margin-left: auto; margin-right: auto; text-align: left">
          <tr>
            <td>Name:</td>
            <td><input name="name" type="text" value="<? if (isset($_POST["name"])) echo htmlspecialchars($_POST["name"]) ?>"></td>
          </tr>
          <tr>
            <td>Gender:</td>
            <td>
              <input name="gender" type="radio" value="F" <?php if (isset($_POST["gender"]) && $_POST["gender"] == 'F') echo 'checked' ?>> F
              <input name="gender" type="radio" value="M" <?php if (isset($_POST["gender"]) && $_POST["gender"] == 'M') echo 'checked'?>> M
            </td>
          </tr>
          <tr>
            <td>School:</td>
            <td>
              <select name="school">
                <option value=""></option>
                <?php foreach ($schools as $school): ?>
                  <?php if (isset($_POST["school"]) && $_POST["school"] == $school): ?>
                    <option selected="selected" value="<?=$school?>"><?=$school?></option>
                  <?php else: ?>
                    <option value="<?=$school?>"><?=$school?></option>
                  <?php endif; ?>
                <?php endforeach; ?>
              </select>
            </td>
          </tr>
        </table>
        <br><br>
        <input type="submit" value="Register!" name="action">
      </form>
    </div>
  </body>
</html>
