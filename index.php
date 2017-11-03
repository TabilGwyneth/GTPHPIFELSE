<!DOCTYPE html>
<html>
<body>

<?php

$t = rand(1,6); 
  
if ($t == "1"){  
  echo  "Almost snake eyes";  
} elseif ($t == "6" ){   
  echo "winner";  
} else {
  echo "you lost";
 
}


?>

</body>
</html>
