<?php
session_start();

require('inc/functions.php');

if(!isset($_SESSION["mySelectedIds"]))
{
  $_SESSION["mySelectedIds"] = array();
}

if(isset($_POST['selectedGameIds']))
{
  foreach ($_POST["selectedGameIds"] as  $value)
  {

    $_SESSION['mySelectedIds'][] = $value;

  }
  header("location:checkout.php");
}
if(count($rows) < 1)
{
  header("location:checkout.php");
}
?>
