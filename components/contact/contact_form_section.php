<div class="contact-us-form-main-container">
   <div class="contact-us-form-frame-1">
      <h2 class="contact-us-form-reach-out-to-us desktop_section">Reach out to us!</h2>
      <h3 class="mobile_section mobile-text">Reach out and get in touch <br class="for_mobile_view"> with us</h3>
      <img class="reach-underline" src='assets\images\contactus\contactheroImage\reachunderline.svg'
         alt="reachunderline">
      <div class="contact-us-form-frame-5">
         <div class="column column-second enquire-form contact-form-custom">
            <form id="contactForm" class="contact_form_box custom_contact_form_box">
               <div class="form_input">
                  <div class="contact_input_container" >
                     <input type="text" id="contact_Name" name="contact_Name" class="eq-input custom_input"
                        placeholder="Your name" required  oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '');">
                     <p id="contact_error_name" class="error-message"></p>
                  </div>
                  <div class="contact_input_container" >
                     <input type="email" id="contact_email" name="contact_email" class="eq-input custom_input"
                        placeholder="you@company.com" required>
                     <p id="contact_error_email" class="error-message"></p>
                  </div>
               </div>
               <div class="form_input">
                  <div class="contact_input_container" >
                     <input type="text" id="contact_phone" name="contact_phone" class="eq-input custom_input"
                        placeholder="Phone Number" required oninput="this.value = this.value.replace(/[^0-9]/g, '');"
                        maxlength="10">
                     <p id="contact_error_phone" class="error-message"></p>
                  </div>
                  <div class="contact_input_container" >
                     <input type="text" id="contact_subject" name="contact_subject" class="eq-input custom_input"
                        placeholder="Subject" required>
                     <p id="contact_error_subject" class="error-message"></p>
                  </div>
               </div>
               <div>
                  <textarea id="contact_comments" name="contact_comments" class="eq-input contact_text_area" placeholder="Write Message"
                     rows="4" required></textarea>
                  <p id="contact_errorMessage" class="error-message"></p>

               </div>
               <button type="button" onclick="handleSubmitContactForm()"
                  class="contact-form-submit contact-us-form-button contact-form-btn">Submit Form</button>
            </form>
         </div>
      </div>
   </div>
   <div class="contact-us-form-frame-11">
      <p class="contact-us-form-contact-information">Contact Information</p>
      <div class="adress-desc">
         <i class="bi bi-geo-alt-fill logo-cform"></i>
         <span class="near-dheeraj-kawal-vikhroli">1st Floor Dheeraj Kawal, Lal Bahadur Shastri Rd,
Vikhroli West, Mumbai, Maharashtra 400079</span>
      </div>
      <div class="adress-desc">
         <i class="bi bi bi-telephone-fill logo-cform"></i>
         <span class="near-dheeraj-kawal-vikhroli">9867629226</span>
      </div>
      <div class="adress-desc">
         <i class="bi bi-envelope-fill logo-cform"></i>
         <span class="near-dheeraj-kawal-vikhroli">info@techpaathshala.com</span>
      </div>
      <div class="contact-us-form-frame-18">
         <div class="contact-form-icon"><i class="bi bi-twitter"></i></div>
         <div class="contact-form-icon"><i class="bi bi-linkedin"></i></div>
         <div class="contact-form-icon"><i class="bi bi-youtube"></i></div>
         <div class="contact-form-icon"><i class="bi bi-facebook"></i></div>
         <div class="contact-form-icon"><i class="bi bi-instagram"></i></div>
      </div>
   </div>
</div>
<div class="map-container">
   <div class="contact__branches_box">
      <h3 class="mobile_section mobile-text">Our Branches</h3>
      <img class="branches_line mobile_section" src='assets\images\contactus\contactheroImage\reachunderline.svg'alt="reachunderline">
      <iframe class="contact__location_img" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d241236.54191912262!2d72.7188157705512!3d19.13742258381137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2773c1cc85417229%3A0xf0635cba9d4cfc98!2sTechpaathshala%20%7C%20Software%20Development%20%7C%20Machine%20Learning%20%7C%20AI%2FML!5e0!3m2!1sen!2sin!4v1709528978179!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
   </div>
   <div class="mobile_section text_desc">
      <div class="mobile_text_decs">
         <h4>Mumbai Office</h4>
         <p>TechStalwarts, 7th floor, Dheeraj Kawal,Vikhroli (Mumbai) Commercial Real Estate, Mumbai,Maharashtra 400070
         </p>
      </div>
      <div class="mobile_text_decs">
         <h4>Bhopal Office</h4>
         <p>TechStalwarts, 1st Floor, 96 Gargi Rani Complex, Zone II, MP Nagar Bhopal - 462011, Bhopal,Madhya Pradesh
            462011</p>
      </div>
      <div class="mobile_text_decs">
         <h4>Dubai Office</h4>
         <p>Unit GA-00-SZ-L1-RT-208, Level 1, Gate Avenue - South Zone, Dubai International Financial Centre, Dubai,
            UAE, Dubai,United Arab Emirates 462045</p>
      </div>
   </div>
</div>