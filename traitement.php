<?php
try{
	
	$bdd = new PDO('mysql:host=localhost;dbname=school','root','');
}
catch(Exception $e){
header('location:erreur.php');

}
extract($_POST);
$req=$bdd->prepare('INSERT INTO personne (prenom,nom,adresse,ville,code) VALUES (?,?,?,?,?)');
$req->execute(array($prenom,$nom,$adresse,$ville,$code));
header('location:formulaire.php');



?>