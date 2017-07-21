<?php 
	if (isset($_COOKIE['customerid'])) {
		setcookie("customerid", "", time()-3600); 

		// redirect to homepage
 		 header( 'refresh: 0; url=index.php' );
	}

?>

