<?php 
session_start();

if (isset($_SESSION['ID_UTILISATEUR'],$_SESSION['TYPE_COMPTE'],$_SESSION['USERNAME']) && $_SESSION['TYPE_COMPTE'] == 'Gestionnaire'  ) 
{
	
}
else{
	header('LOCATION:deconnection.php');
}

 ?>