<?php
require_once("Connection.php");
session_destroy();
header("location:Admin_Login.php");
?>