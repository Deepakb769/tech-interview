<!-- <style>
    .cordHeadImg {
        height: 100px;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }

    .program_Start_In_chip {
        position: absolute;
        right: 20px;
        padding: 6px 9px;
        background: white;
        border-radius: 20px;
        display: flex;
        align-items: center;
        top: 40px;
        color: #E15656;
        font-weight: 600;
    }
    .program_Start_In_chip img{
        margin-right: 5px;
        margin-top: 1px;
    }
</style> -->

<?php
$programs = [
    [
        'name' => 'Advanced Full stack Development + AI/ML',
        'duration' => '18 Months',
        'level' => 'Advanced',
        'price' => '6 LPA',
        'opportunities' => ['Full Stack Developer', 'Software Engineer'],
        'rating' => '4.8',
        'enrolledStu_Count' => '60',
        // 'enrolledImg' => 'enrolled.svg',
        'programStartIn' => ' 8 days',
        // 'programStartIn' => '5days.webp',
        'logoImg' => 'react_yellow.webp',
        'link' => 'python_bootcamp.php',
        'price2' => '1,80,000',
        'becomeJobReadyIn' => '16 weeks',
    ],
    [
        'name' => 'Back-end Development + AI/ML',
        'duration' => '5 Months',
        'level' => 'Expert',
        'price' => '3.5 LPA',
        'opportunities' => [' Back-End  Developer', 'API Developer'],
        'rating' => '4.5',
        'enrolledStu_Count' => '72',
        'programStartIn' => ' 15 days ',
        'logoImg' => 'react_yellow.webp',
        'link' => 'python_bootcamp.php',
        'price2' => '65,000',
        'becomeJobReadyIn' => '18 weeks',
    ],
    [
        'name' => 'Front-end Development + AI/ML',
        'duration' => '3 Months',
        'level' => 'Beginner',
        'price' => '3 LPA',
        'opportunities' => ['Front-End Developer', 'UI Developer'],
        'rating' => '4.3',
        'enrolledStu_Count' => '79',
        'programStartIn' => '5 days',
        'logoImg' => 'react_yellow.webp',
        'link' => 'python_bootcamp.php',
        'price2' => '45,000',
        'becomeJobReadyIn' => '15 weeks',
    ],
    // [
//    'name' => 'React JS for Beginners',
//    'duration' => '3 Months',
//    'level' => 'Beginner',
//    'price' => '3 LPA',
//    'opportunities' => ['Full Stack Developer', 'Software Engineer'],
//    'rating' => '4.8',
//    'enrolledStu_Count' => 'enrolled.svg',
//    'programStartIn' => '5days.webp',
//    'logoImg' => 'react_yellow.webp',
//    'link' => 'python_bootcamp.php',
//    'price2' => '1200',
// ],
// [
//    'name' => 'React JS for Beginners',
//    'duration' => '3 Months',
//    'level' => 'Beginner',
//    'price' => '3 LPA',
//    'opportunities' => ['Full Stack Developer', 'Software Engineer'],
//    'rating' => '4.8',
//    'enrolledStu_Count' => 'enrolled.svg',
//    'programStartIn' => '5days.webp',
//    'logoImg' => 'react_yellow.webp',
//    'link' => 'python_bootcamp.php',
//    'price2' => '1200',
// ],
// [
//    'name' => 'React JS for Beginners',
//    'duration' => '3 Months',
//    'level' => 'Beginner',
//    'price' => '3 LPA',
//    'price2' => '1200',
//    'opportunities' => ['Full Stack Developer', 'Software Engineer'],
//    'rating' => '4.8',
//    'enrolledStu_Count' => 'enrolled.svg',
//    'programStartIn' => '5days.webp',
//    'logoImg' => 'react_yellow.webp',
//    'link' => 'python_bootcamp.php'
// ],

];

// $base_url = '/techpathshala-interview/';
?>

