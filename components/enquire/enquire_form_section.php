<div class="form_container">
   <h2 class="enqurie-sub-heding">Find the right hire today</h2>
   <!-- <h2 class="enqurie-sub-heding">Access our trained talent today</h2> -->
</div>
<img class="enqurie-form-underline" src="assets\images\home\hero_underline.png" alt="logo-vector">
<div class="row form-custom-container">
   <div class="column column-first">
      <div class="form-side-setion">
         <div class="form-desc enquire-form">
            <div><img class="enquire-star-img" src="assets\images\enqurie\StarEnquire.svg" alt="star-logo"></div>
            <div>
               <p class="enquire-para">No on-the-job training required</p>
               <!-- <p class="enquire-para">Pre-Trained Developers available across 10 profiles</p> -->
            </div>
         </div>
         <div class="form-desc enquire-form">
            <div><img class="enquire-star-img" src="assets\images\enqurie\StarEnquire.svg"></div>
            <div>
               <p class="enquire-para">Zero Hiring Cost</p>
               <!-- <p class="enquire-para">Experience ranging from 0 to 3 years</p> -->
            </div>
         </div>
         <div class="form-desc enquire-form">
            <div><img class="enquire-star-img" src="assets\images\enqurie\StarEnquire.svg"></div>
            <div>
               <p class="enquire-para">Job Ready Prospects</p>
               <!-- <p class="enquire-para">Available for Full-Time as well as for Internships</p> -->
            </div>
         </div>
         <!-- <div class="form-desc enquire-form">
            <div><img class="enquire-star-img" src="assets\images\enqurie\StarEnquire.svg"></div>
            <div>
               <p class="enquire-para">Solve your long-term Entry-Level Tech recruitment needs</p>
            </div>
         </div>
         <div class="form-desc enquire-form">
            <div><img class="enquire-star-img" src="assets\images\enqurie\StarEnquire.svg"></div>
            <div>
               <p class="enquire-para">Solve your long-term Entry-Level Tech recruitment needs</p>
            </div>
         </div> -->
      </div>
   </div>
   <div class="column column-second enquire-form">
      <form id="contactForm" class="contact_form_box">
         <label for="hf_us_Name" class='eq-lables'>First Name</label>
         <input type="text" id="hf_us_Name" name="hf_us_Name" class="eq-input" placeholder="First Name" required 
         oninput="this.value = this.value.replace(/[^a-zA-Z\s]/g, '');">
         <p id="hf_us_error_name" class="error-message"></p>
         <label for="hf_us_companyName" class='eq-lables'>Company Name</label>
         <input type="text" id="hf_us_companyName" name="hf_us_companyName" class="eq-input" placeholder="Company Name" required>
         <p id="hf_us_error_companyName" class="error-message"></p>
         <label for="hf_us_email" class='eq-lables'>Work email address</label>
         <input type="email" id="hf_us_email" name="hf_us_email" placeholder="you@company.com"class="eq-input" required>
         <p id="hf_us_error_email" class="error-message"></p>
         <label for="hiringProfile" class='eq-lables'>Hiring Profile</label>
         <select id="hiringProfile" name="hiringProfile" class="eq-input-select" required>
            <option>select</option>
            <option value="developer">Developer</option>
            <option value="designer">Designer</option>
            <!-- <option value="manager">Manager</option> -->
         </select>
         <p id="hf_us_error_hiringProfile" class="error-message"></p>

                <div>
                <label for="hf_us_comments" class='eq-lables'>Write Message</label>
                  <textarea id="hf_us_comments" name="hf_us_comments" class="custom_input enquire_text_area" placeholder="Write Message" required></textarea>
                  <p id="hf_us_errorMessage" class="error-message"></p>
               </div>

         <div class="form-group">
            <label for="hr_us_privacyPolicy" class='eq-lables'>
               <input type="checkbox" id="hr_us_privacyPolicy" name="hr_us_privacyPolicy" required>
               <span class='eq-lables-friendly'> You agree to our friendly</span> <a href='' class="eq-privacy">privacy
                  policy</a>
            </label>
            <p id="hf_us_error_privacyPolicy" class="error-message"></p>
         </div>
         <button type="button" onclick="handleSubmit_HireFromUs_Form()"
            class="enquire-form-submit enquire-us-form-button">Submit</button>
         <p id="errorMessage" class="error-message"></p>
      </form>
   </div>
</div>