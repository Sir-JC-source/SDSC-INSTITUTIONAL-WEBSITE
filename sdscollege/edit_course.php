<?php
require_once('auth.php');
include('config.php');
$user = checkAuth('admin');

$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

if ($id <= 0) {
    die("Invalid course ID.");
}

$result = mysqli_query($conn, "SELECT * FROM courses WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (!$data) {
    die("Course not found.");
}

if(isset($_POST['update'])){

    $title    = mysqli_real_escape_string($conn, $_POST['title']);
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $careers  = mysqli_real_escape_string($conn, $_POST['careers']);
    $why      = mysqli_real_escape_string($conn, $_POST['why']);

    /* ===============================
       IMAGE UPDATE
    =============================== */
    if(!empty($_FILES['image']['name'])){

        $imageName = time() . "_" . basename($_FILES['image']['name']);
        $tmp       = $_FILES['image']['tmp_name'];

        $uploadDir  = "uploads/";
        $uploadPath = $uploadDir . $imageName;

        if(move_uploaded_file($tmp, $uploadPath)){

            // Delete old image if exists
            if(!empty($data['image'])){
                $oldImagePath = $uploadDir . $data['image'];
                if(file_exists($oldImagePath)){
                    unlink($oldImagePath);
                }
            }

            mysqli_query($conn, "UPDATE courses SET 
                title='$title',
                overview='$overview',
                careers='$careers',
                why_choose='$why',
                image='$imageName'
                WHERE id=$id");

        }

    } else {

        mysqli_query($conn, "UPDATE courses SET 
            title='$title',
            overview='$overview',
            careers='$careers',
            why_choose='$why'
            WHERE id=$id");
    }

    header("Location: academic_manage.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Academic Program | SDSC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body { background-color: #eef2f1; }

        .page-header {
            margin-left: 260px;
            padding: 30px 30px 10px 30px;
        }

        .page-header h2 {
            font-weight: 800;
            color: #0f5132;
            margin: 0;
        }

        .main-content {
            margin-left: 260px;
            padding: 10px 30px 30px 30px;
        }

        .card { border-radius: 14px; }

        .current-img {
            max-width: 140px;
            border-radius: 8px;
            margin-top: 10px;
            border: 1px solid #ddd;
        }

        @media (max-width: 768px) {
            .page-header,
            .main-content {
                margin-left: 0;
                padding: 20px;
            }
        }
    </style>
</head>

<body>

<?php include './includes/sidebar.php'; ?>

<div class="page-header">
    <h2>Edit Academic Program</h2>
</div>

<div class="main-content">
    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label fw-semibold">Program Title</label>
                    <input type="text" name="title" class="form-control"
                        value="<?= htmlspecialchars($data['title']); ?>" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Program Overview</label>
                    <textarea name="overview" rows="4" class="form-control" required><?= htmlspecialchars($data['overview']); ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Career Opportunities</label>
                    <textarea name="careers" rows="3" class="form-control" required><?= htmlspecialchars($data['careers']); ?></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Why Choose This Program</label>
                    <textarea name="why" rows="3" class="form-control" required><?= htmlspecialchars($data['why_choose']); ?></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Program Image</label>
                    <input type="file" name="image" class="form-control">

                    <?php if(!empty($data['image']) && file_exists("uploads/".$data['image'])): ?>
                        <img src="uploads/<?= htmlspecialchars($data['image']); ?>" class="current-img">
                    <?php endif; ?>
                </div>

                <button type="submit" name="update" class="btn btn-success px-4">
                    Update Program
                </button>

                <a href="academic_manage.php" class="btn btn-secondary ms-2">
                    Cancel
                </a>

            </form>
        </div>
    </div>
</div>

</body>
</html>