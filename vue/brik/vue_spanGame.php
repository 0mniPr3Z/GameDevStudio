<div class="col-lg-4 col-md-4 col-sm-4">

	<div class="single_sidebar wow fadeInDown">
	
		<!--title-->
		<h2>
			<span>
				<img
					src="images/articles/<?php echo $nomJeu ?>TitleB.png"
					alt=""
					class="jeuTitleImg">
				<small>
					<?php echo $versionJeu ?>
				</small>
			</span>
		</h2>
		
		<!--paragraphe-->
		<p style="text-indent:25px;">
			<?php echo substr($prezJeu,0,225); ?>...<br/>
			
			<!--readMore-->
			<a href="index.php?pge=1&cat=<?php echo $idJeu ?>" style="color:darkred">
				<span class="fa fa-eye desktop-eye" style="color:orange;"></span>
				Lire la suite
			</a>
		</p>
		
		<!--Image-->
		<a class="sideAdd" href="#">
			<img src="images/artworks/<?php echo $imgJeu ?>Dl.png" alt="">
		</a>
		
		<!--devices-->
		<center style="font-size:24px;">
		Disponible pour
			<?php
			if($pcJeu){
				echo'<span class="fa fa-windows desktop-windows" ></span> ';
			};
			if($iosJeu){
				echo'<span class="fa fa-apple desktop-apple" ></span> ';
			};
			if($androidJeu){
				echo'<span class="fa fa-android desktop-android" ></span> ';
			}
			?>
		<center>

		<!--notes-->
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