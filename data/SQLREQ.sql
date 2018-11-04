UPDATE `articles`
SET
`preview` =
	'J\'ai le plaisir de vous annoncer la sortie imminante de la démo du premier épisode de la saga
	<img src=\'images/articles/inralIcoTxt.png\' alt=\'Inral\' /></p>',
`intro` =
	'J\'ai le plaisir de vous annoncer la sortie imminante de la démo du premier épisode de la saga
	<img src=\'images/articles/inralIcoTxt.png\' alt=\'Inral\' />.\r\n
	Découvrez les contrées exotiques d\'Elikan, de l\'imposant royaume Leorys situé au coeur de la Jungles du nord,\r\n
	jusqu\'au désert Sani, en passant par la colonie impériale de Lubami... </p>
	<p>L’inral est sur le point de vivre de grands bouleversements et n’attend plus que votre venue pour en connaître l’issue. Vous êtes l’élu…</p>',
`content` = '<p>Quelque chose menace l’Inral et nul ne le sais ce que c’est ni pourquoi.</p>
	<p>C’est dans de tels moments que des puissants seigneurs se révèlent et accomplissent  leur destin,
	en rassemblant des héros capables de jouer un rôle déterminant pour l’avenir du monde et en les guidant au milieu des tumultes qui s’annoncent.</p>
	<p>Plongez au cœur d’une aventure épique et trépidante. Faite évoluer votre seigneur.
	Formez l’armée de héros ultime et gérez la stratégie de votre faction.</p>
	<p>Accomplissez de nombreuses quêtes et accroissez votre réputation en affrontant les forces qui oserons s’opposer à vous
	et et terrassant plus d’une centaine de monstres terrifiants.</p>
	<p>Soyez le plus puissant, le plus craint,
	le plus riche ou le plus célèbre des monarques et jouez un rôle décisif pour marquer l’histoire de l’Inral de votre légende.</p>
	<p>L’Inral est sur le point de vivre de grands bouleversements et n’attend plus que votre venue pour en connaître l’issue. Vous êtes l’élu…</p>',
`ref` = '1'
WHERE
`articles`.`id` = 1;



SELECT * FROM `articles` ORDER BY `paru` DESC LIMIT 9


INSERT INTO `games` (`id`, `nom`) VALUES (NULL, 'Inral');