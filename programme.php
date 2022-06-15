<?php
session_start();
include 'prom.php';
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/log.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/programme.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Programme de la Tontine</title>
</head>
<!-- MOdal add user -->
  
  <!-- Modal -->
  <div class="modal fade" id="addpro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Etablir un</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

            <?php
                $conn = mysqli_connect("localhost","root", "");
                $bdd = mysqli_select_db($conn,'tontine');
                $query = "SELECT * FROM utilisateur";
                $run = mysqli_query($conn, $query);
            ?>
        <div class="modal-body">
            <form action="" method="post">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3  mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                        </div>
                        <div class="col-md">
                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="05/01/2022" name="dates">
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1" class="form-label">Heure</label>   
                        </div>
                        <div class="col-md">
                            <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="16H30" name="heure">
                            
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1" class="form-label">Beneficiaire</label>
                        </div>
                        <div class="col-md">
                            <select name="bene" id="">
                                <?php while($row1=mysqli_fetch_array($run)):;?>
                                <option value="<?= $row1[0] ?>"><?=$row1[1]." ".$row1[2]?></option>
                                <?php endwhile;?>>
                            </select>                            
                        </div>     
                    </div>
    
                    <!-- <div class="row">
                        <div class="col-md-3">
                            <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                            
                        </div>
                        <div class="col-md">
                            <input type="email" class="form-control" id="exampleFormControlInput1" required="required" placeholder="">
                        </div>
                    </div> -->

                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                        <button type="submit" name="submit" class="btn text-light" style="background-color:#0d4f9b;">Enregister</button>
                    </div>
                </div>  
            </form>
        </div>
       
      </div>
    </div>
  </div>
        <!-- End add user -->

        <!-- Modal -->
    <div class="modal fade" id="solde" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
        <div class="modal-content mdsold">
            <div class="modal-header mhcol">
            <h5 class="modal-title fw-bold text-light" id="exampleModalLabel">Solde actuel</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h4 fs-bold>Votre solde est de: 2.000.000Fcfa</h4>
            </div>
            <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
        </div>
    </div>

    <!-- MOdal solde -->

    <div class="modal fade" id="soldeto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog ">
        <div class="modal-content mdsold">
            <div class="modal-header mhcol">
            <h5 class="modal-title fw-bold text-light" id="exampleModalLabel">Solde Tontine</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            <h4 fs-bold>Votre solde Tontine est de: 5.000.000Fcfa</h4>
            </div>
            <div class="modal-footer">
            <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button> -->
            <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
        </div>
    </div>

    <!--  -->
    <body style="background-color:#0d4f9b;">
        
        <div class="mx-4 ">
            <div class="row mt-3">
                <div class="col-md-2 col-sm gauche border">
                    
                    <div class="devdiagui">
                        
                        <img src="assets/img/mari.png" class="mt-3 bijou mx-5" alt="" srcset="">   
                        <span class="fw-bold mx-5"><?= @$_SESSION['username']?></span>          
                        <p class="text-center fw-bold fs-8 ok">Gestionnaire</p>
                        
                        
                        <div class="container">
                            <div class="row bgico">
                                <div class="col">
                                    <i class="fa-solid fa-gear"></i>
                                </div>
                                <div class="col-md">
                                    <i class="fa-solid fa-user"></i>
                                </div>
                                <div class="col-md">
                                    <i class="fa-solid fa-bell"></i>
                                </div>   
                            </div>     
                        </div>

                        <div class=" ok decon border">
                            <div class="row">
                                   <div class="col-md-11  deco" >
                                    <a href="nav-link">
                                        <p class="fw-bold  text-white text-center">DECONNEXION</p>
                                    </a>
                                   </div>
                            </div>     
                        </div>
                        <div>
                            <div class="row">
                               <div class="col-md trait"> </div>
                            </div>
                        </div>

                        <div class="mt-2 ubody">
                            <div class="row border">
                            <ul class="nav flex-column">
                                    <li class="nav-item">
                                       
                                      <a class="nav-link " aria-current="page" href=""> <i class="fa-solid fa-house">&nbsp;&nbsp;&nbsp;</i>Table de board</a>
                                    </li>
                                    <li class="nav-item">
                                       
                                      <a class="nav-link"  href="#" data-bs-toggle="modal" data-bs-target="#solde"><i class="fa-solid fa-sack-dollar">&nbsp;&nbsp;&nbsp;</i> Mon solde </a>
                                    </li>
                                    <li class="nav-item">
                                      <a class="nav-link" href="#" data-bs-toggle="modal" data-bs-target="#soldeto"><i class="fa-solid fa-hand-holding-dollar">&nbsp;&nbsp;&nbsp;</i>Solde tontine</a> 
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link" href="utilisateur.php"><i class="fa-solid fa-user-plus">&nbsp;&nbsp;&nbsp;</i>Utilisateurs</a>
                                    </li>
                                   
                                    <li class="nav-item">
                                         <a class="nav-link" href="compte.php"><i class="fa-solid fa-hand-holding-dollar">&nbsp;&nbsp;&nbsp;</i>Compte Money</a>   
                                    </li>
                                    <hr class="testhr">
                                    <li class="nav-item">
                                        <a class="nav-link active actb" href="programme.php"><i class="fa-solid fa-timeline">&nbsp;&nbsp;&nbsp;</i>Programme</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cotisationges.php"><i class="fa-solid fa-money-check-dollar">&nbsp;&nbsp;&nbsp;</i>Cotisation</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-money-bill-trend-up">&nbsp;&nbsp;&nbsp;</i>Envoyer la tontine</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="mespayements.php""><i class="fa-solid fa-arrow-up-right-from-square">&nbsp;&nbsp;&nbsp;</i>Mes payements</a>
                                    </li>
                                    <hr>
                                    <li class="nav-item">
                                        <a class="nav-link" href="historique.php"><i class="fa-solid fa-clock-rotate-left">&nbsp;&nbsp;&nbsp;</i>Historique Tontine</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="forum.php"><i class="fa-brands fa-rocketchat">&nbsp;&nbsp;&nbsp;</i>Forum</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="gallerie.php"><i class="fa-solid fa-file-image">&nbsp;&nbsp;&nbsp;</i>Gallerie</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-file-image">&nbsp;&nbsp;&nbsp;</i>Gmail</a>
                                    </li>
                                    
                                    <hr class="testhr">
                                    <!-- <li class="nav-item">
                                      <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                                    </li> -->
                                  </ul>
                            </div>
                            <img src="assets/img/log.png" class="imlog" alt="" srcset="">  

                        </div>
                    </div>
                </div>

                <div class="col-md sanata border mx-4">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-8">
                                    <p>Muso-jè</p>
                                  </div>
                                  <div class="col">
                                    <a data-bs-toggle="modal" data-bs-target="#addpro"><i class="fa-solid fa-timeline"></i><span data-bs-toggle="modal" data-bs-target="#addpro">Etablir le programme</span></a>
                                  </div>
                            </div>
                          
                        </div>
                        <div class="card-body">
                          <h3 class="card-title">Le programme de l'année</h3>
                          <?php
                            $bidate = date('m');
                            // echo $bidate;
                            $conn = mysqli_connect("localhost","root", "");
                            $bdd = mysqli_select_db($conn,'tontine');
                            $resultat = "SELECT programme.date_progra,  utilisateur.prenom_util, utilisateur.nom_util
                            FROM programme
                            INNER JOIN utilisateur ON programme.id_utilisateur = utilisateur.id_utilisateur WHERE programme.date_progra >= NOW()";
                            $do = mysqli_query($conn, $resultat);

                            ?>
                          <table class="table table-bordered">
                            <thead>
                           
                              <tr>
                                <th scope="col">Date</th>
                                <th scope="col">Prénom_béneficiaire</th>
                                <th scope="col">Nom_béneficiaire</th>
                                <th scope="col">Action</th>
                              </tr>
                            </thead>
                            <tbody>
                            <?php
                                    if ($do) 
                                    {                                               
                                        foreach($do as $row)
                                        {
                                ?>
                              <tr>
                                <td scope="row"><?php echo $row['date_progra'];?></td>
                                <td><?php echo $row['prenom_util'];?></td>
                                <td><?php echo $row['nom_util'];?></td>
                                <td></td>
                                
                                
                              </tr>
                              <?php
                                }
                                }
                                else
                                {
                                echo "Aucune donnée";
                                }
                            ?>
                            </tbody>
                          
                          </table>
                        </div>
                      </div>
                            
                            

                          <!-- <h5 class="card-title" style="background-color:#e86024; ">Card title</h5> -->
                          <!-- <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6> -->

                          
                        </div>
                    </div>       
                </div>

                </div>
            </div>
        </div>
        <script src="assets/bootstrap/bootstrap.min.js"></script>
    </body>
</html>