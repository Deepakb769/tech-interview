<?php

$jobs = [
    [
        'title' => 'Full-Stack Dev.',
        'subheading' => 'Build the Entire Web Experience',
        'languages' => [
            ['name' => 'Node.js', 'img' => 'node.svg'],
            ['name' => 'Angular.js', 'img' => 'angular.svg'],
            ['name' => 'SQL', 'img' => 'sql.svg'],
            ['name' => 'React.Js', 'img' => 'react.svg'],
            ['name' => 'MongoDB', 'img' => 'mongo.svg'],
            // ['name' => 'Javascript', 'img' => 'js.png'],
            // ['name' => 'CSS', 'img' => 'css.png'],
        ],
        'careerPathways' => ['Frontend Developer', 'Full-Stack Developer', 'Backend Developer', 'AI/ML Developer', 'MERN/MEAN Stack', 'DSA'],
        'roadmapLink' => 'career_roadmap.php',
    ],
    [
        'title' => 'Front-end Dev',
        'subheading' => 'Create Pixel-perfect & Brand-aligned designs like Swiggy, Netflix',
        'languages' => [
            ['name' => 'HTML', 'img' => 'html.png'],
            ['name' => 'CSS', 'img' => 'css.png'],
            ['name' => 'Javascript', 'img' => 'js.png'],
            ['name' => 'Angular.js', 'img' => 'angular.svg'],
            ['name' => 'React.Js', 'img' => 'react.svg'],
        ],
        'careerPathways' => ['Front-End Developer', 'Web Developer'],
        'roadmapLink' => 'career_roadmap.php',
    ],
    [
        'title' => 'Back-End Dev',
        'subheading' => 'Build business logic & develop backend with a scalable database',
        'languages' => [
            ['name' => 'Node.js', 'img' => 'node.svg'],
            ['name' => 'Express', 'img' => 'logo-tech2.svg'],
            ['name' => 'SQL', 'img' => 'sql.svg'],
            ['name' => 'MongoDB', 'img' => 'mongo.svg'],
            ['name' => 'Javascript', 'img' => 'js.png'],
            // ['name' => 'TypeScript', 'img' => 'type_js.svg'],
        ],
        'careerPathways' => ['Back-end Developer', 'Web Developer'],
        'roadmapLink' => 'career_roadmap.php',
    ],
    [
        'title' => 'App Developer',
        'subheading' => 'Build Apps Users Adore like Uber, Instagram',
        'languages' => [
            ['name' => 'Android', 'img' => 'android.png'],
            ['name' => 'IOS', 'img' => 'ios.png'],
            ['name' => 'TypeScript', 'img' => 'type_js.svg'],
            ['name' => 'HTML', 'img' => 'html.png'],
            ['name' => 'CSS', 'img' => 'css.png'],
        ],
        'careerPathways' => ['Mobile App Developer', 'Mobile Game Developer'],
        'roadmapLink' => 'career_roadmap.php',
    ],
    // [
    //     'title' => 'Front-end Dev',
    //     'subheading' => 'Create engaging user interfaces',
    //     'languages' => [
    //         ['name' => 'HTML', 'img' => 'html.png'],
    //         ['name' => 'CSS', 'img' => 'css.png'],
    //         ['name' => 'Javascript', 'img' => 'js.png'],
    //     ],
    //     'careerPathways' => ['Web Developer', 'UI/UX Designer'],
    //     'roadmapLink' => 'career_roadmap.php',
    // ],
    // [
    //     'title' => 'Node.js Dev',
    //     'subheading' => 'Build scalable server-side applications',
    //     'languages' => [
    //         ['name' => 'Node.js', 'img' => 'node.svg'],
    //         ['name' => 'Express', 'img' => 'logo-tech2.svg'],
    //         ['name' => 'Javascript', 'img' => 'js.png'],
    //     ],
    //     'careerPathways' => ['Backend Developer', 'Full-Stack Developer'],
    //     'roadmapLink' => 'career_roadmap.php',
    // ],
    // [
    //     'title' => 'Angular.js Dev',
    //     'subheading' => 'Develop dynamic web applications',
    //     'languages' => [
    //         ['name' => 'Angular.js', 'img' => 'angular.svg'],
    //         ['name' => 'TypeScript', 'img' => 'type_js.svg'],
    //         ['name' => 'HTML', 'img' => 'html.png'],
    //     ],
    //     'careerPathways' => ['Frontend Developer', 'Full-Stack Developer'],
    //     'roadmapLink' => 'career_roadmap.php',
    // ],

];
$base_url = '/techpathshala-interview/';
?>
<style>
    .career_box{
        min-height: 50px;
    }
</style>
<div class="home__in_demand_container">
    <div class="demand_heading_box">
        <h2 class="section_title">High-Paying IT Careers</h2>
        <!-- <h2 class="section_title">In-demand Jobs</h2> -->
        <img class="home__indemand_jobs_underline" src="assets/images/home/hero_underline.png" alt="Vector">
        <div class="demand_sub_heading">Land a Tech Job You Actually Like</div>
        <!-- <div class="demand_sub_heading">Discover Good Job Opportunities Today</div> -->
    </div>

    <div class="home__in_demand_card_container owl-carousel" id="demand_card_carousel">
        <?php foreach ($jobs as $job): ?>
            <div class="home_slider_effect">
                <div class="home__in_demand_card item indemand_animate_card" onmouseover="zoomCard(this)"
                    onmouseout="resetCards()">
                    <div>
                        <h3 class="tech_title">
                            <?= htmlspecialchars($job['title']) ?>
                        </h3>
                        <div class="demand_card_subheading">
                            <?= htmlspecialchars($job['subheading']) ?>
                        </div>
                    </div>
                    <div class="language_container">
                        <?php foreach ($job['languages'] as $lang): ?>
                            <div class="lang_box">
                                <?= htmlspecialchars($lang['name']) ?>
                                <img class="lang_img" src="assets/images/home/<?= htmlspecialchars($lang['img']) ?>"
                                    alt="<?= htmlspecialchars(strtolower($lang['name'])) ?>-logo">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="career_box">
                        <h5 class="desc_title">Career Pathways -</h5>
                        <div>
                            <?= implode(', ', $job['careerPathways']) ?>
                        </div>
                    </div>
                    <a class="btn_text demand_card_btn btn_hover_yellow" onclick="onClickEnquireModal()">
                        <!-- href="<?= $base_url . htmlspecialchars($job['roadmapLink']) ?>"> -->
                        Get Roadmap </a>
                </div>
            </div>

        <?php endforeach; ?>
    </div>

    <!-- <div class="demand_view_all_link">
        <p>View all
            <img src="assets/images/home/viewall.svg" alt="viewall">
        </p>
    </div> -->
</div>