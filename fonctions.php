<?php 

function getEntreprises($bd){
	
	//Requête à faire
	//$id = 'select id from entreprise where TITRE_SERIE=:titreserie ';
	$req=$bd->prepare($id);
	$req->execute();
	
	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getEntreprise($bd){
	
	//Requête à faire
	//$id = 'select id from entreprise where e.id=:entreprise ';
	$req=$bd->prepare($id);
	$req->bindValue(':entreprise',$_GET['entreprise']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}