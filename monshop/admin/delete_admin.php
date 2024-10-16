<?php
require "../securite/database.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $query = "DELETE FROM admin WHERE id = :id";
    $stmt = $pdo->prepare($query);
    $stmt->execute(['id' => $id]);

    // Redirect to the previous page or a specific page
    header('Location: adminsss.php');
}
?>
