<!--Modal: Login / Register Form-->
<div class="modal fade" id="Devis_vehicle" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog  modal-xl cascading-modal" role="document">
    <!--Content-->
     <div class="modal-content">
      <form action="index.php?action=Devis&saction=add" method="post">
        <!-- le header du modal -->
        <div class="modal-header bg-primary" style="padding: 10px 10px 10px 10px;">
            <button type="button" class="close" data-dismiss="modal" style="color: #fff;">X</button>
            <h3 style="float: left; font-weight:800; font-size:16px; position: absolute; color: #fff;" class="modal-title">Submit Your Request Quote -Ship a vehicule</h3>
        </div>
        <!--Modal cascading tabs-->
          <div class="modal-c-tabs">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs md-tabs tabs-2 light-blue darken-3" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#panel21" role="tab"><i class="fa fa-user mr-1"></i>
                  Details of applicant / shipper</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel22" role="tab"><i class="fa fa-user-plus mr-1"></i>
                  Vehicle information</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel23" role="tab"><i class="fa fa-user-plus mr-1"></i>
                  Pick-up address</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#panel24" role="tab"><i class="fa fa-user-plus mr-1"></i>
                  Destination</a>
              </li>
            </ul>

            <!-- Tab panels -->
            <div class="tab-content">
              <!--Panel 1-->
              <div class="tab-pane fade in show active" id="panel21" role="tabpanel">

                <!--Body-->
                    <div class="row" style="padding: 10px 10px 10px 10px" >
                  
                  <!-- personal informations -->
                  <div class="container">

                    <br>
                    <h4 style="font-size:18px; font-weight:700">Personal informations</h4>
                 
                 
                    <div class="row">

                      <div class="col-md-6">
                          <label for="firstname">Your ful name<span style="color: red"> *</span></label>
                         <input style="font-size:14px" id="personal_name" type="text" name="personal_name" class="form-control" placeholder="enter your full name" required>
                      </div>

                      <div class="col-md-6">
                          <label for="firstname">Your company's position <span style="color: red"> *</span></label>
                         <input style="font-size:14px" id="function" type="text" name="personal_function" class="form-control" placeholder="enter your function inside your company" required>
                      </div>

                     
                      
                    </div>
                    <div class="row">
                      
                      <div class="col-md-6">
                          <label for="tel">Your phone number<span style="color: red"> *</span></label>
                         <input style="font-size:14px" id="tel" type="tel" name="personal_tel" class="form-control" placeholder="enter your personal  phone number" required>
                      </div>
                       <div class="col-md-6">
                          <label for="email">Your email address<span style="color: red"> *</span></label>
                         <input style="font-size:14px" id="email" type="text" name="personal_email" class="form-control" placeholder="enter your personal email" required>
                      </div>
                     

                    </div>
                    <!-- fin- Personal informations -->
                     <br>
                    <h4 style="font-size:18px; font-weight:700">Your company informations</h4>
                  
                    <div class="row">

                      <div class="col-md-6">
                          <label for="firstname">company's name<span style="color: red"> *</span></label>
                         <input style="font-size:14px" id="company_name" type="text" name="name_c" class="form-control" placeholder="enter your company's name" required>
                      </div>

                      <div class="col-md-6">
                          <label for="tel">company's address<span style="color: red"> *</span></label>
                         <input style="font-size:14px" id="company_adresse" type="text" name="company_address" class="form-control" placeholder="address  of your company" required>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="col-md-6">
                          <label for="fax">company's Fax</label>
                         <input style="font-size:14px" id="company_fax" type="text" name="company_fax" class="form-control" placeholder="enter your the fax number of your company">
                      </div>
                        <div class="col-md-6">
                          <label for="tel">company's phone number<span style="color: red"> *</span></label>
                         <input style="font-size:14px" id="tel" type="tel" name="company_tel" class="form-control" placeholder="phone number of your company" required>
                      </div>
                     

                    </div>

                    <div class="row">
                       <div class="col-md-6">
                          <label for="email">Company's email address<span style="color: red"> *</span></label>
                         <input style="font-size:14px" id="email" type="text" name="company_email" class="form-control" placeholder="enter the email address of your company" required>
                      </div>
                      <div class="col-md-6">
                        <label for="website">Company's website</label>
                         <input style="font-size:14px" id="website" type="text" name="company_site_web" class="form-control" placeholder="enter the web site link  of your company ">
                      </div>
                    </div>
                    


                  </div>
 
                </div>

              </div>
              <!--/.Panel 1-->

              <!--Panel 2-->
              <div class="tab-pane fade" id="panel22" role="tabpanel">

                <!--Body-->
                <div class="row" style="padding: 25px 25px 25px 25px" >
                  <div class="col-md-12">
                      <label for="brand">Brand<span style="color: blue"> *</span></label>
                      <input id="brand" type="text" name="brand" class="form-control" placeholder="" required>
                  </div>

                  <div class="col-md-12">
                      <label for="type">Type<span style="color: blue"> *</span></label>
                      <input id="type" type="text" name="type" class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="col-md-12">
                      <label for="v_loaded">Is the vehicule loaded?<span style="color: blue"> *</span></label>
                  </div>
                  
                  <div class="col-md-4">
                      Yes<input type="radio" class="form-control" value="Yes" style="margin-right: 10px; width:25px; height:25px" name="v_loaded" >
                  </div>
                  
                  <div class="col-md-4">
                      No<input type="radio" class="form-control" name="v_loaded" style="margin-right: 10px; width:25px; height:25px" value="No">
                  </div>

                </div>

              </div>
            <!--/.Panel 2-->

              <!--Panel 3-->
              <div class="tab-pane fade" id="panel23" role="tabpanel">

                <!--Body-->
                <div class="row" style="padding: 25px 25px 25px 25px" >
                  <div class="col-md-6">
                      <label for="a_name">Name<span style="color: blue"> *</span></label>
                      <input id="a_name" type="text" name="a_name" class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="col-md-6">
                      <label for="address">Address<span style="color: blue"> *</span></label>
                      <input id="address" type="text" name="address" class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="col-md-6">
                      <label for="postal_code">Postal Code<span style="color: blue"> *</span></label>
                       <input id="postal_code" type="text" name="postal_code" class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="col-md-6">
                      <label for="city">City<span style="color: blue"> *</span></label>
                       <input id="city" type="text" name="city" class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="col-md-6">
                      <label for="country">Country<span style="color: blue"> *</span></label>
                       <input id="country" type="text" name="country" class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="col-md-6">
                      <label for="a_number">Phone number<span style="color: blue"> *</span></label>
                       <input id="a_number" type="text" name="a_number" class="form-control" placeholder="" required>
                  </div>

                </div>

              </div>
            <!--/.Panel 3-->

              <!--Panel 4-->
              <div class="tab-pane fade" id="panel24" role="tabpanel">

                <!--Body-->
                <div class="row" style="padding: 25px 25px 25px 25px" >
                  <div class="col-md-12">
                      <label for="d_city">City<span style="color: blue"> *</span></label>
                       <input id="d_city" type="text" name="d_city" class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="col-md-12">
                      <label for="d_country">Country<span style="color: blue"> *</span></label>
                       <input id="d_country" type="text" name="d_country" class="form-control" placeholder="" required>
                  </div>
                  
                  <div class="col-md-12">
                      <label for="o_comments">Other comments<span style="color: blue"> *</span></label>
                      <textarea id="o_comments" name="o_comments" class="form-control" placeholder="" rows="5"></textarea>
                  </div>

                </div>
                 <!--Footer-->
               <div class="modal-footer">
                    <button type="submit" name="submit" value="ship_a_vehicule" class="btn btn-primary btn-md" >Submit</button>
                    <button type="button" class="btn btn-default btn-md" data-dismiss="modal">Cancel</button>
                </div>
              <!--Fin Footer-->

              </div>
            <!--/.Panel 4-->
             
          </div>

            </div>
        </div>
     </form>
    </div>
    <!--/.Content-->
  </div>
</div>