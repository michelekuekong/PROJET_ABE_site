<?php
//date
$date=date_create($data_actualite[0]->getDate_mj());
?>

<div class="post-slide2" style="background-color:#fff;">
    <div class="post-img">
        <a href="index.php?action=Article&id=<?= $data_actualite[0]->getId() ?>">
            <img src="<?= $data_illustration[0]->getLien() ?>" alt="<?= $data_actualite[0]->getTitre(); ?>">
        </a>
    </div>
    <div class="post-content">
        <h3 class="post-title" style="height:50px">
           <a href="index.php?action=Article&id=<?= $data_actualite[0]->getId() ?>">
            <?=  substr($data_actualite[0]->getTitre(), 0,100) ; ?>...
                
            </a>
        </h3>
        <p class="post-description" style="height:175px">
            <?=  substr($data_actualite[0]->getResume(), 0,250) ; ?>...
        </p>
        <ul class="post-bar">
            <li><i class="fa fa-calendar"></i> <?= date_format($date,"d-m-Y")  ?></li>
            <li>
                <i class="fa fa-user"></i>
                <?= $data_actualite[0]->getAuteur() ?>
                
            </li>
        </ul>
        <a href="index.php?action=Article&id=<?= $data_actualite[0]->getId() ?>" class="btn-get-started">Lire l'article</a>
    </div>
</div>