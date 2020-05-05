
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
			<?php require_once('inc/contact_form.php'); ?>
		</div>
	</main>

	<?php require_once('inc/footer.html'); ?>