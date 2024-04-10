<div class="course_content pb-5 d-lg-block">
   <div class="container">
      <h3 class="mb-5">Program Content</h3>
      <!-- <h3>Course Content</h3> -->
      <!-- <div class="mobile_desc_box">
         <p>3 sections <span class="dot-icon">&#8226;</span></p>
         <p>24 lectures <span class="dot-icon">&#8226;</span></p>
         <p>5 hrs total length </p>
      </div> -->
      <!-- start here -->
      <div class="Program_Content"></div>
   </div>
</div>

<script>
   // Data for the accordion items
   var accordionData = [
      {
         module: "Introduction to Web",
         // lectures: "5 lectures • 19 min",
         topics: [
            "Intro to Computing",
            "Programming",
            "Various Programming Languages",
            "Evolution of Web Development",
            "How Web Works?",
            "Client / Server Architecture",
            "Basic Demo of Client Server using Live Server"
         ]
      },
      {
         module: "HTML",
         // lectures: "5 lectures • 19 min",
         topics: [
            "Hypertext Markup Language",
            "Structure of HTML",
            "HTML Tags",
            "HTML Page Head, Body",
            "Page Title, Header, Paragraph, Listing",
            "Blocking & Inline Elements",
            "Semantic HTML",
            "HTML Forms",
            "HTML 5",
            "Layout & Structure",
            "Project creation using only HTML"
         ]
      },
      {
         module: "CSS",
         // lectures: "5 lectures • 19 min",
         topics: [
            "Cascading Style Sheet",
            "Inline Styling",
            "Text related properties",
            "Display",
            "Flexbox",
            "Float",
            "Clearfloat",
            "Variables, calc(), Box-Sizing",
            "CSS Architecture (BEM)",
            "CSS Transforms",
            "Sass & Scss",
            "Sass : Nested Properties",
            "Sass : Mixins, Extend and Functions",
            "Flexbox Experts",
            "Ways to Center an Element",
            "Creation of Sidebar, Menu, Modal etc",
            "Project Creation using HTML & CSS"
         ]
      },
      {
         module: "JS",
         // lectures: "5 lectures • 19 min",
         topics: [
            "JavaScript",
            "Programming Language for Web",
            "Linking with Web",
            "Console.log",
            "Typecasting",
            "DOM Manipulation",
            "Revised: Conditionals, Looping",
            "Problem Solving Skill",
            "Callbacks",
            "API Integration",
            "Debugging Skills",
            "Pillars of OOP",
            "Design System in OOP",
            "Prototypal Inheritance",
            "Closures"
         ]
      },
      {
         module: "ReactJS",
         // lectures: "5 lectures • 19 min",
         topics: [
            "Introduction to ReactJS",
            "How ReactJS Works?",
            "Benefits of ReactJS",
            "React Hooks in Depth",
            "REST API",
            "Redux",
            "Redux Toolkit",
            "React Routing",
            "Create Custom Hooks",
            "Class Components",
            "Atomic Principle",
            "Axios",
            "Material UI",
            "Higher Order Components",
            "Render Props",
            "Suspense",
            "Testing Library",
            "Deploying an APP",
         ]
      },
      {
         module: "GIT",
         // lectures: "5 lectures • 19 min",
         topics: [
            "Introduction to GIT",
            "Version Control System",
            "GIT vs GITHUB",
            "Repository",
            "GIT CLI",
            "Repository Cloning",
            "GIT File Lifecycle",
            "Operations: Diff, Add, Commit, Push, Pull",
            "Commit",
            "Unstage File",
            "GIT Log",
            "GIT Status",
            ".git",
            ".gitignore",
            "GIT Branching",
            "Head",
            "Merge Branches",
            "Resolve Merge Conflicts",
            "GITFetch",
            "Pull Requests",
            "Merge Requests",
            "Forks & Open Source Contribution",
         ]
      },
   ];

   // Function to create the accordion dynamically
   function createAccordion() {
      var accordionContainer = document.querySelector('.Program_Content');

      // Loop through each accordion item in the data
      accordionData.forEach(function (item, index) {
         // Create module box
         var moduleBox = document.createElement('div');
         moduleBox.classList.add('accordion', 'accordion-flush', 'pyhthon_acordian');

         var moduleBtn = document.createElement('button');
         moduleBtn.classList.add('module_btn');
         moduleBtn.textContent = index + 1;

         var accordionButton = document.createElement('button');
         accordionButton.classList.add('accordion-button', 'pyhthon_acordian_box', 'accordion-heading-box');
         accordionButton.setAttribute('type', 'button');
         accordionButton.setAttribute('data-bs-toggle', 'collapse');
         accordionButton.setAttribute('data-bs-target', '#collapse' + (index + 1));
         accordionButton.setAttribute('aria-expanded', index === 0 ? 'true' : 'false'); // Set aria-expanded attribute
         accordionButton.setAttribute('aria-controls', 'collapse' + (index + 1));

         var containerDiv = document.createElement('div');
         containerDiv.classList.add('container');

         var rowDiv = document.createElement('div');
         rowDiv.classList.add('row');

         var titleDiv = document.createElement('h6');
         titleDiv.classList.add('col-9', 'col_title');
         titleDiv.textContent = item.module;

         var lectureDiv = document.createElement('div');
         lectureDiv.classList.add('col-3', 'col_title_2');
         // lectureDiv.textContent = item.lectures;

         // Append elements to their respective parent elements
         rowDiv.appendChild(titleDiv);
         rowDiv.appendChild(lectureDiv);
         containerDiv.appendChild(rowDiv);
         accordionButton.appendChild(containerDiv);
         moduleBox.appendChild(moduleBtn);
         moduleBox.appendChild(accordionButton);
         accordionContainer.appendChild(moduleBox);

         // Create accordion item
         var accordionItemDiv = document.createElement('div');
         accordionItemDiv.classList.add('accordion', 'pyhthon_acordian_item');

         var accordionInnerItem = document.createElement('div');
         accordionInnerItem.classList.add('accordion-item', 'item_border');

         // Loop through topics and create accordion body
         item.topics.forEach(function (topic, i) {
            var collapseDiv = document.createElement('div');
            collapseDiv.setAttribute('id', 'collapse' + (index + 1));
            collapseDiv.classList.add('accordion-collapse', 'collapse');
            if (index === 0) {
               collapseDiv.classList.add('show'); // Add 'show' class to the first accordion collapse
            }
            collapseDiv.setAttribute('data-bs-parent', '#accordionFlushExample');

            var bodyDiv = document.createElement('div');
            bodyDiv.classList.add('accordion-body', 'course_details_text');
            bodyDiv.textContent = topic;

            collapseDiv.appendChild(bodyDiv);
            accordionInnerItem.appendChild(collapseDiv);
         });

         accordionItemDiv.appendChild(accordionInnerItem);
         accordionContainer.appendChild(accordionItemDiv);
      });
   }

   // Call the function to create the accordion
   createAccordion();

</script>