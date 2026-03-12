<?php
include 'includes/header.php';
include 'includes/dbcon.php';

/* Fetch accreditation content */
$query = mysqli_query($conn, "SELECT * FROM accreditation_page LIMIT 1");
$row = mysqli_fetch_assoc($query);

/* Split accrediting bodies */
$bodies = explode('|', $row['bodies']);
?>

<style>
/* Page Background */
body {
    background: #e8f2ec;
}

/* Main Card */
.event-details {
    max-width: 1200px;
    margin: 50px auto;
    background: #ffffff;
    padding: 60px;
    border-radius: 16px;
    box-shadow: 0 10px 28px rgba(0, 64, 35, 0.12);
    border-left: 8px solid #0d472e;
}

/* BIG IMAGE CONTAINER */
.accreditation-image {
    text-align: center;
    margin-bottom: 35px;
}

/* BIG IMAGE STYLE */
.accreditation-image img {
    max-width: 100%;
    height: 280px;               /* MAIN SIZE CONTROL */
    object-fit: contain;
    padding: 25px;
    background: #f1f8f4;
    border-radius: 18px;
    border: 2px solid #0d472e;
}

/* Title */
.event-details h2 {
    font-weight: 800;
    color: #0d472e;
    font-size: 36px;
    text-align: center;
    margin-bottom: 25px;
}

/* Section Titles */
.event-details h3 {
    font-weight: 700;
    color: #0d472e;
    margin-top: 40px;
    margin-bottom: 15px;
    font-size: 24px;
}

/* Text */
.event-details p,
.event-details li {
    font-size: 19px;
    line-height: 1.9;
    color: #1b1b1b;
    text-align: justify;
}

/* List */
.event-details ul {
    margin-left: 25px;
}

.event-details ul li {
    margin-bottom: 15px;
}

/* Back Button */
.event-details a.btn-success {
    background: #0d472e;
    border: none;
    padding: 12px 30px;
    font-size: 17px;
    border-radius: 10px;
    font-weight: 600;
}

.event-details a.btn-success:hover {
    background: #0a3522;
}

/* Button Container */
.back-container {
    text-align: right;
    margin-top: 30px;
}

/* Responsive */
@media (max-width: 768px) {
    .event-details {
        padding: 35px 25px;
    }

    .event-details h2 {
        font-size: 26px;
    }

    .accreditation-image img {
        height: 200px;
    }
}
</style>

<div class="container">
    <div class="event-details">

        <!-- BIG ACCREDITATION IMAGE -->
        <?php if (!empty($row['icon'])): ?>
            <div class="accreditation-image">
                <img src="assets/images/<?= htmlspecialchars($row['icon']) ?>"
                     alt="Accreditations and Recognitions">
            </div>
        <?php endif; ?>

        <!-- Title -->
        <h2><?= htmlspecialchars($row['title']) ?></h2>

        <!-- Intro -->
        <p><?= nl2br(htmlspecialchars($row['intro'])) ?></p>

        <!-- Accrediting Bodies -->
        <h3>Recognizing Accrediting Bodies</h3>
        <ul>
            <?php foreach ($bodies as $item):
                $parts = explode(':', $item, 2);
                $name = $parts[0] ?? '';
                $desc = $parts[1] ?? '';
            ?>
                <li>
                    <strong><?= htmlspecialchars($name) ?></strong><br>
                    <?= htmlspecialchars($desc) ?>
                </li>
            <?php endforeach; ?>
        </ul>

        <!-- Importance -->
        <h3>Why Accreditation Matters</h3>
        <p><?= nl2br(htmlspecialchars($row['importance'])) ?></p>

        <!-- Closing -->
        <p><?= nl2br(htmlspecialchars($row['closing'])) ?></p>

        <!-- Back Button -->
        <div class="back-container">
            <a href="index.php" class="btn btn-success">← Back</a>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
