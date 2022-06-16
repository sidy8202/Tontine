<?php 
  session_start();
  require_once 'dbconnect.php';
  $conn = mysqli_connect("localhost","root", "");
  $bdd = mysqli_select_db($conn,'tontine');

if($_SERVER["REQUEST_METHOD"]=="POST") // name of the button given in the form
{
  $user =  $_POST["username"]; // obtaining the value of the input type in the form by request
  $pass = $_POST["pass"];
 
  $sql= "SELECT id_utilisateur, username, passwords,type_compte FROM utilisateur WHERE username='".$user."' AND passwords='".$pass."' ";
  $result= mysqli_query($conn,$sql);
  $row=mysqli_fetch_array($result);

  $_SESSION['id_utilisateur'] = $row['id_utilisateur'];
  $_SESSION["username"] = $user;  

    if($row["type_compte"]=="Gestionnaire")
        {
          header("LOCATION:gestionnaire.php");
        }

    elseif($row["type_compte"]=="Membre")
    {
      header("LOCATION:membrelog.php");
    }

    else
    {
     $message = "Username or password incorrect";
    }
}

?>

<?php
if (isset($_POST['email'])) {
  $pass= uniqid();
  $hashedPassword = password_hash($password, xwPASSWORD_DEFAULT);

  $subject = 'Mot de passe oublié';
  $message = "Bonjour, voici votre nouveau mot de passe : $pass";
  $headers = 'Content-Type: text/plain; charset="UTF-8"';

  if (mail($_POST['email'], $subject, $message, $headers)) {
      $stmt = $db->prepare("UPDATE username, passwords SET password = ? WHERE  username='".$user."' AND passwords='".$pass."' 'email='$email' ");
      $stmt->execute([$hashedPassword, $_POST['email']]);
      echo "E-mail envoyé";
  } 
  
  else {
      echo "Une erreur est survenue";
  }
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
        
                          <!-- <form method="post">
                              <div class="container">
                                  <label for="email"><b>Email</b></label>
                                  <input type="email" placeholder="Enter Email" name="email" required>
                                  <button type="submit">Send me a random password</button>
                              </div>
                          </form> -->

          <div class="modal-body">
              <div class="">
                <form action="" method="post">
                  <div class="container">
                    <div class="row mt-3">

                      <div class="col-md-3">
                        <label for="name">Email</label>
                      </div>

                      <div class="col-md-3">
                        <input type="email" name="email" required>
                      </div>

                    </div>
                  </div>
                    <div class="row mt-3 ">

                      <!-- <div class="col-md-4">
                        <label for="name">Nouveau mot de passe</label>
                      </div>

                      <div class="col-md-5">
                        <input type="password" name="motpass" id="">
                      </div> -->

                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-success intb" name= "submit" value="Reset Password" type="submit">Envoyer le lien</button>
                </div>
                        <!-- <div class="container">
                          <div class="row">
                            <div class="col">
                            <input type="hidden" class="hide" name="token" id="token" value="">
                            </div>  
                          </div>
                        </div> -->
                </form>
              </div>
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
          <h6 class="text-center text-danger"><?= @$message ?></h6>
        <!-- </div> -->
        <form action="" method="post">
            <div class="imgcontainer">
              <img src="assets/img/avatar.jpg" alt="Avatar" class="avatar">
            </div>
          
            <div class="container">
              <label for="uname"><b>Nom d'utilisateur</b></label>
              <input type="text" placeholder="Entrez nom d'utilisateur" name="username" required id="">
          
              <label for="psw"><b>Mot de passe</b></label>
              <input type="password" placeholder="Entrez mot de passe" name="pass" required="">
          
              <button type="submit" name="connexion">connecter</button>
              <label>
                <input type="checkbox" checked="checked" name="remember"> Me rappeler
              </label>
            </div>
          
            <div class="container" style="background-color:#f1f1f1">
              <button type="button" class="cancelbtn">Annuler</button>
              <span class="psw"><a href=""  type ="button" data-bs-toggle="modal" data-bs-target="#psw" cursor="pointer">Mot de passe oublié ?</a></span>
              <!-- <span class="psw"><a href="forgot_password.php"  data-bs-target="#psw">Mot de passe oublié ?</a></span -->
            </div>
          </form>
      </div>
</body>
<script src="assets/bootstrap/bootstrap.min.js"></script>
</html>