<div class="indemand_program_page main-page-progrme">
    <div class="container">
        <div class="text_heading">
            <div class="heading">
                <h2>Industry-Leading Curriculum</h2>
                <!-- <h2>In-demand programs</h2> -->
            </div>
            <div class="title_underline_img">
                <img class="home__indemand_programs_underline" src="assets/images/home/hero_underline.png" alt="Vector">
            </div>
        </div>
        <p class="text-center custom_para">Curriculum Carefully Designed for Achieving Expertis</p>
        <!-- <p class="text-center custom_para">Curriculum is designed to make you an expert</p> -->
        <div class="row custom_row">
            <?php foreach ($programs as $program): ?>
                <div class="col-lg-4 col-12 my-lg-2">
                    <a class="btn_text demand_card_btn btn_hover_yellow"
                        href="<?php echo htmlspecialchars($program['link']); ?>">
                        <div class="card react_card">
                            <img class="cordHeadImg" src="assets/images/home/cordHeadImg.jpeg" alt="image-bg">
                            <div class="program_Start_In_chip">
                                <img class="TimerIcon" src="assets/images/home/Timer.svg" alt="image-bg">
                                Next batch starting in <?php echo htmlspecialchars($program['programStartIn']); ?>
                            </div>
                            <!-- <img src="assets/images/home/<?php echo htmlspecialchars($program['programStartIn']); ?>"
                                alt="image-bg"> -->
                            <img class="react_logo"
                                src="assets/images/home/<?php echo htmlspecialchars($program['logoImg']); ?>"
                                style="width: 50px" alt="logo">
                            <div class="card-body home__indemand_card">
                                <div class="course">
                                    <div class="course_title">
                                        <div class="course_name">
                                            <h5>
                                                <?php echo htmlspecialchars($program['name']); ?>
                                            </h5>
                                        </div>
                                        <div class="rating">
                                            <i class="bi bi-star-fill"></i>
                                            <?php echo htmlspecialchars($program['rating']); ?>
                                        </div>
                                    </div>
                                    <div class="course_duration_program">
                                        <div class="duration_time_program">
                                            <p><i class="bi bi-calendar4"></i>
                                                <?php echo htmlspecialchars($program['duration']); ?>
                                            </p>
                                        </div>
                                        <div class="duration_time_program">
                                            <p><i class="bi bi-mortarboard"></i>
                                                <?php echo htmlspecialchars($program['level']); ?>
                                            </p>
                                        </div>
                                        <div class="duration_time_program">
                                            <p><i class="bi bi-mortarboard"></i>
                                                <?php echo htmlspecialchars($program['price']); ?>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="opportunity_desc">
                                    <h6>Opportunities: </h6>
                                    <p>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9"
                                            fill="none">
                                            <path
                                                d="M4 0.5L5.08036 3.41964L8 4.5L5.08036 5.58036L4 8.5L2.91964 5.58036L0 4.5L2.91964 3.41964L4 0.5Z"
                                                fill="#044AB4" />
                                        </svg>
                                        <?php echo implode(', ', $program['opportunities']); ?> & much more.
                                    </p>
                                    <p><svg xmlns="http://www.w3.org/2000/svg" width="8" height="9" viewBox="0 0 8 9"
                                            fill="none">
                                            <path
                                                d="M4 0.5L5.08036 3.41964L8 4.5L5.08036 5.58036L4 8.5L2.91964 5.58036L0 4.5L2.91964 3.41964L4 0.5Z"
                                                fill="#044AB4" />
                                        </svg> Become job-ready in <?php echo $program['becomeJobReadyIn']?> </p>
                                </div>
                                <div class="student_enrolled custom_enrolled">
                                    <div class="enrolled">
                                        <img src="assets/images/home/avtarGroup.svg"
                                            alt="enrolled">
                                        <!-- <img src="assets/images/home/<?php echo htmlspecialchars($program['enrolledStu_Count']); ?>"
                                            alt="enrolled"> -->
                                        <p style="margin-left: -14px;"><?php echo $program['enrolledStu_Count']; ?> students enrolled</p>
                                    </div>
                                    <div class="amount">
                                        <h6 style="font-weight: 700;">
                                        ₹<?php echo htmlspecialchars($program['price2']); ?>
                                        </h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>
        <!-- <div class="center-align-container custom-link-container">
            <a class="programs-link custam-link" href="<?php echo $base_url; ?>our_program.php">
                View all programs <i class="bi bi-chevron-right"></i>
            </a>
        </div> -->
    </div>
</div>