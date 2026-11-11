<?php
	require "connexion.php" ;
	$nom = $_POST["nom"];
	$passe = password_hash( $_POST["passe"],PASSWORD_DEFAULT);
	$filiere =$_POST["filiere"];
	$sql = "INSERT INTO serveur (nom, passe, filiere)
		VALUES('$nom','$passe','$filiere')";
	if (mysqli_query($connexion,$sql)){

		echo "utilisateur a ajouter avec succes idnom" . mysqli_insert_id($connexion);
	} else {
		echo "erreur:" . mysqli_error($connexion);
	}
?>
<?php
	require "connexion.php";
	$sql ="select * FROM serveur";
	$resultat = mysqli_query($connexion,$sql);
	if (mysqli_num_rows($resultat) > 0)
	
	while ($serveur = mysqli_fetch_assoc($resultat)){
	
		echo $serveur["nom"] ."--".$serveur["filiere"];
		echo "--" . $serveur["passe"];
	}

	else{
		echo " Aucun server enregistrer ";
	}
?>	