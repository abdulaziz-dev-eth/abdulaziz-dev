<?php
$pageTitle = "404 — Page Not Found";
$activePage = "";
include 'includes/header.php';
?>

<div class="container">
    <section class="card error-page">
        <div class="error-code">404</div>
        <h1>Page Not Found</h1>
        <p>Sorry, the page you are looking for doesn't exist or has been moved.</p>
        <div class="error-actions">
            <a href="index.php" class="btn">← Back to Home</a>
            <a href="contact.php" class="btn btn-outline">Contact Me</a>
        </div>
    </section>
</div>

<?php include 'includes/footer.php'; ?>