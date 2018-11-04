<?php
session_start();
/*===================================================
					NAVIGATION
       Recupération des var de NAV dans le GET
=====================================================*/

//$pge
if(isset($_GET['pge']) && !empty($_GET['pge']) ){
	$pge = intval(htmlspecialchars($_GET['pge']));
}else{
	$pge = 0;
}
//$cat
if(isset($_GET['cat']) && !empty($_GET['cat']) ){
	$cat = intval(htmlspecialchars($_GET['cat']));
}else{
	$cat = 0;
}
//$sect
if(isset($_GET['sect']) && !empty($_GET['sect']) ){
	$sect = intval(htmlspecialchars($_GET['sect']));
}else{
	$sect = 0;
}
//$rubr
if(isset($_GET['rubr']) && !empty($_GET['rubr']) ){
	$rubr = intval(htmlspecialchars($_GET['rubr']));
}else{
	$rubr = 0;
}
//$pgn
if(isset($_GET['pgn']) && !empty($_GET['pgn']) ){
	$pgn = intval(htmlspecialchars($_GET['pgn']));
}else{
	$pgn = 0;
}
//$acr
if(isset($_GET['acr']) && !empty($_GET['acr']) ){
	$acr = intval(htmlspecialchars($_GET['acr']));
		}else{
	$acr = 0;
};

/*===================================================
					DB
       Recupération des var dans la base de donnée
=====================================================*/
function bdd(){
	try{
		
		$resultat = new PDO('mysql:dbname=InralRpg;host=localhost', 'root', ''); //IDENTIFIANT DE CONNECTION
		return $resultat;
		
	} catch (PDOException $e) {
		if($e->getMessage() == 'invalid data source name'){
			die(msgIntro("intro").msgIntro("installhaut").msgIntro("install1").'<br/>'.msgIntro("copyright"));
		}else{
			echo'Impossible de se connecter : '.$e->getMessage();
		};
		
	};
	 
};
//req
function recupBDD($requete, $param){
	try{
		$req = bdd()-> prepare($requete);
		$req->execute(array($param));
		$result = [];
		while($ligne = $req->fetch()){
			array_push($result, $ligne);
		};
		return $result;
	}catch (PDOException $e){
		die("La récuperation des nouvelles données  dans la BDD a échouée : ".$e->getMessage());
	}
};
//
function compteBDD($requete, $param){
	try{
		$req = bdd()-> prepare($requete);
		$req->execute(array($param));
		$resultat = $req->rowCount();
		return $resultat;
	}catch (PDOException $e){
		die("La récuperation des nouvelles données  dans la BDD a échouée : ".$e->getMessage());
	};
};

/*===================================================
					STATIC DB
       Recupération des données static
=====================================================*/

//$pages [page][rubrique][value] value = [Nom, Name, Link]
$pages = [
	[
		['Acceuil', 'Home', 'home']
	],
	[
		['A Propos','About','about','question',0],
		['0mniPr3z Studio', '0mniPr3z Studio', 'omniprez'],
		['Team Story','Team Life','team'],
		['Nous soutenir', 'Support','support']
	],
	[
		['Jeux & Projets','Games & Projects','game','gamepad',1],
		['Inral','Inral','inral'],
		['Neotori','Neotori','neotori'],
		['Grass Shopper','Grass Shopper','grass'],
		['Syndrôme Colorite','Colorite Syndrome','syndrom']
	],
	[
		['Scripts','Scripts','script','code',0],
		['Gameplay & Système','Gameplay & System','gameplay'],
		['Huds & Interfaces','Huds & GUI','hud'],
		['Effets Visuels','Visual Effects','effet'],
		['Divers','More','scriptmore']
	],
	[
		['Gallerie','Gallery','gallery','image',0],
		['Vidéos','Video','video'],
		['Artworks','Artworks','artw'],
		['Captures d\'Écran','Screenshots','screen'],
		['Ressources & Sprites','Resources & Sprites','resource'],
		['Divers','More','imgmore']
	],
	[
		['Téléchargement','Download','download','download',0]
	],
	[
		['Plus','Plus','plus','plus',0],
		['Wikis','Wikis','wiki'],
		['Devlogs','Devlogs','devlog'],
		['Tutos & Astuces','Cheats & Soluces','tuto'],
		['Goodies','Goodies','goods']
	],
	[
		['Crotte','Plus','plus','book',0],
		['Wikis','Wikis','wiki'],
		['Devlogs','Devlogs','devlog'],
		['Tutos & Astuces','Cheats & Soluces','tuto'],
		['Goodies','Goodies','goods']
	]
];
?>