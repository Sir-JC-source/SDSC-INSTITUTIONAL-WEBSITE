<?php
include './config.php';

/* =========================
ADD FACILITY
=========================*/
if(isset($_POST['add_facility'])){

$title = mysqli_real_escape_string($conn,$_POST['title']);
$description = mysqli_real_escape_string($conn,$_POST['description']);

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$uploadDir = "uploads/facilities/";

if(!is_dir($uploadDir)){
    mkdir($uploadDir,0777,true);
}

$filename = uniqid("facility_",true)."_".$image;

move_uploaded_file($tmp,$uploadDir.$filename);

mysqli_query($conn,"INSERT INTO facilities(title,description,image,status)
VALUES('$title','$description','$filename',1)");

header("Location: manage_facilities.php");
exit();
}


/* =========================
UPDATE FACILITY
=========================*/
if(isset($_POST['update_facility'])){

$id = intval($_POST['id']);
$title = mysqli_real_escape_string($conn,$_POST['title']);
$description = mysqli_real_escape_string($conn,$_POST['description']);

if($_FILES['image']['name'] != ''){

$image = $_FILES['image']['name'];
$tmp = $_FILES['image']['tmp_name'];

$filename = uniqid("facility_",true)."_".$image;

move_uploaded_file($tmp,"uploads/facilities/".$filename);

mysqli_query($conn,"UPDATE facilities 
SET title='$title', description='$description', image='$filename'
WHERE id='$id'");

}else{

mysqli_query($conn,"UPDATE facilities 
SET title='$title', description='$description'
WHERE id='$id'");

}

header("Location: manage_facilities.php");
exit();
}


/* =========================
DELETE
=========================*/
if(isset($_GET['delete'])){

$id = intval($_GET['delete']);

$q = mysqli_query($conn,"SELECT image FROM facilities WHERE id=$id");
$r = mysqli_fetch_assoc($q);

$file = "uploads/facilities/".$r['image'];

if(file_exists($file)){
unlink($file);
}

mysqli_query($conn,"DELETE FROM facilities WHERE id=$id");

header("Location: manage_facilities.php");
exit();
}


/* =========================
CONFIG (TOGGLE STATUS)
=========================*/
if(isset($_GET['config'])){

$id = intval($_GET['config']);

$q = mysqli_query($conn,"SELECT status FROM facilities WHERE id=$id");
$row = mysqli_fetch_assoc($q);

$new = ($row['status']==1)?0:1;

mysqli_query($conn,"UPDATE facilities SET status='$new' WHERE id='$id'");

header("Location: manage_facilities.php");
exit();
}


/* =========================
FETCH FACILITIES
=========================*/
$facilities = mysqli_query($conn,"SELECT * FROM facilities ORDER BY id DESC");

?>

<!DOCTYPE html>
<html>
<head>

<title>Facilities Management | SDSC</title>

<meta name="viewport" content="width=device-width,initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

:root{
--sdsc-green:#0d472e;
--sdsc-green-dark:#083f27;
--sdsc-cream:#f3f9f5;
--sdsc-gold:#d4af37;
}

body{
background:var(--sdsc-cream);
font-family:"Segoe UI",sans-serif;
}

/* layout */

.main-wrapper{
margin-left:260px;
padding:34px;
}

.page-title{
color:var(--sdsc-green);
font-weight:800;
font-size:28px;
}

/* card */

.card{
border-radius:14px;
padding:20px;
box-shadow:0 10px 24px rgba(0,0,0,0.06);
border:none;
}

/* table */

.table thead{
background:var(--sdsc-green);
color:white;
}

/* image preview */

.preview-img{
width:120px;
height:80px;
object-fit:cover;
border-radius:8px;
}

/* buttons */

.add-btn{
background:var(--sdsc-green);
color:white;
border-radius:999px;
padding:10px 18px;
font-weight:700;
border:none;
}

.add-btn:hover{
background:var(--sdsc-green-dark);
transform:translateY(-2px);
}

/* action buttons */

.btn-edit{
background:var(--sdsc-green);
color:white;
border-radius:8px;
padding:6px 12px;
border:none;
font-weight:700;
}

.btn-config{
background:var(--sdsc-gold);
color:#111;
border-radius:8px;
padding:6px 12px;
border:none;
font-weight:700;
}

.btn-delete{
background:#e74c3c;
color:white;
border-radius:8px;
padding:6px 12px;
border:none;
font-weight:700;
}

.status-badge{
padding:6px 12px;
border-radius:999px;
font-weight:700;
color:white;
}

.status-active{
background:var(--sdsc-green-dark);
}

.status-inactive{
background:#9aa0a1;
}

</style>

</head>

<body>

<?php include 'includes/sidebar.php'; ?>


<div class="main-wrapper">

<div class="d-flex justify-content-between align-items-center mb-3">

<h3 class="page-title">Facilities Management</h3>

<button class="add-btn" data-bs-toggle="modal" data-bs-target="#addModal">
+ Add Facility
</button>

</div>


<div class="card">

<div class="table-responsive">

<table class="table align-middle">

<thead>
<tr>

<th>Preview</th>
<th>Title</th>
<th>Description</th>
<th>Status</th>
<th width="250">Actions</th>

</tr>
</thead>

<tbody>

<?php while($row=mysqli_fetch_assoc($facilities)){ ?>

<tr>

<td>
<img src="uploads/facilities/<?php echo $row['image']; ?>" class="preview-img">
</td>

<td>
<strong><?php echo $row['title']; ?></strong>
</td>

<td>
<?php echo $row['description']; ?>
</td>

<td>

<?php if($row['status']==1){ ?>

<span class="status-badge status-active">Active</span>

<?php }else{ ?>

<span class="status-badge status-inactive">Hidden</span>

<?php } ?>

</td>

<td>

<button class="btn-edit me-2"
data-bs-toggle="modal"
data-bs-target="#editModal<?php echo $row['id']; ?>">
Edit
</button>

<a href="?config=<?php echo $row['id']; ?>" class="btn-config me-2">
Config
</a>

<a href="?delete=<?php echo $row['id']; ?>"
class="btn-delete"
onclick="return confirm('Delete this facility?')">
Delete
</a>

</td>

</tr>


<!-- EDIT MODAL -->

<div class="modal fade" id="editModal<?php echo $row['id']; ?>">

<div class="modal-dialog modal-lg modal-dialog-centered">

<div class="modal-content">

<form method="POST" enctype="multipart/form-data">

<div class="modal-header">
<h5>Edit Facility</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<div class="mb-3">
<label>Title</label>
<input type="text" name="title" class="form-control"
value="<?php echo $row['title']; ?>" required>
</div>

<div class="mb-3">
<label>Description</label>
<textarea name="description" class="form-control" rows="4" required><?php echo $row['description']; ?></textarea>
</div>

<div class="mb-3">
<label>Current Image</label><br>
<img src="uploads/facilities/<?php echo $row['image']; ?>" class="preview-img">
</div>

<div class="mb-3">
<label>Change Image</label>
<input type="file" name="image" class="form-control">
</div>

</div>

<div class="modal-footer">

<button type="submit" name="update_facility" class="add-btn">
Update Facility
</button>

</div>

</form>

</div>
</div>
</div>

<?php } ?>

</tbody>
</table>

</div>
</div>

</div>


<!-- ADD MODAL -->

<div class="modal fade" id="addModal">

<div class="modal-dialog modal-lg modal-dialog-centered">

<div class="modal-content">

<form method="POST" enctype="multipart/form-data">

<div class="modal-header">
<h5>Add Facility</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<div class="modal-body">

<div class="mb-3">
<label>Facility Title</label>
<input type="text" name="title" class="form-control" required>
</div>

<div class="mb-3">
<label>Description</label>
<textarea name="description" class="form-control" rows="4" required></textarea>
</div>

<div class="mb-3">
<label>Facility Image</label>
<input type="file" name="image" class="form-control" required>
</div>

</div>

<div class="modal-footer">

<button type="submit" name="add_facility" class="add-btn">
Save Facility
</button>

</div>

</form>

</div>
</div>

</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>