<?php
session_start();
session_destroy();
header("location: /weblab/form.php");
exit;
?>
