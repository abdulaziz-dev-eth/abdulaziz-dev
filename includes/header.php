<?php
// $activePage should be set by each page before including this file
if (!isset($activePage)) $activePage = "";

// Load language system
require_once __DIR__ . '/../lang/load.php';
?>
<!DOCTYPE html>
<html lang="<?php echo $lang; ?>" dir="<?php echo $lang === 'ar' ? 'rtl' : 'ltr'; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($pageTitle) ? $pageTitle . " | Abdulaziz Oumer" : "Abdulaziz Oumer | Full-Stack Developer"; ?></title>
    <meta name="description" content="Portfolio of Abdulaziz Oumer, Web Developer & Software Engineering student.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="logo">Abdulaziz.dev</div>
        <button class="nav-toggle" aria-label="Toggle menu">
            <span></span><span></span><span></span>
        </button>
        <nav>
            <a href="index.php" class="<?php echo $activePage === 'home' ? 'active' : ''; ?>"><?php echo t('home'); ?></a>
            <a href="about.php" class="<?php echo $activePage === 'about' ? 'active' : ''; ?>"><?php echo t('about'); ?></a>
            <a href="projects.php" class="<?php echo $activePage === 'projects' ? 'active' : ''; ?>"><?php echo t('projects'); ?></a>
            <a href="contact.php" class="<?php echo $activePage === 'contact' ? 'active' : ''; ?>"><?php echo t('contact'); ?></a>
        </nav>
        <div class="lang-switcher">
            <a href="?lang=en" class="<?php echo $lang === 'en' ? 'active' : ''; ?>">EN</a>
            <a href="?lang=am" class="<?php echo $lang === 'am' ? 'active' : ''; ?>">አማ</a>
            <a href="?lang=ar" class="<?php echo $lang === 'ar' ? 'active' : ''; ?>">ع</a>
        </div>
    </header>
