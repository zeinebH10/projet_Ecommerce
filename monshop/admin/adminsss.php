<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <title>liste Admin</title>
</head>
<body class="bg-light">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="../index.php">AXIA STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href=""style="font-weight: bold;">Gérer Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indexA.php" >Ajouter produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Afficher.php" >Gérer Les produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userss.php" >Gérer Les utilisateurs</a>
        </li>
       
      </ul>
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a href="deconnexion.php" class="btn btn-outline-danger">Déconnecter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
require "../securite/database.php";
$query = "SELECT * FROM admin";
$stmt = $pdo->prepare($query);
$stmt->execute();
$users = $stmt->fetchAll();

echo "<div class='album py-5 bg-light'>";
echo "<div class='container'>";
echo "<div class='row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3'>";
echo "<table class='table'>";
echo "<thead>";
echo "<tr>";
echo "<th scope='col'>#</th>";
echo "<th scope='col'>pseudo</th>";
echo "<th scope='col'>Email</th>";
echo "<th scope='col'>ACTION</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";
foreach($users as $user){
    echo "<tr>";
    echo "<th scope='row'>".$user['id']."</th>";
    echo "<td>".$user['pseudo']."</td>";
    echo "<td>".$user['email']."</td>";
    echo "<td><a href='delete_admin.php?id=".$user['id']."'><i class='fa fa-trash' style='font-size: 20px; color: red;'></i></a></td>";
    echo "</tr>"; 
    echo "</tr>";
}
echo "</tbody>";
echo "</table>";
echo "</div></div></div>";
?>

</>
</html>