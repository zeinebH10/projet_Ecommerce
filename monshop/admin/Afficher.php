<?php  
session_start();  
if(!isset($_SESSION['zEinEB']))
{
    header("Location: ../login.php");
}

if(empty($_SESSION['zEinEB']))
{
    header("Location: ../login.php");
}
require('../securite/cmd.php');
$myprod=afficher();


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modifier</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <a class="navbar-brand" href="../index.php">AXIA STORE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="adminsss.php">Gérer Admin</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="indexA.php">Ajouter Produit</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="Afficher.php" style="font-weight: bold;">Gérer Les Produits</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="userss.php">Gérer Les utilisateur</a>
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

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
  
      <table class="table">
  <thead>
  
  <tr>
      <th scope="col">#</th>
      <th scope="col">image</th>
      <th scope="col">nom</th>
      <th scope="col">prix</th>
      <th scope="col">description</th>
      <th scope="col" colspan="2">operation</th>
      

      
        </tr>
     
  </thead>
  <tbody>
  <?php foreach($myprod as $prod){  ?>   
  <tr>
      <th scope="row"><?= $prod->id?></th>
      <td>
        <img src="<?= $prod->image?>" style="width: 15%" >
    </td>
      <td><?= $prod->nom?></td>
      <td><?= $prod->prix?> DT</td>
      <td><?= substr($prod->description,0,40);  ?></td>
      <td>
        <a href="editer.php?pdt=<?= $prod->id?>"><i class="fa fa-pencil" style="font-size: 20px; color: grey;"></i></a>  
    </td>
    <td>
        <a href="supprimer.php?pdt=<?= $prod->id?>"><i class="fa fa-trash" style="font-size: 20px; color: red;"></i></a>  
    </td>


    </tr>
    <?php } ?>
  </tbody>
</table>
</div> </div></div>



</body>
</html>

