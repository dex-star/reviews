
<?php
	$mysqli = new mysqli('dexreviews.com.mx', 'germain', 'K1ssmean1mal!', 'reviews');
	if($mysqli->connect_errno):
		echo "Error al conectarse con MySQL debido al error" .$mysqli->connect_error;
endif;
?>