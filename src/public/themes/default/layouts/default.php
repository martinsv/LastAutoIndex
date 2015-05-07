<!DOCTYPE html>
<html>
	<head>
		<?php
		theme::part('head', 'content');
		?>
	</head>
	<body>
		<header class="ui top attached page grid segment">
			<div class="column">
				<?php
				theme::part('header', 'content');
				?>
			</div>
		</header>
		<main class="ui basic page grid segment">
			<div class="column">
				<?php
				theme::part('main', 'content');
				?>
			</div>
		</main>
		<footer class="ui page grid">
			<div class="right aligned column">
				<?php
				theme::part('footer', 'content');
				?>
			</div>
		</footer>
	</body>
</html>
