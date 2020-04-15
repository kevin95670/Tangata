<?php require_once('inc/head.html'); ?>

<body id="new-entreprise">

	<?php require_once('inc/header.html'); ?>

	<main>
		<div class="container">
			<div class="row position-relative background-image mb-5">
				<div class="col-12">
					<form method="post" action="new.php">
						<div class="wrapper-logo position-absolute">
							<div class="logo-entreprise position-relative">
								<div class="form-group position-absolute logo">
							    	<label for="logo" class="text-underline">Télécharger votre logo</label>
							    	<input type="file" class=" d-none form-control-file" id="logo">
							  	</div>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</main>

	<?php require_once('inc/footer.html'); ?>