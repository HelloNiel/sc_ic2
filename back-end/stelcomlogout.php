<?php
session_start();
session_destroy();

header("Location: ../stelcom/stelcomlogin.php");
exit();
?>