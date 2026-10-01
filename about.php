<?php
$pageTitle = "About";
$activePage = "about";
include 'includes/header.php';
?>

<div class="container">
    <section class="card">
        <div class="about-photos">
            <img src="images/profile.jpg" alt="Abdulaziz Oumer" class="about-photo">
            <img src="images/teaching.png" alt="Abdulaziz teaching" class="about-photo">
        </div>
        <h1><?php echo t('about_me'); ?></h1>
        <a href="assets/cv/abdulaziz-cv.pdf" download="abdulaziz-cv.pdf" class="btn btn-cv">
            <i class="fas fa-file-pdf"></i> <?php echo t('download_cv'); ?>
        </a>
        <p><?php echo t('about_bio_1'); ?></p>
        <p><?php echo t('about_bio_2'); ?></p>
    </section>

    <section class="card">
        <h2><i class="fas fa-graduation-cap"></i> <?php echo t('education_training'); ?></h2>
        <div class="timeline">
            <div class="timeline-item">
                <h4><?php echo t('education_track_title'); ?></h4>
                <p><?php echo t('education_track_text'); ?></p>
            </div>
            <div class="timeline-item">
                <h4><?php echo t('core_coursework'); ?></h4>
                <p><?php echo t('core_coursework_text'); ?></p>
            </div>
        </div>
    </section>

    <section class="card">
        <h2><i class="fas fa-chart-bar"></i> <?php echo t('proficiency'); ?></h2>
        <ul class="skills-grid">
            <li><?php echo t('proficiency_html'); ?></li>
            <li><?php echo t('proficiency_css'); ?></li>
            <li><?php echo t('proficiency_js'); ?></li>
            <li><?php echo t('proficiency_php'); ?></li>
            <li><?php echo t('proficiency_git'); ?></li>
            <li><?php echo t('proficiency_sql'); ?></li>
        </ul>
    </section>

    <section class="card">
        <h2><i class="fas fa-rocket"></i> <?php echo t('why_site_exists'); ?></h2>
        <p><?php echo t('why_site_text'); ?></p>
    </section>

    <section class="card">
        <h2><i class="fas fa-bullseye"></i> <?php echo t('career_goals'); ?></h2>
        <p><strong><?php echo t('career_1_title'); ?></strong> <?php echo t('career_1_text'); ?></p>
        <p><strong><?php echo t('career_2_title'); ?></strong> <?php echo t('career_2_text'); ?></p>
    </section>
</div>

<?php include 'includes/footer.php'; ?>