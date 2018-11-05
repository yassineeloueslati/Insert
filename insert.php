<?php
include_once("connect.php");

if ($_REQUEST['nom'])
{
	$nom=$_REQUEST['nom'];
	$prenom=$_REQUEST['prenom'];
	$phone=$_REQUEST['phone'];
	$job=$_REQUEST['job'];
	$sql = "INSERT INTO membre (nom, prenom, phone, job )
	VALUES ('$nom', '$prenom', '$phone','$job')";	

	if ($conn->query($sql) === TRUE) {
	    echo "Ajout terminer!!!";
	} else {
	    echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	$conn->close();
}
?>