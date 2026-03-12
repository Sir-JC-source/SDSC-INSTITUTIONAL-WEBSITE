<?php
require_once('auth.php');
include('includes/dbcon.php');
checkAuth(['admin','superadmin']);

if (isset($_POST['update'])) {

    $our_college = mysqli_real_escape_string($conn, $_POST['our_college']);
    $vision = mysqli_real_escape_string($conn, $_POST['vision']);
    $mission = mysqli_real_escape_string($conn, $_POST['mission']);
    $core_values = mysqli_real_escape_string($conn, $_POST['core_values']);
    $commitment = mysqli_real_escape_string($conn, $_POST['commitment']);

    mysqli_query($conn, "
        UPDATE about_content SET
            our_college='$our_college',
            vision='$vision',
            mission='$mission',
            core_values='$core_values',
            commitment='$commitment'
        WHERE id=1
    ");

    $success = "About section updated successfully!";
}

$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM about_content WHERE id=1"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Manage About Section | SDSC</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
/* ===== BASE ===== */
body {
    background: #f3f7f4;
    font-family: 'Segoe UI', sans-serif;
}

/* ===== CONTENT OFFSET (MATCH SIDEBAR) ===== */
.admin-content {
    margin-left: 260px;
    padding: 35px 45px;
    min-height: 100vh;
}

/* ===== PAGE TITLE (MATCH CAROUSEL) ===== */
.page-title {
    font-size: 28px;
    font-weight: 800;
    color: #0d472e;
    margin-bottom: 25px;
}

/* ===== MAIN CARD (SAME AS CAROUSEL TABLE CARD) ===== */
.manage-card {
    background: #ffffff;
    border-radius: 16px;
    padding: 35px;
    box-shadow: 0 8px 24px rgba(0, 64, 35, 0.12);
}

/* ===== FORM LABELS ===== */
.manage-card label {
    font-weight: 700;
    color: #0d472e;
}

/* ===== FORM INPUTS ===== */
.manage-card textarea,
.manage-card input {
    border-radius: 10px;
    font-size: 15px;
}

/* ===== UPDATE BUTTON ===== */
.btn-save {
    background: #0d472e;
    color: #ffffff;              /* FORCE WHITE TEXT */
    border: none;
    padding: 12px 30px;
    font-weight: 700;
    border-radius: 12px;
}

.btn-save:hover {
    background: #0a3522;
    color: #ffffff;              /* KEEP WHITE ON HOVER */
}
</style>
</head>

<body>

<?php include 'includes/sidebar.php'; ?>

<div class="admin-content">

    <!-- PAGE TITLE -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="page-title">Manage About Section</h2>
    </div>

    <?php if (isset($success)): ?>
        <div class="alert alert-success"><?= $success ?></div>
    <?php endif; ?>

    <!-- MAIN CARD -->
    <div class="manage-card">

        <form method="POST">

            <div class="mb-4">
                <label>Our College</label>
                <textarea name="our_college" class="form-control" rows="4"><?= htmlspecialchars($data['our_college']) ?></textarea>
            </div>

            <div class="mb-4">
                <label>Vision</label>
                <textarea name="vision" class="form-control" rows="4"><?= htmlspecialchars($data['vision']) ?></textarea>
            </div>

            <div class="mb-4">
                <label>Mission</label>
                <textarea name="mission" class="form-control" rows="5"><?= htmlspecialchars($data['mission']) ?></textarea>
            </div>

            <div class="mb-4">
                <label>Core Values (comma separated)</label>
                <input type="text" name="core_values" class="form-control"
                       value="<?= htmlspecialchars($data['core_values']) ?>">
            </div>

            <div class="mb-4">
                <label>Our Commitment</label>
                <textarea name="commitment" class="form-control" rows="4"><?= htmlspecialchars($data['commitment']) ?></textarea>
            </div>

            <div class="text-end">
                <button type="submit" name="update" class="btn btn-save">
                    Update About Section
                </button>
            </div>

        </form>

    </div>

</div>

</body>
</html>
