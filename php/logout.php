<?php
session_start();
//include('../destroy_log.php');
session_destroy();
header('Location:../index.php?try=t');
?>
