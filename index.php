<!DOCTYPE html>
<html>
<body>

<?php

$t = rand(1,6); 
echo $t; 
  
if ($t == 1){  
  echo  "Almost snake eyes";  
} elseif ($t == 6 ){   
  echo "winner";  
} else {
  echo "you lost";
 
}


?>

</body>
</html>
