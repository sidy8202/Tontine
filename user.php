<?php
include_once 'dbconnect.php';
if(isset($_POST['submit'])) 
{    
     $prenom= htmlentities($_POST['prenom']);
     $nom = htmlentities($_POST['nom']);
     $telephone = htmlentities($_POST['telephone']);
     $email = htmlentities($_POST['email']);   
     $adresse = htmlentities($_POST['adresse']);
     $username = htmlentities($_POST['username']);
     $compte = htmlentities($_POST['compte']);
    try { 
        // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO utilisateur (prenom_util,nom_util,phone,email,adresse,username,type_compte)
            VALUES ('$prenom','$nom','$telephone','$email','$adresse','$username','$compte')";
            $conn->exec($sql);
            echo "Donnees inserées avec success dans la table Utilisateur";
        } 
    
    catch(PDOException $e) {
            echo "Erreur:<br>" . $e->getMessage();
       }
            $conn = null;
}
?>
