<?php
require_once ("../includes/helpers.php");
require_once ("../models/user.php");
require_once ("../models/child.php");
render('header', array('title' => 'Welcome to OOP'));
?>

<?php
$user1 = new User("Mike", "James", "12/12/12", "M");
$child1= new Child("John", "Doe", "10/10/10", "M");
// echo $user1->fname;
$user1->print_object();
$child1->print_object();
 ?>


<?php render('footer'); ?>
