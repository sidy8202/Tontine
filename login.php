<?php 
include 'dbconnect.php';

session_start();

if($_SERVER["REQUEST_METHOD"] == "POST") {

  $username = mysqli_real_escape_string($conn, $_POST['username']);
  $psd = mysqli_real_escape_string($conn, $_POST['psd']); 

//   $conn = mysqli_connect('username','password','dbname');

  $sql = "SELECT utilisateur.username FROM utilisateur WHERE username = '$username' AND password ='$psd' AND utilisateur.type_compte = 'gestionnaire'";
  $result = mysqli_query($conn,$sql);
  if ($result->num_rows> 0) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['username'] = $username;
    header("location:gestionnaire.php");
  }
  else {
    echo "<script>alert('Email ou mot de passt incorrect')</script>";
  }
}
  
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $count = mysqli_num_rows($result);

  if($count == 1) {

    
  }
  else{
    header("location:ok.php");
     $error = "Your Login Name or Password is invalid";
    }
   

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/img/logotontineM.png" type="image/x-icon">
    <title>login</title>
</head>
<body>

  <div class="modal fade" id="psw" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color:  #0D4F9B;">
          <h5 class="modal-title" id="exampleModalLabel">Reinitialiser le mot de passe</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
    <div class="modal-body">
        <div class="">
          <form action="">
            <div class="container">
              <div class="row mt-3">
                <div class="col-md-3">
                  <label for="name">Email</label>
                </div>
                <div class="col-md-3">
                  <input type="email" name="" >
                </div>

              </div>
              <div class="row mt-3 ">
                <div class="col-md-4">
                  <label for="name">Nouveau mot de passe</label>
                </div>
                <div class="col-md-5">
                  <input type="password" name="" id="">
              </div>
              </div>
            </div>
          </form>
        </div>
    </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success intb" data-bs-dismiss="modal" >Reinitialiser</button>
        </div>
      </div>
    </div>
  </div>




    <div class="split left">
        <div class="centered">
            <h1>Bienvenue à la page de connection</h1>
          <img src="assets/img/logotontineM.png">
        </div>
        <img src="assets/img/imageton.jpg" width="100%"; height="100%" class="tontine">
      </div>
      
      <div class="split right">
        <!-- <div class="centered"> -->
          <h2>Connectez à votre compte</h2>
        <!-- </div> -->
        <form action="" method="post">
            <div class="imgcontainer">
              <img src="assets/img/avatar.jpg" alt="Avatar" class="avatar">
            </div>
          
            <div class="container">
              <label for="uname"><b>Nom d'utilisateur</b></label>
              <input type="text" placeholder="Entrez nom d'utilisateur" name="username" required id="" value="<?php $username;?>">
          
              <label for="psw"><b>Mot de passe</b></label>
              <input type="password" placeholder="Entrez mot de passe" name="psd" required value="<?php $psd;?>">
          
              <button type="submit" name="submit">connecter</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Me rappeler
              </label>
            </div>
          
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Annuler</button>
              <span class="psw">Oublié <a href=""  type ="button" data-bs-toggle="modal" data-bs-target="#psw" cursor="pointer">Mot de passe?</a></span>
            </div>
          </form>
      </div>
</body>
<script src="assets/bootstrap/bootstrap.min.js"></script>
</html>