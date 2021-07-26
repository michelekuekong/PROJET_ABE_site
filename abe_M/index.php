<?php
$nombre=rand(1,10);
if ($nombre % 2 == 0) {
   $cible='engineering';
}else{
   $cible='business';
}
header("Location:./".$cible);