
      <body class="bg-light">
		<div class="container">
			<div class="py-5 text-center">

				<h2>Inscription</h2>

			</div>

			<div class="row">

				<div class="col-md-12">

					<form class="needs-validation" action="#" method="post" novalidate>
						<div class="row">
							<div class="col-md-6 mb-3">
								<label for="prenom">Prénom</label>
								<input type="text" class="form-control" id="firstName" placeholder="Prénom" value="" name="prenom" required>
								<div class="invalid-feedback">
									Un prénom valide est requis
								</div>
							</div>
							<div class="col-md-6 mb-3">
								<label for="nom">Nom</label>
								<input type="text" class="form-control" id="lastName" placeholder="Nom" value="" name="nom" required>
								<div class="invalid-feedback">
									Un nom valide est requis
								</div>
							</div>
						</div>




						<div class="mb-3">
							<label for="mdp">Mot de passe</label>
							<div class="input-group">
								<div class="input-group-prepend">

								</div>

								<input type="password" class="form-control" id="password" placeholder="Mot de passe" name="mdp" required>
								<div class="invalid-feedback" style="width: 100%;">
									Un mot de passe est requis
								</div>
							</div>
						</div>



						<div class="mb-3">
							<label for="mdp2">Confirmation du mot de passe</label>
							<div class="input-group">
								<div class="input-group-prepend">

								</div>

								<input type="password" class="form-control" id="password2" placeholder="Confirmez le mot de passe" name="mdp2" required>
								<div class="invalid-feedback" style="width: 100%;">
									Un mot de passe est requis
								</div>
							</div>
						</div>





						<div class="mb-3">
							<label for="email">E-mail</label>
							<input type="email" class="form-control" id="email" placeholder="vous@example.com" name="mail" required>
							<div class="invalid-feedback">
								Un e-mail valide est requis

							</div>
						</div>





						<hr class="mb-12">
						<button class="btn btn-primary btn-lg btn-block bouton-inscription" type="submit" name="submit_inscription">S'inscrire</button>
					</form>
				</div>
			</div>

		</div>


		<!-- Bootstrap core JavaScript
    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script>
			window.jQuery || document.write('<script src="../../../../assets/js/vendor/jquery-slim.min.js"><\/script>')
		</script>
		<script src="../../../../assets/js/vendor/popper.min.js"></script>
		<script src="../../../../dist/js/bootstrap.min.js"></script>
		<script src="../../../../assets/js/vendor/holder.min.js"></script>
		<script>
			// Example starter JavaScript for disabling form submissions if there are invalid fields
			(function() {
				'use strict';

				window.addEventListener('load', function() {
					// Fetch all the forms we want to apply custom Bootstrap validation styles to
					var forms = document.getElementsByClassName('needs-validation');

					// Loop over them and prevent submission
					var validation = Array.prototype.filter.call(forms, function(form) {
						form.addEventListener('submit', function(event) {
							if (form.checkValidity() === false) {
								event.preventDefault();
								event.stopPropagation();
							}
							form.classList.add('was-validated');
						}, false);
					});
				}, false);
			})();
		</script>
	</body>
