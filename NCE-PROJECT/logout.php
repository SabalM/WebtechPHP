<?php
session_start();
$_SESSION["is_login"] = '';
session_destroy();
header("Location: /NCE-PROJECT/index.php");
?>