/*************************************************************************************/
/***      CREATION D'UNE FONCTION PERMETTENT DE SE DEPLACER SUR LA PAGE WEB(RECHERCHE)       ***/
/************************************************************************************/
    let bouton=document.getElementById("button");
    let champ=document.getElementById("search");
    bouton.addEventListener('click', function(){ouvrirPage;});

     function ouvrirPage()
     {
       if(champ.value == 'site du centre' || champ.value=='site du nord')
       {
          location.assign("#Nord_Centre");
           champ.value="";
       }

        else if(champ.value == 'site de l\'est' || champ.value=='site de l\'ouest')
          {
                location.replace("#Est_Ouest");
                  champ.value="";
          } 

     }

     



/************************************************************************************/
/************************************************************************************/

/*************************************************************************************/
/***      CREATION D'UNE FONCTION PERMETTENT D'OUVRIR UNE NOUVELLE PAGE WEB (MENU)       ***/
/************************************************************************************/

      
   let submit=document.getElementById("submit");
   let menu=document.getElementById("menu");

  
   submit.addEventListener('click', function(){ouvrirPage1;});

   function ouvrirPage1()
   {
     if(menu.value =="nord_centre")
       window.open("site_du_nord_et_centre.html");

     else if(menu.value == "est_ouest")
        {
         window.open("site_de_est_et_ouest.html");
        }
     else if(menu.value == "modification")
        {
          window.open("modification.php");
        }
     else if(menu.value == "inscription")
        {
          window.open("page_inscription.php");
        }
     else
        alert("echec dans l'ouverture de la page");
   }



