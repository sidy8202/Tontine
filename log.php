<?php
session_start();

if(isset($_POST['submit']))  {
  $conn = mysqli_connect("localhost","root", "");
  $bdd = mysqli_select_db($conn,'tontine');

  $username = ($_POST['username']);
  $psd = ($_POST['psd']); 

//   $conn = mysqli_connect('username','password','dbname');

  $sql = "SELECT utilisateur.username FROM utilisateur WHERE username = '$username' AND password ='$psd' AND utilisateur.type_compte = 'gestionnaire'";
  $result = mysqli_query($conn,$sql);
  if ($result->num_rows> 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    header("location:gestionnaire.php");
  }
  else {
    echo "<script>alert('Email ou mot de pass incorrect')</script>";
  }
}
  
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);

  if($count == 1) {

    
  }
  else{
    header("location:login.php");
     $error = "Your Login Name or Password is invalid";
    }
   

?>