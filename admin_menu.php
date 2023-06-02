<?php
session_start(); // important function to allow session variables  

if ($_SESSION['login'] != 1) {

    header("Location: search.html"); //send them to the form to login

}

echo "<p>Account area</p>";
?>