<?php
session_start();
include './config.php';

/* LOGIN CHECK */
if(!isset($_SESSION['admin_id'])){
header("Location: login.php");
exit();
}

$role = $_SESSION['role'];
$branch = $_SESSION['branch'];

/* ADD NEWS */
if(isset($_POST['add_news'])){

$title=mysqli_real_escape_string($conn,$_POST['title']);
$description=mysqli_real_escape_string($conn,$_POST['description']);
$link=mysqli_real_escape_string($conn,$_POST['link']);
$type=$_POST['type'];

$campus = ($role == 'superadmin') ? $_POST['campus'] : $branch;

$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];

$filename=uniqid("news_",true)."_".$image;

move_uploaded_file($tmp,"uploads/".$filename);

mysqli_query($conn,"INSERT INTO news_events
(title,description,image,link,type,campus,status)
VALUES('$title','$description','$filename','$link','$type','$campus',1)");

header("Location: news_events.php");
exit();
}

/* DELETE */
if(isset($_GET['delete'])){

$id=$_GET['delete'];

$q=mysqli_query($conn,"SELECT image FROM news_events WHERE id='$id'");
$r=mysqli_fetch_assoc($q);

$file="uploads/".$r['image'];

if(file_exists($file)){
unlink($file);
}

mysqli_query($conn,"DELETE FROM news_events WHERE id='$id'");

header("Location: news_events.php");
exit();
}

