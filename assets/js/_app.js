// ****** Base Url *************
var BASE_URL = "https://api.techpaathshala.com/api"
var SUBMIT_ENQUERY_URL = "/v2/hiring/enquiry_submissions";
var SUBMIT_CONTACT_URL = "/v2/hiring/contact_submissions";
var hiring_requests_URL = "/v2/hiring/hiring_requests";


// **************home/demandJob.php and home/testimonial.php for php file JS code-------
$(document).ready(function () {
  $("#demand_card_carousel").owlCarousel({
    loop: true,
    margin: 10,
    responsive: {
      0: {
        items: 1.2,
      },
      600: {
        items: 1.5,
      },
      1000: {
        items: 3.5,
      },
    },
  });
});

function zoomCard(indemand_animate_card) {
  // indemand_animate_card.style.transform = 'scale(1.1)';
  const cards = Array.from(document.querySelectorAll('.indemand_animate_card'));
  const index = cards.indexOf(indemand_animate_card);

  for (let i = index + 1; i < cards.length; i++) {
    cards[i].style.transform = `translateX(${(i - index) * 10}px)`;
  }
}

function resetCards() {
  const cards = document.querySelectorAll('.indemand_animate_card');
  cards.forEach(indemand_animate_card => {
    indemand_animate_card.style.transform = 'scale(1)';
  });
}

$(document).ready(function () {
  $("#testimonial_carousel").owlCarousel({
    loop: true,
    margin: 10,
    responsive: {
      0: {
        items: 1.3,
      },
      600: {
        items: 1.5,
      },
      1000: {
        items: 3.5,
      },
    },
  });
});
// **************Header file JS code-------
function openNav() {
  document.getElementById("myToggle").style.width = "100%";
}

function closeNav() {
  document.getElementById("myToggle").style.width = "0";
}

function openSearch() {
  document.getElementById("mySearch").style.width = "100%";
}

function closeSearch() {
  document.getElementById("mySearch").style.width = "0";
}

// ************** home/cards.php file JS code-------
var modal = document.getElementById("home_career_made_easy_Modal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("home_career_made_easy_Modal_close")[0];

if (btn != undefined) {
  btn.onclick = function () {
    modal.style.display = "block";
  };
}

if (span != undefined) {
  span.onclick = function () {
    modal.style.display = "none";
  };
}

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};

// ************** ourPrograms/guides.php file JS code-------
$(document).ready(function () {
  $("#meet-your-guide").owlCarousel({
    margin: 10,
    loop: true,
    margin: 10,
    responsive: {
      0: {
        items: 1.2,
      },
      600: {
        items: 1.2,
      },
      1000: {
        items: 1.3,
      },
    },
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 2000,
  });
});

$(document).ready(function () {
  $("#students_carousel").owlCarousel({
    center: true,
    margin: 10,
    responsive: {
      0: {
        items: 1.5,
      },
      600: {
        items: 1.5,
      },
      1000: {
        items: 1.5,
      },
    },
  });
});

// ************** about/guides.php file JS code-------

$(document).ready(function () {
  $("#meet_your_guides_about").owlCarousel({
    margin: 10,
    loop: true,
    responsive: {
      0: {
        items: 1.2,
      },
      600: {
        items: 1.2,
      },
      1000: {
        items: 1.3,
      },
    },
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 2000,
  });
});


// ************** career_roadmap/hero.php file JS code-------

$(document).ready(function () {
  $("#career_roadmap_carousel").owlCarousel({
    loop: true,
    margin: 10,
    // nav: true,
    responsive: {
      0: {
        items: 1.1,
      },
      600: {
        items: 1.1,
      },
      1000: {
        items: 1,
      },
    },
  });
});

// ************** complete_python_bootcamp/details.php file JS code-------

$(document).ready(function () {
  $(".python_bootcamp_carousel").owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1.5,
      },
      600: {
        items: 1.5,
      },
      1000: {
        items: 2.2,
      },
    },
    autoplay: true,
    autoplayTimeout: 3000,
    autoplaySpeed: 2000,
  });
});

// ************** complete_python_bootcamp/why-us.php file JS code-------

$(document).ready(function () {
  $("#why_us_corosel").owlCarousel({
    loop: true,
    items: 2,
    margin: 10,
    responsive: {
      0: {
        items: 1.3,
        autoplay: false,
      },
      600: {
        items: 1.3,
        autoplay: false,
      },
      1000: {
        items: 2.8,
      },
    },
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 4000,
  });
});



