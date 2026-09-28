<?php
$pageTitle = "CV";
$activePage = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV — Abdulaziz Oumer</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Inter', system-ui, sans-serif;
            background: #f5f5f5;
            color: #1a1a1a;
            line-height: 1.6;
            padding: 2rem 1rem;
        }
        .cv-container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 3rem 2.5rem;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
        header {
            text-align: center;
            border-bottom: 3px solid #6366f1;
            padding-bottom: 1.5rem;
            margin-bottom: 2rem;
        }
        header h1 {
            font-size: 2.2rem;
            color: #1e293b;
            margin-bottom: 0.25rem;
        }
        header .title {
            font-size: 1.1rem;
            color: #6366f1;
            font-weight: 600;
            margin-bottom: 0.75rem;
        }
        header .contact {
            font-size: 0.9rem;
            color: #64748b;
        }
        header .contact a {
            color: #6366f1;
            text-decoration: none;
        }
        section {
            margin-bottom: 2rem;
        }
        section h2 {
            font-size: 1.15rem;
            color: #6366f1;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 0.75rem;
            padding-bottom: 0.35rem;
            border-bottom: 1px solid #e2e8f0;
        }
        section p, section li {
            font-size: 0.95rem;
            color: #334155;
            margin-bottom: 0.4rem;
        }
        ul {
            list-style: none;
            padding-left: 0;
        }
        ul li::before {
            content: "•";
            color: #6366f1;
            font-weight: bold;
            margin-right: 0.5rem;
        }
        .skills-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.5rem;
        }
        .skills-grid li::before {
            content: "✓";
        }
        .project-item {
            margin-bottom: 1rem;
        }
        .project-item h3 {
            font-size: 1rem;
            color: #1e293b;
            margin-bottom: 0.15rem;
        }
        .project-item .tech {
            font-size: 0.8rem;
            color: #6366f1;
            font-weight: 500;
            margin-bottom: 0.25rem;
        }
        .project-item p {
            font-size: 0.9rem;
            color: #475569;
        }
        .two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 2rem;
        }
        @media (max-width: 600px) {
            .cv-container { padding: 1.5rem 1.25rem; }
            header h1 { font-size: 1.6rem; }
            .two-col { grid-template-columns: 1fr; gap: 1rem; }
            .skills-grid { grid-template-columns: 1fr; }
        }
        .print-btn {
            display: block;
            max-width: 800px;
            margin: 0 auto 1.5rem;
            padding: 0.85rem 1.5rem;
            background: #6366f1;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
        }
        .print-btn:hover { background: #4f46e5; }
        @media print {
            body { background: white; padding: 0; }
            .cv-container { box-shadow: none; padding: 0; }
            .print-btn { display: none; }
        }
    </style>
</head>
<body>

<a href="#" class="print-btn" onclick="window.print(); return false;">📄 Print / Save as PDF</a>

<div class="cv-container">
    <header>
        <h1>Abdulaziz Oumer</h1>
        <div class="title">Web Developer &amp; Software Engineering Student</div>
        <div class="contact">
            📧 <a href="mailto:a36758866@gmail.com">a36758866@gmail.com</a> &nbsp;|&nbsp;
            📱 +251 970 615 491 &nbsp;|&nbsp;
            📍 Mersa, Ethiopia<br>
            🔗 <a href="https://github.com/abdulaziz-dev-eth">github.com/abdulaziz-dev-eth</a>
        </div>
    </header>

    <section>
        <h2>Profile</h2>
        <p>Analytical, detail-oriented Junior Web Developer and Grade 10 student, currently training in Web Development &amp; Software Engineering at Syntax Technology. Focused on clean code architecture, semantic markup, and secure server-side logic. Top academic performer with strong leadership and public speaking skills, proven through two years as Child Parliament President.</p>
    </section>

    <section>
        <h2>Education</h2>
        <div class="two-col">
            <div>
                <p><strong>Syntax Technology</strong></p>
                <p>Web Development &amp; Software Engineering</p>
                <p>2026</p>
            </div>
            <div>
                <p><strong>Grade 10 — Top Student 🥇</strong></p>
                <p>Currently enrolled</p>
                <p>Planning: Computer Science</p>
            </div>
        </div>
    </section>

    <section>
        <h2>Technical Skills</h2>
        <ul class="skills-grid">
            <li>HTML5 &amp; CSS3</li>
            <li>JavaScript (ES6+)</li>
            <li>PHP</li>
            <li>MySQL / SQL</li>
            <li>Git &amp; GitHub</li>
            <li>Responsive Design</li>
        </ul>
    </section>

    <section>
        <h2>Leadership &amp; Activities</h2>
        <ul>
            <li>Child Parliament President (2 years) — represented student voice, led discussions and community initiatives.</li>
            <li>Active participant in multiple social and community clubs.</li>
            <li>Confident public speaker with strong communication skills.</li>
            <li>Top academic performer (Grade 10).</li>
        </ul>
    </section>

    <section>
        <h2>Projects</h2>
        <div class="project-item">
            <h3>E-Commerce Platform</h3>
            <div class="tech">PHP, MySQL, JavaScript</div>
            <p>A shopping platform with product listings, cart, and checkout flow.</p>
        </div>
        <div class="project-item">
            <h3>Portfolio Website</h3>
            <div class="tech">HTML5, CSS3, JavaScript, PHP</div>
            <p>Personal portfolio with responsive design, dark mode, and multi-language support.</p>
        </div>
        <div class="project-item">
            <h3>Task Management System</h3>
            <div class="tech">JavaScript, LocalStorage</div>
            <p>A to-do / project tracker with persistent local storage.</p>
        </div>
        <div class="project-item">
            <h3>Real-time Chat Application</h3>
            <div class="tech">JavaScript, Node.js</div>
            <p>A live messaging app with instant updates between users.</p>
        </div>
    </section>

    <section>
        <h2>Languages</h2>
        <ul>
            <li>Amharic — Native</li>
            <li>English — Second Language (Fluent)</li>
        </ul>
    </section>

    <section>
        <h2>Future Goals</h2>
        <ul>
            <li>Continue as a top academic performer through Grade 12.</li>
            <li>Build and sell professional websites and bots.</li>
            <li>Pursue a degree in Computer Science.</li>
        </ul>
    </section>
</div>

</body>
</html>