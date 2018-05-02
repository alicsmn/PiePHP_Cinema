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
<h1>Liste de films</h1>
<a href="\PiePHP\movie\add"><button  class="btn btn-primary" name="ajouter" value="ajouter">Ajouter un film</button></a>
<div class="search">
</div>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>Titre</th>
			<th>Duree</th>
		</tr>
	</thead>
	<tbody>
		<?php  foreach($movie as $data){ ?>
		<tr>
			<td><a href="/PiePHP/movie/info?id_film=<?= $data['id_film']; ?>"><?= $data['titre']; ?></a></td>
			<td><?= $data['duree_min']; ?></td>
		</tr>
		<?php } ?>
	</tbody>	
</table>