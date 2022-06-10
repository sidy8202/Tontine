<?php
include_once 'dbconnect.php';
if(isset($_POST['submit'])) 
{    
     $numcompte= htmlentities($_POST['numcompte']);
     $soldeb = htmlentities($_POST['soldeb']);
     $userc = htmlentities($_POST['userc']);
    try { 
        // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO compte_user (num_compte_user,solde,id_utilisateur)
            VALUES ('$numcompte','$soldeb','$userc')";
            $conn->exec($sql);
            echo "Donnees inserées avec success dans la table Utilisateur";
        } 
    
    catch(PDOException $e) {
            echo "Erreur:<br>" . $e->getMessage();
       }
            $conn = null;
}
?>
