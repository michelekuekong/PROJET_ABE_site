<!--Modal: Login / Register Form-->
<div class="modal fade" id="demande_devis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl cascading-modal" role="document">
    <!--Content-->
    <div class="modal-content">
      <form action="index.php?action=Devis" method="post">
        <!-- le header du modal -->
        <div class="modal-header bg-primary" style="padding: 15px 15px 15px 15px;">
            <button type="button" class="close" data-dismiss="modal" style="color: #fff;">X</button>
            <h3 style="float: left; font-weight:800; font-size:16px; position: absolute; color: #fff;" class="modal-title">Demande de dévis -  Africa Business Engeneering</h3>
        </div>
        <!--Modal cascading tabs-->
          <div class="modal-c-tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs md-tabs tabs-2 light-red darken-3" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel11" role="tab"><i class="fa fa-user mr-1"></i>
                  Vos coordonnées</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel12" role="tab">
                  <i class="fa fa-list mr-1" aria-hidden="true"></i>
                  Votre projet</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel13" role="tab"><i class="fa fa-map-marker mr-1" aria-hidden="true"></i>
                   Site du projet</a>
              </li>
            
            </ul>

            <!-- Tab panels -->
            <div class="tab-content">
              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="panel11" role="tabpanel">

                <!--Body-->
                <?php require("include/identification_prospect_form.php") ?>
               

              </div>
              <!--/.Panel 1-->

              <!--Panel 2-->
              <div class="tab-pane fade" id="panel12" role="tabpanel">

                <!--Body-->
                <div class="container">
                 <div class="row" style="padding: 25px 25px 25px 25px" style="font-size:14px;" >
                  <div class="col-md-6">
                      <label style="font-size:14px" for="type_container">Date de démarrage <span style="color: red"> *</span></label>
                      <input style="font-size:14px" type="date" class="form-control" name="date_demarrage">
                  </div>
                  <div class="col-md-6">
                   
                      <label style="font-size:14px" for="type_container">Nature du projet<span style="color: red"> *</span></label>
                      <select style="font-size:14px" style="width:100%" class="form-control" name="id_titre_service">
                     
                        <?php foreach ($data_service as $key => $value) { ?>
                          <option style="font-size:14px" value="<?= $value->getId()  ?>"><?=  $value->getTitre()  ?></option>
                        <?php } ?>
                      </select>
                  </div>
                
           
                
                  <div class="col-md-12" style="margin-bottom:10px">
                      <label style="font-size:14px" for="loading_container">Décrivez votre projet<span style="color: red"> *</span></label>
                      <textarea style="font-size:14px" id="loading_container" name="description" class="form-control" placeholder="" rows="10"></textarea>
                  </div>

        </div>
              </div>

              </div>
            <!--/.Panel 2-->

              <!--Panel 3-->
              <div class="tab-pane fade" id="panel13" role="tabpanel">

                <!--Body-->
                <div class="row" style="padding: 25px 25px 25px 25px" >
                 
                  
                                 
                  
                  <div class="col-md-6">
                      <label style="font-size:14px" for="city">Pays<span style="color: red"> *</span></label>
                       <input style="font-size:14px" id="city" type="text" name="pays" class="form-control" placeholder="Veuillez indiquez le pays" required>
                  </div>
                  
                  <div class="col-md-6">
                      <label style="font-size:14px" for="country">Ville<span style="color: red"> *</span></label>
                       <input style="font-size:14px" id="country" type="text" name="ville" class="form-control" placeholder="Veuillez indiquez la ville " required>
                  </div>

                   <div class="col-md-6">
                      <label style="font-size:14px" for="address">Adresse du site<span style="color: red"> *</span></label>
                      <input style="font-size:14px" id="address" type="text" name="adresse_site_projet" class="form-control" placeholder="Veuillez indiquez l'adresse du site du projet" required>
                  </div>
                  
                  

                </div>
                   <!--Footer-->
               <div class="modal-footer">
                    <button type="submit" name="submit" value="demande_devis" class="btn btn-primary btn-md" >Submit</button>
                    <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button>
                </div>
              <!--Fin Footer-->

              </div>
            <!--/.Panel 3-->

            
          </div>
          
            </div>
        </div>
     </form>
    </div>
    <!--/.Content-->
  </div>
</div>