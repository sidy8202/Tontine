<?php
session_start();
$conn = mysqli_connect("localhost","root", "");
$bdd = mysqli_select_db($conn,'tontine');

?>

<!DOCTYPE html>          







<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/log.png" type="image/x-icon">
    <link rel="stylesheet" href="assets/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/gest.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Gestionnaire</title>
</head>

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
                             
                           <span class="fw-bold mx-5"><?= $_SESSION["id_utilisateur"] = $userid; ?></span> 

                        <p class="mx-5 fw-bold fs-8 ok">Gestionnaire</p>
                        
                        
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
                                       
                                    <a href="deconnection.php">
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
                                       
                                      <a class="nav-link active actb" aria-current="page" href=""> <i class="fa-solid fa-house">&nbsp;&nbsp;&nbsp;</i>Table de board</a>
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
                                        <a class="nav-link" href="programme.php"><i class="fa-solid fa-timeline">&nbsp;&nbsp;&nbsp;</i>Programme</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="cotisationges.php"><i class="fa-solid fa-money-check-dollar">&nbsp;&nbsp;&nbsp;</i>Cotisation</a>
                                    </li>
                                    
                                    <li class="nav-item">
                                        <a class="nav-link" href="#"><i class="fa-solid fa-money-bill-trend-up">&nbsp;&nbsp;&nbsp;</i>Envoyer la tontine</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="mespayements.php"><i class="fa-solid fa-arrow-up-right-from-square">&nbsp;&nbsp;&nbsp;</i>Mes payements</a>
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
                    <div class="container">
                        <div class="row">
                            <div class="col border">

                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="assets/img/ton.jpg" height="450px" class="d-block w-100" alt="...">
                                    </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/caisse.jpg" height="450px" class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item">
                                            <img src="assets/img/wari.jpg" height="450px" class="d-block w-100" alt="...">
                                        </div>
                                </div>
                                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Previous</span>
                                    </button>
                                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="visually-hidden">Next</span>  
                                    </button>
                            </div>

                                </div>
                            </div>
                        </div>
                        
                        <div class="row border mt-3 haoua">
                                
                            <div class="col-xl col-md col-sm geste" onclick="location.href='';">
                           
                               
                                <p class="graphe">Utilisateurs</p>
                            </div>

                            <div class="col-xl col-md col-sm membr"onclick="location.href='cotisationges.php';">
                                <p class="col-xl para mt-5">12</p>
                                <p class="graphe">Cotisation</p>
                            </div>
                            <div class="col-xl co-mdl col-sm coti" onclick="location.href='programme.php';">
                                <p class="para mt-5">12</p>
                                <p class="graphe">Programmes</p>
                            </div>
                            <div class="col-xl col-md col-sm forum">
                                <p class="para mt-5">7</p>
                                <p class="graphe">Mes transfers</p>
                            </div>
                        </div>
                        <div class="row mt-3 border">
                            <div class="col-xl col-sm col-md-8">
                                <h3>A propos</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam consectetur tempore minus earum quisquam aperiam consequuntur at quae eos! Quis eveniet iste aperiam asperiores accusamus. Quia praesentium error aperiam ea!
                                    Ipsum, ducimus deleniti sed quam voluptatibus asperiores explicabo, ea impedit ipsa aut, saepe sequi commodi sunt ipsam corporis molestiae odio eligendi necessitatibus! Eaque nam minus dolore repellendus enim! Tenetur, non!
                                    Architecto eius vero omnis quisquam veritatis voluptatem quibusdam ea distinctio quis maiores possimus dolorem placeat ab optio provident assumenda mollitia delectus, enim esse in id at, atque excepturi dolor. Unde?</p>

                            </div>
                            <div class="col-xl col-sm col-md border">
                                <h3>Calendrier</h3>
                                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, explicabo quasi deleniti blanditiis cumque quam ducimus sapiente necessitatibus rem recusandae enim maxime placeat et ad modi quisquam culpa, adipisci temporibus?</p>

                            </div>
                        </div>
                    </div>        
                </div>

                </div>
            </div>
        </div>
        <script src="assets/bootstrap/bootstrap.min.js"></script>
    </body>
</html>