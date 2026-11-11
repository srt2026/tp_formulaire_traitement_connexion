<?php
$serveur ="localhost";
	$utilisateur ="root";
	$baseDeDonnees = "commerce";
	$motDePasse ="";
	$connexion = mysqli_connect($serveur, $utilisateur, $motDePasse, $baseDeDonnees );
	
	if (!$connexion ){
		die ("echec de connexion  a mysql:" .mysqli_connect_error ());
	}
	else { echo "<h1>connexion reussie</h1>";
	}
	
?>		