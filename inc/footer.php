<html>
<body>


	<div class="footer">

		<div class="wrapper">

			<div class="footer shirts search page">

				<ul>		
						<li><a href="http://twitter.com/treehouse">Twitter</a></li>
						<li><a href="https://www.facebook.com/TeamTreehouse">Facebook</a></li>
					</ul>

						<form method="get" action="../search/">
							<input type="text" name="s" value="<?php echo htmlspecialchars($search_term); ?>">
							<input type="submit" value="Go">
						</form>

						<?php

							if ($search_term != "") {
								if(!empty($products)) {
									echo '<ul class="products">';
									foreach ($products as $product) {
										echo get_list_view_html($product);
									}

									echo '</ul>';
							} else {
								echo '<p>No products were found matching that search term.</p>';
							}

							} ?>

							<p>&copy;<?php echo date('Y'); ?> Shirts 4 Mike</p>

			</div>

		</div>
	
	</div>

	

</body>
</html>