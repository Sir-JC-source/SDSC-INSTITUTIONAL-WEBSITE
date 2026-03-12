<?php
include './config.php';

$result = mysqli_query($conn,"SELECT * FROM admission_content LIMIT 1");
$data = mysqli_fetch_assoc($result);

if(isset($_POST['update'])){

$overview = $_POST['overview'];
$requirements = $_POST['requirements'];
$schedule = $_POST['schedule'];
$procedures = $_POST['procedures'];
$why_choose = $_POST['why_choose'];

mysqli_query($conn,"UPDATE admission_content SET
overview='$overview',
requirements='$requirements',
schedule='$schedule',
procedures='$procedures',
why_choose='$why_choose'
WHERE id=1");

echo "<script>alert('Admission page updated successfully');</script>";
echo "<script>window.location='admission_manage.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>

<title>Manage Admission</title>

<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

/* PAGE BACKGROUND */

body{
background:#eef2ef;
font-family:'Segoe UI',sans-serif;
}

/* MAIN CONTENT */

.main-content{
margin-left:260px;
padding:40px;
}

/* PAGE TITLE */

.page-title{
font-size:28px;
font-weight:800;
color:#0d472e;
margin-bottom:25px;
}

/* CARD */

.content-card{
background:white;
padding:35px;
border-radius:14px;
box-shadow:0 8px 30px rgba(0,0,0,0.08);
}

/* FORM */

textarea{
height:160px;
resize:none;
}

label{
font-weight:600;
margin-bottom:6px;
}

.btn-save{
background:#0d472e;
border:none;
padding:10px 25px;
font-weight:600;
}

.btn-save:hover{
background:#146c43;
}

</style>

</head>

<body>

<!-- SIDEBAR -->
<?php include 'includes/sidebar.php'; ?>

<div class="main-content">

<div class="page-title">
Manage Admission Page
</div>

<div class="content-card">

<form method="POST">

<div class="mb-4">
<label>Overview</label>
<textarea name="overview" class="form-control"><?= htmlspecialchars($data['overview']); ?></textarea>
</div>

<div class="mb-4">
<label>Admission Requirements</label>
<textarea name="requirements" class="form-control"><?= htmlspecialchars($data['requirements']); ?></textarea>
</div>

<div class="mb-4">
<label>Admission Schedule</label>
<textarea name="schedule" class="form-control"><?= htmlspecialchars($data['schedule']); ?></textarea>
</div>

<div class="mb-4">
<label>Admission Procedures</label>
<textarea name="procedures" class="form-control"><?= htmlspecialchars($data['procedures']); ?></textarea>
</div>

<div class="mb-4">
<label>Why Choose SDSC</label>
<textarea name="why_choose" class="form-control"><?= htmlspecialchars($data['why_choose']); ?></textarea>
</div>

<button type="submit" name="update" class="btn btn-save text-white">
Update Admission Page
</button>

</form>

</div>

</div>

</body>
</html>