function closeThankuModel() {
  var ThankuModel = document.getElementById('ThankuModel');
  ThankuModel.style.display = 'none';
  window.location.href = '/techpathshala-interview/';
}
// ************* Loginc for sticky popup hide when why-us section come.***
// window.addEventListener('scroll', function () {
//   var whyUsSection = document.querySelector('#why-us'); 
//   var stickyCard = document.querySelector('#sticky_card_box'); 

//   var triggerPoint = whyUsSection.offsetTop;
//   if (window.pageYOffset >= triggerPoint) {
//      stickyCard.classList.add('scroll-with-page');
//   } else {
//      stickyCard.classList.remove('scroll-with-page'); 
//   }
// });

// ************** enquire/form.php file JS code-------

function validateForm() {
  var firstName = document.getElementById("firstName").value;
  var companyName = document.getElementById("companyName").value;
  var email = document.getElementById("email").value;
  var hiringProfile = document.getElementById("hiringProfile").value;
  const privacyPolicyChecked = document.getElementById("privacyPolicy").checked;
  // console.log('firstName hiringProfile', firstName, companyName, hiringProfile)
  var errorMessage = document?.getElementById("errorMessage");
  if (errorMessage) {
    // errorMessage?.innerHTML = '';
  }

  if (
    firstName === "" ||
    companyName === "" ||
    email === "" ||
    hiringProfile === "" ||
    privacyPolicyChecked === ""
  ) {
    // errorMessage?.innerHTML = 'All fields are required.';

  }

  return true;
}

// ************** enquire/studies.php file JS code-------

$(document).ready(function () {
  $("#enquire_studies_carousel").owlCarousel({
    center: true,
    margin: 10,
    responsive: {
      0: {
        items: 1.3,
      },
      600: {
        items: 1.3,
      },
      1000: {
        items: 1.2,
      },
    },
  });
});

//********* header  enquiry form function*******

function handleSubmitEnquery() {
  var enquery_name = $("#enquery_name").val();
  var enquery_error_name = $("#enquery_error_name");
  var enquery_contact = $("#enquery_contact").val();
  var enquery_error_contact = $("#enquery_error_contact");
  var enquery_email = $("#enquery_email").val();
  var enquery_error_email = $("#enquery_error_email");
  var enquery_comments = $("#enquery_comments").val();
  var enquery_errorMessage = $("#enquery_errorMessage");

  var ThankuModel = $("#ThankuModel");
  var success_thanku_title = $("#success_thanku_title");
  var success_thanku_response = $("#success_thanku_response");
  success_thanku_title.html("Thank you for your enquiry");
  success_thanku_response.html("Your enquiry has been received. We'll get back to you soon.");



  var enquiryPopup = $("#enquiryPopup");
  var emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
  // Reset error messages
  enquery_error_name.html("");
  enquery_error_contact.html("");
  enquery_error_email.html("");
  // Validate the form fields
  if (enquery_name == "") {
    enquery_error_name.html("Please enter your name.");
    enquery_error_name.show();
    $("#enquery_name").focus();

  }

  if (enquery_contact == "") {
    enquery_error_contact.html("Please enter your contact number.");
    enquery_error_contact.show();
    $("#enquery_contact").focus();

  }
  if (enquery_comments == "") {
    enquery_errorMessage.html("Please write some message.");
    enquery_errorMessage.show();
    $("#enquery_comments").focus();

  }

  if (isNaN(enquery_contact) || enquery_contact.length < 10) {
    enquery_error_contact.html("Please enter a valid contact number.");
    enquery_error_contact.show();
    $("#enquery_contact").focus();

  }

  if (enquery_email == "") {
    enquery_error_email.html("Please enter your email address.");
    enquery_error_email.show();
    $("#enquery_email").focus();

  }

  if (!emailRegex.test(enquery_email)) {
    enquery_error_email.html("Please enter a valid email address.");
    enquery_error_email.show();
    $("#enquery_email").focus();

  }
  if ((enquery_name == "") || (enquery_contact == "") || (isNaN(enquery_contact) || enquery_contact.length < 10) || (enquery_email == "") || !emailRegex.test(enquery_email)) {
    return false
  }
  // Form data is valid, proceed with AJAX submission
  var formData = {
    "name": enquery_name,
    "email": enquery_email,
    "contact": enquery_contact,
    "message": enquery_comments,
  };

  $.ajax({
    type: "POST",
    url: BASE_URL + SUBMIT_ENQUERY_URL,
    data: formData,
    success: function (response) {
      console.log('response', response)
      enquiryPopup.hide();
      ThankuModel.show();
      setTimeout(function () {
        ThankuModel.hide();
      }, 3000);
      $("#enquery_name").val('');
      $("#enquery_contact").val('');
      $("#enquery_email").val('');
      $("#enquery_comments").val('');
      // Additional success handling if needed
    },
    error: function (xhr, status, error) {
      alert("An error occurred. Message could not be sent.");
      // Additional error handling if needed
    },
  });
}
//*********enquiry form function end*******


