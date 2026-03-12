<?php
require_once('auth.php');
include('config.php');
$user = checkAuth('admin');

if(isset($_POST['submit'])){

    // Secure form data
    $title    = mysqli_real_escape_string($conn, $_POST['title']);
    $overview = mysqli_real_escape_string($conn, $_POST['overview']);
    $careers  = mysqli_real_escape_string($conn, $_POST['careers']);
    $why      = mysqli_real_escape_string($conn, $_POST['why']);

    /* ===============================
       IMAGE UPLOAD
    =============================== */
    $imageName = $_FILES['image']['name'];
    $tmp       = $_FILES['image']['tmp_name'];
    $error     = $_FILES['image']['error'];

    if($error === 0){

        // Create unique filename
        $newImageName = time() . "_" . basename($imageName);

        // Correct upload folder (NO ../)
        $uploadDir = "uploads/";
        $uploadPath = $uploadDir . $newImageName;

        // Create folder if not exists
        if(!is_dir($uploadDir)){
            mkdir($uploadDir, 0777, true);
        }

        if(move_uploaded_file($tmp, $uploadPath)){

            mysqli_query($conn, "INSERT INTO courses
                (title, overview, careers, why_choose, image, status)
                VALUES
                ('$title','$overview','$careers','$why','$newImageName',1)");

            header("Location: academic_manage.php");
            exit();

        } else {
            $uploadError = "Failed to move uploaded file.";
        }

    } else {
        $uploadError = "Image upload error.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Academic Program | SDSC</title>
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
    <h2>Add Academic Program</h2>
</div>

<div class="main-content">
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <?php if(isset($uploadError)): ?>
                <div class="alert alert-danger">
                    <?php echo $uploadError; ?>
                </div>
            <?php endif; ?>

            <form method="POST" enctype="multipart/form-data">

                <div class="mb-3">
                    <label class="form-label fw-semibold">Program Title</label>
                    <input type="text" name="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Program Overview</label>
                    <textarea name="overview" rows="4" class="form-control" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Career Opportunities</label>
                    <textarea name="careers" rows="3" class="form-control" placeholder="One career per line" required></textarea>
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">Why Choose This Program</label>
                    <textarea name="why" rows="3" class="form-control" placeholder="One reason per line" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="form-label fw-semibold">Program Image</label>
                    <input type="file" name="image" class="form-control" accept="image/*" required>
                </div>

                <button type="submit" name="submit" class="btn btn-success px-4">
                    Save Program
                </button>

            </form>
        </div>
    </div>
</div>

</body>
</html>