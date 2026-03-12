<?php
include 'config.php';

/* Only show ACTIVE courses */
$result = mysqli_query($conn, "SELECT * FROM courses WHERE status = 1 ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<title>Academic Programs | SDSC</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

:root{
--sds-green:#0d472e;
--sds-green-light:#1f7a54;
--sds-soft:#e8f4ef;
}

body{
margin:0;
font-family:'Segoe UI',sans-serif;
background:#f4faf7;
}

/* HERO */

.hero{
background:linear-gradient(135deg,var(--sds-green),var(--sds-green-light));
color:white;
padding:90px 20px;
text-align:center;
}

.hero h2{
font-size:40px;
font-weight:700;
}

.hero p{
font-size:18px;
opacity:.9;
}

/* SEARCH BAR */

.search-box{
max-width:500px;
margin:30px auto 0;
}

.search-box input{
border-radius:50px;
padding:13px 22px;
border:none;
box-shadow:0 6px 18px rgba(0,0,0,0.2);
}

/* SECTION */

.program-section{
padding:60px 0;
}

.program-container{
background:white;
padding:50px;
border-radius:20px;
box-shadow:0 25px 60px rgba(0,0,0,0.15);
}

/* PROGRAM CARD */

.program-item{
transition:.3s;
}

.program-item:hover{
transform:translateY(-6px);
}

/* ACCORDION */

.accordion-item{
border:none;
border-radius:16px !important;
margin-bottom:25px;
overflow:hidden;
box-shadow:0 8px 25px rgba(0,0,0,0.12);
}

.accordion-button{
font-weight:600;
font-size:18px;
padding:20px;
}

.accordion-button:hover{
background:var(--sds-soft);
}

.accordion-button:not(.collapsed){
background:var(--sds-green);
color:white;
}

.accordion-body{
padding:30px;
}

/* COURSE GRID */

.course-content{
display:grid;
grid-template-columns:1fr 1fr;
gap:40px;
align-items:center;
}

/* IMAGE */

.course-image{
width:100%;
border-radius:18px;
box-shadow:0 10px 25px rgba(0,0,0,0.2);
transition:.35s;
}

.course-image:hover{
transform:scale(1.06);
}

/* TITLES */

.section-title{
font-weight:700;
color:var(--sds-green);
margin-top:15px;
margin-bottom:10px;
font-size:20px;
}

ul{
padding-left:20px;
}

ul li{
margin-bottom:7px;
}

/* MOBILE */

@media(max-width:992px){

.course-content{
grid-template-columns:1fr;
}

.program-container{
padding:35px;
}

.hero h2{
font-size:32px;
}

}

footer{
margin-top:0 !important;
}

</style>
</head>

<body>

<?php include 'includes/header.php'; ?>

<section class="hero">

<h2>Academic Programs</h2>
<p>Explore our degree programs and career pathways</p>

<div class="search-box">
<input type="text" id="searchProgram" class="form-control" placeholder="Search program">
</div>

</section>

<section class="program-section">
<div class="container">
<div class="program-container">

<div class="accordion" id="coursesAccordion">

<?php if(mysqli_num_rows($result) > 0): ?>
<?php while($row = mysqli_fetch_assoc($result)): ?>

<div class="accordion-item program-item">

<h2 class="accordion-header">

<button class="accordion-button collapsed program-title"
type="button"
data-bs-toggle="collapse"
data-bs-target="#course<?= $row['id']; ?>">

<?= htmlspecialchars($row['title']); ?>

</button>

</h2>

<div id="course<?= $row['id']; ?>"
class="accordion-collapse collapse"
data-bs-parent="#coursesAccordion">

<div class="accordion-body">

<div class="course-content">

<!-- IMAGE -->

<div>

<?php
$imagePath = "uploads/" . $row['image'];

if (!empty($row['image']) && file_exists($imagePath)) {
echo '<img src="'.$imagePath.'" class="course-image">';
}
else{
echo '<p style="color:#888;">No image available</p>';
}
?>

</div>

<!-- TEXT -->

<div>

<div class="section-title">Program Overview</div>
<p><?= nl2br(htmlspecialchars($row['overview'])); ?></p>

<div class="section-title">Career Opportunities</div>

<ul>

<?php

if(!empty($row['careers'])){

$careers = explode("\n",$row['careers']);

foreach($careers as $career){

if(trim($career)!=""){
echo "<li>".htmlspecialchars(trim($career))."</li>";
}

}

}
else{

echo "<li>No career data available</li>";

}

?>

</ul>

<div class="section-title">Why Choose This Program?</div>

<ul>

<?php

if(!empty($row['why_choose'])){

$why = explode("\n",$row['why_choose']);

foreach($why as $item){

if(trim($item)!=""){
echo "<li>".htmlspecialchars(trim($item))."</li>";
}

}

}
else{

echo "<li>No additional information available</li>";

}

?>

</ul>

</div>

</div>

</div>

</div>

</div>

<?php endwhile; ?>
<?php else: ?>

<p class="text-center">No academic programs available.</p>

<?php endif; ?>

</div>

</div>
</div>
</section>

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>

/* SEARCH + AUTO EXPAND */

document.getElementById("searchProgram").addEventListener("keyup", function(){

let value = this.value.toLowerCase();

let programs = document.querySelectorAll(".program-item");

programs.forEach(function(program){

let title = program.querySelector(".program-title").textContent.toLowerCase();

let collapse = program.querySelector(".accordion-collapse");

if(title.includes(value)){

program.style.display = "";

/* auto open */

let bsCollapse = new bootstrap.Collapse(collapse,{
show:true
});

}
else{

program.style.display = "none";

/* close if not match */

let bsCollapse = bootstrap.Collapse.getInstance(collapse);

if(bsCollapse){
bsCollapse.hide();
}

}

});

});

</script>

</body>
</html>