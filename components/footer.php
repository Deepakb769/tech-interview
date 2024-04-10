<?php
$privacyUrl = "./privacy_policy.php";
?>
<footer>
   <hr>
   <div class="container ">
      <a href="index.php" class="footer-logo">
         <img class="techpathshala_logo_for_desktop" src="assets/images/home/techstalwarts_logo.svg">
         <img class="d-lg-none techpathshala_logo_for_mobile" src="assets\images\home\techpathshala_mobile_logo.svg">
      </a>
      <div class="row justify-content-between">
         <div class="col-lg-auto">
            <div class="d-flex footer_detail_box">
               <i class="bi bi-envelope footer_textt"></i>
               <div class="ps-3 footer_textt">info@techpaathshala.com</div>
            </div>
            <div class="d-flex footer_detail_box">
               <i class="bi bi-telephone footer_textt"></i>
               <div class="ps-3 footer_textt"> <a href="tel:9867629226" title="tel:9867629226"
                     class="telephone-link">9867629226</a></div>
            </div>
            <div class="d-flex footer_detail_box">
               <i class="bi bi-geo-alt footer_textt"></i>
               <div class="ps-3 footer_textt">
                  1st Floor Dheeraj Kawal, Lal Bahadur Shastri Rd, <br class="mbl_br"> Vikhroli West, Mumbai,
                  Maharashtra
                  400079
               </div>
            </div>
         </div>
         <div class="col-lg-auto">
            <h4>Connect with us on</h4>
            <div class="social-links">
               <a href="https://www.facebook.com/profile.php?id=100088716952969" target="_blank"><i
                     class="bi bi-facebook"></i></a>
               <a href="https://www.instagram.com/techpaathshala/" target="_blank"><i class="bi bi-instagram"></i></a>
               <a href="https://twitter.com/Techpaathshala_" target="_blank"><i class="bi bi-twitter"></i></a>
               <a href="https://www.youtube.com/@techpaathshala" target="_blank"><i class="bi bi-youtube"></i></a>
               <a href="https://www.linkedin.com/company/techpaathshala/about/?viewAsMember=true" target="_blank"><i
                     class="bi bi-linkedin"></i></a>
               <a href="javascript:void(0)"><i class="bi bi-telegram"></i></a>
               <a href="javascript:void(0)"> <i class="bi bi-pinterest"></i></a>
               <a href="javascript:void(0)"> <img class="tumbler" src="assets\images\home\tumbler.svg"
                     alt="tumbler-logo" style="margin-bottom: 9px; width: 12px;"></a>
            </div>
         </div>
      </div>
   </div>
   <hr>
</footer>
<div class="copy_rights">
   © 2022 TechPathshaala. All Right Reserved. <a href="<?php echo $privacyUrl;?>">Privacy policy</a>
</div>

<div id="ThankuModel" class="ThankuModel">
   <div class="header__thanku_icon">
      <img src="assets/images/home/check-circle.svg" alt="check-circle">
   </div>
   <h4 class="header_thanku_title" id="success_thanku_title"></h4>
   <p class="header_thanku_response" id="success_thanku_response"></p>
   <button class="header__enquiry_submit_btn" onclick="closeThankuModel()">Done</button>
</div>
<!-- Thank you POPUP CLOSE -->
</form>
</div>
<div id="enquiryPopup" class="enquiryModal">
   <div class="enquiryModal-content">
      <span class="closeEnquiryBtn">&times;</span>
      <div class="header__model_container">
         <div class="header__model-title">
            <p>Enquire Now</p>
         </div>
         <div class="header__model-form">
            <div class="enquire-form">
               <form id="enqueryForm" class="contact_form_box">
                  <label for="enquery_name" class='eq-lables'>Name</label>
                  <input type="text" id="enquery_name" name="enquery_name" class="eq-input" placeholder="First Name"
                     required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '');">
                  <p id="enquery_error_name" class="error-message "></p>
                  <label for="Phone Number" class='eq-lables'>Phone Number</label>
                  <input type="text" id="enquery_contact" name="enquery_contact" class="eq-input"
                     placeholder="Phone Number" required oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                     maxlength="10" required>
                  <p id="enquery_error_contact" class="error-message "></p>
                  <label for="enquery_email" class='eq-lables'>Email ID</label>
                  <input type="email" id="enquery_email" name="enquery_email" placeholder="Email" required>
                  <p id="enquery_error_email" class="error-message "></p>
                  <div>
                  <textarea id="enquery_comments" name="enquery_comments" class="eq-input enquery_text_area" placeholder="Write Message" required></textarea>
                  <p id="enquery_errorMessage" class="error-message"></p>

               </div>
                  <button type="button" onclick="handleSubmitEnquery()"
                     class="header__enquiry_submit_btn">Submit</button>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- home footer mobile form-model  -->

<div id="responsiveEnquiryModal" class="responsiveEnquiry-modal d-lg-none l-block">
   <div class="responsiveEnquiry-modal-content">
      <hr class="hr_lines"/>
      <div class="responsive__model_form">
         <div class="enquire-form">
         <form id="enqueryForm" class="contact_form_box">
                  <label for="enquiry_name" class='eq-lables'>Name</label>
                  <input type="text" id="enquiry_name" name="enquiry_name" class="eq-input" placeholder="First Name"
                     required oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '');">
                  <p id="enquiry_error_name" class="error-message "></p>
                  <label for="contact_number" class='eq-lables'>Contact number</label>
                  <input type="text" id="contact_number" name="contact_number" class="eq-input"
                     placeholder="Contact number" required oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                     maxlength="10" required>
                  <p id="enquiry_error_contact" class="error-message "></p>
                  <label for="enquiry_email" class='eq-lables'>Email</label>
                  <input type="email" id="enquiry_email" name="enquiry_email" placeholder="Email" required>
                  <p id="enquiry_error_email" class="error-message "></p>
                  <textarea id="enquiry_comments" name="enquiry_comments" class="eq-input enquery_text_area" placeholder="Write Message" required></textarea>
                  <p id="enquiry_errorMessage" class="error-message"></p>
               </form>
            <div class="enquiry_btn_box_responsive"> 
               <button type="button" class="responsiveEnquiryClose responsive_form_btn">Cancel</button>
               <button type="button" onclick="handleSubmitEnqueryFooter()" class="responsive_enquiry_submit_btn responsive_form_btn">Submit</button>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- Move JavaScript and jQuery code here -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
   integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src="https://unpkg.com/alpinejs@3.13.0/dist/cdn.min.js" defer></script>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="assets/js/courses.js"></script>
<script src="assets/js/_app.js"></script>

</body>