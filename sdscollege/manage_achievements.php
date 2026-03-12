<?php
require_once('auth.php');
include('includes/dbcon.php');
checkAuth(['admin','superadmin']);

$query = mysqli_query($conn, "SELECT * FROM achievements_page WHERE id = 1");
$data = mysqli_fetch_assoc($query);

if (isset($_POST['save'])) {

    $title      = mysqli_real_escape_string($conn, $_POST['title']);
    $intro      = mysqli_real_escape_string($conn, $_POST['intro']);
    $categories = mysqli_real_escape_string($conn, $_POST['categories']);
    $icon       = $data['icon'];

    if (!empty($_FILES['icon']['name'])) {
        $icon = time().'_'.$_FILES['icon']['name'];
        move_uploaded_file($_FILES['icon']['tmp_name'], 'assets/images/'.$icon);
    }

    mysqli_query($conn, "
        UPDATE achievements_page SET
            title='$title',
            intro='$intro',
            categories='$categories',
            icon='$icon'
        WHERE id=1
    ");

    $success = "Achievements & Awards updated successfully!";
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Manage Achievements & Awards</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
.admin-content { margin-left:260px; padding:40px; }
.preview-box {
    background:#f1f8f4;
    border:2px dashed #198754;
    border-radius:16px;
    padding:25px;
    text-align:center;
}
.preview-box img { height:200px; object-fit:contain; }
.page-title {
    font-size: 28px;
    font-weight: 800;
    color: #0d472e; /* same SDSC green */
    margin-bottom: 25px;
}
</style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<div class="admin-content">
<h2 class="page-title">Manage Achievements & Awards</h2>

<?php if(isset($success)): ?>
<div class="alert alert-success"><?= $success ?></div>
<?php endif; ?>

<form method="POST" enctype="multipart/form-data" class="card p-4 shadow">

<label>Page Title</label>
<input type="text" name="title" class="form-control mb-3"
       value="<?= htmlspecialchars($data['title']) ?>">

<label>Intro Paragraph</label>
<textarea name="intro" rows="3" class="form-control mb-3"><?= htmlspecialchars($data['intro']) ?></textarea>

<label>
Categories  
<small class="text-muted">(Format: Title:Description | separated by | )</small>
</label>
<textarea name="categories" rows="5" class="form-control mb-3"><?= htmlspecialchars($data['categories']) ?></textarea>

<label>Image</label>
<input type="file" name="icon" class="form-control mb-3">

<?php if($data['icon']): ?>
<div class="preview-box">
    <img src="assets/images/<?= $data['icon'] ?>">
</div>
<?php endif; ?>

<button name="save" class="btn btn-success mt-3 px-4">Save Changes</button>

</form>
</div>
</body>
</html>