/* TOGGLE STATUS */
if(isset($_GET['toggle'])){

$id=$_GET['toggle'];

mysqli_query($conn,"
UPDATE news_events
SET status=IF(status=1,0,1)
WHERE id='$id'
");

header("Location: news_events.php");
exit();
}

/* UPDATE NEWS */
if(isset($_POST['update_news'])){

$id=$_POST['id'];
$title=$_POST['title'];
$description=$_POST['description'];
$link=$_POST['link'];
$type=$_POST['type'];

if($_FILES['image']['name']!=""){

$image=$_FILES['image']['name'];
$tmp=$_FILES['image']['tmp_name'];

$filename=uniqid("news_",true)."_".$image;

move_uploaded_file($tmp,"uploads/".$filename);

mysqli_query($conn,"UPDATE news_events SET
title='$title',
description='$description',
image='$filename',
link='$link',
type='$type'
WHERE id='$id'");

}else{

mysqli_query($conn,"UPDATE news_events SET
title='$title',
description='$description',
link='$link',
type='$type'
WHERE id='$id'");

}

header("Location: news_events.php");
exit();
}
?>

<!DOCTYPE html>
<html>
<head>

<title>News & Events Management</title>

<meta name="viewport" content="width=device-width,initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f3f9f5;
font-family:'Segoe UI';
}

.main-wrapper{
margin-left:260px;
padding:35px;
}

.page-title{
font-size:28px;
font-weight:800;
color:#0d472e;
margin-bottom:25px;
}

.card{
border-radius:14px;
padding:25px;
border:none;
box-shadow:0 10px 25px rgba(0,0,0,0.06);
margin-bottom:30px;
}

.table thead{
background:#0d472e;
color:white;
}

.news-img{
width:90px;
height:60px;
object-fit:cover;
border-radius:8px;
}

.status-active{
background:#083f27;
color:white;
padding:6px 12px;
border-radius:999px;
font-size:12px;
}

.status-hidden{
background:#999;
color:white;
padding:6px 12px;
border-radius:999px;
font-size:12px;
}

.btn-save{
background:#0d472e;
color:white;
border-radius:999px;
padding:10px 18px;
border:none;
font-weight:700;
}

.btn-edit{
background:#0d472e;
color:white;
border:none;
padding:6px 14px;
border-radius:8px;
margin-right:6px;
}

.btn-config{
background:#d4af37;
border:none;
padding:6px 14px;
border-radius:8px;
margin-right:6px;
}

.btn-delete{
background:#e74c3c;
color:white;
border:none;
padding:6px 14px;
border-radius:8px;
}

</style>

</head>

<body>

<?php include 'includes/sidebar.php'; ?>

<div class="main-wrapper">

<div class="page-title">
News & Events Management
</div>

<!-- ADD BUTTON -->
<button class="btn-save mb-3" data-bs-toggle="modal" data-bs-target="#addNewsModal">
Add News / Event
</button>

<div class="card">

<h5 class="mb-3">All News & Events</h5>

<div class="table-responsive">

<table class="table align-middle">

<thead>
<tr>
<th>ID</th>
<th>Image</th>
<th>Title</th>

<?php if($role == 'superadmin'){ ?>
<th>Campus</th>
<?php } ?>

<th>Type</th>
<th>Status</th>
<th>Actions</th>
</tr>
</thead>

<tbody>

<?php

if($role == "superadmin"){
$news=mysqli_query($conn,"SELECT * FROM news_events ORDER BY id DESC");
}else{
$news=mysqli_query($conn,"SELECT * FROM news_events WHERE campus='$branch' ORDER BY id DESC");
}

while($row=mysqli_fetch_assoc($news)){
?>

<tr>

<td><?php echo $row['id']; ?></td>

<td>
<img src="uploads/<?php echo $row['image']; ?>" class="news-img">
</td>

<td><?php echo $row['title']; ?></td>

<?php if($role == 'superadmin'){ ?>
<td><?php echo ucfirst($row['campus']); ?></td>
<?php } ?>

<td><?php echo $row['type']; ?></td>

<td>
<?php if($row['status']==1){ ?>
<span class="status-active">Published</span>
<?php } else { ?>
<span class="status-hidden">Hidden</span>
<?php } ?>
</td>

<td>

<div class="d-flex gap-1">

<button class="btn-edit"
data-bs-toggle="modal"
data-bs-target="#editModal<?php echo $row['id']; ?>">
Edit
</button>

<a href="?toggle=<?php echo $row['id']; ?>" class="btn-config">
Toggle
</a>

<a href="?delete=<?php echo $row['id']; ?>"
class="btn-delete"
onclick="return confirm('Delete this item?')">
Delete
</a>

</div>

</td>

</tr>

<!-- EDIT MODAL -->
<div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title">Edit News</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<form method="POST" enctype="multipart/form-data">

<input type="hidden" name="id" value="<?php echo $row['id']; ?>">

<div class="modal-body">

<div class="mb-3">
<label>Title</label>
<input type="text" name="title" class="form-control"
value="<?php echo $row['title']; ?>">
</div>

<div class="mb-3">
<label>Description</label>
<textarea name="description" class="form-control"><?php echo $row['description']; ?></textarea>
</div>

<div class="mb-3">
<label>Read More Link</label>
<input type="text" name="link" class="form-control"
value="<?php echo $row['link']; ?>">
</div>

<div class="mb-3">
<label>Type</label>
<select name="type" class="form-control">

<option value="latest" <?php if($row['type']=="latest") echo "selected"; ?>>Latest News</option>

<option value="upcoming" <?php if($row['type']=="upcoming") echo "selected"; ?>>Upcoming Event</option>

</select>
</div>

<div class="mb-3">
<label>Upload New Image</label>
<input type="file" name="image" class="form-control">
<br>
<img src="uploads/<?php echo $row['image']; ?>" width="120">
</div>

</div>

<div class="modal-footer">
<button type="submit" name="update_news" class="btn-save">
Update News
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

<!-- ADD NEWS MODAL -->
<div class="modal fade" id="addNewsModal" tabindex="-1">
<div class="modal-dialog modal-lg">
<div class="modal-content">

<div class="modal-header">
<h5 class="modal-title">Add News / Event</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
</div>

<form method="POST" enctype="multipart/form-data">

<div class="modal-body">

<div class="mb-3">
<label>Title</label>
<input type="text" name="title" class="form-control" required>
</div>

<div class="mb-3">
<label>Description</label>
<textarea name="description" class="form-control"></textarea>
</div>

<div class="mb-3">
<label>Read More Link</label>
<input type="text" name="link" class="form-control">
</div>

<div class="mb-3">
<label>Type</label>
<select name="type" class="form-control">
<option value="latest">Latest News</option>
<option value="upcoming">Upcoming Event</option>
</select>
</div>

<?php if($role == 'superadmin'){ ?>

<div class="mb-3">
<label>Campus</label>
<select name="campus" class="form-control">
<option value="main">Main Campus</option>
<option value="ibaan">Ibaan Campus</option>
</select>
</div>

<?php } ?>

<div class="mb-3">
<label>Upload Image</label>
<input type="file" name="image" class="form-control" required>
</div>

</div>

<div class="modal-footer">
<button type="submit" name="add_news" class="btn-save">Add News</button>
</div>

</form>

</div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>