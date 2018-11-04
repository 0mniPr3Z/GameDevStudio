<?php require_once'libs/omni.php'; ?>

<!DOCTYPE html>
<html>
	<head>
		<?php require_once'inc/head.php'; ?>
	</head>
	<body>
		<div class="container">
			<?php 
				include'inc/header.php';
				include'vue/brik/vue_nav.php';
				//include'inc/newsfeed.php';
			?>
			
			<section id="sliderSection">
				<div class="row">
					<?php
						include'data/data_'.$pages[$pge][$cat][2].'.php';
						include'vue/vue_'.$pages[$pge][$cat][2].'.php';
					?>
				</div>
			</section>


			<footer id="footer">
				<?php include'inc/footer.php'; ?>
			</footer>
		</div>

		<?php require_once'script/ended.html';?>
	</body>
</html>