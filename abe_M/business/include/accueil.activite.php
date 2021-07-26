<!-- ======= Why Us Section ======= -->

<div class="container" data-aos="fade-up">
  <div class="section-title">
    <h3>Nos domaines d'activités</h3>
    <p>Notre Métier</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-5 align-items-stretch video-box" style='background-image: url("assets/img/why-us.jpg"); background-color:red;' data-aos="zoom-in" data-aos-delay="10">
       
      </div>

      <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">
        <div class="accordion-list">
          <ul>
            <?php foreach ($data_metier as $key => $value) { ?>
            <li>
              <a data-toggle="collapse" class="collapse" href="#accordion-list-<?=$key ?>"><span>0<?=$key+1 ?></span> <?= mb_strtoupper($value->getRubrique(),'UTF-8') ?>
              <i class="bx bx-chevron-down icon-show"></i>
              <i class="bx bx-chevron-up icon-close"></i>
            </a>
              <div id="accordion-list-<?=$key ?>" class="collapse" data-parent=".accordion-list">
               <?= $value->getDescription()?>
              </div>
            </li>
               <?php } ?>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
  
