<?php
$pageTitle = "Projects";
$activePage = "projects";
include 'includes/header.php';
include 'db.php';

$projects = [];
$dbError = false;

$result = @$conn->query("SELECT title, description, tech_stack, project_link, category, github_link, demo_link FROM projects ORDER BY display_order ASC");
if ($result && $result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $projects[] = $row;
    }
} else {
    $dbError = true;
    $projects = [
        [
            "title" => "E-Commerce Platform",
            "description" => "A shopping platform with product listings, cart, and checkout flow.",
            "tech_stack" => "PHP, MySQL, JavaScript",
            "project_link" => "#",
            "category" => "backend",
            "github_link" => "https://github.com/abdulaziz-dev-eth",
            "demo_link" => "#"
        ],
        [
            "title" => "Real-time Chat Application",
            "description" => "A live messaging app with instant updates between users.",
            "tech_stack" => "JavaScript, Node.js",
            "project_link" => "#",
            "category" => "frontend",
            "github_link" => "https://github.com/abdulaziz-dev-eth",
            "demo_link" => "#"
        ],
        [
            "title" => "Task Management System",
            "description" => "A to-do / project tracker with persistent local storage.",
            "tech_stack" => "JavaScript, LocalStorage",
            "project_link" => "#",
            "category" => "frontend",
            "github_link" => "https://github.com/abdulaziz-dev-eth",
            "demo_link" => "#"
        ],
        [
            "title" => "Portfolio Website",
            "description" => "A personal portfolio with responsive design and dark mode.",
            "tech_stack" => "HTML5, CSS3, JavaScript",
            "project_link" => "#",
            "category" => "frontend",
            "github_link" => "https://github.com/abdulaziz-dev-eth",
            "demo_link" => "#"
        ],
    ];
}
?>

<div class="container">
    <section class="card">
        <h1><?php echo t('my_projects'); ?></h1>
        <p><?php echo t('projects_intro'); ?></p>
        <?php if ($dbError): ?>
            <p style="font-size:0.85rem;color:var(--accent-color);">
                Showing sample data — run <code>schema.sql</code> and add rows to the 
                <code>projects</code> table to manage this list from the database.
            </p>
        <?php endif; ?>
    </section>

    <!-- Filter Buttons -->
    <div class="filter-buttons">
        <button class="filter-btn active" data-filter="all"><?php echo t('all'); ?></button>
        <button class="filter-btn" data-filter="html"><?php echo t('html_css'); ?></button>
        <button class="filter-btn" data-filter="frontend"><?php echo t('javascript'); ?></button>
        <button class="filter-btn" data-filter="backend"><?php echo t('php'); ?></button>
        <button class="filter-btn" data-filter="database"><?php echo t('mysql'); ?></button>
    </div>

    <!-- Projects Grid -->
    <div class="projects-grid">
        <?php foreach ($projects as $index => $project): ?>
            <div class="card project-card" data-category="<?php echo htmlspecialchars($project['category']); ?>">
                <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                <span class="project-tech"><?php echo htmlspecialchars($project['tech_stack']); ?></span>
                <p><?php echo htmlspecialchars($project['description']); ?></p>
                <button class="btn view-project-btn" 
                        data-title="<?php echo htmlspecialchars($project['title']); ?>"
                        data-description="<?php echo htmlspecialchars($project['description']); ?>"
                        data-tech="<?php echo htmlspecialchars($project['tech_stack']); ?>"
                        data-github="<?php echo htmlspecialchars($project['github_link']); ?>"
                        data-demo="<?php echo htmlspecialchars($project['demo_link']); ?>">
                    <?php echo t('view_project'); ?>
                </button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Modal -->
<div id="projectModal" class="modal">
    <div class="modal-content">
        <span class="modal-close">&times;</span>
        <h2 id="modalTitle"></h2>
        <span class="project-tech" id="modalTech"></span>
        <p id="modalDescription"></p>
        <div class="modal-links">
            <a id="modalGithub" href="#" target="_blank" rel="noopener" class="btn">GitHub</a>
            <a id="modalDemo" href="#" target="_blank" rel="noopener" class="btn btn-outline">Live Demo</a>
        </div>
    </div>
</div>

<?php include 'includes/footer.php'; ?>