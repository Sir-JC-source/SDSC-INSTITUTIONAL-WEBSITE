<?php
require_once('auth.php');
include('config.php');
$user = checkAuth('admin');

/* ===============================
   TOGGLE ACTIVE / INACTIVE
================================ */
if (isset($_GET['toggle'])) {
    $id = intval($_GET['toggle']);

    $q = mysqli_query($conn, "SELECT status FROM courses WHERE id=$id");
    if ($q && mysqli_num_rows($q) > 0) {
        $r = mysqli_fetch_assoc($q);
        $newStatus = ($r['status'] == 1) ? 0 : 1;
        mysqli_query($conn, "UPDATE courses SET status=$newStatus WHERE id=$id");
    }

    header("Location: academic_manage.php");
    exit();
}

/* ===============================
   DELETE COURSE + IMAGE FILE
================================ */
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);

    // Get image name first
    $q = mysqli_query($conn, "SELECT image FROM courses WHERE id=$id");
    if ($q && mysqli_num_rows($q) > 0) {
        $row = mysqli_fetch_assoc($q);
        $imagePath = "uploads/" . $row['image'];

        if (!empty($row['image']) && file_exists($imagePath)) {
            unlink($imagePath); // delete image file
        }
    }

    mysqli_query($conn, "DELETE FROM courses WHERE id=$id");

    header("Location: academic_manage.php");
    exit();
}

/* ===============================
   FETCH COURSES
================================ */
$result = mysqli_query($conn, "SELECT * FROM courses ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Academic Programs Management | SDSC</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
:root{
    --sdsc-green:#0d472e;
    --sdsc-green-dark:#083f27;
    --sdsc-cream:#f3f9f5;
    --sdsc-gold:#d4af37;
}
body{ background:var(--sdsc-cream); font-family:"Segoe UI",Arial,sans-serif; }

.main-wrapper{ margin-left:260px; padding:34px; }
.page-title{ color:var(--sdsc-green); font-weight:800; font-size:28px; }

.card{ border-radius:14px; padding:20px; box-shadow:0 10px 24px rgba(0,0,0,0.06); border:none; }
.table thead{ background:var(--sdsc-green); color:#fff; }

.preview-img{
    width:100px;
    height:70px;
    object-fit:cover;
    border-radius:6px;
}

.add-btn{
    background:var(--sdsc-green);
    color:#fff;
    border-radius:999px;
    padding:10px 18px;
    font-weight:700;
    border:none;
}

.btn-edit { background:var(--sdsc-green); color:#fff; border-radius:8px; padding:6px 12px; border:none; font-weight:700; }
.btn-toggle { background:var(--sdsc-gold); color:#111; border-radius:8px; padding:6px 12px; border:none; font-weight:700; }
.btn-delete { background:#e74c3c; color:#fff; border-radius:8px; padding:6px 12px; border:none; font-weight:700; }

.status-badge{ padding:6px 12px; border-radius:999px; font-weight:700; color:#fff; }
.status-active{ background:var(--sdsc-green-dark); }
.status-inactive{ background:#9aa0a1; }

a{ text-decoration:none !important; }

@media(max-width:768px){
    .main-wrapper{ margin-left:0; padding:20px; }
}
</style>
</head>

<body>
<?php include 'includes/sidebar.php'; ?>

<div class="main-wrapper">

<div class="d-flex align-items-center justify-content-between mb-3">
    <h3 class="page-title">Manage Academic Programs</h3>
    <a href="add_course.php" class="add-btn">+ Add Program</a>
</div>

<div class="card">
<div class="table-responsive">
<table class="table align-middle">
<thead>
<tr>
    <th>Image</th>
    <th>Program Title</th>
    <th>Status</th>
    <th width="280">Actions</th>
</tr>
</thead>

<tbody>
<?php if(mysqli_num_rows($result) > 0): ?>
<?php while ($row = mysqli_fetch_assoc($result)) { ?>
<tr>

<td>
<?php
$imagePath = "uploads/" . $row['image'];
if (!empty($row['image']) && file_exists($imagePath)) {
    echo '<img src="'.$imagePath.'" class="preview-img">';
} else {
    echo '<span style="color:#999;">No Image</span>';
}
?>
</td>

<td class="fw-bold"><?php echo htmlspecialchars($row['title']); ?></td>

<td>
<?php if ($row['status'] == 1) { ?>
    <span class="status-badge status-active">Active</span>
<?php } else { ?>
    <span class="status-badge status-inactive">Inactive</span>
<?php } ?>
</td>

<td>
    <a href="edit_course.php?id=<?php echo $row['id']; ?>" class="btn-edit me-2">Edit</a>

    <a href="academic_manage.php?toggle=<?php echo $row['id']; ?>" class="btn-toggle me-2">Config</a>

    <a href="academic_manage.php?delete=<?php echo $row['id']; ?>"
       class="btn-delete"
       onclick="return confirm('Delete this program?');">
       Delete
    </a>
</td>

</tr>
<?php } ?>
<?php else: ?>
<tr>
<td colspan="4" class="text-center">No programs found.</td>
</tr>
<?php endif; ?>
</tbody>

</table>
</div>
</div>
</div>

</body>
</html>