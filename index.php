<!DOCTYPE html>
<html>
<body>

<?php

$t = rand(1,6);
$r = rand (1,6);
echo $t;
echo "<br>";
echo $r;
echo "<br>";

	if ($t == 1 and $r ==1){
		echo  "Almost snake eyes";
		}
	elseif ($t == 1 xor $r<1){
		echo "Snake eyes";
	}	
			elseif ($t == 6 and $r == 6){ 
		echo "Winner";
		
	}
	
	else {
		echo "you lose";
	}
	

?>

</body>
</html>
