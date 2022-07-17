<?php
if(empty($_POST['code']))
  {
    header("Location:identification.php");
  } 
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
      <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
      <title>Page_Identifications</title>
      <link rel="stylesheet" type="text/css" href="css.css">
  </head>
 <body  id="de1">
    <h1 class="tête" >Bienvenue sur la page de Modification des Informations personnelles </h1><br>    
    <nav   id="navA2id" class="ins1" > 
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
        echo "<script type=\"text/javascript\"> location.replace('identification.php');</script>"; 
      }
          //Création du formulaire complété avec les données existantes 
      echo "<form action= \"". $_SERVER['PHP_SELF']."\" method=\"post\" enctype=\"application/x-www-form-urlencoded\">";
      echo "<fieldset>";
      echo "<legend><b>Modifiez vos coordonnées</b></legend>";
      echo "<table>";
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
      echo "</fieldset>";
      
      echo "</form>";
      $result->closeCursor();
      $idcom=null;
     }
    else
   {
     echo "Modifier vos coordonnées!";
   }    
  ?>
  </body>
  </html>