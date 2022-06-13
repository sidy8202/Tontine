<?php 
  require_once 'dbconnect.php';
  session_start();

if (isset($_SESSION["gestion_login"])) // Check the condition of gestionnaire if no direct link then back to loogin page
{
  header("location: gestionnaire.php");
}

if (isset($_SESSION["membre_login"])) // Check the condition of gestionnaire if no direct link then back to loogin page
{
  header("location: membrelog.php");
}

if(isset($_REQUEST['submit'])) // name of the button given in the form
{
  $user = $_REQUEST["username"]; // obtaining the value of the input type in the form by request
  $pass = $_REQUEST["pass"];
  $role = $_REQUEST["comptes"]; // For the select to choose the type of your account

    if(empty($user))
    {
      $errorMsg[]="Veuillez saisir votre nom d'utilisateur"; // Que le champ ne soit pas vide

    }

    else if (empty($pass))
    {
      $errorMsg[]="Veuillez saisir votre mot de passe";
    }

    else if (empty($role))
    {
      $errorMsg[]="Veuillez saisir votre mot de passe";
    }

      else if ($user AND $pass AND $role)
        {
          try
          {
            $select_stmt=$conn->prepare("SELECT username,passwords,type_compte FROM utilisateur WHERE username=:uname AND passwords=:upassword AND type_compte=:urole");
            $select_stmt->bindParam(":umame",$user);
            $select_stmt->bindParam(":upassword",$pass);
            $select_stmt->bindParam(":urole",$role);
            $select_stmt->execute();//Excecuter la requete

              while($row=$select_stmt->fetch(PDO::FETCH_ASSOC))// Fetch les données 
            {
              $dbuser = $row["username"];
              $dbpass = $row["passwords"];
              $dbrole = $row["type_compte"];
            }

            if($user!=null AND $pass!=null AND $role!=null)// voir si ces champs ne sont pas null epuis continuer
            {
              if($select_stmt->rowCount()>0) // voir s'il ya au moins une ligne dans la table
              {
                if($user==$dbuser AND $pass==$dbpass AND $role==$dbrole) // check type textbox username, password role and fetchable erecord new variable are true after continue
                {
                  switch($dbrole)// role base user login start
                  {
                    case "gestion" :
                      $_SESSION["gestion_login"]=$user;
                      $loginMsg="GEstionnaire... connecté avec success";
                      header("refresh:3;gestionnaire.php");
                      break;

                    case "membre" :
                      $_SESSION["membre_login"]=$user;
                      $loginMsg="Admin... Membre  connecté avec success";
                      header("refresh:3;membrelog.php");
                      break; 

                      default :
                      $errorMsg[]="Nom d'utilisateur , compte ou mot de passe incorrect";

                  }   
                }

                else
                {
                  $errorMsg[]="Nom d'utilisateur , compte ou mot de passe incorrect";
                  
                }
              }
                else
                {
                  $errorMsg[]="Nom d'utilisateur , compte ou mot de passe incorrect";
                  
                }
            }
          } 

          catch(PDOException $e)
          {
            $e->getMessage();
          }
        }

      else{
        $errorMsg[]="Nom d'utilisateur , eompte ou mot de passe incorrect";
      }
  }
?>