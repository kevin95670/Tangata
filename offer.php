<?php require_once('inc/head.html'); ?>

<body id="offer">

	<?php require_once('inc/header.html'); ?>

	<main>
		<div class="container">
			<div class="row position-relative background-image mb-5">
				<div class="wrapper-logo position-absolute">
					<div class="logo-entreprise position-relative">
						<img class="position-absolute" src="images/logo.png" alt="Entreprise">
					</div>
				</div>
			</div>
			<div class="row mb-3">
				<div class="col-md-12">
					<h1>CDI - Chef de projet web</h1>
					<p class="lieu">BNP Paris Cardif - <span class="text-underline">Nanterre (92)</span></p>
				</div>
			</div>
			<div class="offer-presentation text-left">
				<div class="row mt-4 mb-5">
					<div class="col-12">
						<h2>À propos de BNP Paris Cardif</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas dignissim, odio id commodo consectetur, ligula ipsum blandit lorem, at lacinia massa ligula in enim. In hac habitasse platea dictumst. In tempor turpis elit, sit amet lacinia magna sollicitudin eget. Suspendisse sit amet ipsum scelerisque, porta libero ut, dictum turpis. Praesent blandit pulvinar nibh et iaculis. In accumsan turpis ante, non egestas dolor aliquet eget. Nunc laoreet lorem id elementum semper. In porta elit ligula, id sollicitudin nisl molestie a.</p>
						<a href="entreprise" class="text-underline">En savoir plus sur l'entreprise et ses engagements</a>
					</div>
				</div>
				<div class="row numbers text-center position-relative py-3 mb-4 mx-2">
					<div class="overlay"></div>
					<div class="col-12 mb-3">
						<h3 class="font-weight-bold">Accessibilité du poste</h3>
					</div>
					<div class="col-4 mb-3">
						<i class="fab fa-accessible-icon"></i>
					</div>
					<div class="col-4 mb-3">
						<i class="fas fa-deaf"></i>
					</div>
					<div class="col-4 mb-3">
						<i class="far fa-eye-slash"></i>
					</div>
				</div>
				<div class="row mb-5 offer-description">
					<div class="col-12">
						<h2 class="mb-3">Description du poste</h2>
						<p>Dans un contexte règlementaire déjà très dense au sein du secteur de l’Assurance, avec de nouvelles normes comptables à venir la Direction de la Maîtrise d’Ouvrage des fonctions Finance, mène certains projets d’évolutions règlementaires transverses au Groupe BNP Paribas Cardif et ce, dans le cadre d’un vaste plan de Transformation des fonctions Finances, Actuariat et Risques.
						Ces projets couvrent aussi bien les aspects normatifs et méthodologiques que l’implémentation dans les processus et les systèmes du Groupe Cardif.</p>
						<a href="#" class="text-underline">Lire la suite...</a>
					</div>
				</div>
				<div class="row profile mb-4">
					<div class="col-12">
						<h2 class="mb-4">Profil recherché</h2>
						<ul class="profile-list">
							<li>
								<i class="green-circle fas fa-user-tie"></i>7 années d'exp dans le domaine de l’Audit ou l’Expertise Comptable ou la Gestion de projets
							</li>
							<li>
								<i class="green-circle fas fa-graduation-cap"></i>Bac +4 Minimum
							</li>
							<li>
								<i class="green-circle fas fa-chalkboard-teacher"></i>Diplômé d'école de commerce, d’ingénieur ou filière universitaire Finance ou Actuariat
							</li>
							<li>
								<i class="green-circle fas fa-portrait"></i>
								<p>Compétences Techniques/métier</p>
								<p>Maîtrise IFRS</p>
								<ul class="sublist">
									<li>
										Comptabilité des Assurances
									</li>
									<li>
										Gestion de projet
									</li>
									<li>
										Reporting (SAP, Hyperion, etc…)
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
				<a href="#" class="d-block mx-auto btn btns mb-5 btn-blue more-job">Voir plus de job</a>
				<div class="row candidate mb-5">
					<div class="col-12">
						<h2 class="mb-5 text-center">Envoyez votre candidature à BNP Paribas Cardif</h2>
						<form method="post" action="form-candidate.php">
							<div class="form-group">
							  <label for="firstname">Prénom</label><span class="required"> *</span>
							  <input type="text" class="form-control" id="firstname" placeholder="Prénom" required>
							</div>
							<div class="form-group">
							  <label for="lastname">Nom</label><span class="required"> *</span>
							  <input type="text" class="form-control" id="lastname" placeholder="Nom" required>
							</div>
							<div class="form-group">
							  <label for="email">E-mail</label><span class="required"> *</span>
							  <input type="email" class="form-control" id="email" placeholder="E-mail" required>
							</div>
							<div class="form-group">
							    <label for="import-cv">Déposez votre CV<span class="required"> *</span></label>
							    <input type="file" class="form-control-file" id="import-cv">
							</div>
							<div class="form-group">
							    <label for="import-lm">Déposez votre lettre de motivation<span class="required"> *</span></label>
							    <input type="file" class="form-control-file" id="import-lm">
							</div>
							<div class="form-group">
							    <label for="message">Message</label>
							    <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
							</div>
						  <button type="submit" class="d-block mt-4 mx-auto btn btns btn-fill-blue">Envoyer</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</main>

	<?php require_once('inc/footer.html'); ?>