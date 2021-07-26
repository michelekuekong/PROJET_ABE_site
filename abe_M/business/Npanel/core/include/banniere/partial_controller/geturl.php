<?php 
$saction = (!empty($_GET['saction'])) ? $_GET['saction'] : null ;
$id = (!empty($_GET['id'])) ? $_GET['id'] : null ;
$ssaction=(!empty($_GET['ssaction'])) ? $_GET['ssaction'] : null ;
if(isset($_GET['resultat'])) $resultat=boolval($_GET['resultat']);