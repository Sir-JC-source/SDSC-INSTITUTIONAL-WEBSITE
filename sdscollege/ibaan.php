<?php
/* =========================
IBAAN HOMEPAGE
========================= */

include 'includes/header_ibaan.php';
include 'config.php';

/* FETCH IBAAN HERO CAROUSEL IMAGES */
$carouselQuery = mysqli_query($conn,"
    SELECT * FROM main_hero_images
    WHERE active = 1
    AND campus = 'ibaan'
    ORDER BY display_order ASC, id ASC
");
?>

<style>
.text-green{
    color:#f5fdf9ff !important;
}

.text-shadow{
    text-shadow:2px 2px 6px rgba(0,0,0,0.7);
}

.hero-title{
    font-size:55px;
    font-weight:800;
}
</style>

<!-- =========================
HERO CAROUSEL
========================= -->
<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">

<?php
$firstSlide = true;

if($carouselQuery && mysqli_num_rows($carouselQuery) > 0){

while($row = mysqli_fetch_assoc($carouselQuery)){

$activeClass = $firstSlide ? "active" : "";
$firstSlide = false;

/* Build safe image path */
$imagePath = "uploads/" . $row['image_path'];

/* If file missing, use fallback */
if(!file_exists($imagePath)){
    $imagePath = "assets/images/sav.png";
}
?>

<div class="carousel-item <?php echo $activeClass; ?>">
<img src="<?php echo $imagePath; ?>"
class="d-block w-100"
alt="Ibaan Campus Image">
</div>

<?php
}
}else{
?>

<!-- Fallback slide -->
<div class="carousel-item active">
<img src="assets/images/sav.png" class="d-block w-100" alt="Default Image">
</div>

<?php } ?>

</div>

<!-- Controls -->
<button class="carousel-control-prev" type="button"
data-bs-target="#heroCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button"
data-bs-target="#heroCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

<!-- Overlay Text -->
<div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center">
<h1 class="fw-bold text-green text-shadow hero-title">
Our Graduates, Our Difference
</h1>
</div>

</div>


<!-- =========================
QUICK LINKS
========================= -->
<section class="py-5">
<div class="container text-center">

<h2 class="text-success mb-4">Quick Links</h2>

<div class="row">

<div class="col-md-3 mb-4">
<div class="card border-0 shadow-sm h-100">
<div class="card-body">
<i class="fa-solid fa-graduation-cap fa-2x text-warning mb-3"></i>
<h6 class="fw-bold">Scholarship Grants</h6>
<p class="small text-muted">
Explore financial aid and scholarship opportunities available to students.
</p>
<a href="#" class="text-success small fw-bold">Learn More →</a>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card border-0 shadow-sm h-100">
<div class="card-body">
<i class="fa-solid fa-trophy fa-2x text-warning mb-3"></i>
<h6 class="fw-bold">Achievements & Awards</h6>
<p class="small text-muted">
See how SDSC celebrates excellence in academics and leadership.
</p>
<a href="#" class="text-success small fw-bold">View Awards →</a>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card border-0 shadow-sm h-100">
<div class="card-body">
<i class="fa-solid fa-certificate fa-2x text-warning mb-3"></i>
<h6 class="fw-bold">Accreditations</h6>
<p class="small text-muted">
Recognized by national and international accrediting bodies.
</p>
<a href="#" class="text-success small fw-bold">See Details →</a>
</div>
</div>
</div>

<div class="col-md-3 mb-4">
<div class="card border-0 shadow-sm h-100">
<div class="card-body">
<i class="fa-solid fa-handshake fa-2x text-warning mb-3"></i>
<h6 class="fw-bold">Linkages & Affiliations</h6>
<p class="small text-muted">
Partner institutions that share our mission for quality education.
</p>
<a href="#" class="text-success small fw-bold">Our Partners →</a>
</div>
</div>
</div>

</div>
</div>
</section>


<!-- =========================
NEWS & EVENTS
========================= -->
<section class="py-5 bg-light">

<div class="container">

<h2 class="text-center text-success mb-4">Latest News & Events</h2>

<div class="row">

<?php

$news = mysqli_query($conn,"
SELECT * FROM news_events
WHERE status = 1
AND campus = 'ibaan'
ORDER BY id DESC
LIMIT 3
");

if($news && mysqli_num_rows($news)>0){

while($row = mysqli_fetch_assoc($news)){

$newsImage = "uploads/".$row['image'];

if(!file_exists($newsImage)){
$newsImage = "assets/images/sav.png";
}
?>

<div class="col-md-4 mb-4">

<div class="card border-0 shadow-sm h-100">

<img src="<?php echo $newsImage; ?>" class="card-img-top">

<div class="card-body">

<h6 class="fw-bold">
<?php echo htmlspecialchars($row['title']); ?>
</h6>

<p class="small text-muted">
<?php echo htmlspecialchars($row['description']); ?>
</p>

</div>

</div>

</div>

<?php
}
}
?>

</div>
</div>
</section>


<!-- =========================
ABOUT SECTION
========================= -->
<section class="py-5 text-center bg-light">

<div class="container">

<h2 class="text-success mb-3">
Welcome to St. Dominic Savio College Ibaan Campus
</h2>

<p class="lead text-muted">
A center of excellence committed to forming competent and compassionate leaders who live with Love, Leadership, and Service.
</p>

<a href="about.php" class="btn btn-outline-success mt-3">
Learn More
</a>

</div>

</section>


<?php include 'includes/footer_ibaan.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>