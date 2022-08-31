<?php
session_start();
$_SESSION['username'] = "hooh tenan";
$_SESSION['password'] = "12121212";
echo "Username = ".$_SESSION['username'];
echo "<br/>";
echo "Password = ".$_SESSION['password'];
?>