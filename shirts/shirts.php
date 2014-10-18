<?php

	require_once("../inc/config.php");
	require_once(ROOT_PATH . "inc/products.php");

	if (empty($_GET["pg"])) {
		$current_page = 1;
	} else {
	$current_page = $_GET["pg"];
	}

	$total_products = get_products_count();
	$products_per_page = 8;
	$total_page = ceil($total_products / $products_per_page);

	echo $current_page;
	exit;

	$products = get_products_all();	

 ?><?php 
$pageTitle = "Mike's Full Catalog of Shirts";
$section = "shirts";
include(ROOT_PATH . 'inc/header.php'); ?>

		<div class="section shirts page">

			<div class="wrapper">

				<h1>Mike&rsquo;s Full Catalog of Shirts</h1>

				<ul class="products">
					<?php foreach($products as $product) { 
                  echo get_list_view_html($product);
						}
					?>
				</ul>

			</div>

		</div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>
