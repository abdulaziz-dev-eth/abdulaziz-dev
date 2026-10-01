<?php
$pageTitle = "Home";
$activePage = "home";
include 'includes/header.php';
?>

<div class="container grid-layout">
    <main>
        <section class="card hero">
            <img src="images/profile.jpg" alt="Abdulaziz Oumer" class="profile-photo">
            <div class="hero-content">
                <p class="tagline"><?php echo t('hero_tagline'); ?></p>
                <h1><?php echo t('hero_title'); ?></h1>
                <p><?php echo t('hero_description'); ?></p>
                <a href="projects.php" class="btn"><?php echo t('view_work'); ?></a>
                <a href="contact.php" class="btn btn-outline"><?php echo t('get_in_touch'); ?></a>
            </div>
        </section>

        <section class="card">
            <h2><?php echo t('what_i_do'); ?></h2>
            <p><?php echo t('what_i_do_text'); ?></p>
        </section>

        <section class="card">
            <h2><i class="fas fa-tools"></i> <?php echo t('tech_skills'); ?></h2>
            <ul class="skills-grid">
                <li>HTML5 &amp; CSS3</li>
                <li>JavaScript (ES6+)</li>
                <li>PHP</li>
                <li>MySQL / SQL</li>
                <li>Git &amp; GitHub</li>
                <li>Responsive Design</li>
            </ul>
        </section>
    </main>

    <aside>
        <section class="card">
            <h3><?php echo t('quick_facts'); ?></h3>
            <p><i class="fas fa-map-marker-alt"></i> <?php echo t('based_in'); ?></p>
            <p><i class="fas fa-graduation-cap"></i> <?php echo t('training_at'); ?></p>
            <p><i class="fas fa-briefcase"></i> <?php echo t('open_to'); ?></p>
        </section>

        <section class="card">
            <h3><?php echo t('featured_project'); ?></h3>
            <p><strong>E-Commerce Platform</strong><br><small>PHP, MySQL, JavaScript</small></p>
            <a href="projects.php" class="btn" style="margin-top:0.5rem;"><?php echo t('see_all_projects'); ?></a>
        </section>
    </aside>
</div>

<?php include 'includes/footer.php'; ?>