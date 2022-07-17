
<?php 
      function genererChaineAleatoire($longueur)
             {
                  return substr(str_shuffle(str_repeat($x="0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ", ceil($longueur/strlen($x)))),1,$longueur);
   }
?>