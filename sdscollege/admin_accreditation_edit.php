<?php
require_once('auth.php');
include('includes/dbcon.php');
checkAuth(['admin','superadmin']);

/* FETCH DATA */
$query = mysqli_query($conn, "SELECT * FROM accreditation_page WHERE id = 1");
$data = mysqli_fetch_assoc($query);

/* UPDATE DATA */
if (isset($_POST['save'])) {

    $title      = mysqli_real_escape_string($conn, $_POST['title']);
    $intro      = mysqli_real_escape_string($conn, $_POST['intro']);
    $bodies     = mysqli_real_escape_string($conn, $_POST['bodies']);
    $importance = mysqli_real_escape_string($conn, $_POST['importance']);
    $closing    = mysqli_real_escape_string($conn, $_POST['closing']);

    $icon = $data['icon'];

    if (!empty($_FILES['icon']['name'])) {
        $icon = time() . '_' . $_FILES['icon']['name'];
        move_uploaded_file($_FILES['icon']['tmp_name'], "assets/images/" . $icon);
    }

    mysqli_query($conn, "
        UPDATE accreditation_page SET
            title='$title',
            intro='$intro',
            bodies='$bodies',
            importance='$importance',
            closing='$closing',
            icon='$icon'
        WHERE id=1
    ");

    $success = "Accreditations page updated successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Accreditations | SDSC</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* ===== GLOBAL ADMIN STYLE (MATCH ABOUT SECTION) ===== */

body {
    background: #f3f7f4;
}

/* MUST MATCH SIDEBAR WIDTH */
.admin-content {
    margin-left: 260px;
    padding: 40px;
    min-height: 100vh;
}

/* PAGE TITLE */
.page-title {
    font-size: 28px;
    font-weight: 800;
    color: #0d472e;
    margin-bottom: 25px;
}

/* MAIN CARD */
.management-card {
    background: #ffffff;
    border-radius: 18px;
    padding: 35px 40px;
    box-shadow: 0 12px 30px rgba(0, 64, 35, 0.12);
}

/* FORM LABELS */
.management-card label {
    font-weight: 700;
    color: #0d472e;
    margin-bottom: 6px;
}

/* TEXTAREA & INPUT */
.management-card .form-control {
    border-radius: 10px;
    padding: 12px 14px;
}

/* IMAGE PREVIEW */
.accreditation-preview {
    background: #f1f8f4;
    border: 2px dashed #198754;
    border-radius: 16px;
    padding: 30px;
    text-align: center;
    margin-top: 15px;
}

.accreditation-preview img {
    max-width: 100%;
    max-height: 280px;
    object-fit: contain;
}

/* SAVE BUTTON */
.btn-save {
    background: #0d472e;
    color: #ffffff;
    font-weight: 700;
    padding: 12px 36px;
    border-radius: 14px;
    border: none;
}

.btn-save:hover {
    background: #09351f;
    color: #ffffff;
}
</style>
</head>

<body>

<?php include 'includes/sidebar.php'; ?>

<div class="admin-content">

    <!-- PAGE TITLE -->
    <h2 class="page-title">Manage Accreditations Page</h2>

    <?php if (isset($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>

    <!-- MANAGEMENT CARD -->
    <div class="management-card">

        <form method="POST" enctype="multipart/form-data">

            <!-- TITLE -->
            <div class="mb-4">
                <label>Page Title</label>
                <input type="text" name="title" class="form-control"
                       value="<?= htmlspecialchars($data['title']) ?>" required>
            </div>

            <!-- INTRO -->
            <div class="mb-4">
                <label>Intro Paragraph</label>
                <textarea name="intro" rows="3" class="form-control"><?= htmlspecialchars($data['intro']) ?></textarea>
            </div>

            <!-- BODIES -->
            <div class="mb-4">
                <label>
                    Accrediting Bodies
                    <small class="text-muted fw-normal">
                        (Format: Name:Description | Name:Description)
                    </small>
                </label>
                <textarea name="bodies" rows="5" class="form-control"><?= htmlspecialchars($data['bodies']) ?></textarea>
            </div>

            <!-- IMPORTANCE -->
            <div class="mb-4">
                <label>Why Accreditation Matters</label>
                <textarea name="importance" rows="4" class="form-control"><?= htmlspecialchars($data['importance']) ?></textarea>
            </div>

            <!-- CLOSING -->
            <div class="mb-4">
                <label>Closing Statement</label>
                <textarea name="closing" rows="3" class="form-control"><?= htmlspecialchars($data['closing']) ?></textarea>
            </div>

            <!-- IMAGE -->
            <div class="mb-4">
                <label>Accreditation / Recognition Image</label>
                <input type="file" name="icon" class="form-control">

                <?php if (!empty($data['icon'])): ?>
                    <div class="accreditation-preview">
                        <small class="text-muted d-block mb-2">
                            Current Accreditation Image
                        </small>
                        <img src="assets/images/<?= htmlspecialchars($data['icon']) ?>">
                    </div>
                <?php endif; ?>
            </div>

            <!-- SAVE -->
            <div class="text-end mt-4">
                <button type="submit" name="save" class="btn btn-save">
                    Save Changes
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>
