<?php
include'dbconnect.php';
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/Tontine/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/Tontine/assets/css/membre.css">
    <title>Page de membre</title>
</head>
<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Launch demo modal
  </button> -->
  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Mon solde</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
         <h5>Votre solde actuel est de 300.000 FCFA.</h5> 
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>
<body>
    <div class="frame">
        <!-- ici se trouve l'entete -->
        <section class="block1">
            <div id="logo">
                <img src="/Tontine/assets/img/logotontineM.png" style="width: 100px; height: 100px;" alt="">
            </div>
            <div class="header" style="background-color: #E86024;">
                <img src="/Tontine/assets/img/ak.png" style="width: 250px; height: 60px; margin-top: 20px;" alt="">
                <h1 style="margin-top: 20px;">Muso-Jè</h1>
                <button name="button" style="width: 200px; height: 60px;"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Deconnexion</button>
            </div>
        </section>
                    <!-- le block membre -->
            <div class="aside">
                <div>
                    <h2>Membre</h2>
                </div>
                <div class="dashbord">
                    <ul>
                        <li><p><i class="fa fa-user"></i>&nbsp; <a href="compte.html">Compte</a></p></li>
                        <li><p><i class="fa fa-sack-dollar"></i>&nbsp;<a href="" data-bs-toggle="modal" data-bs-target="#exampleModal">Solde</a></p></li>
                        <li><p><i class="fa fa-yen-sign"></i>&nbsp; <a href="compte.html">Cotisation</a></p></li>
                        <li><p><i class="fa fa-list"></i>&nbsp; <a href="listmembre.html"> Liste des membres</a></p></li>
                        <li><p><i class="fa fa-calendar-days"></i>&nbsp; <a href="#">Programme</a></p></li>
                        <li><p><i class="fa fa-comment-dots"></i>&nbsp;<a href="#">Forum</a></p></li>
                    </ul>   
                    <div class="pimg">
                        <img src="/Tontine/assets/img/aaa.jpg" alt="">

                    </div> 
                </div> 
            </div>
                <!-- le container bootstrap -->
            <div class="container">
                <div class="row">
                    <div class="col-md-6" style="width: 440px; height:220px; background:#d38766; border-radius: 5px;">
                        <h3>Programme</h3>
                    </div>
                    <div class="col-md-6" style="width: 440px; height:220px; background:#d38766; border-radius: 5px; margin-left: 20px;">
                        <h3>Forum</h3>
                    </div>
                </div>  
            </div>
                <!-- le footer -->
        <div class="footer">
            <p><small>Copyright 2022 par...</small></p>
        </div>
    </div> 
    <script src="assets/bootstrap/bootstrap.min.js"></script> 
</body>
</html>