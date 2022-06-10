<?php
include_once 'dbconnect.php';
if(isset($_POST['submit'])) 
{    
     $dates= htmlentities($_POST['dates']);
     $heures = htmlentities($_POST['heure']);
     $bene = htmlentities($_POST['bene']);

    try { 
        // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO programme (date_progra,heure,id_utilisateur)
            VALUES ('$dates','$heures','$bene')";
            $conn->exec($sql);
            echo "Donnees inserées avec success dans la table Programme";
        } 
    
    catch(PDOException $e) {
            echo "Erreur:<br>" . $e->getMessage();
       }
            $conn = null;
}
?>
