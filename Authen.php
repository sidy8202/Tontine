<?php
require'dbconnect.php';
if (isset($_POST['connexion'])) 
{
  
    $user= ($_POST['username']);
    $pass= ($_POST['pass']);
    $bdd = mysqli_select_db($conn,'tontine');
    $request= "SELECT * FROM utilisateur WHERE username='$user' AND password='$pass' ";
    $run = mysqli_query($conn, $request);

        $_SESSION['id_utilisateur']=$row['id_utilisateur'];
        $_SESSION['type_compte']=$row['type_compte'];
        $type_compte=$row['type_compte'];     
        header("location:alluser.php?menu=.$type_compte.'");
          
  }

?>