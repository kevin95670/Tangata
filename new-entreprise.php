<?php require_once('inc/head.html'); ?>

<body id="new-entreprise">

	<?php require_once('inc/header.html'); ?>

	<main>
		<div class="container">
			<form class="mb-5" method="post" action="new.php">
				<div class="row position-relative background-image mb-5">
					<div class="col-12">
						<div class="wrapper-logo position-absolute">
							<div class="logo-entreprise position-relative">
								<div class="form-group position-absolute logo">
							    	<label for="logo" class="text-underline">Télécharger votre logo</label>
							    	<input type="file" class=" d-none form-control-file" id="logo">
							  	</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row mb-3 py-4">
					<div class="col-12">
						<div class="company-name">
							<input type="text" id="company-name" placeholder="Nom de l'entreprise" />
							<i class="fas fa-pen"></i>
						</div>
						<div class="company-place">
							<input type="text" id="company-place" placeholder="Ville (00)" />
							<i class="fas fa-pen"></i>
						</div>
					</div>
				</div>
				<div class="row new-entreprise-section">
					<div class="col-12 no-padding" id="new-entreprise-presentation">
						<p class="active">Présentation</p>
					</div>
				</div>
				<div class="new-entreprise-presentation">
					<div class="row mt-4 mb-5 text-left">
						<div class="col-12">
							<h2>À propos</h2>
							<div class="company-about d-flex">
								<textarea id="about" rows="10" placeholder="Entrez la description de votre entreprise…"></textarea>
								<i class="fas fa-pen"></i>
							</div>
						</div>
					</div>
					<div class="row numbers position-relative py-4 mb-5">
						<div class="overlay"></div>
						<div class="col-6 col-md-3 mb-3 company-date">
							<div>
								<input type="number" id="company-date-number" placeholder="2020" />
								<i class="fas fa-pen"></i>
							</div>
							<p>Date de création</p>
						</div>
						<div class="col-6 col-md-3 mb-3">
							<div>
								<input type="number" id="company-collaborator" placeholder="1000" />
								<i class="fas fa-pen"></i>
							</div>
							<p>Collaborateurs</p>
						</div>
						<div class="col-6 col-md-3 mb-3">
							<div>
								<input type="number" id="company-medium-age" placeholder="40" />
								<i class="fas fa-pen"></i>
							</div>
							<p>Âge moyen</p>
						</div>
						<div class="col-6 col-md-3 mb-3">
							<div class="company-parity">
								<input type="number" id="company-parity-men" placeholder="54" />
								/
								<input type="number" id="company-parity-women" placeholder="46" />
								<i class="fas fa-pen"></i>
							</div>
							<p>Parité Hommes - Femmes</p>
						</div>
					</div>
					<div class="row mb-5 mx-1 py-3 text-center unique-contact">
						<div class="col-12">
							<p class="mb-3"><strong>Un contact unique et privilégié</strong></p>
							<div class="company-contact-name">
								<input type="text" id="company-contact-name" placeholder="Nom du contact interne" />
								<i class="fas fa-pen"></i>
							</div>
							<div class="company-contact-poste">
								<input type="text" id="company-contact-poste" placeholder="Son poste" />
								<i class="fas fa-pen"></i>
							</div>
							<div class="company-contact-mail">
								<input type="email" id="company-contact-mail" placeholder="adresse@email.com" />
								<i class="fas fa-pen"></i>
							</div>
						</div>
					</div>
				</div>
				<button type="submit" class="px-2 btn btns btn-fill-blue">Construisez la suite avec les équipes de Tangata Job !</button>
			</form>
		</div>
	</main>

	<?php require_once('inc/footer.html'); ?>