<?php
$pageTitle = "Contact";
$activePage = "contact";
include 'db.php';

$name = $email = $message = "";
$nameErr = $emailErr = $msgErr = "";
$successMsg = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = htmlspecialchars(trim($_POST["name"]));
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = htmlspecialchars(trim($_POST["email"]));
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    if (empty($_POST["message"])) {
        $msgErr = "Message is required";
    } else {
        $message = htmlspecialchars(trim($_POST["message"]));
    }

    if (empty($nameErr) && empty($emailErr) && empty($msgErr)) {
        $stmt = $conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);

        if ($stmt->execute()) {
            $successMsg = "Thank you! Your message has been sent.";
            $name = $email = $message = "";
        } else {
            $msgErr = "Something went wrong. Please try again later.";
        }
        $stmt->close();
    }
}

include 'includes/header.php';
?>

<div class="container">
    <section class="card">
        <h1><?php echo t('get_in_touch_title'); ?></h1>
        <p><?php echo t('contact_intro'); ?></p>
    </section>

    <div class="services-grid">
        <div class="card service-card">
            <div class="service-icon">🎨</div>
            <h3><?php echo t('web_design'); ?></h3>
            <p><?php echo t('web_design_text'); ?></p>
        </div>
        <div class="card service-card">
            <div class="service-icon">💻</div>
            <h3><?php echo t('frontend_dev'); ?></h3>
            <p><?php echo t('frontend_dev_text'); ?></p>
        </div>
        <div class="card service-card">
            <div class="service-icon">🔧</div>
            <h3><?php echo t('maintenance'); ?></h3>
            <p><?php echo t('maintenance_text'); ?></p>
        </div>
    </div>

    <section class="card" style="max-width: 600px; margin: 1.5rem auto;">
        <?php if (!empty($successMsg)): ?>
            <p class="success-msg"><?php echo $successMsg; ?></p>
        <?php endif; ?>

        <form method="POST" action="contact.php" data-validate>
            <div class="form-group">
                <label for="name"><?php echo t('name'); ?></label>
                <input type="text" id="name" name="name" value="<?php echo $name; ?>" required>
                <span class="error-msg" id="nameError"><?php echo $nameErr; ?></span>
            </div>

            <div class="form-group">
                <label for="email"><?php echo t('email'); ?></label>
                <input type="email" id="email" name="email" value="<?php echo $email; ?>" required>
                <span class="error-msg" id="emailError"><?php echo $emailErr; ?></span>
            </div>

            <div class="form-group">
                <label for="message"><?php echo t('message'); ?></label>
                <textarea id="message" name="message" rows="5" required><?php echo $message; ?></textarea>
                <span class="error-msg" id="messageError"><?php echo $msgErr; ?></span>
            </div>

            <button type="submit" class="btn"><?php echo t('send_message'); ?></button>
        </form>
    </section>
</div>

<?php include 'includes/footer.php'; ?>