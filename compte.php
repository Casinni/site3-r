<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Photos et téléchargements</title>

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/bootstrap.min.js"></script>


  <!-- <script src="https://unpkg.com/@videojs/http-streaming@0.9.0/dist/videojs-http-streaming.js"></script> -->
</head>

<body>


	<!-- Espace réserver au menu -->
  
	<header>
	  <nav class="navbar navbar-expand-lg navbar-light  ">
		<div class="container-fluid">
		  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
			aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse justify-content-md-center" id="navbarCollapse">
			<ul class="navbar-nav  mr-auto justify-content-center">
			  <li class="nav-item "><a class="nav-link" href="index.html" title="Bienvenue">Accueil</a></li>
			  <li class="nav-item"><a class="nav-link" href="album.html" title="PHOTOS">Photos</a></li>
			  <li class="nav-item"><a class="nav-link" href="telechargement.html"
				  title="Telechargement">Telechargements</a></li>
			  <li class="nav-item"><a class="nav-link" href="video.html" title="Video">Videos</a></li>
			  <li class="nav-item"><a class="nav-link active" href="compte.html" title="Video">Mon compte</a></li>
			  <li class="nav-item"><a class="nav-link" href="carte_ciel.html" title="Video">Carte du Ciel</a></li>
			  <li class="nav-item"><a class="nav-link" href="formulaire.html" title="Pour me joindre">Contact</a></li>
			  <li class="nav-item"><a class="nav-link" href="plan.html" title="plan du site">Plan du site</a></li>
			</ul>
  
		  </div>
		</div>
	  </nav>
	</header>

		<div class="container-fluid">
	<?php
	
		$error= $_REQUEST['error']?? null;
		if($error=='authentification'){
			echo "<div class='alert alert-danger' role='alert'>Erreur Login ou mot de passe!</div>";
		}
	?>
			<form action="auth.php" method="POST">
			  <div class='form-group'>
				<div class='form-row'>
					<input id="login" type="text" class="form-control" name="login"  placeholder="Entrer votre login"  required>
				</div>
				<div class='form-row'>
					<input id="pwd" type="password" class="form-control" name="pwd"  placeholder="Entrer votre mot de passe"  required>
				</div>
			</div>
			<hr class="my-4">
			 <div class="text-center">
			  <button class="btn btn-primary" type="submit">Valider</button>        
			  <button class="btn btn-primary" type="reset" >Effacer</button>   
			</div>
			   </form>
			</div>
		</div>

	
</div>



<footer class="py-3 my-4 border-bottom fixed-bottom">
  <ul class="nav justify-content-center border-bottom pb-3 mb-3">
	<li class="nav-item"><a href="index.html" class="nav-link px-2 text-muted">Accueil</a></li>
	<li class="nav-item"><a href="https://iss.cnes.fr/fr/" class="nav-link px-2 text-muted">ISS</a></li>
	<li class="nav-item"><a href="https://nasa.gov" class="nav-link px-2 text-muted">Nasa</a></li>
	<li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQ</a></li>
	<li class="nav-item"><a href="formulaire.html" class="nav-link px-2 text-muted">A propos</a></li>
  </ul>
  <p class="text-center text-muted">&copy; 2021 Copyright Vannes</p>
</footer>



</body>


</html>
