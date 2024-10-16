<?php
session_start();
require_once "../securite/database.php";
if(isset($_POST['connecter'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
 
  if (!empty($email) && !empty($password)){
   $sqlState = $pdo->prepare(query:"SELECT * FROM user WHERE email=? AND password=? ");
   $sqlState->execute([$email,$password]);
   if($sqlState->rowCount()>=1){
       $_SESSION['user']= $sqlState->fetch();   
    header('location: ../panier.php');
}
  }else{
echo '<div class="alert alert-danger" role="alert">Login et Mot De Passe sont obligatoir !</div>';
}}
?>

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>USER</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
  <form method="post">
    <div class="form-group" style="text-align: center; margin-bottom: 25px;">
      <label for="exampleInputEmail1" style="margin-bottom: 8px; margin-top: 150px;">Email address</label>
      <input type="email" name="email" class="form-control w-25 mx-auto" placeholder="Enter email">
    </div>
    <div class="form-group" style="text-align: center;">
      <label for="exampleInputPassword1" style="margin-bottom: 8px;">Password</label>
      <input type="password" name="password" class="form-control mx-auto w-25" placeholder="Password">
    </div>
    <div class="d-grid gap-2 col-6 mx-auto">
      <input type="submit" class="btn btn-primary mx-auto" style=" margin-top: 10px;" name="connecter" value="Connecter" >
    </div>
    <p class="form-group" style="text-align: center;margin-top: 8px;" >Don't have an account? <a href="inscription.php">Sign UP</a> </p>
  </form>
</body>
</html>
