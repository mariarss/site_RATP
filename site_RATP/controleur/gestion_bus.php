<h2> Gestion des bus </h2>

<?php
    require_once ("vue/vue_insert_bus.php");
    if (isset($_POST['Valider'])){
        //insertion de la ligne dans la table bus
        insertBus ($_POST);
        echo "<br> Insertion réussie du Bus.";

    }
     //extraction des lignes
     $lesBus = selectAllBus ();

    require_once ("vue/vue_select_bus.php");
?>