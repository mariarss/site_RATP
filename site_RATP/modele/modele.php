<?php
	/*
	dans ce fichier, on réalise toutes les fonctions de connexion à la BDD, deconnexion de la BDD et exécution de l'ensemble des requetes sur les tables de la BDD : insert, delete, update, select.
	*/

	function connexion (){
		$connexion =mysqli_connect("localhost:3606","root","root","ratp_284");
		if ($connexion == null){
			echo "Erreur de connexion au serveur Mysql.";
		}
		return $connexion;
	}
	function deconnexion ($connexion){
		mysqli_close($connexion);
	}
	/***************** Gestion des lignes *******/
	function insertLigne ($tab){
		$requete = "insert into ligne values (null, '"
		.$tab['description']."','"
		.$tab['statdebut']."','"
		.$tab['statfin']."','"
		.$tab['nbStations']."' ) ; ";

		$con = connexion (); //appel de la connexion 
		mysqli_query($con, $requete); //execution de la requete
		deconnexion($con); //deconnexion de la base de données
	}
	function selectAllLignes (){
		$requete ="select * from ligne ; ";
		$con = connexion ();
		$lesLignes = mysqli_query($con, $requete);
		deconnexion($con);
		return $lesLignes;
	}
	function deleteLigne ($idligne){
		$requete ="delete from ligne where idligne=".$idligne;
		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}
	function updateLigne ($tab){
		$requete="update ligne set description='"
		.$tab['description']  . "' , stationDebut='"
		.$tab['statdebut'] . "' , stationFin='"
		.$tab['statfin']   . "' , nbStations='"
		.$tab['nbStations']   . "' where idligne="
		.$tab['idligne'];
		echo $requete ;
		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}
	function selectWhereLigne ($idligne){
		$requete="select * from ligne where idligne=".$idligne;

		$con = connexion(); 
		$resultats = mysqli_query($con, $requete);
		$laLigne = mysqli_fetch_assoc($resultats) ;
		deconnexion ($con);
		return $laLigne ;
	}
	/**************** Gestion des bus *********/ 
	function insertBus ($tab){
		$requete = "insert into bus values (null, '"
		.$tab['matricule']. "','"
		.$tab['marque']   . "','"
		.$tab['capacite'] . "','"
		.$tab['energie']  . "'); "; 

		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}

	function selectAllBus ()
	{
		$requete ="select * from bus ; ";
		$con = connexion ();
		$lesBus = mysqli_query($con, $requete);
		deconnexion($con);
		return $lesBus;
	}
	/*********** Gestion Chaffeur ******/
	function insertChauffeur ($tab){
		$requete = "insert into chauffeur values (null, '"
		.$tab['nom']."','"
		.$tab['prenom']."','"
		.$tab['email']."','"
		.$tab['mdp']."','"
		.$tab['adresse']."'); "; 

		$con = connexion(); 
		mysqli_query($con, $requete); 
		deconnexion ($con); 
	}

?>








