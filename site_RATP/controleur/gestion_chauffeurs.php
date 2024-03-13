<h2> Gestion des chauffeurs </h2>

<?php
    require_once ("vue/vue_insert_chauffeur.php");
    if (isset($_POST['Valider'])){
        //insertion de la ligne dans la table chauffeurs
        insertChauffeur ($_POST);
        echo "<br> Insertion réussie des chauffeurs.";

   }
    //extraction des lignes
    $lesChauffeurs = selectAllChauffeur ();

    require_once ("vue/vue_select_chauffeur.php");
?>