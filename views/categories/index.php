<div id="categoryDiv">
	<h2> Categories </h2>
	<?php
		foreach($categories as $array => $keys) {
			foreach ($keys as $key => $value) {
				echo $value . "<br />";
			}
		}
	?>	

		<div>
			<p> <a href="?controller=category&action=create"> Create Category </a> </p>
			<p> <a href="?controller=category&action=delete"> Delete Category </a> </p>
			<p> <a href="?controller=category&action=change"> Change Category </a> </p>
		</div>
		<div>

		</div>
</div>