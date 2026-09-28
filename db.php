
    <?php
/**
 * db.php — Central database connection
 * Include this file at the top of any page that needs the database
 * (contact.php, projects.php).
 */

$host   = "sql301.infinityfree.com";
$user   = "if0_43018692";
$pass   = "BF5SIV37yzM";
$dbname = "if0_43018692_portfolio";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database Connection Failed: " . $conn->connect_error);
}

// Use utf8mb4 so any unicode text (including Amharic) saves correctly
$conn->set_charset("utf8mb4");