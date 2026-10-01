<?php
$activePage = "testimonials";
include 'includes/header.php';
include 'db.php';

$pageTitle = t('testimonials');

$testimonials = [];
$result = @$conn->query("SELECT name, role, message FROM testimonials ORDER BY created_at DESC");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $testimonials[] = $row;
    }
}
?>

<div class="container">
    <section class="card">
        <h1><?php echo t('testimonials_title'); ?></h1>
        <p><?php echo t('testimonials_intro'); ?></p>
    </section>

    <div class="testimonials-grid">
        <?php foreach ($testimonials as $t): ?>
            <div class="card testimonial-card">
                <div class="quote-icon">"</div>
                <p class="testimonial-message"><?php echo htmlspecialchars($t['message']); ?></p>
                <div class="testimonial-author">
                    <div class="author-avatar">
                        <?php echo strtoupper(substr($t['name'], 0, 1)); ?>
                    </div>
                    <div class="author-info">
                        <h4><?php echo htmlspecialchars($t['name']); ?></h4>
                        <?php if ($t['role']): ?>
                            <span><?php echo htmlspecialchars($t['role']); ?></span>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<?php include 'includes/footer.php'; ?>
