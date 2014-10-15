<?php

require_once("../inc/config.php");

$pageTitle = "Thank you for your order!";
$section = "none";
include(ROOT_PATH . "/inc/header.php"); ?>

  <div class="section page">

      <div class="wrapper">
    
          <h1>Thank you!</h1>
        
          <p>Example text from <a href="www.paypal.com/us">www.paypal.com/us</a></p>
          
          <p>Need another shirt already? Visit the <a href="<?php echo BASE_URL; ?>shirts.php">Shirts Listing</a> page again.</p>
        
      </div>

  </div>

<?php include(ROOT_PATH . "inc/footer.php"); ?>