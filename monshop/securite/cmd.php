<?php
function ajouterUser($email, $password,$prenom, $nom) {
    if (require("database.php")) {
        $req = $pdo->prepare("INSERT INTO user (email, password,prenom, nom) VALUES(?,?,?,?)");
        $success = $req->execute([$email, $password,$prenom, $nom]);
        $req->closeCursor();
        return $success;
    }
    return false;
}





function modifier($image,$nom,$prix,$desc,$id){
    if(require("database.php")){
        $req=$pdo->prepare("UPDATE produit SET image=?, nom=?, prix=?,description=?
         WHERE id=? ");
        $req->execute([$image,$nom,$prix,$desc,$id]);
        $req->closeCursor();
    }
}


function getProduit($id) {
 require("database.php");
	
		$req=$pdo->prepare("SELECT * FROM produit WHERE id=?");

        $req->execute([$id]);

        $data = $req->fetchAll(PDO::FETCH_OBJ);

        return $data;
	
}


function getAdmin($email, $password) {
    require("database.php"); 

    $req = $pdo->prepare("SELECT * FROM admin WHERE email = ? AND password = ?");
    $req->execute([$email, $password]);

    if ($req->rowCount() == 1) {
        $data = $req->fetch();
        $req->closeCursor(); 
        return $data;
    } else {
        $req->closeCursor();
        return false;
    }
}

function ajouter($image,$nom,$prix,$desc){
    if(require("database.php")){
        $req=$pdo->prepare("INSERT INTO produit(image, nom, prix, description) VALUES(?,?,?,?)");
        $req->execute([$image,$nom,$prix,$desc]);
        $req->closeCursor();
    }
}

function afficher(){
    if(require("database.php")){
        $req=$pdo->prepare("SELECT * FROM produit");
        $req->execute();
        $data=$req->fetchAll(PDO::FETCH_OBJ);
        $req->closeCursor();
        return $data;
    }

}
function supprimer($id){
    if(require("database.php")){
    $req=$pdo->prepare('DELETE FROM produit WHERE id=?');
    $req->execute([$id]);
    
    }}
   