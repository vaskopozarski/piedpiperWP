<?php get_header(); ?>
  <section class="fullwidth margin-top-70 margin-bottom-65" data-background-color="#fff"> 
    
    <!-- Container / Start -->
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <h3 class="headline centered margin-bottom-50"> <strong>PRICING PLANS</strong> </h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has <br>
            been the industry's standard dummy text ever since the 1500s</p>
        </div>
      </div>
      
      <!-- Row / Start -->
      <div class="row">
        <div class="col-md-12">
          <div class="pricing-container margin-top-30"> 
            
            <!-- Plan #1 -->
            
            <div class="plan">
              <div class="plan-price">
                <h3>Standard</h3>
				  <span class="value">$12<span style="font-size: 14px">/ month</span></span> </div>
              <div class="plan-features">
                <ul>
                  <li><i class="fas fa-check"></i> &nbsp One Listing</li>
                  <li><i class="fas fa-check"></i> &nbsp 30 Days Availability</li>
                  <li><i class="fas fa-check"></i> &nbsp Standard Listing</li>
                  <li><i class="fas fa-check"></i> &nbsp Limited Support</li>
                </ul>
                <a class="mfk2" href="#">SIGNUP NOW</a> </div>
            </div>
            
            <!-- Plan #3 -->
            <div class="plan">
              <div class="plan-price">
                <h3>Buissness</h3>
                <span class="value">$30<span style="font-size: 14px">/ month</span></span> </div>
              <div class="plan-features">
                <ul>
                  <li><i class="fas fa-check"></i> &nbsp One Listing</li>
                  <li><i class="fas fa-times"></i> &nbsp 30 Days Availability</li>
                  <li><i class="fas fa-check"></i> &nbsp Standard Listing</li>
                  <li><i class="fas fa-times"></i> &nbsp Limited Support</li>
                </ul>
                <a class="mfk" href="#">SIGNUP NOW</a> </div>
            </div>
            
            <!-- Plan #3 -->
            <div class="plan">
              <div class="plan-price">
                <h3>Premium</h3>
                <span class="value">$50<span style="font-size: 14px">/ month</span></span> </div>
              <div class="plan-features">
                <ul>
                  <li><i class="fas fa-times"></i> &nbsp One Listing</li>
                  <li><i class="fas fa-check"></i> &nbsp 30 Days Availability</li>
                  <li><i class="fas fa-times"></i> &nbsp Standard Listing</li>
                  <li><i class="fas fa-check"></i> &nbsp Limited Support</li>
                </ul>
                <a class="mfk2" href="#">SIGNUP NOW</a> </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Row / End --> 
      
    </div>
    <!-- Container / End --> 
    
  </section>
  <!-- Pricing Tables / End --> 
  
  <!-- Parallax -->
  
    
    <!-- Infobox -->
    <div class="text-content white-font text-center" style="">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>DOWNLOAD APP NOW</h2>
            <p>We’re full-service, local agents who know how to find people and home each together. We use online tools with an unmatched search capability to make you smarter and faster.</p>
            <a href="#" class="headerbtn margin-top-25"><i class="fab fa-apple"></i> &nbsp Apple Store</a> 
            <a href="#" class="headerbtn margin-top-25"><i class="fab fa-android"></i> &nbsp Google Play</a> </div>
        </div>
      </div>
    </div>
    
    <!-- Infobox / End --> 
    
 
  <!-- Parallax / End -->
  
  <div class="clearfix"></div>
  <!-- Map Container / End --> 
  
  <!-- Container / Start -->
  <div class="container margin-top-45">
    <div class="row"> 
      
      <!-- Contact Details --> 
      
      <!-- Contact Form -->
      <div class="offset-md-2 col-md-8 text-center">
        <section id="contact">
          <h4 class="headline margin-bottom-35 text-uppercase"><strong>Contact Us</strong></h4>
          <p style="font-size: 12px;line-height: 20px; padding:0 15px">We’re full-service, local agents who know how to find people and home each together. We use online tools with an unmatched search capability to make you smarter and faster.</p>
          <div id="contact-message" class="margin-top-25"></div>
          <form method="post" action="contact.php" name="contactform" id="contactform" autocomplete="on">
            <div class="row">
              <div class="col-md-6">
                <div>
                  <input name="name" type="text" id="name" placeholder="Your Name" required="required" />
                </div>
              </div>
              <div class="col-md-6">
                <div>
                  <input name="email" type="email" id="email" placeholder="Email Address" pattern="^[A-Za-z0-9](([_\.\-]?[a-zA-Z0-9]+)*)@([A-Za-z0-9]+)(([\.\-]?[a-zA-Z0-9]+)*)\.([A-Za-z]{2,})$" required="required" />
                </div>
              </div>
            </div>
            <div>
              <input name="subject" type="text" id="subject" placeholder="Subject" required="required" />
            </div>
            <div>
              <textarea name="comments" cols="40" rows="3" id="comments" placeholder="Message" spellcheck="true" required></textarea>
            </div>
            <input type="submit" class="submit button" id="submit" value="Send Message" style="border-radius: 0" />
          </form>
        </section>
      </div>
      <!-- Contact Form / End --> 
      
    </div>
  </div>
<?php get_footer(); ?>