<?php if(!empty($data)){ ?>

<?php
$titre= $data[0]->getTitre();
$description=$data[0]->getDescription();
$resume=$data[0]->getResume();
$img=$data[0]->getImage();
$plaquette=$data[0]->getPlaquette();
$video=$data[0]->getVideo();


?>

<!-- Description -->
<div class="col-12 editor">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Description du service <strong><?= $titre ?></strong></h5>
            <hr>
            
            <?php if(!empty($description )){ ?>

            <p><?= str_replace("\'", "'", $description)  ?></p>
       
	           <div class="col-md-3 col-sm-12 ">
	             <button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
	             	Modifier
	         	</button>
	           </div>
       		<?php }else{?>
       			<div class="col-md-3 col-sm-12 ">
		            <button type="button" class=" btn btn-md btn-outline-success" id="ts-success">
		             	Ajouter sa description
		         	 </button>
	         	</div>
            <?php } ?>

                
      
        </div>
    </div>
</div>

<form id="form_editor" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Editer la description du service <strong><?= $titre ?></strong>
                    </h4>
                    <!-- Create the editor container -->
                    <div class="form-group col-12"   style="width: 100%;height:200px">
                    <textarea  id="editor"   type="text" style="background-color:#ccc"  required name="description" class="form-control">
                        <?php if(empty($description )){ ?>
                        <p>Saisir votre texte ici</p><br>
                        <?php }else{ ?>
                            <?= trim($description) ?>
                        <?php } ?>
                    </textarea> 
                    </div>
                    <div class="col-12" style="text-align:center; margin-top:50px;">
                         <button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
                                Valider
                        </button>
                        <button type="button" class=" close_editor btn btn-md btn-outline-dark" id="ts-dark">
                              Annuler
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</form>
<!-- Resum?? -->

<!-- Description -->
<div class="col-12 editor_resume">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"> Resum?? du service <strong><?= $titre ?></strong></h5>
            <hr>
            
            <?php if(!empty($resume )){ ?>

            <p><?= str_replace("\'", "'", $resume)  ?></p>
       
               <div class="col-md-3 col-sm-12 ">
                 <button type="button" class="  btn btn-md btn-outline-info" id="ts-success">
                    Modifier
                </button> 
               </div>
            <?php }else{?>
                <div class="col-md-3 col-sm-12 ">
                    <button type="button" class=" btn btn-md btn-outline-info" id="ts-info">
                        Ajouter un bref r??sum?? 
                     </button>
                </div>
            <?php } ?>

                
      
        </div>
    </div>
</div>

<form id="form_editor_resume" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&ssaction=update&id=<?= $id?>" >
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Editer r??sum??  du service <strong><?= $titre ?></strong>
                    </h4>
                    <!-- Create the editor container -->
                    <div class="form-group col-12"   style="width: 100%;height:200px">
                    <textarea  id="editor"   type="text" style="background-color:#ccc"  required name="resume" class="form-control">
                        <?php if(empty($resume )){ ?>
                      Saisir votre texte ici
                        <?php }else{ ?>
                            <?= trim($resume) ?>
                        <?php } ?>
                    </textarea> 
                    </div>
                    <div class="col-12" style="text-align:center; margin-top:50px;">
                         <button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
                                Valider
                        </button>
                        <button type="button" class=" close_editor btn btn-md btn-outline-dark" id="ts-dark">
                              Annuler
                        </button>

                    </div>

                </div>
            </div>
        </div>
    </div>
</form>


<!-- Piece jointe-->
<div class="card">
    <div class="card-body">
    <h5 class="card-title"> Pi??ces jointes  du service <strong><?= $titre ?></strong></h5>
    <hr>
        <!-- image -->
        <div class="row el-element-overlay">
        <?php if(!empty($img)){ ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="../<?= $img ?>" alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="../<?= $img ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Image</h4>
                        </div>
                    </div>
                </div>
            </div>
    
        <?php } ?>

 
        <!-- Plaquete pdf-->
    
        <?php if(!empty($plaquette)){ ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="../img/icone_pdf.png" style="height:100px; width:auto"  alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="../<?= $plaquette?>" target="_blank"><i class="mdi mdi-magnify-plus"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Plaquette</h4>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

    
        <!-- Video-->
   
        <?php if(!empty($video)){ ?>
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> <img src="<?= $video ?>" alt="user" />
                            <div class="el-overlay">
                                <ul class="list-style-none el-info">
                                    <li class="el-item"><a class="btn default btn-outline image-popup-vertical-fit el-link" href="<?= $video ?>"><i class="mdi mdi-magnify-plus"></i></a></li>
                                    <li class="el-item"><a class="btn default btn-outline el-link" href="javascript:void(0);"><i class="mdi mdi-tooltip-edit"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="el-card-content">
                            <h4 class="m-b-0">Video</h4>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

        <?php if(empty($img) or empty($plaquette) or empty($video)){ ?>
         <div class="col-md-3 col-sm-12" id="AddPj">
               <div class="btn-group">
                    <button type="button" class="btn btn-primary">Nouvelle Pi??ce jointe</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <div class="dropdown-menu">
                    <?php if(empty($img)){ ?>
                        <a id="addImg" class="dropdown-item" href="#">Image illustrative</a>
                    <?php } ?>
                      <div class="dropdown-divider"></div>
                    <?php if(empty($plaquette)){ ?>
                        <a id="addPlaquette" class="dropdown-item" href="#">Plaquette illustrative</a>
                    <?php } ?> 
                    <div class="dropdown-divider"></div>
                     <?php if(empty($video)){ ?>
                        <a id="addVideo" class="dropdown-item" href="#">Video illustrative</a>
                    <?php } ?>
                    </div>
                </div><!-- /btn-group -->
              
        </div>
        <?php } ?> 
        <div class="col-md-12 col-sm-12" id="DivFormAddPj">
            <form class="form-horizontal" method="POST" action="index.php?action=<?= $action ?>&saction=Detail&id=<?= $id?>&ssaction=update" enctype="multipart/form-data">
                 <div class="form-group row">
                        <div class="col-md-8">
                            <div id="importImg" class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="image">
                                <label class="custom-file-label" for="validatedCustomFile">Importer une image *.png de taille <?= $h."x".$w ?> px ... </label>
                                
                            </div>
                            <div id="importPlaqt" class="custom-file">
                                <input type="file" class="custom-file-input" id="validatedCustomFile" name="plaquette">
                                <label class="custom-file-label" for="validatedCustomFile">Importer un doc  *.pdf ... </label>
                                
                            </div>
                            <div id="importVideo" >
                                 <div class="form-group row">
                                        <div class="col-sm-12">
                                            <input  type="text" name="video" class="form-control" id="fname" placeholder="Saisir le lien youtube de votre video">
                                        </div>
                                    </div>
                                
                            </div>
                        </div>
                   
                    <div class="col-md-4">
                        <button  type="submit" class="btn btn-md btn-outline-primary" id="ts-success">
                                Valider
                        </button>
                        <button type="button" class=" close_DivFormAddPj btn btn-md btn-outline-dark" id="ts-dark">
                              Annuler
                        </button>
                    </div> 
                </div>
            </form>
      
          
        </div>
        

        </div>

    </div>
</div>
<?php } ?>

