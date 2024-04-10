var programs = [
    {
        title: 'Advanced Full stack Development + AI/ML',
        rating: '4.8',
        duration: '18 Months',
        level: 'Advanced',
        salary: '6 LPA',
        opportunities: [
            'Full Stack Developer, Software Engineer & much more.',
            'Become job-ready in 16 weeks'
        ],
        // students_enrolled: 1200,
        amount: '₹1,80,000',
        link: '/python_bootcamp.php',
        course_type: 'Full stack development',
        programStartIn: '  8 days',
        // programStartIn: ' 16 days',
    },
    {
        title: 'Back-end Development + AI/ML',
        rating: '4.5',
        duration: '5 Months',
        level: 'Expert',
        salary: '3.5 LPA',
        opportunities: [
            'Full Stack Developer, Software Engineer & much more.',
            'Become job-ready in 30 weeks'
        ],
        amount: '₹65,000',
        link: '/python_bootcamp.php',
        course_type: 'Back-end development',
        programStartIn: '15 days',
    },
    {
        title: 'Front-end Development + AI/ML',
        rating: '4.8',
        duration: '3 Months',
        level: 'Expert',
        salary: '3 LPA',
        opportunities: [
            'Full Stack Developer, Software Engineer & much more.',
            'Become job-ready in 30 weeks'
        ],
        amount: '₹45,000',
        link: '/python_bootcamp.php',
        course_type: 'Front-end development',
        programStartIn: '5 days',
    },
    {
        title: 'Front-end Development',
        rating: '4.8',
        duration: '3 Months',
        level: 'Beginner',
        salary: '3 LPA',
        opportunities: [
            'Front-end development & much more.',
            'Become job-ready in 30 weeks'
        ],
        amount: '₹30,000',
        link: '/python_bootcamp.php',
        course_type: 'Front-end development',
        programStartIn: '5 days',
    },
    {
        title: 'Back-end Development',
        rating: '4.8',
        duration: '3 Months',
        level: 'Beginner',
        salary: '4 LPA',
        opportunities: [
            'Back-end Development & much more.',
            'Become job-ready in 30 weeks'
        ],
        amount: '₹40,000',
        link: '/python_bootcamp.php',
        course_type: 'Back-end Development',
        programStartIn: '5 days',
    },
    // {
    //     title: 'Mongos for Beginners',
    //     rating: '4.8',
    //     duration: '3 Months',
    //     level: 'Beginner',
    //     salary: '3 LPA',
    //     opportunities: [
    //         'Full Stack Developer, Software Engineer & much more.',
    //         'Become job-ready in 30 weeks'
    //     ],
    //     amount: '₹1200',
    //     link: '/python_bootcamp.php',
    //     course_type: 'Full stack development',
    // },
    // {
    //     title: 'Python for Beginners',
    //     rating: '4.8',
    //     duration: '3 Months',
    //     level: 'Advanced',
    //     salary: '3 LPA',
    //     opportunities: [
    //         'Full Stack Developer, Software Engineer & much more.',
    //         'Become job-ready in 30 weeks'
    //     ],
    //     amount: '₹1200',
    //     link: '/python_bootcamp.php',
    //     course_type: 'Full stack development',
    // },
    // {
    //     title: 'React JS for Beginners',
    //     rating: '4.8',
    //     duration: '3 Months',
    //     level: 'Advanced',
    //     salary: '3 LPA',
    //     opportunities: [
    //         'Full Stack Developer, Software Engineer & much more.',
    //         'Become job-ready in 30 weeks'
    //     ],
    //     amount: '₹1200',
    //     link: '/python_bootcamp.php',
    //     course_type: 'Bootcamps',
    // },
    // {
    //     title: 'Mongos for Beginners',
    //     rating: '4.8',
    //     duration: '3 Months',
    //     level: 'Advanced',
    //     salary: '3 LPA',
    //     opportunities: [
    //         'Full Stack Developer, Software Engineer & much more.',
    //         'Become job-ready in 30 weeks'
    //     ],
    //     amount: '₹1200',
    //     link: '/python_bootcamp.php',
    //     course_type: 'Full stack development',
    // },
    // {
    //     title: 'Mongos for Beginners',
    //     rating: '4.8',
    //     duration: '3 Months',
    //     level: 'Advanced',
    //     salary: '3 LPA',
    //     opportunities: [
    //         'Full Stack Developer, Software Engineer & much more.',
    //         'Become job-ready in 30 weeks'
    //     ],
    //     amount: '₹1200',
    //     link: '/python_bootcamp.php',
    //     course_type: 'Bootcamps',
    // },
    // Add more programs as needed
];
function generateProgramCards(programs = []) {
    console.log('programs===', programs)
    const programsContainer = document.getElementById('programs');
    const programCards = programs?.map(program => `
        <div class="col-lg-4 col-xs-12 my-2 mobile_card">
            <a class="our_progrme_ancher" href="${program.link}">
                <div class="card react_card_cutom">
                    <img src="assets/images/home/cordHeadImg.jpeg" class="cordHeadImg" alt="card-img">
                    <div class="program_Start_In_chip">
                                <img class="TimerIcon" src="assets/images/home/Timer.svg" alt="image-bg">
                                Next batch starting in ${program['programStartIn']}
                            </div>
                    <img class="react_logo_custom" src="assets/images/home/react_yellow.webp" alt="react_yellow">
                    <div class="card-body">
                        <div class="course">
                            <div class="program_course_detail_custom">
                                <div class="course_name">
                                    <h5 class="course_title_custom">${program.title}</h5>
                                </div>
                                <div class="rating_custom">
                                    <i class="bi bi-star-fill"></i>${program.rating}
                                </div>
                            </div>
                            <div class="program_course_duration_custom">
                                <div class="duration_time">
                                    <p><i class="bi bi-calendar4"></i> ${program.duration}</p>
                                </div>
                                <div class="duration_time">
                                    <p id="lable"><i class="bi bi-mortarboard"></i> ${program.level}</p>
                                </div>
                                <div class="duration_time">
                                    <p><i class="bi bi-mortarboard"></i> ${program.salary}</p>
                                </div>
                            </div>
                        </div>
                        <div class="opportunity_title">
                            <h6>Opportunities:</h6>
                            <p><svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9"
                                 fill="none">
                                 <path
                                    d="M4 0.5L5.08036 3.41964L8 4.5L5.08036 5.58036L4 8.5L2.91964 5.58036L0 4.5L2.91964 3.41964L4 0.5Z"
                                    fill="#044AB4" />
                              </svg>
                             ${program.opportunities[0]}
                             </p>
                            <p> 
                            <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9"
                                 fill="none">
                                 <path
                                    d="M4 0.5L5.08036 3.41964L8 4.5L5.08036 5.58036L4 8.5L2.91964 5.58036L0 4.5L2.91964 3.41964L4 0.5Z"
                                    fill="#044AB4" />
                              </svg>
                            ${program.opportunities[1]}
                            </p>
                        </div>
                        <div class="student_enrolled_custom">
                            <div class="enrolled_custom">
                                <img src="assets/images/home/enrolled.svg" alt="enrolled">
                                <p>students enrolled</p>
                            </div>
                            <div class="amount_custom">
                                <h6>${program.amount}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    `);
    if (programsContainer) {
        programsContainer.innerHTML = (programs?.length == 0) ? "<span align='center'> No Courses available... </span>" : programCards?.join('');
    }
}
generateProgramCards(programs.slice(0, 6));
var view_all = false;
function OnViewAllClick() {
    view_all = !view_all;
    if (view_all) {
        generateProgramCards(programs);
    } else {
        generateProgramCards(programs.slice(0, 6));
    }
}

