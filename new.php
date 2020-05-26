<?php
require("inc/bd-connect.php"); 
require('fonctions.php');
require('inc/head.html');
require('inc/header.html');

$logo = !empty(htmlspecialchars($_POST['logo'])) ? htmlspecialchars($_POST['logo']) : "";
$name = !empty(htmlspecialchars($_POST['company-name'])) ? htmlspecialchars($_POST['company-name']) : "";
$place = !empty(htmlspecialchars($_POST['company-place'])) ? htmlspecialchars($_POST['company-place']) : "";
$description = !empty(htmlspecialchars($_POST['about'])) ? htmlspecialchars($_POST['about']) : "";
$creation = !empty($_POST['company-date-number']) ? $_POST['company-date-number'] : NULL;
$collaborators = !empty($_POST['company-collaborator']) ? $_POST['company-collaborator'] : NULL;
$mediumAge = !empty($_POST['company-medium-age']) ? $_POST['company-medium-age'] : NULL;
$men = !empty($_POST['company-parity-men']) ? $_POST['company-parity-men'] : NULL;
$women = !empty($_POST['company-parity-women']) ? $_POST['company-parity-women'] : NULL;
$contactName = !empty(htmlspecialchars($_POST['company-contact-name'])) ? htmlspecialchars($_POST['company-contact-name']) : "";
$contactPoste = !empty(htmlspecialchars($_POST['company-contact-poste'])) ? htmlspecialchars($_POST['company-contact-poste']) : "";
$contactMail = !empty(htmlspecialchars($_POST['company-contact-mail'])) ? htmlspecialchars($_POST['company-contact-mail']) : "";

$requete="INSERT INTO entreprise(logo, titre, description, ville, creation, collaborateur, ageMoyen, tauxHomme, tauxFemme) VALUES (:logo, :name, :description, :place, :creation, :collaborators, :mediumAge, :men, :women)";

$req=$bd->prepare($requete);
$req->bindValue(':logo',$logo);
$req->bindValue(':name',$name);
$req->bindValue(':description',$description);
$req->bindValue(':place',$place);
$req->bindValue(':creation',$creation);
$req->bindValue(':collaborators',$collaborators);
$req->bindValue(':mediumAge',$mediumAge);
$req->bindValue(':men',$men);
$req->bindValue(':women',$women);
$req->execute();

$id = getLastEntrepriseId($bd);

$requete2 = "INSERT INTO contact(id_entreprise, nom, poste, mail) VALUES (:id, :name, :poste, :mail)";
$req2=$bd->prepare($requete2);
$req2->bindValue(':id',$id);
$req2->bindValue(':name',$contactName);
$req2->bindValue(':poste',$contactPoste);
$req2->bindValue(':mail',$contactMail);
$req2->execute();?>

<div class="d-flex h-100 px-3">
	<div class="justify-content-center align-self-center alert alert-success" role="alert">
		Votre entreprise a été enregistrée avec succès !
	</div>
</div>

<?php require('inc/footer.html');?>
<meta http-equiv="refresh" content="2; URL=index.php" />