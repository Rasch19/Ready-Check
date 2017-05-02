<?php require 'header.php'; ?>


		<div class="app-container">
			<div class="app-header"><h2>Select amount of players to ready-check</h2></div>
				<div class="app-content">
					<form id="search" action="GenerateURL.php" method="post">
						<div class="range-slider">
						<input class="range-slider__range" type="range" value="5" min="2" max="10" name="players">
						<span class="range-slider__value">0</span>
						</div>
						<input id="start" class="button" type="submit" value="Start Readycheck">
					</form>
				</div>
		</div>

	<?php require 'footer.php'; ?>
	</div> <!-- End of Master Container -->


		<script type="text/javascript" src="js/bubble.js"></script>
	</script>
	</body>
</html>
