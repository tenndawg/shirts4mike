<?php

require_once("../inc/config.php");

$search_term = "";
if (isset($_GET["s"])) {
	$search_term = trim($_GET["s"]);
	if ($search_term != "") {
		require_once(ROOT_PATH . "inc/products.php");
		$products = get_products_search($search_term);
		echo "<pre>";
		var_dump($products);
		exit;
	}
}

$pageTitle = "Search";
$section = "search";
include(ROOT_PATH . "inc/header.php"); ?>

	<div class="section shirts search page">

		<div class="wrapper">

			<h1>Search</h1>

			<form method="get" action="./">
				<input type="text" name="s">
				<input type="submit" value="Go">
			</form>

		</div>

	</div>

<?php include(ROOT_PATH . "inc/footer.php"); ?>