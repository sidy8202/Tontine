<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="/Tontine/assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="/Tontine/assets/css/cot.css">
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
                <button type="button" class="btn btn-primary" style="width: 100px; height: 50px; margin-left: 20px"><i class="fa fa-arrow-left"></i></button>
                <img src="/Tontine/assets/img/ak.png" style="width: 250px; height: 50px; margin-top: 20px;" alt="">
                <button type="button" class="btn btn-primary" style="width: 200px; height: 50px;"><i class="fa-solid fa-right-from-bracket"></i>&nbsp; Deconnexion</button>
            </div>
        </section>

        <!-- La partie menu membre -->
            
                <div class="container-fluid" style="margin-top: 20px;">
                    <div class="row border">
                        <div class="col-md-4 border" style="background-color:#042962; width: 400px; height: 600px;">
                            <h2 style="background-color: #D9D9D9; text-align:center; width:200px; height: auto; margin-left: 100px; margin-bottom: 50px;">Membre</h2>
                            <ul style="font-size: 20px; list-style: none; color: #fff; margin-left: 80px;">
                                <li><p><i class="fa fa-user"></i>&nbsp; <a href=""  style="text-decoration: none; color:#fff">Compte</a></p></li>
                                <li><p><i class="fa fa-sack-dollar"></i>&nbsp; <a href="" data-bs-toggle="modal" data-bs-target="#exampleModal" style="text-decoration: none; color:#fff">Solde</a></p></li>
                                <li><p><i class="fa fa-yen-sign"></i>&nbsp; <a href="" style="text-decoration: none; color:#fff;">Cotisation</a></p></li>
                                <li><p><i class="fa fa-list"></i>&nbsp; <a href="" style="text-decoration: none; color: #fff;"> Liste des membres</a></p></li>
                                <li><p><i class="fa fa-calendar-days"></i>&nbsp; <a href="" style="text-decoration: none; color:#fff">Programme</a></p></li>
                                <li><p><i class="fa fa-comment-dots"></i>&nbsp;<a href="" style="text-decoration: none; color:#fff">Forum</a></p></li>
                            </ul> 
                        </div>
                        <div class="col-md border bg-light"> 
                            <div class="row">
                              <h3 style="text-align: center; background-color: #E86024;">Liste de payement</h3>
                                <table class="table">
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
                            <button type="button" class="btn btn-warning" style="margin-left: 80%; margin-top: 30%; font-size: 20px; background-color: #E86024;">Payer la cotisation</button>
                        </div>
                    </div> 
                </div> 
        <div class="footer">
            <p><small>Copyright 2022 par...</small></p>
        </div>
    </div>  
    <script src="assets/bootstrap/bootstrap.min.js"></script>
</body>
</html>