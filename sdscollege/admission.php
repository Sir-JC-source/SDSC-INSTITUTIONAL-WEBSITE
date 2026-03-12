<?php 
include 'config.php';
include 'includes/header.php';

/* Fetch admission content */
$result = mysqli_query($conn,"SELECT * FROM admission_content LIMIT 1");
$row = mysqli_fetch_assoc($result);
?>

<style>

/* ---- PAGE HEADER ---- */

.page-header {
    background: url('./assets/images/campus2.jfif') center/cover no-repeat;
    height: 320px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    position: relative;
}

.page-header::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.45);
}

.page-header h1,
.page-header p,
.page-header h3{
    position: relative;
    z-index: 2;
}

.header-title{
    font-size:48px;
    font-weight:700;
    color:#fff;
    text-shadow:2px 2px 8px rgba(0,0,0,0.7);
}

.header-subtitle{
    color:#cfd2cd;
    font-size:22px;
    font-weight:600;
    margin-top:10px;
    line-height:1.4;
    text-shadow:2px 2px 6px rgba(0,0,0,0.6);
}

/* ---- CONTENT BOX ---- */

.content-box{
    background:#f6f8f7;
    border-left:6px solid #0C4B34;
    padding:40px;
    border-radius:10px;
    margin-top:-40px;
    box-shadow:0 4px 12px rgba(0,0,0,0.1);
}

.underline-gold{
    width:250px;
    height:8px;
    background:#E6B800;
    margin-bottom:20px;
}

/* ---- WHY CHOOSE ---- */

.admission-row{
    display:flex;
    flex-wrap:wrap;
    gap:30px;
    margin-top:20px;
}

.admission-left{
    flex:1;
    min-width:300px;
}

</style>


<!-- PAGE HEADER -->

<div class="page-header">
    <h1 class="header-title">Admission</h1>
    <h3 class="header-subtitle">Admission Services</h3>
</div>


<!-- MAIN CONTENT -->

<div class="container py-5">

<div class="content-box">

<!-- OVERVIEW -->

<h2>Overview</h2>
<div class="underline-gold"></div>

<p>
<?= nl2br(htmlspecialchars($row['overview'])); ?>
</p>


<!-- ADMISSION REQUIREMENTS -->

<h3 class="mt-5">Admission Requirements</h3>
<div class="underline-gold"></div>

<div>
<?= nl2br($row['requirements']); ?>
</div>


<!-- ADMISSION SCHEDULE -->

<h3 class="mt-5">Admission Schedule</h3>
<div class="underline-gold"></div>

<div>
<?= nl2br($row['schedule']); ?>
</div>


<!-- ADMISSION PROCEDURES -->

<h3 class="mt-5">Admission Procedures</h3>
<div class="underline-gold"></div>

<div>
<?= nl2br($row['procedures']); ?>
</div>


<!-- WHY CHOOSE -->

<div class="admission-row mt-5">

<div class="admission-left">

<h3>Why Choose St. Dominic Savio College?</h3>
<div class="underline-gold"></div>

<div>
<?= nl2br($row['why_choose']); ?>
</div>

</div>

</div>

</div>

</div>


<?php include 'includes/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>