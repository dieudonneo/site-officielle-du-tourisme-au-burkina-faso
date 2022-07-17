<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta charset="utf-8" />
	<title>BIEN VENU SUR LA PAGE D'INSCRIPTION DU TOURISME BURKINABE</title>
	<link rel="stylesheet" type="text/css" href="css.css">
	<script src="script.js"async></script>
</head>
<body id="de">	
	  <h1 class="tête" >Bienvenue sur la page d'inscription du tourisme au Burkina Faso </h1><br>
    <nav  class="ins" id="navA">
     <form action= "<?php echo $_SERVER['PHP_SELF'];?>"method="post" >
        <fieldset > 
	          <table class="tab">
								<tr><td><input class="input" type="text"  placeholder="Nom..."" name="Nom" size="20" maxlength="30"/></td></tr> 
								<tr><td><input class="input" type="text"  placeholder="Prenom..." name="Prenom" size="40" maxlength="30"/></td></tr>
								<tr><td><input class="input" type="text"  placeholder="Age..." name="Age" size="5" /> </td></tr>
						    <tr><td><input class="input" list="sexe"  placeholder="Sexe..." type="" name="Sexe" size="10" maxlength="60"/>
								     <datalist id="sexe">
											<option value="Homme"></option>
											<option value="Femme"></option>
								     </datalist> </td></tr>
                <tr><td><input class="input" placeholder="Votre Adresse..." type="text" name="Adresse" size="40" maxlength="60"/></td></tr>
                <tr><td><input class="input" placeholder="Votre Pays..." type="text" name="Pays" size="40" maxlength="40"/> </td></tr>
                <tr><td><input class="input" placeholder="Votre ville..." type="text" name="Ville" size="40" maxlength="40"/> </td></tr>
                <tr><td><input class="input" placeholder="Numero_Telephone..." type="entier" name="Numero" size="40" maxlength="40"/> </td></tr>
								<tr><td><input class="input" type="email" placeholder="Email..." name="Email" size="40" maxlength="50"/> </td></tr>
                <tr><td><input class="input" list="Site" placeholder="Choix du site de visite..." type="" name="Site" size="40" maxlength="60"/>
                  <datalist id="Site" id="p">
					           <option value="LES REUINES DE LOROPENI"></option>
					           <option value="LES CASCADES DE BANFORA"></option>
					           <option value="LES DÔMES DE FABÉDOUGOU"></option>
					           <option value="Forêt classée de Nazinga"></option>
					           <option value="La vielle mosquée de Dioulassoba, à Bobo-Dioulasso"></option>
					           <option value="Les Pics de Sindou"></option>
					           <option value="Lac de Tengrela"></option>
					           <option value="MAUSOLÉE TIÉFO AMORO"></option>
					           <option value="PRINCESSE GUIMBI OUATTARA"></option>
					           <option value="MASQUES DE GOSSINA"></option>
					           <option value="VILLAGE DE NIANSOGHNI"></option>
					           <option value="HABITATS PEULH"></option>
					           <option value="MOSQUÉES DE BANI"></option>
					           <option value="Mausolée de Naaba Yadéga "></option>
					           <option value="Les magnifiques dunes de sable d'Oursi"></option>				           
					           <option value="Musée Archéologique de Polé Mengao"></option>
					           <option value="Parc animalier de ZINIARE"></option>
					           <option value="Mausolée de Naaba Oubri"></option>
					           <option value="Mares aux Crocodiles Sacrés de Sabou"></option>
                     <option value="4.	Mare aux hippopotames de Zengho"></option>
                     <option value="HABITATS KASSÉNA DE TIÉBELÉ"></option>
                     <option value="VILLAGE ARTISANAL DU SIAO"></option>
                     <option value="SCULPTURE SUR GRANIT DE LAONGO"></option>
                     <option value="PALAIS ROYAL DE KOKOLOGO"></option>
                     <option value="TIWÊGA"></option>
                     <option value="DANSE WARBA ET DANSE GOUROUNSI"></option>
	        	      </datalist></td></tr>
                <tr><td><input class="input" type="date" name="Date" size="40" maxlength="60" /></td></tr>
								<tr><td><input class="recherche3" name="sub" type="reset" value=" Effacer " style="border-radius: 50px 50px 50px 50px;margin-left: -200px;top: 10px;" ></td><td> <pre>              
								 <input class="recherche3" type="submit" value=" Envoyer " name="sub" style="border-radius: 50px 50px 50px 50px;margin-left: -600px;"></pre></td></tr>
								</table></fieldset></form></nav>
	  <ul id="li2"><a href="index.php"><input type="submit" name="sub" value="<<<" style=" border-radius: 50px 50px 50px 50px;margin-left: -450px;top:-100px;width: 70px;"></a></ul>
	  <marquee direction="right"><h">BURKINA FASO TERRE D'ACCUEILLE ET DE TRADITION, PAYS DE CULTURE</h></marquee>
      <?php  
          include("myconnexpdo.inc.php"); 
          $idcom=connexpdo('entreprise','myparam');
          if(!empty($_POST['Nom']) && !empty($_POST['Ville']) && !empty($_POST['Site']) && !empty($_POST['Date']))
             {
        		include("php1.php");
        		   $id="\N";
                   $CODE0=genererChaineAleatoire(8);
				   $code_client=$idcom->quote($CODE0);
				   $Nom=$idcom->quote($_POST['Nom']);
				   $Prenom=$idcom->quote($_POST['Prenom']);
				   $Age=$idcom->quote($_POST['Age']);
                   $Adresse=$idcom->quote($_POST['Adresse']);
				   $Sexe=$idcom->quote( $_POST['Sexe'] );
				   $Site=$idcom->quote( $_POST['Site'] );
                   $Date=$idcom->quote($_POST['Date']  );
                   $Pays=$idcom->quote($_POST['Pays']  );
                   $Numero=$idcom->quote($_POST['Numero']);
				   $Villes=$idcom->quote($_POST['Ville']);
				   $Mail=$idcom->quote($_POST['Email']);
						 //Requête SQL

				    $requete="INSERT INTO  client VALUE($id,$Nom,$Prenom,$Age,$Sexe,$Numero,$Adresse,$Pays ,$Villes,$Mail)";
				    $nblignes=$idcom->exec($requete);
					if($nblignes!=1)
						   { 
						  	$mess_erreur=$idcom->errorInfo();
						    echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
						    echo "<script type=\"text/javascript\"> alert('Erreur : ".$idcom->errorCode()."')</script>"; 
						   }
					else {     
						      $id= $idcom->lastInsertId();
					          echo "<script type=\"text/javascript\"> alert('       Vous êtes enregistré\\n\\n    Votre numéro de client est:  ".$id."\\n    votre code client est:  ".$CODE0." ')</script>";
                             $requete1="INSERT INTO reservation VALUE($code_client,$id,$Site,$Date)";
                             $nbligne=$idcom->exec($requete1);
                            if($nbligne!=1)
                              {
                            	  echo "nombre de ligne(s) inserer:$nbligne";
                 	              $mess_erreur=$idcom->errorInfo();
	                              echo "Insertion impossible, code", $idcom->errorCode(), $mess_erreur[2];
	                              echo "<script type=\"text/javascript\"> alert('Erreur : ".$idcom->errorCode()."')</script>"; 
                               }  
					                      $idcom=null;
					                    } 
                              }
                          else{ 
                              	  	echo "<script type=\"text/javascript\"> alert('  Formulaire à compléter!!!')</script>"; 
                              	  }                 
                             ?>
</body>
</html>