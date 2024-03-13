<h2> Gestion des lignes </h2>

<?php
$laLigne = null; // declaration de la ligne
     if (isset($_GET['action']) && isset($_GET['idligne']))
     {
          $action = $_GET['action'];
          $idligne = $_GET['idligne'];
          switch ($action){
               case "sup": deleteLigne($idligne); break;
               case "edit":
               $laLigne = selectWhereLigne($idligne);
               
               break;
          }
     }
     require_once ("vue/vue_insert_ligne.php");
     if (isset($_POST['Valider'])){
          //insertion de la ligne dans la table ligne
          insertLigne ($_POST);
          echo "<br> Insertion réussie de la ligne.";

     }
     if (isset($_POST['Modifier']))
     {
          updateLigne($_POST);
          // recharger la page
          header(("Location: index.php?page=2"));
     }
     //extraction des lignes
     $lesLignes = selectAllLignes ();

     
     require_once ("vue/vue_select_lignes.php");

?>