function filterProgramsByTitle() {
    const searchInput = document.getElementById('search-input').value.toLowerCase();
    const filteredPrograms = programs.filter(program => program.title.toLowerCase().includes(searchInput));
    generateProgramCards(filteredPrograms);
}
// function for Filter by tab
function filterProgramsByTab(tabNumber, lable) {
    // set active tab 
    document.querySelectorAll('.tab').forEach(tab => {
        tab.classList.remove('active');
    });
    const selectedTab = document.querySelector(`.tab:nth-child(${tabNumber})`);
    selectedTab.classList.add('active');
    // filter cards
    console.log('lable==logic', programs.filter(program => program.level.toLowerCase() == lable.toLowerCase()))
    if (lable == "All") {
        console.log('All lable==', lable)
        generateProgramCards(programs);
    } else {
        const filteredPrograms = programs.filter(program => program.level.toLowerCase() == lable.toLowerCase());
        generateProgramCards(filteredPrograms);
    }
}

$(document).ready(function () {
    $('#carousel-programe').owlCarousel({
        margin: 10,
        loop: true,
        responsive: {
            0: {
                items: 2.5
            },
            600: {
                items: 2.5
            },
            1000: {
                items: 1
            }
        }
    });
});

function changeButtonColor(clickedButton) {
    var buttons = document.querySelectorAll('.item button');
    buttons.forEach(function (button) {
        button.classList.remove('clicked');
    });
    clickedButton.classList.add('clicked');
}
// function for  Filter by Catagories
function filterCardsBy_Categories(clickedButton, category) {
    document.querySelectorAll('.techs-btn').forEach(button => {
        button.classList.remove('active');
    });
    clickedButton.classList.add('active');
    console.log('clickedButton, category', category, programs)
    const filteredPrograms = programs.filter(program => category.toLowerCase().includes(program.course_type.toLowerCase()));
    generateProgramCards(filteredPrograms);
}
