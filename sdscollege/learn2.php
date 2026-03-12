<?php
include 'includes/header.php';
include 'includes/dbcon.php';

/* FETCH ACHIEVEMENTS PAGE DATA */
$query = mysqli_query($conn, "SELECT * FROM achievements_page LIMIT 1");
$data = mysqli_fetch_assoc($query);

/* SAFETY DEFAULTS (PREVENT WARNINGS) */
$title       = $data['title'] ?? '';
$intro       = $data['intro'] ?? '';
$categories  = $data['categories'] ?? '';
$icon        = $data['icon'] ?? '';

/* SPLIT CATEGORIES */
$categoryList = [];
if (!empty($categories)) {
    $categoryList = explode('|', $categories);
}
?>

<style>
body {
    background: #e8f2ec;
}

/* MAIN CARD — SAME AS LEARN1 & LEARN3 */
.event-details {
    max-width: 1200px;
    margin: 50px auto;
    background: #ffffff;
    padding: 60px;
    border-radius: 16px;
    box-shadow: 0 10px 28px rgba(0, 64, 35, 0.12);
    border-left: 8px solid #0d472e;
}

/* IMAGE STYLE — SAME AS LEARN1 & LEARN3 */
.achievement-image {
    text-align: center;
    margin-bottom: 35px;
}

.achievement-image img {
    max-width: 100%;
    height: 280px;
    object-fit: contain;
    padding: 25px;
    background: #f1f8f4;
    border-radius: 18px;
    border: 2px solid #0d472e;
}

/* TITLES */
.event-details h2 {
    font-weight: 800;
    color: #0d472e;
    font-size: 36px;
    text-align: center;
    margin-bottom: 25px;
}

.event-details h3 {
    font-weight: 700;
    color: #0d472e;
    margin-top: 40px;
    margin-bottom: 15px;
    font-size: 24px;
}

/* TEXT */
.event-details p,
.event-details li {
    font-size: 19px;
    line-height: 1.9;
    color: #1b1b1b;
    text-align: justify;
}

/* LIST */
.event-details ul {
    margin-left: 25px;
}

.event-details ul li {
    margin-bottom: 18px;
}

/* BUTTON */
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

/* BUTTON CONTAINER */
.back-container {
    text-align: right;
    margin-top: 30px;
}

/* RESPONSIVE */
@media (max-width: 768px) {
    .event-details {
        padding: 35px 25px;
    }

    .event-details h2 {
        font-size: 26px;
    }

    .achievement-image img {
        height: 200px;
    }
}
</style>

<div class="container">
    <div class="event-details">

        <!-- IMAGE -->
        <?php if (!empty($icon)): ?>
            <div class="achievement-image">
                <img src="assets/images/<?= htmlspecialchars($icon) ?>" alt="Achievements & Awards">
            </div>
        <?php endif; ?>

        <!-- TITLE -->
        <h2><?= htmlspecialchars($title) ?></h2>

        <!-- INTRO -->
        <p><?= nl2br(htmlspecialchars($intro)) ?></p>

        <!-- CATEGORIES -->
        <h3>Categories of Awards</h3>
        <ul>
            <?php foreach ($categoryList as $item): 
                $parts = explode(':', $item, 2);
                $catTitle = trim($parts[0] ?? '');
                $catDesc  = trim($parts[1] ?? '');
            ?>
                <?php if ($catTitle !== ''): ?>
                    <li>
                        <strong><?= htmlspecialchars($catTitle) ?></strong><br>
                        <?= htmlspecialchars($catDesc) ?>
                    </li>
                <?php endif; ?>
            <?php endforeach; ?>
        </ul>

        <!-- BACK BUTTON -->
        <div class="back-container">
            <a href="index.php" class="btn btn-success">← Back</a>
        </div>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
