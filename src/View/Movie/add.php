<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<a class="navbar-brand" href="#">Accueil</a>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<ul class="navbar-nav navbar-right">
			<li class="nav-item active">
				<a class="nav-link" href="\PiePHP\user\show">Profile<span class="sr-only">(current)</span></a>
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
<h1>Ajouter un film</h1>
<div  class="addmovie">
	<form action="" method="POST">
    <div class="form-group">
      <label for="exampleFormControlSelect1"><strong>genre : </strong></label>
      <select name="id_genre" class="form-control" id="exampleFormControlSelect1">
        <?php foreach ($genre as $key => $value) { ?>
        <option value="<?php echo $value['id_genre'];?>"><?php echo $value['nom_genre']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group">
      <label for="exampleFormControlSelect1"><strong>Distributeur : </strong></label>
      <select name="id_distrib" class="form-control" id="exampleFormControlSelect1">
        <?php foreach ($distrib as $key => $value) { ?>
        <option value="<?php echo $value['id_distrib'];?>" ><?php echo $value['nom_distrib']; ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><strong>Titre : </strong></label>
      <div class="col-sm-10">
        <input type="text" name="titre" class="form-control" placeholder="Veuillez entrer le titre du film">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><strong>Resume : </strong></label>
      <div class="col-sm-10">
        <input type="text" name="resum" class="form-control" placeholder="Veuillez entrer le resume du film">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><strong>Date de début d'affiche : </strong></label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="date_debut_affiche" placeholder="Veuillez entrer la date de début d'affiche">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><strong>Date de fin d'affiche : </strong></label>
      <div class="col-sm-10">
        <input type="date" class="form-control" name="date_fin_affiche" placeholder="Veuillez entrer la date de fin d'affiche">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><strong>Duree : </strong></label>
      <div class="col-sm-10">
        <input type="text" name="duree_min" class="form-control" placeholder="Veuillez entrer la duree du film ex : 126">
      </div>
    </div>
    <div class="form-group row">
      <label class="col-sm-2 col-form-label"><strong>Annee de Production : </strong></label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="annee_prod" placeholder="Veuillez entrer l'annee de production du film">
      </div>
    </div>
    <button type="submit" class="btn btn-primary">Ajouter un film</button> 
  </form>
</div>