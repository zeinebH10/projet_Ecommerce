        <?php
        session_start();

        include "../securite/cmd.php";
        include "../securite/database.php";
        if(isset($_SESSION['user']))
        {
            if(!empty($_SESSION['user']))
            {
            
               
            }}

    if(!empty($_POST['email']) AND !empty($_POST['password'])&& !empty($_POST['prenom']) && !empty($_POST['nom']))
    {
        $email = htmlspecialchars(strip_tags($_POST['email'])) ;
        $password = htmlspecialchars(strip_tags($_POST['password']));
        $prenom = htmlspecialchars(strip_tags($_POST['prenom']));
        $nom = htmlspecialchars(strip_tags($_POST['nom'])) ;
        $user = ajouterUser($email, $password,$prenom,$nom);

        if($user){
            $_SESSION['user'] = $user;
            header('Location: connecter.php');
        }
        else{
            echo "Failed to add user!";
        }
    }

?>
    
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <title>Login AXIA STORE</title>
        </head>
        <body>
        <div class="container" style="display: flex; justify-content: start-end">
            <div class="row">
                <div class="col-md-10">

                <form method="post">
                <div class="mb-3">
                        <label for="prenom" class="form-label">Prenom</label>
                        <input type="text" name="prenom" class="form-control" style="width: 350%;">
                    </div>
                    <div class="mb-3">
                        <label for="nom" class="form-label">Nom</label>
                        <input type="text" name="nom" class="form-control" style="width: 350%;">
                    </div>
                <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" style="width: 350%;" >
                    </div>
                    <div class="mb-3">
                        <label for="motdepasse" class="form-label">password</label>
                        <input type="password" name="password" class="form-control" style="width: 350%;">
                    </div>

                    <br>
                    <input type="submit" name="envoyer" class="btn btn-info" value="Envoyer">
                </form>

                </div>
            </div>
        </div>
            
        </body>
        </html>