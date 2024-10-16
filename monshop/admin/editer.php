        <?php 
   session_start();
   if (!isset($_SESSION['zEinEB'])) {
       header("Location: ../login.php");
   }
   
   if (empty($_SESSION['zEinEB'])) {
       header("Location: ../login.php");
   }
   
   if (!isset($_GET['pdt']) || empty($_GET['pdt']) || !is_numeric($_GET['pdt'])) {
       header("Location: Afficher.php");
   }
   
   $id = $_GET['pdt'];
   
   require('../securite/cmd.php');
   $myprod = getProduit($id);
   
   foreach ($myprod as $prod) {
       $nom = $prod->nom;
       $image = $prod->image;
       $prix = $prod->prix;
       $desc = $prod->description;
   }
   ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
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
            <a class="nav-link" href="indexA.php" >Ajouter Produit</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Afficher.php">Gérer Produit</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#" style="font-weight: bold;">Modifier Produit</a> 
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
      
    <form method="post">
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Titre de l'image</label>
    <input type="name" class="form-control " value="<?= $image?>"  name="image">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Titre</label>
    <input type="name" class="form-control " value="<?= $nom?>"  name="nom"  >
    </div>
    <div class="mb-3">
    <label for="exampleFormControlInput1" class="form-label">Prix</label>
    <input type="number" class="form-control " value="<?= $prix?>"  name="prix">
    </div>
    <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Decription</label>
    <textarea class="form-control "  rows="3" name="desc"> <?= $desc?></textarea>
    </div>
    <button type="submit" class="btn btn-success" name="modifier">Modifier le produit</button>
    </form>



        </div></div></div>


    </body>
    </html>
    <?php  
    if (isset($_POST['modifier'])) {
        if (isset($_POST['image']) && isset($_POST['nom']) && isset($_POST['prix']) && isset($_POST['desc'])) {
            if (!empty($_POST['image']) && !empty($_POST['nom']) && !empty($_POST['prix']) && !empty($_POST['desc'])) {
                $image = htmlspecialchars(strip_tags($_POST['image']));
                $nom = htmlspecialchars(strip_tags($_POST['nom']));
                $prix = htmlspecialchars(strip_tags($_POST['prix']));
                $desc = htmlspecialchars(strip_tags($_POST['desc']));
                modifier($image, $nom, $prix, $desc,$id);
                header("Location: Afficher.php");
            }
        }
    }
    ?>
    