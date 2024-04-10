<?php
$tabs = [
    ['id' => 1, 'name' => 'All'],
    ['id' => 2, 'name' => 'Beginner'],
    ['id' => 3, 'name' => 'Expert'],
    ['id' => 4, 'name' => 'Advanced'],
];
$categories = [
    'Popular courses',
    // 'Bootcamps',
    'Front-end development',
    'Back-end development',
    'Full stack development',
];
?>
<div class="popular_courses_category">
    <div class="tabs_section">
        <div class="demand_course">
            <h3>In-demand programs</h3>
            <img src="assets\images\yellowline.png" alt="yellowline">
            <p>Curriculum is deisgned to make you an expert</p>
        </div>
        <!-- <div class="search-container">
            <div class="search-box">
                <i class="bi bi-search search_icon"></i>
                <input type="text" name="search" class="search-input" id="search-input" placeholder="Search programs"
                    oninput="filterProgramsByTitle()">
            </div>
        </div> -->
        <!-- <div> <button class="filter-btn"> <img src="assets\images\our_programs\filter.svg"
                        alt="filter">Filter</button></div> -->
        <div class="slider-container">
            <?php foreach ($tabs as $tab): ?>
                <div class="tab" onclick="filterProgramsByTab( `<?php echo $tab['id']; ?>`, `<?php echo $tab['name']; ?>`)"
                    id="tab_name">
                    <?php echo $tab['name']; ?>
                    <div class="underline"></div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="desktop_section">
            <div class="tech-tabs-section">
                <?php foreach ($categories as $category): ?>
                    <div>
                        <?php
                        $parameter = $category;
                        if ($category == 'Popular courses') {
                            $parameter = 'Full stack development';
                        }
                        ?>
                        <button class="techs-btn" onclick="filterCardsBy_Categories(this, '<?php echo $parameter; ?>')">
                            <p class="btn-tech-desc">
                                <?php echo $category; ?>
                            </p>
                        </button>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="owl-carousel corosel-margin mobile-slider" id="carousel-programe">
            <?php foreach ($categories as $category): ?>
                <div class="item">
                    <button onclick="changeButtonColor(this); filterCardsBy_Categories(this, ' <?php echo $category; ?>')">
                        <p class="btn-desc">
                            <?php echo $category; ?>
                        </p>
                    </button>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="container">
        <div class="row program_custom_card_row" id="programs">
        </div>
        <!-- <div class="view_all">
            <p onclick="OnViewAllClick()" id="viewAllId">View all
                <img src="assets\images\home\viewall.svg" alt="drop-down">
            </p>
        </div> -->
    </div>
</div>