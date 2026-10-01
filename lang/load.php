<?php
// lang/load.php — Language loader (must be included BEFORE header)
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'en';
}
if (isset($_GET['lang'])) {
    $_SESSION['lang'] = $_GET['lang'];
}
$lang = $_SESSION['lang'];

// Load translations from lang/ folder
$translations = require __DIR__ . '/../lang/' . $lang . '.php';

function t($key) {
    global $translations;
    return $translations[$key] ?? $key;
}
?>