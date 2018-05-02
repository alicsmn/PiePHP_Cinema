<?php
namespace Controller;

use \Model\MovieModel;
use \Core\Controller;

class movieController extends Controller 
{
	public function allmoviesAction()
	{
		$parameters = $this->request->getQueryParams();
		$movie = new MovieModel($parameters);
		$_SESSION['log'] = true;
		$show = $movie->showmovies();
		
		$this->render("allmovies", ['movie' => $show]);
	}

	public function infoAction()
	{
		$parameters = $this->request->getQueryParams();
		$movie_one = new MovieModel($parameters);
		$_SESSION['log'] = true;
		$movie_one = $movie_one->onemovie();
		$this->render("info", ['movie_one' => $movie_one[0]]);
		if(isset($_POST['deletemovie'])) {	
			$parameters = $this->request->getQueryParams();
			$movie_one = new MovieModel($parameters);
			$movie_one->id_film = $parameters['id_film'];
			$movie_one->delete_movie();
			header("Location: \PiePHP\movie\allmovies");
			exit;
		}	
	}

	public function addAction()
	{
		$parameters = $this->request->getQueryParams();
		$add = new MovieModel($parameters);	
		$_SESSION['log'] = true;
		$genre = $add->genre();
		$distrib = $add->distrib();
		$this->render("add",['genre' => $genre, 'distrib' => $distrib]);
		if (isset($parameters['id_genre']) && isset($parameters['id_distrib']) && isset($parameters['titre']) && isset($parameters['resum']) && isset($parameters['date_debut_affiche']) && isset($parameters['date_fin_affiche']) && isset($parameters['duree_min']) && isset($parameters['annee_prod'])) {
			$add->create();
			header("Location: \PiePHP\movie\allmovies");
					exit;
		}
	}

}
?>