//********* Contact Form  function*******

function handleSubmitContactForm() {
  var contact_Name = $("#contact_Name").val();
  var contact_phone = $("#contact_phone").val();
  var contact_email = $("#contact_email").val();
  var contact_subject = $("#contact_subject").val();
  var contact_comments = $("#contact_comments").val();


  var contact_error_name = $("#contact_error_name");
  var contact_error_email = $("#contact_error_email");
  var contact_error_phone = $("#contact_error_phone");
  var contact_error_subject = $("#contact_error_subject");
  var contact_errorMessage = $("#contact_errorMessage");

  var ThankuModel = $("#ThankuModel");
  var success_thanku_title = $("#success_thanku_title");
  var success_thanku_response = $("#success_thanku_response");
  success_thanku_title.html("Thank you for Contact Us");
  success_thanku_response.html(" We'll get back to you soon.!");
  // var enquiryPopup = $("#enquiryPopup");
  var emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
  // Reset error messages
  contact_error_name.html("");
  contact_error_phone.html("");
  contact_error_email.html("");
  contact_error_subject.html("");
  contact_errorMessage.html("");
  // Validate the form fields
  if (contact_Name == "") {
    contact_error_name.html("Please enter your name.");
    contact_error_name.show();
    $("#contact_Name").focus();

  }


  if (contact_phone == "") {
    contact_error_phone.html("Please enter your contact number.");
    contact_error_phone.show();
    $("#contact_phone").focus();

  }

  if (isNaN(contact_phone) || contact_phone.length < 10) {
    contact_error_phone.html("Please enter a valid contact number.");
    contact_error_phone.show();
    $("#contact_phone").focus();

  }

  if (contact_email == "") {
    contact_error_email.html("Please enter your email address.");
    contact_error_email.show();
    $("#contact_email").focus();

  }

  if (!emailRegex.test(contact_email)) {
    contact_error_email.html("Please enter a valid email address.");
    contact_error_email.show();
    $("#contact_email").focus();

  }
  if (contact_subject == "") {
    contact_error_subject.html("Please enter your Subject.");
    contact_error_subject.show();
    $("#contact_subject").focus();

  }
  if (contact_comments == "") {
    contact_errorMessage.html("Please write some message.");
    contact_errorMessage.show();
    $("#contact_comments").focus();

  }

  if ((contact_Name == "") || (contact_phone == "") || (isNaN(contact_phone) || contact_phone.length < 10) || (contact_email == "") || !emailRegex.test(contact_email) || (contact_subject == "") || (contact_comments == "")) {
    return false
  }

  // Form data is valid, proceed with AJAX submission
  var formData = {
    "name": contact_Name,
    "email": contact_email,
    "contact": contact_phone,
    "subject": contact_subject,
    "message": contact_comments,
  };

  $.ajax({
    type: "POST",
    url: BASE_URL + SUBMIT_CONTACT_URL,
    data: formData,
    success: function (response) {
      console.log('response', response)
      // enquiryPopup.hide();
      ThankuModel.show();
      setTimeout(function () {
        ThankuModel.hide();
      }, 3000);
      $("#contact_Name").val('');
      $("#contact_phone").val('');
      $("#contact_email").val('');
      $("#contact_subject").val('');
      $("#contact_comments").val('');
      // Additional success handling if needed
    },
    error: function (xhr, status, error) {
      alert("An error occurred. Message could not be sent.");
      // Additional error handling if needed
    },
  });
}
//*********Contact form function end*******



//********* Hire from us Form  function*******

