<!DOCTYPE html>
<html>
<body>

<?php

$t = rand(1,6);
echo $t;
echo "<br>";

	if ($t == 1){
		echo  "Almost snake eyes";
		}
	
	elseif ($t == 6){ 
		echo "Winner";
		
	}
	
	else {
		echo "you lose";
	}
	

?>

</body>
</html>
