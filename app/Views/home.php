<!DOCTYPE html>
<html>
<head>
	<?php echo view("header");?>
</head>
<body>
	
	
	<?php

	function myFunction(){
		echo "Davido";
	}
	echo myFunction() . '<br>';
	echo myFunction() . '<br>';
	echo myFunction();
	
	
	?>



<?php echo view("footer");?>
</body>
</html>