function handleSubmit_HireFromUs_Form() {
  var hf_us_Name = $("#hf_us_Name").val();
  var hf_us_companyName = $("#hf_us_companyName").val();
  var hf_us_email = $("#hf_us_email").val();
  var hiringProfile = $("#hiringProfile").val();
  var hf_us_comments = $("#hf_us_comments").val();
  var privacyPolicyCheckbox = $("#hr_us_privacyPolicy");

  var hf_us_error_name = $("#hf_us_error_name");
  var hf_us_error_companyName = $("#hf_us_error_companyName");
  var hf_us_error_email = $("#hf_us_error_email");
  var hf_us_error_hiringProfile = $("#hf_us_error_hiringProfile");
  var hf_us_error_privacyPolicy = $("#hf_us_error_privacyPolicy");

  var ThankuModel = $("#ThankuModel");
  var success_thanku_title = $("#success_thanku_title");
  var success_thanku_response = $("#success_thanku_response");
  success_thanku_title.html("Thank you for Contact Us");
  success_thanku_response.html(" We'll get back to you soon.!");
  var emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
  // Reset error messages
  hf_us_error_name.html("");
  hf_us_error_companyName.html("");
  hf_us_error_email.html("");
  hf_us_error_hiringProfile.html("");
  hf_us_error_privacyPolicy.html("");
  // Validate the form fields
  if (hf_us_Name == "") {
    hf_us_error_name.html("Please enter your name.");
    hf_us_error_name.show();
    $("#hf_us_Name").focus();

  }


  if (hf_us_companyName == "") {
    hf_us_error_companyName.html("Please enter your contact number.");
    hf_us_error_companyName.show();
    $("#hf_us_companyName").focus();

  }
  if (hf_us_email == "") {
    hf_us_error_email.html("Please enter your email address.");
    hf_us_error_email.show();
    $("#hf_us_email").focus();

  }

  if (!emailRegex.test(hf_us_email)) {
    hf_us_error_email.html("Please enter a valid email address.");
    hf_us_error_email.show();
    $("#hf_us_email").focus();

  }
  if (hiringProfile == "") {
    hf_us_error_hiringProfile.html("Please enter your Subject.");
    hf_us_error_hiringProfile.show();
    $("#hiringProfile").focus();

  }
  if (!privacyPolicyCheckbox.prop("checked")) {
    hf_us_error_privacyPolicy.html("Please Check this box before submit this form.");
    hf_us_error_privacyPolicy.show();
    $("#hr_us_privacyPolicy").focus();

  }

  if (hf_us_comments == "") {
    hf_us_errorMessage.html("Please write some message.");
    hf_us_errorMessage.show();
    $("#hf_us_comments").focus();

  }

  if ((hf_us_Name == "") || (hf_us_companyName == "") || (hf_us_email == "") || !emailRegex.test(hf_us_email) || (hiringProfile == "") || (hf_us_comments == "") || (!privacyPolicyCheckbox.prop("checked"))) {
    return false
  }



  // Form data is valid, proceed with AJAX submission
  var formData = {
    "name": hf_us_Name,
    "company_name": hf_us_companyName,
    "email": hf_us_email,
    "designation": hiringProfile,
    "message": hf_us_comments,
  };

  $.ajax({
    type: "POST",
    url: BASE_URL + hiring_requests_URL,
    data: formData,
    success: function (response) {
      console.log('response', response)
      ThankuModel.show();
      setTimeout(function () {
        ThankuModel.hide();
      }, 3000);
      $("#hf_us_Name").val('');
      $("#hf_us_companyName").val('');
      $("#contact_email").val('');
      $("#hiringProfile").val('');
      $("#hf_us_comments").val('');
      privacyPolicyCheckbox.prop("checked", false);
      // Additional success handling if needed
    },
    error: function (xhr, status, error) {
      alert("An error occurred. Message could not be sent.");
      // Additional error handling if needed
    },
  });
}
//********* Hire from us form function end*******








// Header Enquiry  Model Js
var enquiryModal = document.getElementById("enquiryPopup");
var responsiveEnquiryModal = document.getElementById("responsiveEnquiryModal");
var span = document.getElementsByClassName("closeEnquiryBtn")[0];
var responsiveEnquiryClose = document.getElementsByClassName("responsiveEnquiryClose")[0];

span.onclick = function () {
  enquiryModal.style.display = "none";
};
window.onclick = function (event) {
  if (event.target == enquiryModal) {
    enquiryModal.style.display = "none";
  }
};
responsiveEnquiryClose.onclick = function () {
  responsiveEnquiryModal.style.display = "none";
};
window.onclick = function (event) {
  if (event.target == responsiveEnquiryModal) {
    responsiveEnquiryModal.style.display = "none";
  }
};


function onClickEnquireModal(e) {
  enquiryModal.style.display = "block";
  document.getElementById("myToggle").style.width = "0";
}
function onClickResponsiveModal(e) {
  responsiveEnquiryModal.style.display = "block";
  document.getElementById("responsiveEnquiryModal").style.width = "0";
}

// mobile enquiry model start //

