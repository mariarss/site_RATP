<h2> Gestion des affectations </h2>

<?php
    require_once ("vue/vue_insert_affectation.php");
    if (isset($_POST['Valider'])){
        //insertion de la ligne dans la table chauffeurs
        insertAffectation ($_POST);
        echo "<br> Insertion réussie des affectations.";

   }
    //extraction des lignes
    $lesAffectations = selectAllAffectation ();

    require_once ("vue/vue_select_affectation.php");
?>