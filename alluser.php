<?php
 include 'dbconnect.php';
    if(isset($_GET['menu']))
    {
        ($type_compte=$_GET['menu']);
    }
    else
    {
        ($type_compte='login');
    }

    if ($type_compte=='login') {
        require 'login.php';
    } 
    elseif ($type_compte=='Gestionnaire')
    {
        header("location:gestionnaire.php");
        
    }
    elseif ($type_compte=='membre'){
        require 'user.php';
    }
    else
    {
        echo 'probleme';
    }
?>