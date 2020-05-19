<?php 

function getEntreprises($bd){
	
	$entreprises = 'select id, logo, titre, description from entreprise';
	$req=$bd->prepare($entreprises);
	$req->execute();
	
	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getEntreprise($bd){
	
	$entreprise = 'select * from entreprise e join contact c on e.id = c.id_entreprise where e.id=:entreprise ';
	$req=$bd->prepare($entreprise);
	$req->bindValue(':entreprise',$_GET['entreprise']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getEntrepriseOffers($bd){
	
	$offers = 'select o.id, o.image, o.titre, o.description from offre o join entreprise_offre eo on o.id = eo.id_offre where eo.id_entreprise =:entreprise';
	$req=$bd->prepare($offers);
	$req->bindValue(':entreprise',$_GET['entreprise']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getOffer($bd){

	$offre = 'select e.logo, e.ville, e.description, e.id, o.mobiliteReduite, o.malentendant, o.malvoyant, o.titre, o.image, o.description from offre o join entreprise_offre eo on o.id = eo.id_offre join on entreprise e on eo.id_entreprise = e.id where eo.id_offre =:offer';
	$req=$bd->prepare($offre);
	$req->bindValue(':offer',$_GET['offer']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
	
}

function getOfferCompetence($bd){

	$competences = 'select c.nom from competence c join offre_competence oc on c.id = oc.id_competence where oc.id_offre =:offer';
	$req=$bd->prepare($competences);
	$req->bindValue(':offer',$_GET['offer']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getOfferExperience($bd){

	$experiences = 'select e.description from experience e join offre_experience oe on e.id = oe.id_experience where oe.id_offre =:offer';
	$req=$bd->prepare($experiences);
	$req->bindValue(':offer',$_GET['offer']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
	
}

function getOfferDiplome($bd){

	$diplomes = 'select d.nom from diplome d join offre_diplome od on d.id = od.id_diplome where od.id_offre =:offer';
	$req=$bd->prepare($diplomes);
	$req->bindValue(':offer',$_GET['offer']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
	
}

function getEntrepriseEvents($bd){
	
	$events = 'select e.id, e.image, e.titre, e.date, e.adresse from evenement e join entreprise_evenement ee on e.id = ee.id_evenement where ee.id_entreprise =:entreprise';
	$req=$bd->prepare($events);
	$req->bindValue(':entreprise',$_GET['entreprise']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getPartenaires($bd){
	$partenaires = 'select id, logo, nom, description from partenaire';
	$req=$bd->prepare($partenaires);
	$req->execute();
	
	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getPartenairesEntreprises($bd){
	$partenaires = 'select p.id, p.logo, p.nom, p.description from partenaire p join partenaire_entreprise pe on p.id = pe.id_partenaire where pe.id_entreprise =:entreprise';
	$req=$bd->prepare($partenaires);
	$req->bindValue(':entreprise',$_GET['entreprise']);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}

function getPartenairesByFilter($bd, $filters){
	$partenaires = "select p.id, p.logo, p.nom, p.description from partenaire p join specialisation_partenaire sp on p.id = sp.id_partenaire join specialisation s on sp.id_specialisation = s.id where s.nom IN ('".implode("','",$filters)."')";
	$req=$bd->prepare($partenaires);
	$req->execute();

	$res=$req->fetchAll(PDO::FETCH_ASSOC);
	return $res;
}