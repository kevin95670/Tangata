<?php require_once('inc/head.html'); ?>

<body id="partenaires">

	<?php require_once('inc/header.html'); ?>

	<main>
		<div class="container">
			<div class="row position-relative background-image mb-5">
				<div class="overlay"></div>
				<div class="col-12">
					<h1>Une offre complète avec des partenaires experts pour vous épauler.</h1>
				</div>
			</div>
			<div class="row filters mb-5">
				<div class="col-md-12">
					<form method="post" action="filters.php" class="ml-4 text-left">
						<p class="filter-by mb-1">Filtrer par :</p>
						<div class="custom-control custom-checkbox">
						  <input class="custom-control-input" type="checkbox" value="sensibilisation" id="sensibilisation">
						  <label class="custom-control-label" for="sensibilisation">
						    Sensibilisation
						  </label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input class="custom-control-input" type="checkbox" value="coaching" id="coaching">
						  <label class="custom-control-label" for="coaching">
						    Coaching de manager
						  </label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input class="custom-control-input" type="checkbox" value="maintien" id="maintien">
						  <label class="custom-control-label" for="maintien">
						    Aide au maintien dans l'emploi
						  </label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input class="custom-control-input" type="checkbox" value="adaptabilite" id="adaptabilite">
						  <label class="custom-control-label" for="adaptabilite">
						    Aide à l'adaptabilité du poste de travail
						  </label>
						</div>
						<div class="custom-control custom-checkbox">
						  <input class="custom-control-input" type="checkbox" value="recrutement" id="recrutement">
						  <label class="custom-control-label" for="recrutement">
						    Aide au recrutement
						  </label>
						</div>
					</form>
				</div>
			</div>
			<div class="row partenaires">
				<div class="partenaire col-md-4 col-sm-6 col-xs-12 mb-5">
					<img src="images/logo.png" class="mx-auto img-fluid d-block mb-5" alt="Partenaire">
					<p class="mb-4">Créateur d'opportunités, d'emplois et de formations</p>
				</div>
				<div class="partenaire col-md-4 col-sm-6 col-xs-12 mb-5">
					<img src="images/logo.png" class="mx-auto img-fluid d-block mb-5" alt="Partenaire">
					<p class="mb-4">Faire gagner les entreprises en qualité humaines</p>
				</div>
				<div class="partenaire col-md-4 col-sm-6 col-xs-12 mb-5">
					<img src="images/logo.png" class="mx-auto img-fluid d-block mb-5" alt="Partenaire">
					<p class="mb-4">Réseau de fabrique numérique et inclusives</p>
				</div>
			</div>
			<div class="row contact mb-5">
				<div class="col-md-12">
					<i class="far fa-comment-dots blue-circle-border mb-2"></i>
					<p class="font-weight-bold">Aidez-nous à lancer notre projet et à le concrétiser.</p>
					<p class="mb-4">Faites nous parvenir votre retour, vos impressions et vos souhaits.</p>
					<a href="https://pierrepouget.typeform.com/to/coSqYw" rel="noopener" target="_blank" class="btn btns btn-fill-blue">Accéder au questionnaire</a>
				</div>
			</div>
			<!-- Formulaire de contact 
			<div class="row questionnaire mb-5">
				<div class="col-md-12">
					<form method="post" action="form-contact.php">
						<div class="form-group">
						  <label for="company-name">Nom de l'entreprise</label><span class="required"> *</span>
						  <input type="text" class="form-control" id="company-name" placeholder="Nom de l'entreprise" required>
						</div>
						<div class="form-group">
						  <label for="entreprise-type">Quel est le type de votre entreprise ?</label><span class="required"> *</span>
						  <select class="form-control" id="entreprise-type" required>
						    <option value="GE">Grande entreprise (GE) plus de 5000</option>
						    <option value="ETI">Entreprise de Taille Intermédiaire (ETI) entre 250 et 4999</option>
						    <option value="PME">Petite et Moyenne Entreprise (PME) entre 10 et 249</option>
						    <option value="TPE">Très Petite Entreprise (TPE) inf. à 10</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="handicap">Avez-vous une ressource dédiée handicap dans votre entreprise ?</label><span class="required"> *</span>
						  <select class="form-control" id="handicap" required>
						    <option value="oui">Oui</option>
						    <option value="non">Non</option>
						  </select>
						</div>
				    	<div class="form-group">
						    <label for="rate-handicap">Quel est le taux de Travailleurs Handicapés dans votre entreprise ? (en %)</label>
						    <input type="text" class="form-control" id="rate-handicap" aria-describedby="rateHelp">
						    <small id="rateHelp" class="form-text text-muted">Si vous n'en avez pas connaissance, laissez ce champs vide.</small>
					  	</div>
						<div class="form-group">
						  <label for="interest">Seriez-vous intéressé par Tangata Job ?</label><span class="required"> *</span>
						  <select class="form-control" id="interest" required>
						    <option value="oui">Oui</option>
						    <option value="non">Non</option>
						  </select>
						</div>
						<div class="form-group">
						  <label for="why-no">Si non, pourquoi ?</label>
						  <select class="form-control" id="why-no">
						    <option value="budget">Pour des raisons budgétaires</option>
						    <option value="non concerne">Pas concerné par le sujet</option>
						    <option value="prestataire">Je fais déjà appel à d'autres prestataires</option>
						    <option value="autre">Autre</option>
						  </select>
						</div>
				    	<div class="form-group">
						    <label for="tarif-avis">Que pensez-vous des tarifs annoncés (6000€ + 2000€/an) ?</label><span class="required"> *</span>
						    <textarea class="form-control" id="tarif-avis" name="tarif-avis" required rows="5" cols="33"></textarea>
					  	</div>
						<div class="form-group">
						  <label for="rate-tangata">À quel niveau seriez-vous prêt à nous recommander ?</label><span class="required"> *</span>
						  <select class="form-control" id="rate-tangata">
						    <option value="1">1</option>
						    <option value="2">2</option>
						    <option value="3">3</option>
						    <option value="4">4</option>
						    <option value="5">5</option>
						  </select>
						</div>
				    	<div class="form-group">
						    <label for="recontact">Seriez-vous intéressé pour être re-contacté pour devenir bêta-testeur de notre solution ?</label>
						    <input type="text" class="form-control" id="recontact" aria-describedby="recontactHelp">
						    <small id="recontactHelp" class="form-text text-muted">Si oui, laissez nous votre adresse e-mail (Promis, nous ne vous spamerons pas !)</small>
					  	</div>
						<div class="form-group">
						  <label for="accept">J'accepte que les informations saisies soient utilisées à des fins de contact uniquement par l'équipe Tangata.</label><span class="required"> *</span>
						  <select class="form-control" id="accept" required>
						    <option value="oui">J'accepte</option>
						    <option value="non">Je n'accepte pas</option>
						  </select>
						</div>
					  <button type="submit" class="btn btns btn-fill-blue">Soumettre</button>
					</form>
				</div>
			</div>
			-->
		</div>
	</main>

	<?php require_once('inc/footer.html'); ?>