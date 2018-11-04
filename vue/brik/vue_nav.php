

<section id="navArea">
	<nav class="navbar navbar-inverse" role="navigation">
	
		<!-- Button mobile -->
		<div class="navbar-header">
			<button
				type="button"
				class="navbar-toggle collapsed"
				data-toggle="collapse"
				data-target="#navbar"
				aria-expanded="false"
				aria-controls="navbar">
					<span class="sr-only">
						Toggle navigation
					</span>
					<span class="icon-bar">
					</span>
					<span class="icon-bar">
					</span> <span class="icon-bar">
					</span>
			</button>
		</div>
		
		
		
		<!-- NAVIGATION -->
		<div id="navbar" class="navbar-collapse collapse">
		
		
			<ul class="nav navbar-nav main_nav">
				<li>
					<a href="index.php"><span class="fa fa-home desktop-home"></span><span class="mobile-show">Acceuil</span></a>
				</li>
				<?php
					for($i=1;$i< count($pages);$i++){
						
						
						if( count($pages[$i]) >1){?>
							
							<li class="dropdown">
								<a
									href="index.php?pge=<?php echo $i; ?>"
									class="dropdown-toggle"
									data-toggle="dropdown"
									role="button"
									aria-expanded="false">
									<span class="fa fa-<?php echo $pages[$i][0][3]; ?> desktop-<?php echo $pages[$i][0][3]; ?>" ></span>	
									<span class="navTitle"><?php echo $pages[$i][0][0]; ?></span>
									<span class="mobile-show"><?php echo $pages[$i][0][0]; ?></span>
								</a>
								<ul class="dropdown-menu" role="menu">
								
									<?php
									for($j=1; $j< count($pages[$i]); $j++){?>
										
											<li>
												<a href="index.php?pge=<?php echo $i; ?>&cat=<?php echo $j; ?>">
													<?php
													if($pages[$i][0][4]==1){
														echo '<img src="images/logo'.$pages[$i][$j][2].'.png" alt="'.$pages[$i][$j][0].'"/>';
													}else{
														echo $pages[$i][$j][0];
													}
													 ?>
												</a>
											</li>
											
									<?php } ?>
									
								</ul>
							</li>
								
						
						<?php }else{?>
							<li>
								<a href="index.php?pge=<?php echo $i; ?>">
									<span class="fa fa-<?php echo $pages[$i][0][3]; ?> desktop-<?php echo $pages[$i][0][3]; ?>"></span>
									<span class="navTitle"><?php echo $pages[$i][0][0]; ?></span>
									<span class="mobile-show"><?php echo $pages[$i][0][0]; ?></span>
								</a>
							</li>
							
						<?php }
					} ?>
				
			</ul>
			
		</div>
	</nav>
</section>