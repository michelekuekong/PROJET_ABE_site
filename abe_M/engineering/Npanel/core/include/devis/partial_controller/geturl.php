<?php 
$saction = (!empty($_GET['saction'])) ? $_GET['saction'] : null ;
$id = (!empty($_GET['id'])) ? $_GET['id'] : null ;
$ssaction=(!empty($_GET['ssaction'])) ? $_GET['ssaction'] : null ;
if(isset($_GET['ssaction'])){
    if($_GET['ssaction']==0 || $_GET['ssaction']==1){
        $ssaction = $_GET['ssaction'];
    } else {
        $ssaction = NULL;
    }
}