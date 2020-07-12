<div class="row mb-2">
	<?php
		while($row = $results->fetch_assoc()) {
			include('./app/views/articles/article.php');
		}
	?>
</div>
