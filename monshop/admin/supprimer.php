<?php
require('../securite/cmd.php');

if(isset($_GET['pdt'])){
    $id = $_GET['pdt'];
    supprimer($id);
}

header("Location: Afficher.php");
?>
