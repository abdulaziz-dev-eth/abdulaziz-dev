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
            📄 <?php echo t('download_cv'); ?>
        </a>
        <p><?php echo t('about_bio_1'); ?></p>
        <p><?php echo t('about_bio_2'); ?></p>
    </section>

    <section class="card">
        <h2>🎓 <?php echo t('education_training'); ?></h2>
        <div class="timeline">
            <div class="timeline-item">
                <h4>Syntax Technology — Web Development &amp; Software Engineering Track</h4>
                <p>A practical, project-based curriculum covering both client-side and server-side development.</p>
            </div>
            <div class="timeline-item">
                <h4>Core Coursework</h4>
                <p>Semantic HTML5 &amp; CSS3 (Flexbox, Grid, Animations) · JavaScript (ES6+), DOM &amp; event handling · PHP server-side processing &amp; form validation · Database fundamentals &amp; SQL · Git/GitHub workflow · Basic UI/UX wireframing.</p>
            </div>
        </div>
    </section>

    <section class="card">
        <h2>📊 <?php echo t('proficiency'); ?></h2>
        <ul class="skills-grid">
            <li>HTML5 — Advanced</li>
            <li>CSS3 / UI — Advanced</li>
            <li>JavaScript — Intermediate</li>
            <li>PHP — Intermediate</li>
            <li>Git &amp; GitHub — Intermediate</li>
            <li>SQL / Databases — Beginner</li>
        </ul>
    </section>

    <section class="card">
        <h2>🚀 <?php echo t('why_site_exists'); ?></h2>
        <p>A static résumé can't show real problem-solving. This site is a live demonstration: working JavaScript interactions, a PHP contact form with server-side validation, and a MySQL-backed projects list — all built and maintained by me.</p>
    </section>

    <section class="card">
        <h2>🎯 <?php echo t('career_goals'); ?></h2>
        <p><strong>Next 6–12 months:</strong> Deepen JavaScript with async/await and the Fetch API; strengthen PHP with OOP and relational databases (MySQL/PostgreSQL).</p>
        <p><strong>1–3 years:</strong> Grow into a full-stack developer role, learn a modern front-end framework (React or Vue) and a back-end framework (Laravel or Node/Express), and adopt automated testing and CI/CD practices.</p>
    </section>
</div>

<?php include 'includes/footer.php'; ?>