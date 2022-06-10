<?php
       
       try {
         $conn = new PDO("mysql:host=localhost;dbname=tontine","root", "");
         // set the PDO error mode to exception
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //  echo "Connexion etablie avec la base de données <br>";
       } catch(PDOException $e) {
        //  echo "Voici l'erreur".$e->getMessage();
       }
       
   ?> 