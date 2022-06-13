<?php 
session_start();


if (isset($_SESSION['USERNAME']) && $_SESSION['TYPE_COMPTE'] == 'Gestionnaire'  ) 
{
	
}
else{
	header('LOCATION:user.php');
}

 ?>