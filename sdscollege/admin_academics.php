<?php
require_once('auth.php');
include('includes/dbcon.php');
checkAuth(['admin','superadmin']);

if (isset($_POST['add'])) {
    $title = mysqli_real_escape_string($conn,$_POST['title']);
    $link  = mysqli_real_escape_string($conn,$_POST['link']);
    $parent = $_POST['parent_id'] ?: NULL;

    mysqli_query($conn,
        "INSERT INTO academic_menu (title, link, parent_id) 
         VALUES ('$title','$link',$parent)"
    );
}

$menu = mysqli_query($conn,"SELECT * FROM academic_menu ORDER BY parent_id, sort_order");
?>
<!DOCTYPE html>
<html>
<head>
<title>Manage Academics</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

<h3>Manage Academics Menu</h3>

<form method="POST" class="row g-2 mb-4">
    <div class="col-md-4">
        <input name="title" class="form-control" placeholder="Title" required>
    </div>
    <div class="col-md-3">
        <input name="link" class="form-control" placeholder="Link (optional)">
    </div>
    <div class="col-md-3">
        <select name="parent_id" class="form-select">
            <option value="">Top Level</option>
            <?php while($m=mysqli_fetch_assoc($menu)): ?>
            <option value="<?= $m['id'] ?>"><?= $m['title'] ?></option>
            <?php endwhile; ?>
        </select>
    </div>
    <div class="col-md-2">
        <button name="add" class="btn btn-success w-100">Add</button>
    </div>
</form>

</body>
</html>
