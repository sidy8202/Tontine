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
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <title>Cotisation</title>
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
         <p>Votre solde actuel est de 300.000 FCFA.</p> 
        </div>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button> -->
        </div>
      </div>
    </div>
  </div>
<body style="background-color: #0E4E9A;">
         <!-- ici se trouve l'entete -->
      <div class="container">
          <div class="row border" style="background-color: #fdaf8e; margin-top: 10px;">
              <div class="col">
                  <img src="assets/img/log.png" style="width: 100px; height: 100px;" alt="">
              </div>
              <div class="col" style="margin-top: 30px;">
                  <p><a style="text-decoration: none; color: #fff;" href="compteM.php"><i class="fa fa-user"></i>&nbsp; @Adja</a></p>
              </div>
              <div class="col" style="margin-top: 30px; margin-left: 300px;">
                  <p><a style="text-decoration: none; color: #fff;" href="login.php"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Deconnexion</a></p> 
              </div>
          </div>
      </div>

        <!-- La partie menu membre -->
            
        <div class="container" style="margin-top: 20px;">
          <div class="row border">
              <div class="col-md-4 border" style="background-color:#042962; width: 300px; height: 500px;">
                  <h2 style="background-color: #D9D9D9; text-align:center; width:200px; height: auto; margin-left: 40px; margin-bottom: 50px;">Membre</h2>
                  <ul style="font-size: 20px; list-style: none; color: #fff; margin-left: 20px;">
                      <li><p><i class="fa fa-user"></i>&nbsp; <a href="compteM.php" style="text-decoration: none; color:#fff;">Compte</a></p></li>
                      <li><p><i class="fa fa-sack-dollar"></i>&nbsp; <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none; color:#fff">Solde</a></p></li>
                      <li><p><i class="fa fa-yen-sign"></i>&nbsp; <a href="cotisatiom.php" style="text-decoration: none; color:#fff;">Cotisation</a></p></li>
                      <li><p><i class="fa fa-list"></i>&nbsp; <a href="listmembre.php" style="text-decoration: none; color: #fff;"> Liste des membres</a></p></li>
                      <li><p><i class="fa fa-calendar-days"></i>&nbsp; <a href="programM.php" style="text-decoration: none; color:#fff">Programme</a></p></li>
                      <li><p><i class="fa fa-comment-dots"></i>&nbsp;<a href="msg.php" style="text-decoration: none; color:#fff">Forum</a></p></li>
                  </ul> 
              </div>
              <!-- tableau list -->
              <div class="col-md border bg-light"> 
                <div class="row">
                  <h3 style="text-align: center; background-color: #E86024;">Liste de payement</h3>
                    <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th scope="col">Date de payement</th>
                            <th scope="col">Heure de payement</th>
                            <th scope="col">Mode de payement</th>
                            <th scope="col">Montant payé</th>
                            <th scope="col">Payeurs</th>
                            <th scope="col">Bénéficiaires</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <th scope="row">10/01/2022</th>
                            <td>10h00</td>
                            <td>Orange Money</td>
                            <td>30.000 FCFA</td>
                            <td>Djeneba KOUMARE</td>
                            <td>Djeneba KOUMARE</td>
                          </tr>
                          <tr>
                            <th scope="row">10/01/2022</th>
                            <td>11h00</td>
                            <td>Orange Money</td>
                            <td>30.000 FCFA</td>
                            <td>Aissata DOUMBIA</td>
                            <td>Aissata DOUMBIA</td>
                          </tr>
                          <tr>
                            <th scope="row">10/01/2022</th>
                            <td>12h00</td>
                            <td>Orange Money</td>
                            <td>30.000 FCFA</td>
                            <td>Oumou DAGNOGO</td>
                            <td>Oumou DAGNOGO</td>
                          </tr>
                        </tbody>
                      </table>
                </div>
                <!-- boutton payement -->
                <button type="button" class="btn btn-warning" style="margin-left: 70%; margin-top: 15%; font-size: 20px; width: 200px; background-color: #E86024; border:none;">Payer la cotisation</button>
            </div>
        </div> 
    </div> 
        <div class="footer" style="text-align: center;">
            <p><small>Copyright 2022 par...</small></p>
        </div>
    <script src="assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>