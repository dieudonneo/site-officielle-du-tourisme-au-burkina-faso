<?php
if(empty($_POST['email']))
  {
    header("Location:oublier.php");
  } 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
"http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
   <title>identification du client</title>
  <link rel="stylesheet" type="text/css" href="css.css">
  </head>
  <body  id="de1">
    <nav   id="navA3ob" class="ins1" >
    <?php
    include('myconnexpdo.inc.php');
    $idcom=connexpdo('entreprise','myparam');
    if(!isset($_POST['modif']))
     {
      $email=$idcom->quote($_POST['email']);  
      //Requête SQL
      $requete="SELECT Reservation.id_client,Reservation.code_client
                 FROM Client
                INNER JOIN Reservation ON Client.id_client = Reservation.id_client
                WHERE Client.Mail= $email;";
      $result=$idcom->query($requete);
      $coord=$result->fetch(PDO::FETCH_NUM);
      if(empty($coord))
      { 
        echo "<script type=\"text/javascript\"> location.replace('oublier.php');</script>"; 
      }
           //Création du formulaire complété avec les données existantes 
      echo "<form action= \"". $_SERVER['PHP_SELF']."\" method=\"post\" enctype=\"application/x-www-form-urlencoded\">";
      echo "<fieldset>";
      echo "<legend><b>identification du client</b></legend>";
      echo "<table>";
      echo "<tr><td>IDENTIFIANT DU CLIENT : </td><td><input type=\"email\" name=\"\"size=\"40\" maxlength=\"50\" value=\"$coord[0]\"/> </td></tr>";
      echo "<tr><td>       CODE DU CLIENT : </td><td><input type=\"text\" name=\"\"size=\"40\" maxlength=\"50\" value=\"$coord[1]\"/></td></tr>";
      echo "</form>";
      $result->closeCursor();
      $idcom=null;
     }
     ?>
     </nav>
  </body>
</html>

