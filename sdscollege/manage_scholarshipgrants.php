<?php
require_once('auth.php');
include('includes/dbcon.php');
checkAuth(['admin','superadmin']);

/* ===============================
   FETCH DATA
================================ */
$query = mysqli_query($conn, "SELECT * FROM scholarship_grants_page WHERE id = 1");
$data = mysqli_fetch_assoc($query);

/* SAFETY FALLBACK */
$data = $data ?? [
    'title' => '',
    'intro' => '',
    'programs' => '',
    'how_to_apply' => '',
    'icon' => ''
];

/* ===============================
   UPDATE DATA
================================ */
if (isset($_POST['save'])) {

    $title        = mysqli_real_escape_string($conn, $_POST['title']);
    $intro        = mysqli_real_escape_string($conn, $_POST['intro']);
    $programs     = mysqli_real_escape_string($conn, $_POST['programs']);
    $how_to_apply = mysqli_real_escape_string($conn, $_POST['how_to_apply']);

    $icon = $data['icon'];

    if (!empty($_FILES['icon']['name'])) {
        $icon = time() . '_' . $_FILES['icon']['name'];
        move_uploaded_file($_FILES['icon']['tmp_name'], "assets/images/" . $icon);
    }

    mysqli_query($conn, "
        UPDATE scholarship_grants_page SET
            title='$title',
            intro='$intro',
            programs='$programs',
            how_to_apply='$how_to_apply',
            icon='$icon'
        WHERE id=1
    ");

    $success = "Scholarship Grants page updated successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage Scholarship Grants | SDSC</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body {
    background: #f3f7f4;
}

/* MATCH SIDEBAR WIDTH */
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

/* INPUTS */
.management-card .form-control {
    border-radius: 10px;
    padding: 12px 14px;
}

/* IMAGE PREVIEW — MATCH ACCREDITATION PAGE */
.preview-box {
    background: #f1f8f4;
    border: 2px dashed #198754;
    border-radius: 16px;
    padding: 40px;
    margin-top: 15px;

    width: 100%;
    min-height: 360px;

    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

.preview-box img {
    max-width: 420px;
    max-height: 260px;
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

    <h2 class="page-title">Manage Scholarship Grants Page</h2>

    <?php if (isset($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>

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

            <!-- PROGRAMS -->
            <div class="mb-4">
                <label>
                    Available Scholarship Programs
                    <small class="text-muted fw-normal">(One per line)</small>
                </label>
                <textarea name="programs" rows="5" class="form-control"><?= htmlspecialchars($data['programs']) ?></textarea>
            </div>

            <!-- HOW TO APPLY -->
            <div class="mb-4">
                <label>How to Apply</label>
                <textarea name="how_to_apply" rows="4" class="form-control"><?= htmlspecialchars($data['how_to_apply']) ?></textarea>
            </div>

            <!-- IMAGE -->
            <div class="mb-4">
                <label>Scholarship Icon / Image</label>
                <input type="file" name="icon" class="form-control">

                <?php if (!empty($data['icon'])): ?>
                    <div class="preview-box">
                        <small class="text-muted fw-semibold mb-3">
                            Current Scholarship Image
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
