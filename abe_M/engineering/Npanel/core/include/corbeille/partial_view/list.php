<?php
    $file = "core/include/".$action."/partial_view/".strtolower($type).".php";
    if(file_exists($file)) {
        include($file);
    }else {
?>
    <div class="error-box" style="left:0px">
        <div class="error-body text-center">
            <h1 class="error-title text-danger">404</h1>
            <h3 class="text-uppercase error-subtitle">PAGE INTROUVABLE !</h3>
            
            <a href="index.php" class="btn btn-danger btn-rounded waves-effect waves-light m-b-40">retourner à l'accueil</a> </div>
    </div>
<?php } ?>


