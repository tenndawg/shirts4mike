<?php

require_once("../inc/config.php");

$pageTitle = "Search";
$section = "search";
include(ROOT_PATH . "inc/header.php"); ?>

	<div class="section shirts search page">

		<div class="wrapper">

			<h1>Search</h1>

			<form>
				<input type="text" name="s">
				<input type="submit" value="Go">
			</form>

		</div>

	</div>

<?php include(ROOT_PATH . "inc/footer.php"); ?>