
<?php require_once('inc/head.html'); ?>

<body id="entreprises">

	<?php require_once('inc/header.html'); ?>

	<main>
		<div class="container">
			<div class="row position-relative background-image mb-5">
				<div class="overlay"></div>
				<div class="col-12">
					<h1>Les entreprises qui utilisent les services de Tangata Job</h1>
				</div>
			</div>
			<div class="row entreprises">
				<div class="entreprise col-md-4 col-sm-6 col-xs-12 mb-5">
					<img src="images/logo.png" class="mx-auto img-fluid d-block mb-5" alt="Entreprise">
					<h2>BNP Paris Cardif</h2>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et. </p>
					<a class="font-italic" href="entreprise">Voir la fiche entreprise</a>
				</div>
				<div class="entreprise col-md-4 col-sm-6 col-xs-12 mb-5">
					<img src="images/logo.png" class="mx-auto img-fluid d-block mb-5" alt="Entreprise">
					<h2>Danone</h2>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et. </p>
					<a class="font-italic" href="entreprise">Voir la fiche entreprise</a>
				</div>
				<div class="entreprise col-md-4 col-sm-6 col-xs-12 mb-5">
					<img src="images/logo.png" class="mx-auto img-fluid d-block mb-5" alt="Entreprise">
					<h2>Engie</h2>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et. </p>
					<a class="font-italic" href="entreprise">Voir la fiche entreprise</a>
				</div>
				<div class="entreprise col-md-4 col-sm-6 col-xs-12 mb-5">
					<img src="images/logo.png" class="mx-auto img-fluid d-block mb-5" alt="Entreprise">
					<h2>Arval - BNP Paris Group</h2>
					<p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse et. </p>
					<a class="font-italic" href="entreprise">Voir la fiche entreprise</a>
				</div>
			</div>
			<div class="row add-entreprise mb-5 mx-3 py-3 px-3">
				<div class="col-12 no-padding">
					<a href="new-entreprise">
						<div class="position-relative new-entreprise mb-3">
							<div class="plus-icon py-4 px-3"><i class="fas fa-plus"></i></div>
						</div>
						<h2 class="mb-3">Votre entreprise</h2>
						<p>Commencer la création de votre page entreprise.</p>
					</a>
				</div>
			</div>
		</div>
	</main>

	<?php require_once('inc/footer.html'); ?>