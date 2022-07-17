<?php
if(empty($_POST['code']))
  {
    header("Location:modification.php");
  } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <title >Modifiez vos Informations</title>
   <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body id="de">
     <h1 class="tête" >Bienvenue sur la page de Modification des Informations personnelles </h1><br>     
      <nav  class="ins" id="navAM">
   <?php
    include('myconnexpdo.inc.php');
    $idcom=connexpdo('entreprise','myparam');
    if(!isset($_POST['modif']))
     {
      $code1=$idcom->quote($_POST['code']);
      $id1=$idcom->quote($_POST['id_client']);
      $id=(integer)$_POST['id_client'];  
      //Requête SQL
      $requete="CALL selection_client($code1, $id1) ";
      $result=$idcom->query($requete);
      $coord=$result->fetch(PDO::FETCH_NUM);
      if(empty($coord))
      { 
        echo "<script type=\"text/javascript\"> location.replace('modification.php');</script>"; 
      }
          //Création du formulaire complété avec les données existantes 
      echo "<form action= \"". $_SERVER['PHP_SELF']."\" method=\"post\" enctype=\"application/x-www-form-urlencoded\">";
      echo "<fieldset>";
      echo "<legend><b>Modifiez vos Informations</b></legend>";
      echo "<table >";
      echo "<tr><td>Nom : </td><td><input type=\"text\" name=\"nom\"size=\"40\" maxlength=\"30\" value=\"$coord[0]\"/> </td></tr>";
      echo "<tr><td>Prénom : </td><td><input type=\"text\" name=\"prenom\"size=\"40\" maxlength=\"30\" value=\"$coord[1]\"/></td></tr>";
      echo "<tr><td>Age : </td><td><input type=\"text\" name=\"age\"size=\"40\" maxlength=\"4\" value=\"$coord[2]\"/></td></tr>";
      echo "<tr><td>Sexe : </td><td><input type=\"text\" name=\"sexe\"size=\"40\" maxlength=\"12\" value=\"$coord[3]\"/></td></tr>";
      echo "<tr><td>Num_Tel : </td><td><input type=\"text\" name=\"numero\"size=\"40\" maxlength=\"20\" value=\"$coord[4]\"/></td></tr>";
      echo "<tr><td>Adresse : </td><td><input type=\"text\" name=\"adresse\"size=\"40\" maxlength=\"60\" value=\"$coord[5]\"/></td></tr>";
      echo "<tr><td>Pays : </td><td><input type=\"text\" name=\"pays\"size=\"40\" maxlength=\"20\" value=\"$coord[6]\"/></td></tr>";
      echo "<tr><td>Ville : </td><td><input type=\"text\" name=\"ville\"size=\"40\" maxlength=\"40\" value=\"$coord[7]\"/></td></tr>";
      echo "<tr><td>Mail : </td><td><input type=\"text\" name=\"mail\"size=\"40\" maxlength=\"50\" value=\"$coord[8]\"/></td></tr>";   
      echo "<tr><td>Site_visite : </td><td><input type=\"text\" name=\"Site_visite\"size=\"40\" maxlength=\"30\" value=\"$coord[9]\"/></td></tr>";
      echo "<tr><td>Date_visite : </td><td><input type=\"text\" name=\"Date_visite\"size=\"40\" maxlength=\"20\" value=\"$coord[10]\"/></td></tr>";
      echo "<tr><td><input type=\"hidden\" name=\"code\" value=$code1/></tr></td>";
      echo "<tr><td><input type=\"hidden\" name=\"id\" value=\"$id\"/></tr></td>";
      echo "</table>";  
      echo "<tr><td><input type=\"reset\" value=\" Effacer \"></td> <td><input type=\"submit\" name=\"modif\" value=\"Enregistrer\"></td></tr>";
      echo "</fieldset>";
      
      echo "</form>";
      $result->closeCursor();
      $idcom=null;
     }

  elseif(isset($_POST['Site_visite']) || isset($_POST['Date_visite']))
   {
   //ENREGISTREMENT
    $nom=$idcom->quote($_POST['nom']);
    $prenom=$idcom->quote($_POST['prenom']);
    $numero=$idcom->quote($_POST['numero']);
    $adresse=$idcom->quote($_POST['adresse']);
    $pays=$idcom->quote($_POST['pays']);
    $sexe=$idcom->quote($_POST['sexe']);
    $ville=$idcom->quote($_POST['ville']);
    $mail=$idcom->quote($_POST['mail']);
    $age=(integer)$_POST['age'];
    $code=$idcom->quote($_POST['code']);
    $Site_visite=$idcom->quote($_POST['Site_visite']);
    $Date_visite=$idcom->quote($_POST['Date_visite']);

    $id=(integer)$_POST['id'];
  
    

  //Requête SQL
    $requete="UPDATE Client SET Nom=$nom,Prenom=$prenom,Sexe=$sexe,Num_Tel=$numero,Adresse=$adresse,Pays=$pays,Ville=$ville,Mail=$mail,Age=$age WHERE id_client=$id"; 
    $requete1="UPDATE Reservation SET Site_visite=$Site_visite,Date_visite=$Date_visite WHERE id_client=$id And Code_client=$code";
    $result=$idcom->exec($requete);
    
    $result1=$idcom->exec($requete1);
    if($result!=1 && $result1!=1)
     {
      if($idcom->errorCode()!=0000)
      {
        echo "<script type=\"text/javascript\">
      alert('Erreur DAN LA REQUETE : ".$idcom->errorCode()."')</script>"; 
      }
      else
         echo "<script type=\"text/javascript\"> alert('Vos modifications sont enregistrées');location.replace('index.php');</script>"; 
     
      
     }
    elseif($result==1 || $result1==1)
     {
       echo "<script type=\"text/javascript\"> alert('Vos modifications sont enregistrées');location.replace('index.php');</script>";  
     }
     
     $idcom=null;
   }
  else
   {
     echo "Modifier vos coordonnées!";
   }    
  ?>
</nav>
  </body>
</html>