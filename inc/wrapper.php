



<div class="col-lg-8 col-md-8 col-sm-8">
	<div class="slick_slider">
	
		<?php for($i=0; $i < count($lastNews); $i++){ ?>
		
			<div class="single_iteam">
				<a href="index.php?pge=2&article=<?php echo $i ?>">
					<img src="images/artworks/<?php echo $lastNews[$i]['img']; ?>.jpg" alt="" />
				</a>
				<div class="slider_article">
					<p>
						<?php echo utf8_encode($lastNews[$i]['preview']); ?>
					</p>
					
					<h1>
						<a class="slider_title" href="index.php?pge=2&article=<?php echo $i ?>">
							<?php echo utf8_encode($lastNews[$i]['title']); ?>
						</a>
					</h1>
					
				</div>
			</div>
			
		<?php } ?>
		
	</div>
</div>