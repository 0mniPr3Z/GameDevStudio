<!--        -->
<?php
$idJeu=1;
$nomJeu="Inral";
$versionJeu="1.2.7";
$prezJeu="RPG mêlant Simslike, jeu de Craft, Mining, Farming,
		gestion et stratégie. Dans un univers « Heroic-Fantasy » riche, coloré et amusant,
		ouvrez les portes d’un univers regorgeant d’interactivités et au background riche
		et vivez des aventures aux potentialités illimités..";
		
$imgJeu="jeux.png";
$noteJeu= 4;
$votesJeu= 5;
$quoteJeu=2;

?>
<!--		-->

<div class="col-lg-4 col-md-4 col-sm-4">

	<div class="single_sidebar wow fadeInDown">
		<h2><span><img src="images/articles/<?php echo $nomJeu ?>TitleB.png" alt="" class="jeuTitleImg"> <small><?php echo $versionJeu ?></small></span></h2>
		<p style="text-indent:25px;"><?php echo $prezJeu ?></p>
			
		<a class="sideAdd" href="#">
			<img src="images/artworks/<?php echo $imgJeu ?>" alt="">
		</a>
		
		<center style="font-size:24px;">
		Disponible pour
			<span class="fa fa-windows desktop-windows" ></span>
			<span class="fa fa-apple desktop-apple" ></span>
			<span class="fa fa-android desktop-android" ></span>
		<center>		
		<div style="text-align:center;">
			<?php
				echo'<span class="noteInfo">Note : '.$noteJeu.'/5 ('.$votesJeu.' votes, '.$quoteJeu.' <a href="#" >avis</a>)</span><br/>';
				for($i=1; $i<=5; $i++){
					echo'<a href="script/noterJeu.php?id='.$idJeu.'&note='.$i.'" class="zoom">';
					if($noteJeu>=$i){
						echo'<div><img src="images/star.png" alt="" /></div>';
					}else{
						echo'<div><img src="images/starBack.png" alt=""/></div>';
					}
					echo'</a>';
				}
				
			?>
		</div>
		
	</div>

</div>