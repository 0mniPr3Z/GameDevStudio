<?php
$idJeu=1;

$req = 'SELECT * FROM `games` WHERE `id`='.$idJeu.'';
$param ='';
$gameInfo = recupBDD($req, $param);

$nomJeu =		utf8_encode($gameInfo[0]['nom']);
$versionJeu =	utf8_encode($gameInfo[0]['version']);
$prezJeu=		utf8_encode($gameInfo[0]['prez']);
$imgJeu=		utf8_encode($gameInfo[0]['img']);
$noteJeu= 		utf8_encode($gameInfo[0]['note']);
$votesJeu=		utf8_encode($gameInfo[0]['vote']);
$quoteJeu=		utf8_encode($gameInfo[0]['quote']);
$pcJeu =		utf8_encode($gameInfo[0]['pc']);
$iosJeu =		utf8_encode($gameInfo[0]['ios']);
$androidJeu =	utf8_encode($gameInfo[0]['android']);

$req = 'SELECT * FROM `articles` ORDER BY `paru` DESC LIMIT 9';
$param ='';
$lastNews = recupBDD($req, $param);
?>