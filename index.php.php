<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
	   <!-- En-tête de la page -->
	  <meta charset="utf-8" />
	  <title>BURKINA FASO : site Touristique </title>
	   <link rel="stylesheet" type="text/css" href="css.css">
	    <script type="text/javascript" src="script.js"defer></script>
  </head>
<body >
   <div class="div1">
    <aside>	
	  <form class="form" method="post"  type="menu">
		<select value=""  name="choix" id="menu">
			<optgroup label="Menu">
			<option value="Menu">Menu </option>
			<option value="inscription">page d'inscription</option>
       <option value="modification">Page modification</option>
			<option value="est_ouest">page du site de l'Est et l'Ouest </option>
			<option value="nord_centre">page du site du Nord et du Centre</option>
			</optgroup>
		</select>
		<br><input type="submit" name="sub" value="validé" onclick="ouvrirPage1()"  style="border-radius: 50px 50px 50px 50px;m">
    </form>  
            <nav class="body1">
	          <div class="box">
		           <h class="h11">Search</h>
	             	<form method="post" id="id_form" action="">
		           	<input  list="recherche" class="input1" type="search" name="rech" id="search"  placeholder="Rechercher...">
			          <datalist id="recherche">
            		<option value="site du nord">
        	   		<option value="site du centre"> 
        				<option value="site de l'est"> 
        					<option value="site de l'ouest"> 
                </datalist>
		            <input type="button" name="sub" value="validé"  onchange="ouvrirPage()" onclick="ouvrirPage()" id="button"></form>
	            </div>
           </nav>
        </aside>
        <h1 class="h1">BURKINA FASO</h1>
	   <h1 class="tête">Bienvenue sur le site Officiel du Tourisme au Burkina Faso </h1></div>
	<h2 id="li">Les zones touristiques du Burkin Faso</h2> 
	<p class="ss"  style="margin-left: 200px;">Au Burkina Faso on distingue 4 zones touristiques qui sont les suivants : le Centre, le Nord, l'Est et enfin l'Ouest.
	Ces 4 zones regorgent de nombreuses potentialités et de mystère qui sont perpétué de générations en génération.<br/>
	 Tous ces atouts confèrent à dire que le Burkina Faso est une destination de rêve.</p>
     <ol>
     <h2 id="Nord_Centre"><li id="li"> NORD ET CENTRE</li></h2>
     <ruby>
     	<img src="images/C00.webp" alt="Photo" height="280px"/><rt>VILLAGE ARTISANAL DU SIAO </rt>  <img src="images/N20.jpg" alt="Photo" height="280px"/><rt>MOSQUEES DE BANI</rt>  <img src="images/C81.jfif" alt="Photo" height="280px"/><rt>SCULPTURE SUR GRANIT DE LAONGO BANI</rt> </ruby>
     	<div class="inline">
	 <p  class="ss2"><details class="ss" ><summary><strong>Info NORD</strong></summary> Cette zone prédésertique présente un environnement exotique avec une tradition forte,
	 des différences culturelles très marquées(il très mal vue de demander de l’eau dans cette région, mieux vaut se retenir, des paysages extraordinaires…).</details><details class="ss"><summary><strong>Info CENTRE</strong></summary>Représenter par Ouagadougou et ses environs. Ouaga constitue le carrefour de l’Afrique de l’Ouest et est animé principalement par le tourisme des affaires (beaucoup de conférences, de colloques ont lieux à Ouagadougou, ce qui touche le tourisme à travers l’hôtellerie, les différentes visites et excursions…), les flux touristiques se font également par le rythme des manifestions culturelles annuelles qui s’y déroulent.</details></p></div>
	 <ul id="li2"><a href="site_du_nord_et_centre.html"><input type="submit" name="sub" value="Nord_Centre" style="border-radius: 25px 0px 25px 0"></a></ul>
	 <h2 id="Est_Ouest"><li id="li">EST ET OUEST</li></h2>
	 <ruby>
	  <img src="images/E52.jpg" alt="Photo" height="277px"/><rt>LA VIELLE MOSQUEE DE DIOULASSOBA</rt>   <img src="images/O43.jfif" alt="Photo" height="277px"/><rt>MASQUES DE GOSSINA</rt>  <img src="images/E21.jpg" alt="Photo" height="277px"/><rt>LES CASCADES DE BANFORA</rt> <img src="images/E61.jpg" alt="Photo" height="277px"/><rt>LES PICS DE SINDOU</rt></ruby> 
	 <div class="inline">
	  <p class="ss2"><details class="ss"><summary><strong>Info EST</strong></summary>Avec tous les grands parcs naturels qui possèdent encore une faune et une flore très riche et protégées, il s’agit d’un tourisme de vision, cynégétique (tourisme basé sur l’activité de chasse).</details> <details class="ss"><summary><strong>Info OUEST</strong></summary>Bobo-Dioulasso est ses environs, les différents peuples de région apportent une richesse culturelle qui n’est malheureusement pas encore valorisée et peu connue…</details></p></div>
	  <ul id="li2"><a href="site_du_nord_et_centre.html"><input type="submit" name="sub" value=" Est_Ouest" style="border-radius: 25px 0px 25px 0"></a></ul> </ol>
      <h1 class="tête">Nos grands événements</h1>
      <p id="li2" >Parmi les événements incontournables au Burkina Faso, on peut citer :</p></pre>
      <ul id="li2">
        <ul id="li2"><a href="https://fespaco.org/"><input type="submit" name="sub" value="FESPACO" style="border-radius: 25px 25px 25px 25px;margin-left: -670px;width: 120px;"></a></ul>

        <ul id="li2"><a href="https://www.siao.bf/"><input type="submit" name="sub" value="SIAO" style="border-radius: 25px 25px 25px 25px;margin-left: -545px;width: 80px; top: -45px;"></a></ul>

        <ul id="li2"><a href="https://www.kunde.bf/"><input type="submit" name="sub" value="Kundé" style="border-radius: 25px 25px 25px 25px;margin-left: -460px;width: 100px; top: -90px;"></a></ul>

        <ul id="li2"><a href="https://www.jazzaouaga.org/"><input type="submit" name="sub" value="Jazz à Ouaga" style="border-radius: 25px 25px 25px 25px;margin-left: -355px;width: 170px; top: -135px;"></a></ul>

        <ul id="li2"><a href="https://www.l-expert-comptable.com/a/532256-qu-est-ce-qu-une-snc-societe-en-nom-collectif.html"><input type="submit" name="sub" value="SNC" style="border-radius: 25px 25px 25px 25px;margin-left: -180px;width: 70px; top: -183px;"></a></ul>

        <ul id="li2"><a href="https://www.ontb.bf/evenements/sitho"><input type="submit" name="sub" value="SITHO" style="border-radius: 25px 25px 25px 25px;margin-left: -105px;width: 90px; top: -228px;"></a></ul>

        <ul id="li2"><a href="https://www.ontb.bf/evenements/nak"><input type="submit" name="sub" value="NAK" style="border-radius: 25px 25px 25px 25px;margin-left: 62px;width: 80px;top: -275px;"></a></ul>

        <ul id="li2"><a href="https://www.burkinatourism.com/FITD-Le-Festival-International-de-Theatre-pour-le-Developpement.html"><input type="submit" name="sub" value="FITD" style="border-radius: 25px 25px 25px 25px;margin-left: 230px;width: 75px;top: -320px;"></a></ul>

        <ul id="li2"><a href="https://acmur-rdvcheznous.org/"><input type="submit" name="sub" value="Rendez Vous Cherz Nous" style="border-radius: 25px 25px 25px 25px;margin-left: 615px;width: 300px;top: -370px;"></a></ul>

        <ul id="li2"><a href="https://www.ontb.bf/evenements/boloarts"><input type="submit" name="sub" value="BOLO'ARTS" style="border-radius: 25px 25px 25px 25px;margin-left: 1075px;width: 150px;top: -418px;"></a></ul>
      <nav id="form">
       <form  action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" >      
        <br><br><h2 > Plus d'informations </h2>
        <label for="nom" >Nom&nbsp &nbsp &nbsp &nbsp &nbsp</label>
        <input type="text" name="nom" placeholder="Entrez votre Nom..." id="nom" style="border-radius: 30px;"><br/>
        <br/><label for="prenom" >Prénom &nbsp &nbsp</label>
        <input type="text" name="prenom" placeholder="Entrez votre Prénom..." id="prenom" style="border-radius: 30px;"><br/>
        <br/><label for="email" >Email&nbsp &nbsp&nbsp&nbsp&nbsp&nbsp</label>
        <input type="email" name="email" placeholder="Entrez votre Email..." id="email" style="border-radius: 30px;"><br/>
        <br/><label for="question" >&nbsp   Questions</label>
        <p><textarea name="question" placeholder="        Entrez vos Questions..."  rows="5" cols="50" style="border-radius:0px 30px 30px;"></textarea></p>
         <input class="recherche2" type="submit" value=" Envoyer " name="sub" style="border-radius: 25px 0px 25px 0 ;top: -20px;">
       </form></nav><br><br><br><br>
        <?php
          include("myconnexpdo.inc.php");
          $idcom=connexpdo('utilisateur','myparam');
              if(!empty($_POST['nom']) && !empty($_POST['email']) && !empty ($_POST['question']))
              {
                  $id="\N";
                  $nom=$idcom->quote($_POST['nom']); 
                  $prenom=$idcom->quote($_POST['prenom']);
                  $mail=$idcom->quote($_POST['email']); 
                  $question=$idcom->quote($_POST['question']);
                  $requete="INSERT INTO dialogue VALUES($id,$nom,$prenom,$mail,$question)";
                  $nb=$idcom ->exec($requete); 
                  if($nb!=1) 
                     {
                      $mess_erreur=$idcom->errorInfo();
                      echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
                      echo "<script type=\"text/javascript\“> alert('Erreur : ".$idcom->
                      errorCode()."') </script>";                        
                     }
                   else
                     {
                      echo "<script type=\"text/javascript\">
                                alert('Merci cher utilisateur votre requête a été envoyé avec succès\\nNos services vous enverront un retour sur vôtres Mail. \\n Avec l\'adresse: burkinatourisme@yahoo.com.')
                              </script>";
                              $idcom=null;
                     }   
                     }           
                      else
                   { 
                     echo "<script type=\"text/javascript\">   </script>"; 
                   }          
           ?>
   <br><br><br><br> <nav id="form1" >
   <br><br><br><ul id="li2"><a href="Page_inscription.php"><input type="submit" name="sub" value="Inscription" style="border-radius: 0px 25px 0px 25px;margin-left: 50px;top:-6px;"> </a></ul> </ol>
    <br><ul id="li2"><a href="modification.php"><input type="submit" name="sub" value="Modification" style="border-radius: 25px 0px 25px 0;margin-left: 60px;top:20px;"></a></ul> </ol>
    <br><ul id="li2"><a href="identification.php"><input type="submit" name="sub" value="login" style=" border-radius: 0px 25px 25px 25px;margin-left: -150px;top:-108px;width: 120px;"></a></ul>
  </nav><br><br><br><br>
  <nav id="form2"> <marquee behavior="alternate"><h2>&nbsp &nbsp&nbsp&nbsp&nbsp&nbspCONCEPTEURS</h2>
                                                 <h><img src="images/aaa.jpg" alt="60px" height="60px3"/>&nbsp&nbsp&nbsp&nbsp COULIBALY Ramiz&nbsp&nbsp&nbsp&nbsp</h><h><img src="images/aa.jpg" alt="60px" height="60px3"/>&nbsp&nbsp&nbsp&nbsp&nbspOUEDRAOGO Dieudonne</h>
                                                 <h2>&nbsp &nbsp&nbsp&nbsp&nbsp&nbspProfesseur_Responsable </h2>
                                                 <h4><img src="images/aaaa.png" alt="60px" height="60px3"/>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Dr. PODA PASTEUR</h4>
   </marquee ></nav><br><br><br><br><br><br><br><br><br><br><br>
 <figure >         
  <nav style="background-color: white;">
<marquee direction="right" style="border:solid" behavior="alternate"><h">BURKINA FASO TERRE D'ACCUEIL ET DE TRADITION, PAYS DE CULTURE</h>
</marquee>   
<marquee direction="right" style="border:solid;" behavior="alternate"><img src="images/z.jpg" alt="60px" height="60px3"/>..... burkinatourisme@yahoo.com.................WWW.burkinatourisme.fr <img src="images/face.jpg" alt="60px" height="60px3"/>
</marquee>
</nav>
</figure>
</body >
</html>