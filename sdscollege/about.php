<?php
// DB CONNECTION
include 'includes/dbcon.php';

// FETCH ABOUT CONTENT
$result = mysqli_query($conn, "SELECT * FROM about_content WHERE id = 1");
$about = mysqli_fetch_assoc($result);
?>

<?php include 'includes/header.php'; ?>

<style>
/* General Page Styling */
body {
    background: #ffffff;
}

/* Section Title */
.section-title {
    font-size: 26px;
    font-weight: 800;
    color: #0c5f23;
    margin-bottom: 20px;
    border-left: 6px solid #0c5f23;
    padding-left: 10px;
}

/* Green Content Box */
.content-box {
    background: #0d472e;      /* SDSC Dark Green */
    color: white;
    padding: 25px 30px;
    border-radius: 10px;
    margin-bottom: 30px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.2);
}

/* Headings inside the green box */
.content-box h3 {
    font-weight: 700;
    margin-bottom: 15px;
    color: #ffd447; /* Golden SDSC highlight */
}

/* Text inside box */
.content-box p,
.content-box li {
    font-size: 0.95rem;
    line-height: 1.6;
}
</style>

<div class="container py-5">

    <!-- PAGE TITLE -->
    <h2 class="section-title">About St. Dominic Savio College</h2>

    <!-- OUR COLLEGE -->
    <div class="content-box">
        <h3>Our College</h3>
        <p><?= nl2br(htmlspecialchars($about['our_college'])) ?></p>
    </div>

    <!-- VISION -->
    <div class="content-box">
        <h3>Vision</h3>
        <p><?= nl2br(htmlspecialchars($about['vision'])) ?></p>
    </div>

    <!-- MISSION -->
    <div class="content-box">
        <h3>Mission</h3>
        <p><?= nl2br(htmlspecialchars($about['mission'])) ?></p>
    </div>

    <!-- CORE VALUES -->
    <div class="content-box">
        <h3>Core Values</h3>
        <ul>
            <?php foreach (explode(',', $about['core_values']) as $value): ?>
                <li><?= htmlspecialchars(trim($value)) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

    <!-- OUR COMMITMENT -->
    <div class="content-box">
        <h3>Our Commitment</h3>
        <p><?= nl2br(htmlspecialchars($about['commitment'])) ?></p>
    </div>

</div>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
