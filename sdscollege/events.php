<?php 
include 'includes/header.php';
include 'config.php';
?>

<style>

/* PAGE BG */
body{
background:#f3f7f4;
}

/* SECTION TITLE */

.section-title{
font-weight:800;
color:#0c5f23;
border-left:6px solid #0c5f23;
padding-left:12px;
letter-spacing:.5px;
}

/* EVENT CARD */

.event-card{
border-radius:14px;
background:#ffffff;
border:1px solid #e6e6e6;
overflow:hidden;
cursor:pointer;
transition:all .25s ease;
height:100%;
}

.event-card:hover{
transform:translateY(-8px);
box-shadow:0 10px 30px rgba(0,0,0,0.15);
}

/* IMAGE */

.event-img{
width:100%;
height:190px;
object-fit:cover;
transition:transform .3s ease;
}

.event-card:hover .event-img{
transform:scale(1.05);
}

/* BODY */

.event-body{
padding:18px;
}

/* TITLE */

.event-title{
font-size:1.05rem;
font-weight:700;
color:#0c5f23;
margin-bottom:10px;
}

/* DESCRIPTION */

.event-text{
font-size:.9rem;
color:#555;
line-height:1.6;
}

/* MODAL IMAGE */

.modal-img{
width:100%;
border-radius:10px;
margin-bottom:20px;
}

/* MODAL TITLE */

.modal-title{
font-weight:700;
color:#0c5f23;
}

/* MODAL BODY */

.modal-body p{
font-size:1rem;
line-height:1.7;
color:#333;
}

</style>


<!-- ================= LATEST NEWS ================= -->

<section class="py-5">

<div class="container">

<h2 class="section-title mb-4">LATEST NEWS & EVENTS</h2>

<div class="row g-4">

<?php

$latest = mysqli_query($conn,"
SELECT * FROM news_events
WHERE type='latest' AND status=1
ORDER BY id DESC
LIMIT 3
");

while($row=mysqli_fetch_assoc($latest)){
?>

<div class="col-md-4">

<div 
class="event-card"
data-bs-toggle="modal"
data-bs-target="#eventModal<?php echo $row['id']; ?>">

<img src="uploads/<?php echo $row['image']; ?>" class="event-img">

<div class="event-body">

<h5 class="event-title">
<?php echo $row['title']; ?>
</h5>

<p class="event-text">
<?php echo substr($row['description'],0,120); ?>...
</p>

</div>
</div>

</div>


<!-- MODAL -->

<div class="modal fade" id="eventModal<?php echo $row['id']; ?>" tabindex="-1">

<div class="modal-dialog modal-lg modal-dialog-centered">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title">
<?php echo $row['title']; ?>
</h5>

<button type="button" class="btn-close" data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<img src="uploads/<?php echo $row['image']; ?>" class="modal-img">

<p>
<?php echo $row['description']; ?>
</p>

<?php if(!empty($row['link'])){ ?>

<a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-success">
Visit Event Page
</a>

<?php } ?>

</div>

</div>

</div>

</div>

<?php } ?>

</div>
</div>

</section>



<!-- ================= UPCOMING EVENTS ================= -->

<section class="py-5">

<div class="container">

<h2 class="section-title mb-4">UPCOMING NEWS & EVENTS</h2>

<div class="row g-4">

<?php

$events = mysqli_query($conn,"
SELECT * FROM news_events
WHERE type='upcoming' AND status=1
ORDER BY id DESC
LIMIT 3
");

while($row=mysqli_fetch_assoc($events)){
?>

<div class="col-md-4">

<div 
class="event-card"
data-bs-toggle="modal"
data-bs-target="#eventModalUpcoming<?php echo $row['id']; ?>">

<img src="uploads/<?php echo $row['image']; ?>" class="event-img">

<div class="event-body">

<h5 class="event-title">
<?php echo $row['title']; ?>
</h5>

<p class="event-text">
<?php echo substr($row['description'],0,120); ?>...
</p>

</div>
</div>

</div>


<!-- MODAL -->

<div class="modal fade" id="eventModalUpcoming<?php echo $row['id']; ?>" tabindex="-1">

<div class="modal-dialog modal-lg modal-dialog-centered">

<div class="modal-content">

<div class="modal-header">

<h5 class="modal-title">
<?php echo $row['title']; ?>
</h5>

<button type="button" class="btn-close" data-bs-dismiss="modal"></button>

</div>

<div class="modal-body">

<img src="uploads/<?php echo $row['image']; ?>" class="modal-img">

<p>
<?php echo $row['description']; ?>
</p>

<?php if(!empty($row['link'])){ ?>

<a href="<?php echo $row['link']; ?>" target="_blank" class="btn btn-success">
Visit Event Page
</a>

<?php } ?>

</div>

</div>

</div>

</div>

<?php } ?>

</div>
</div>

</section>


<?php include 'includes/footer.php'; ?>