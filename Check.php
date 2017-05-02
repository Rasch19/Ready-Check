<?php require 'header.php'; ?>

		<p id="p1" style="visibility: hidden; display: none;">0</p>
		<div class="app-container">
			<div class="app-header blink"><h2>Waiting for your teammates..</h2></div>
				<div class="app-content">
					<table id="table" align="center">
						<tr>

							<?php
							include 'table.php'
							?>
						</tr>
					</table>


					<table id="knappar" align="center">
						<tr>
							<th><a class="button" id="Add">Ready</a></th>
							<th><a class="button" id="copy">Copy URL</a></th>
						</tr>
					</table>

				</div>
			</div>
			

		<script type="text/javascript" src="js/MyScript.js"></script>
		<script type="text/javascript" src="js/AddPlayer.js"></script>
		<script type="text/javascript" src="js/ready.js"></script>
		<script type="text/javascript" src="js/copy.js"></script>
		<script type="text/javascript" src="js/loaded.js"></script>
		<script type="text/javascript" src="clipboard.js-master/clipboard.js"></script>
		<script type="text/javascript" src="clipboard.js-master/clipboard.min.js"></script>
	</body>






</html>
