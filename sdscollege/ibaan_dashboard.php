<?php
session_start();
include './config.php';

/* COUNTS */
$carouselCount = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM main_hero_images"))['total'] ?? 0;
$newsCount = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM main_hero_images"))['total'] ?? 0;
$eventCount = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM news_events"))['total'] ?? 0;
$announcementCount = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) as total FROM main_hero_images"))['total'] ?? 0;

?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<title>Ibaan Branch Dashboard | SDSC</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

<style>

:root{
--sds-green:#0d472e;
--sds-green-dark:#082e1e;
--sds-light:#eef4f1;
}

/* BODY */

body{
font-family:'Segoe UI',sans-serif;
background:linear-gradient(135deg,#e9f2ed,#f6fbf8);
}

/* CONTENT */

.content{
margin-left:260px;
padding:40px;
}

/* PAGE HEADER */

.page-header{
margin-bottom:35px;
}

.page-title{
font-size:30px;
font-weight:800;
color:var(--sds-green);
}

.page-subtitle{
color:#555;
font-size:14px;
}

/* DASHBOARD CARDS */

.dash-card{
background:white;
border-radius:16px;
padding:30px 20px;
text-align:center;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
transition:all .3s ease;
position:relative;
overflow:hidden;
}

.dash-card::before{
content:"";
position:absolute;
top:0;
left:0;
height:5px;
width:100%;
background:var(--sds-green);
}

.dash-card:hover{
transform:translateY(-8px);
box-shadow:0 18px 35px rgba(0,0,0,0.12);
}

.dash-card i{
font-size:40px;
color:var(--sds-green);
background:rgba(13,71,46,0.08);
padding:18px;
border-radius:14px;
margin-bottom:15px;
}

.count{
font-size:36px;
font-weight:800;
color:var(--sds-green-dark);
}

.card-label{
font-weight:600;
margin-top:4px;
color:#333;
}

/* BUTTON */

.action-btn{
background:var(--sds-green);
color:white;
padding:7px 20px;
border-radius:20px;
font-size:13px;
text-decoration:none;
display:inline-block;
margin-top:12px;
transition:all .25s ease;
}

.action-btn:hover{
background:var(--sds-green-dark);
transform:scale(1.08);
color:white;
}

/* QUICK LINKS */

.quick-links{
background:white;
padding:30px;
border-radius:16px;
box-shadow:0 10px 25px rgba(0,0,0,0.08);
margin-top:30px;
}

.quick-links h5{
font-weight:700;
color:var(--sds-green);
margin-bottom:20px;
}

.quick-links a{
margin-right:10px;
margin-bottom:10px;
}

</style>
</head>

<body>

<!-- SIDEBAR -->
<?php include 'includes/sidebar.php'; ?>

<div class="content">

<!-- HEADER -->

<div class="page-header">

<div class="page-title">
Ibaan Branch Dashboard
</div>

<div class="page-subtitle">
St. Dominic Savio College Ibaan Branch Administration Panel
</div>

</div>


<div class="row g-4">

<!-- IBAAN CAROUSEL -->

<div class="col-md-3">
<div class="dash-card">

<i class="bi bi-images"></i>

<div class="count"><?php echo $carouselCount; ?></div>

<div class="card-label">Ibaan Carousel</div>

<a href="ibaan_carousel.php" class="action-btn">Manage</a>

</div>
</div>


<!-- IBAAN NEWS -->

<div class="col-md-3">
<div class="dash-card">

<i class="bi bi-newspaper"></i>

<div class="count"><?php echo $newsCount; ?></div>

<div class="card-label">Ibaan News</div>

<a href="ibaan_news_manage.php" class="action-btn">Manage</a>

</div>
</div>


<!-- IBAAN EVENTS -->

<div class="col-md-3">
<div class="dash-card">

<i class="bi bi-calendar-event"></i>

<div class="count"><?php echo $eventCount; ?></div>

<div class="card-label">Ibaan Events</div>

<a href="ibaan_events_manage.php" class="action-btn">Manage</a>

</div>
</div>


<!-- ANNOUNCEMENTS -->

<div class="col-md-3">
<div class="dash-card">

<i class="bi bi-bell"></i>

<div class="count"><?php echo $announcementCount; ?></div>

<div class="card-label">Announcements</div>

<a href="ibaan_announcements.php" class="action-btn">Manage</a>

</div>
</div>

</div>


<!-- QUICK LINKS -->

<div class="quick-links">

<h5>Quick Links</h5>

<a href="ibaan_carousel.php" class="action-btn">Add Carousel</a>

<a href="ibaan_news_manage.php" class="action-btn">Add News</a>

<a href="ibaan_events_manage.php" class="action-btn">Add Event</a>

<a href="ibaan_announcements.php" class="action-btn">Add Announcement</a>

</div>

</div>

</body>
</html>