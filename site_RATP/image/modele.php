<?php
    /*
    dans ce fichier, on réalise toutes les focntions de connexion 
    à la BDD, deconnexion de la BDD et exécution de l'ensemble des 
    requetes sur les tables de la BDD : insert, delete, update, select
    */
    function connexion (){
        $connexion = mysqli_connect ("localhost","root", "YES", "ratp_284");
        if ($connexion == null){
            echo "Erreur de connexion au serveur Mysql.";
        }
        return $connexion;
    }
    function deconnexion ($connexion){
            mysqli_close ($connexion);

    }
    /***************** Gestion des lignes ******/
    function insertLigne ($tab){
        $requete = "insert into ligne values (null, '"
        .$tab['description']."', '"
        .$tab['statdebut']."', '"
        .$tab['statfin']."', '"
        .$tab['nbStations']."') ; ";

        $con = connexion (); // appel de la connexion
        mysqli_query($con, $requete); // execution de la requete
        deconnexion($con); // deconnexion de la base de données

    }
    function selectAllLignes (){
        $requete ="select * from ligne;"; // ecrire la requete
        $con = connexion ();// connexion à la base de donnee
        $lesLignes = mysqli_query($con, $requete);
        deconnexion($con);
        return $lesLignes;
        // requete qui permet d'extraire les lignes

    }
    function deleteLigne($idLigne){
        $requete ="delete from ligne where idligne=".$idLigne; //supprimer la ligne sur le site
        $con = connexion ();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function updateLigne($tab){ // cette fonction permet de faire une mise à jour des lignes
        $requete="update ligne set description='"
        .$tab ['description']."', stationDebut='"
        .$tab ['statdebut']."', stationFin='"
        .$tab ['statfin']."', nbStations='"
        .$tab ['nbStations']."'  where idligne="
        .$tab ['idligne'];
        echo $requete;
        $con = connexion ();
        mysqli_query($con, $requete);
        deconnexion($con);
    }
    function selectWhereLigne ($idligne){
        $requete="select *from ligne where idligne=".$idligne;
        $con = connexion();
        $resultats = mysqli_query($con, $requete);
        $lesLignes = mysqli_fetch_assoc($resultats);
        deconnexion($con);
        return $lesLignes;
    }
    /****************** Gestion des bus ******/
    function insertBus ($tab){
        $requete = "insert into Bus values (null, '"
        .$tab['matricule']."', '"
        .$tab['marque']."', '"
        .$tab['capacite']."', '"
        .$tab['energie']."') ; ";

        $con = connexion (); // appel de la connexion
        mysqli_query($con, $requete); // execution de la requete 
        deconnexion($con); // deconnexion de la base de données
    }
    function selectAllBus (){
        $requete ="select * from Bus;"; // ecrire la requete
        $con = connexion ();// connexion à la base de donnee
        $lesBus = mysqli_query($con, $requete);
        deconnexion($con);
        return $lesBus;
    }

    /****************** Gestion des chauffeurs ******/
    function insertChauffeur ($tab){
        $requete = "insert into chauffeur values (null, '"
        .$tab['nom']."', '"
        .$tab['prenom']."', '"
        .$tab['email']."', '"
        .$tab['mpd']."','"
        .$tab['adresse']."') ; ";

        $con = connexion ();
        mysqli_query($con, $requete); 
        deconnexion($con);
    }
    function selectAllChauffeur (){
        $requete ="select * from chauffeur;"; // ecrire la requete
        $con = connexion ();// connexion à la base de donnee
        $lesChauffeurs = mysqli_query($con, $requete);
        deconnexion($con);
        return $lesChauffeurs;
    }
     /****************** Gestion des affectations ******/
     function insertAffectation ($tab){
        $requete = "insert into affectation values (null, '"
        .$tab['description']."', '"
        .$tab['dateaffectation']."', '"
        .$tab['idligne']."', '"
        .$tab['idbus']."','"
        .$tab['idchauffeur']."') ; ";

        $con = connexion ();
        mysqli_query($con, $requete); 
        deconnexion($con);
    }
    function selectAllAffectation (){
        $requete ="select * from affectation;"; // ecrire la requete
        $con = connexion ();// connexion à la base de donnee
        $lesAffectations = mysqli_query($con, $requete);
        deconnexion($con);
        return $lesAffectations;
    }
    ?>