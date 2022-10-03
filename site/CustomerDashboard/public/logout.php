<?php
session_start();
unset($_SESSION["id"]);
unset($_SESSION["name"]);
header("Location: /nmc-project/site/index.php");
?>