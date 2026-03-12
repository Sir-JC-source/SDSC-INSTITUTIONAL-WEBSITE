<?php 
include 'includes/header.php'; 
include 'includes/dbcon.php'; 

// Fetch Active Carousel Images
$carousel = mysqli_query($conn, "SELECT * FROM main_hero_images WHERE active = 1 AND campus='main' ORDER BY display_order ASC");
?>

<style>

/* HERO TEXT */

.text-green{
color:#f5fdf9 !important;
}

.text-shadow{
text-shadow:2px 2px 6px rgba(0,0,0,0.7);
}

.hero-title{
font-size:55px;
font-weight:800;
}

/* SECTION TITLE */

.section-title{
font-weight:700;
color:#0c5f23;
position:relative;
display:inline-block;
}

.section-title::after{
content:'';
width:70px;
height:3px;
background:#0c5f23;
display:block;
margin:8px auto 0;
}

/* QUICK LINK CARDS */

.quick-card{
border-radius:14px;
transition:.3s;
}

.quick-card:hover{
transform:translateY(-6px);
box-shadow:0 10px 25px rgba(0,0,0,0.15);
}

/* NEWS CARD */

.news-card{
border-radius:14px;
overflow:hidden;
transition:.3s;
background:#fff;
}

.news-card:hover{
transform:translateY(-8px);
box-shadow:0 12px 30px rgba(0,0,0,0.15);
}

.news-img{
height:200px;
object-fit:cover;
}

.news-body{
padding:20px;
}

.news-title{
font-weight:700;
font-size:1.05rem;
color:#0c5f23;
margin-bottom:10px;
}

.news-text{
font-size:.9rem;
color:#555;
line-height:1.6;
}

/* ABOUT */

.about-section{
background:#f8f9fa;
}

</style>

<!-- HERO SLIDER -->

<div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

<div class="carousel-inner">

<?php
if (mysqli_num_rows($carousel) > 0) {

$isFirst = true;

while ($row = mysqli_fetch_assoc($carousel)) {

$img = "uploads/" . $row['image_path'];
?>

<div class="carousel-item <?= $isFirst ? 'active' : '' ?>">

<img src="<?= $img ?>" class="d-block w-100">

</div>

<?php
$isFirst = false;
}

}else{
?>

<div class="carousel-item active">
<img src="assets/images/sav.png" class="d-block w-100">
</div>

<?php } ?>

</div>

<button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
<span class="carousel-control-prev-icon"></span>
</button>

<button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
<span class="carousel-control-next-icon"></span>
</button>

<div class="carousel-caption d-flex flex-column justify-content-center align-items-center text-center">

<h1 class="fw-bold text-green text-shadow hero-title">
Our Graduates, Our Difference
</h1>

</div>

</div>

<!-- QUICK LINKS -->

<section class="py-5">

<div class="container text-center">

<h2 class="section-title mb-5">Quick Links</h2>

<div class="row g-4">

<div class="col-md-3">

<div class="card quick-card border-0 shadow-sm h-100">

<div class="card-body">

<i class="fa-solid fa-graduation-cap fa-2x text-warning mb-3"></i>

<h6 class="fw-bold">Scholarship Grants</h6>

<p class="small text-muted">
Explore financial aid and scholarship opportunities available to students.
</p>

<a href="/sdscollege/learn1.php" class="text-success small fw-bold">
Learn More →
</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card quick-card border-0 shadow-sm h-100">

<div class="card-body">

<i class="fa-solid fa-trophy fa-2x text-warning mb-3"></i>

<h6 class="fw-bold">Achievements & Awards</h6>

<p class="small text-muted">
See how SDSC celebrates excellence in academics and leadership.
</p>

<a href="/sdscollege/learn2.php" class="text-success small fw-bold">
View Awards →
</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card quick-card border-0 shadow-sm h-100">

<div class="card-body">

<i class="fa-solid fa-certificate fa-2x text-warning mb-3"></i>

<h6 class="fw-bold">Accreditations</h6>

<p class="small text-muted">
Recognized by national and international accrediting bodies.
</p>

<a href="/sdscollege/learn3.php" class="text-success small fw-bold">
See Details →
</a>

</div>

</div>

</div>

<div class="col-md-3">

<div class="card quick-card border-0 shadow-sm h-100">

<div class="card-body">

<i class="fa-solid fa-handshake fa-2x text-warning mb-3"></i>

<h6 class="fw-bold">Linkages & Affiliations</h6>

<p class="small text-muted">
Partner institutions that share our mission for quality education.
</p>

<a href="/sdscollege/learn4.php" class="text-success small fw-bold">
Our Partners →
</a>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- NEWS & EVENTS -->

<section class="py-5 bg-light">

<div class="container">

<h2 class="text-center section-title mb-5">Latest News & Events</h2>

<div class="row g-4">

<?php

$news = mysqli_query($conn,"
SELECT * FROM news_events
WHERE type='latest' AND status=1
ORDER BY id DESC LIMIT 3
");

while($row = mysqli_fetch_assoc($news)){
?>

<div class="col-md-4">

<div class="news-card shadow-sm h-100">

<img src="uploads/<?php echo $row['image']; ?>" class="news-img w-100">

<div class="news-body">

<h6 class="news-title">
<?php echo $row['title']; ?>
</h6>

<p class="news-text">
<?php echo $row['description']; ?>
</p>

</div>

</div>

</div>

<?php } ?>

</div>

</div>

</section>

<!-- ABOUT SECTION -->

<section class="py-5 text-center about-section">

<div class="container">

<h2 class="text-success mb-3">
Welcome to St. Dominic Savio College
</h2>

<p class="lead text-muted">
A center of excellence committed to forming competent and compassionate leaders who live with Love, Leadership, and Service.
</p>

<a href="about.php" class="btn btn-success mt-3">
Learn More
</a>

</div>

</section>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>