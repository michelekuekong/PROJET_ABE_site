
<div class="container" data-aos="fade-up">

        <div class="section-title">
          <h3>Contact</h3>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-lg-12">
                <!--Google map-->
                <div id="map-container-google-3" class="z-depth-1-half map-container-3">
                  <iframe src="https://maps.google.com/maps?q=warsaw&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
                    style="border:0" allowfullscreen></iframe>
                </div>
              </div>
                <?php if (!empty($data_entreprise)) { ?>
                  <div class="col-lg-12" style="margin-top: 25px">
                    <div class="info-box">
                      <i class="bx bx-map"></i>
                      <h3>Our Address</h3>
                      <p><?= (!empty($data_entreprise[0]->getAdresse())) ? $data_entreprise[0]->getAdresse() : "" ; ?></p>
                    </div>
                  </div>
                <?php } ?>

            </div>

          </div>

          <div class="col-lg-6">
            <form action="index.php?action=Mail" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="Tel" class="form-control" name="PHONE" id="phone" placeholder="enter your phone" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="6" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="mb-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>