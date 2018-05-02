<?php

namespace Model;

use \Core\ORM;
use \Core\Entity;
use \Core\Database;

class movieModel extends Entity 
{
	public $table = 'film';
	public $a;
	public function showmovies() {
		$sql ="SELECT * FROM film LEFT JOIN genre on film.id_genre = genre.id_genre LEFT JOIN distrib on film.id_distrib = distrib.id_distrib ORDER BY titre ASC";
		$db = new Database;
		$db->query($sql);
		return $db->fetch_all();
	}
		
	public function onemovie()
	{
		$sql ="SELECT 
		film.id_film AS id_film,
		film.titre AS titre,
		film.date_debut_affiche AS Ddaffiche,
		film.date_fin_affiche AS Dfinaffiche,
		film.annee_prod AS anneeprod,
		film.duree_min AS duree,
		film.resum AS resume,
		genre.nom_genre AS genre,
		distrib.nom_distrib AS distrib 
		FROM film 
		LEFT JOIN genre on film.id_genre = genre.id_genre 
		LEFT JOIN distrib on film.id_distrib = distrib.id_distrib 
		WHERE id_film =". $this->id_film ."";
		$db = new Database;
		$db->query($sql);
		return $db->fetch_all();
	}

	public function genre()
	{
		$db = new Database;
		$db->query("SELECT * FROM genre");
		return $db->fetch_all();
	}

	public function distrib()
	{
		$db = new Database;
		$db->query("SELECT * FROM distrib");
		return $db->fetch_all();
	}

	public function delete_movie()
	{
		$db = new Database;
		$db->query("DELETE FROM film WHERE id_film=". $this->id_film ."");
		$tab = $db->execute();
		return $tab;
	}
}
?>