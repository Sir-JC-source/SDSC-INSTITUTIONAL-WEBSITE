<?php
include 'includes/header.php';
include 'includes/dbcon.php';

/* FETCH SCHOLARSHIP GRANTS DATA */
$query = mysqli_query($conn, "SELECT * FROM scholarship_grants_page WHERE id = 1");
$data = mysqli_fetch_assoc($query);

/* PREPARE PROGRAM LIST */
$programs = [];
if (!empty($data['programs'])) {
    $programs = explode("\n", $data['programs']);
}
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

/* BIG IMAGE CONTAINER — SAME AS LEARN3 */
.scholarship-image {
    text-align: center;
    margin-bottom: 35px;
}

/* BIG IMAGE STYLE — SAME AS LEARN3 */
.scholarship-image img {
    max-width: 100%;
    height: 280px;
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

/* Button */
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

    .scholarship-image img {
        height: 200px;
    }
}
</style>

<div class="container">
    <div class="event-details">

        <!-- BIG IMAGE (MATCHES LEARN3 EXACTLY) -->
        <?php if (!empty($data['icon'])): ?>
            <div class="scholarship-image">
                <img src="assets/images/<?= htmlspecialchars($data['icon']) ?>"
                     alt="Scholarship Grants">
            </div>
        <?php endif; ?>

        <!-- TITLE -->
        <h2><?= htmlspecialchars($data['title']) ?></h2>

        <!-- INTRO -->
        <p><?= nl2br(htmlspecialchars($data['intro'])) ?></p>

        <!-- PROGRAMS -->
        <h3>Available Scholarship Programs</h3>
        <ul>
            <?php foreach ($programs as $program): ?>
                <?php if (trim($program) !== ''): ?>
                    <li><strong><?= htmlspecialchars(trim($program)) ?></strong></li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

        <!-- HOW TO APPLY -->
        <h3>How to Apply</h3>
        <p><?= nl2br(htmlspecialchars($data['how_to_apply'])) ?></p>

        <!-- BACK -->
        <div class="back-container">
            <a href="index.php" class="btn btn-success">← Back</a>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