var responsiveEnquiryModal = document.getElementById("responsiveEnquiryModal");
var responsiveEnquiryBtn = document.getElementById("responsiveEnquiryBtn");
var responsiveEnquiryClose = document.getElementsByClassName("responsiveEnquiryClose")[0];
console.log();
//  responsiveEnquiryBtn.onclick = function() {
//    responsiveEnquiryModal.style.display = "block";
//  }
responsiveEnquiryClose.onclick = function () {
  responsiveEnquiryModal.style.display = "none";
}



document.addEventListener('click', function (event) {
  var modal = document.getElementById('responsiveEnquiryModal');
  var enquiryFormButton = document.getElementById('enquiryFormButton');
  if (!modal.contains(event.target) && !enquiryFormButton.contains(event.target)) {
    modal.style.display = "none";
  }
});

// mobile enquiry model end //
//********* Footer  enquiry form function*******

function handleSubmitEnqueryFooter() {
  var enquiry_name = $("#enquiry_name").val();
  var contact_number = $("#contact_number").val();
  var enquiry_email = $("#enquiry_email").val();
  var enquiry_comments = $("#enquiry_comments").val();


  var enquiry_error_name = $("#enquiry_error_name");
  var enquiry_error_contact = $("#enquiry_error_contact");
  var enquiry_error_email = $("#enquiry_error_email");
  var enquiry_errorMessage = $("#enquiry_errorMessage");



  var ThankuModel = $("#ThankuModel");
  var success_thanku_title = $("#success_thanku_title");
  var success_thanku_response = $("#success_thanku_response");
  success_thanku_title.html("Thank you for your enquiry");
  success_thanku_response.html("Your enquiry has been received. We'll get back to you soon.");



  var responsiveEnquiryModal = $("#responsiveEnquiryModal");
  var emailRegex = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
  // Reset error messages
  enquiry_error_name.html("");
  enquiry_error_contact.html("");
  enquiry_error_email.html("");
  enquiry_errorMessage.html("");
  // Validate the form fields
  if (enquiry_name == "") {
    enquiry_error_name.html("Please enter your name.");
    enquiry_error_name.show();
    $("#enquiry_name").focus();

  }

  if (contact_number == "") {
    enquiry_error_contact.html("Please enter your contact number.");
    enquiry_error_contact.show();
    $("#contact_number").focus();

  }

  if (isNaN(contact_number) || contact_number.length < 10) {
    enquiry_error_contact.html("Please enter a valid contact number.");
    enquiry_error_contact.show();
    $("#contact_number").focus();

  }

  if (enquiry_email == "") {
    enquiry_error_email.html("Please enter your email address.");
    enquiry_error_email.show();
    $("#enquiry_email").focus();

  }
  if (enquiry_comments == "") {
    enquiry_error_email.html("Please enter your massage.");
    enquiry_error_email.show();
    $("#enquiry_comments").focus();

  }

  if (!emailRegex.test(enquiry_email)) {
    enquiry_error_email.html("Please enter a valid email address.");
    enquiry_error_email.show();
    $("#enquiry_email").focus();

  }
  if ((enquiry_name == "") || (contact_number == "") || (isNaN(contact_number) || contact_number.length < 10) || (enquiry_email == "") || !emailRegex.test(enquiry_email)) {
    return false
  }
  // Form data is valid, proceed with AJAX submission
  var formData = {
    "name": enquiry_name,
    "email": enquiry_email,
    "contact": contact_number,
    "message": enquiry_comments,
  };

  $.ajax({
    type: "POST",
    url: BASE_URL + SUBMIT_ENQUERY_URL,
    data: formData,
    success: function (response) {
      console.log('response', response)
      responsiveEnquiryModal.hide();
      ThankuModel.show();
      setTimeout(function () {
        ThankuModel.hide();
      }, 3000);
      $("#enquiry_name").val('');
      $("#contact_number").val('');
      $("#enquiry_email").val('');
      $("#enquiry_comments").val('');
    },
    error: function (xhr, status, error) {
      alert("An error occurred. Message could not be sent.");
    },
  });
}
//*********  footer enquiry form function end*******



//********  Coming soon modle show
function handleShowComingSoon() {
  var ThankuModel = $("#ThankuModel");
  var success_thanku_title = $("#success_thanku_title");
  // var success_thanku_response = $("#success_thanku_response");
  success_thanku_title.html("This Feature is Coming Soon !");
  // success_thanku_response.html("This Feature is Coming Soon");
  ThankuModel.show();
  setTimeout(function () {
    ThankuModel.hide();
  }, 3000);
}
