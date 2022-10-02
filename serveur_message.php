<!-- <link rel="stylesheet" href="style/style_msg.css"> -->
<?php 
	// $delai=45;
	// $url="#chat";
	// header("Refresh: $delai;url=$url");
 ?>
<?php 
	include 'dbcon.php';
	$req = "SELECT * FROM messagerie ORDER BY date";
	$resultat = mysqli_query($con, $req);
	while ($row = mysqli_fetch_assoc($resultat)) {
		$id_dest = $row['id_destinataire'];
		$msg_bd = $row['message'];
		$qry = "SELECT * FROM client WHERE id=$id_dest";
		$result = mysqli_query($con, $qry);
		while ($ligne = mysqli_fetch_assoc($result)) {
			$nom_dest = $ligne['pseudo'];
			$type = $ligne['typeutilisateur'];
		echo "<b>" . $nom_dest . "</b>(<i>$type</i>)<b>" . ": </b>" . $msg_bd . "<br/>";
		}
	}
 ?>