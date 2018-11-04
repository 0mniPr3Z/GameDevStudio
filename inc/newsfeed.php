

<section id="newsSection">
	<div class="row">
		<div class="col-lg-12 col-md-12">
			<div class="latest_newsarea">
				<span>Dernières Infos</span>
				<ul id="ticker01" class="news_sticker">
					<?php
						for($i=0; $i < count($lastNews); $i++){

							echo'
							<li>
								<a href="index.php?pge=2&article='.$i.'">
									<img src="images/artworks/'.$lastNews[$i]['img'].'.jpg" height="20" alt=""> - '.utf8_encode($lastNews[$i]['title']).' -
									<small>
									<i>
										Le '.date('d/m/Y', intval($lastNews[$i]['paru'])).' &agrave; '.date('H:i:s', intval($lastNews[$i]['paru'])).'</i></small>
								</a>
							</li>';
						}
					?>
				</ul>
				
				<div class="social_area">
					<ul class="social_nav">
						<li class="facebook"><a href="#"></a></li>
						<li class="twitter"><a href="#"></a></li>
						<li class="googleplus"><a href="#"></a></li>
						<li class="twitch"><a href="#"></a></li>
						<li class="slack"><a href="#"></a></li>
						<li class="steam"><a href="#"></a></li>
						<li class="youtube"><a href="#"></a></li>
						<li class="patreon"><a href="#"></a></li>
					</ul>
				</div>
				
			</div>
		</div>
	</div>
</section>