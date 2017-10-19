<?php

/**
 *
 */
class User
{
  protected $fname, $lname, $dob, $gender;

  function __construct($fname, $lname, $dob, $gender) {
    $this->fname = $fname;
    $this->lname = $lname;
    $this->dob = $dob;
    $this->gender = $gender;
  }

  function print_object() {
    print "$this->fname, $this->lname, $this->dob, $this->gender";
  }


}


?>
