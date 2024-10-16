<?php
session_start();

if (isset($_SESSION['zEinEB'])) {
    $_SESSION['zEinEB']=array();
    session_destroy();
    header("Location: ../");
}else {
    header("Location: ../login.php");
}


?>
