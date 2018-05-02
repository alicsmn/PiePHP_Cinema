<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Accueil</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav navbar-right">
			<li class="nav-item active">
				<a class="nav-link" href="\PiePHP\user\show">Profil<span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="\PiePHP\movie\allmovies">Films</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Genres</a>
			</li>
		</ul>
	</div>
</nav>
		<h1><?php echo $movie_one["titre"]; ?></h1>

		<div class="details">
		<strong><p>Genre : <?= $movie_one["genre"]; ?></p><br>
		<p>Distributeur : <?= $movie_one["distrib"]; ?></p><br>
		<p>Date de début d'affiche : <?= $movie_one["Ddaffiche"]; ?></p><br>
		<p>Date de fin d'affiche : <?= $movie_one['Dfinaffiche']; ?></p><br>
		<p>Année de production : <?= $movie_one['anneeprod']; ?></p><br>
		<p>Durée du film : <?= $movie_one['duree']; ?></p><br>
		<p>Petit résumé : <?= $movie_one['resume']; ?></p></strong>
		<form class="infobutton" action="" method="POST"> 
			<button type="delete" name="deletemovie" class=" deletemovie btn btn-danger">Supprimer le film et toutes ses informations </button>
			<button type="delete" name="update" class=" updatemovie btn btn-light">Modifier les informations du film</button>
		</form>
</div>