
<div class="container" data-aos="fade-up">
    <?php 
    $image = $data_image[0] ->getLien(); ?>
    <div class="section-title">
      <h3>ceo</h3>
      <p>Message ceo</p>
    </div>
    <div class="row content">
     <?php foreach ($data_service as $key => $value){ ?>
      <div class="col-lg-8 col-md-8 col-sm-8">
        <p style="text-align: justify;"><?= trim($value->getDescription()) ?></p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-4">
        <img style="max-height: 100%; max-width: 100%" src="<?= $image ?>">
      </div>
    <?php } ?>
    </div>
</div>