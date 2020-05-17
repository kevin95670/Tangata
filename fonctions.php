<?php 

function getEntreprises($bd){
	
	$entreprises = 'select id, logo, titre, description from entreprise';
	$req=$bd->prepare($entreprises);
	$req->execute();
	
	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getEntreprise($bd){
	
	$entreprise = 'select * from entreprise e join competence c on e.id = c.id_entreprise where e.id=:entreprise ';
	$req=$bd->prepare($entreprise);
	$req->bindValue(':entreprise',$_GET['entreprise']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getEntrepriseOffers($bd){
	
	$offers = 'select o.image, o.titre, o.description from offre o join entreprise_offre eo on o.id = eo.id_offre where eo.id_entreprise =:entreprise';
	$req=$bd->prepare($offers);
	$req->bindValue(':entreprise',$_GET['entreprise']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getOffer($bd){
	
}

function getEntrepriseEvents($bd){
	
	$events = 'select e.image, e.titre, e.date, e.adresse from evenement e join entreprise_evenement ee on e.id = ee.id_evenement where ee.id_entreprise =:entreprise';
	$req=$bd->prepare($events);
	$req->bindValue(':entreprise',$_GET['entreprise']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}