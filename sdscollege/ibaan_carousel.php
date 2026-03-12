<?php
require_once('auth.php');
include('config.php');
$user = checkAuth(['admin','superadmin']);

// Make sure uploads/ folder exists
$uploadDir = __DIR__ . '/uploads/';
if (!is_dir($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

// Helper: save base64 image (dataURL) to file
function saveBase64Image($dataUrl, $targetDir) {
    if (preg_match('/^data:image\/(\w+);base64,/', $dataUrl, $match)) {
        $type = strtolower($match[1]); // jpg|jpeg|png|gif|webp
        $allowed = ['jpg','jpeg','png','gif','webp','jfif'];
        if (!in_array($type, $allowed)) return false;

        $data = substr($dataUrl, strpos($dataUrl, ',') + 1);
        $data = base64_decode($data);
        if ($data === false) return false;

        $ext = ($type === 'jpeg') ? 'jpg' : $type;
        $filename = uniqid('hero_', true) . '.' . $ext;
        $filepath = rtrim($targetDir, '/') . '/' . $filename;

        if (file_put_contents($filepath, $data) === false) return false;
        return $filename;
    }
    return false;
}

// AUTO-FIX DUPLICATE DISPLAY ORDER
// If $excludeId provided, leave that record out (useful on update)
function fixDisplayOrder($conn, $order, $excludeId = null) {
    $order = intval($order);
    if ($excludeId !== null) {
        $excludeId = intval($excludeId);
        $sql = "UPDATE ibaan_hero_images 
                SET display_order = display_order + 1 
                WHERE display_order >= $order AND id <> $excludeId";
    } else {
        $sql = "UPDATE ibaan_hero_images 
                SET display_order = display_order + 1 
                WHERE display_order >= $order";
    }
    mysqli_query($conn, $sql);
}

// ======================================
// HANDLE ADD (either cropped base64 OR full raw file)
// ======================================
if (isset($_POST['add_image'])) {
    $cropped = $_POST['cropped_image'] ?? '';
    // form field name for order: display_order
    $order = intval($_POST['display_order'] ?? 1);

    // fix duplicates (shift existing items at or after $order)
    fixDisplayOrder($conn, $order);

    $saved = false;

    // If user provided a full-file upload (no crop)
    if (empty($cropped) && !empty($_FILES['full_image']['name'])) {
        $file = $_FILES['full_image'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif','webp','jfif'];
        if (!in_array($ext, $allowed)) {
            die("Invalid file type. Allowed: jpg,jpeg,png,gif,webp,jfif");
        }
        $filename = uniqid("hero_", true) . "." . $ext;
        $target = $uploadDir . "/" . $filename;
        if (!move_uploaded_file($file['tmp_name'], $target)) {
            die("Failed to move uploaded file. Check folder permissions.");
        }
        $saved = $filename;
    } else {
        // If cropped base64 present (user used Crop & Use)
        if (!empty($cropped)) {
            $saved = saveBase64Image($cropped, $uploadDir);
            if ($saved === false) {
                die("Failed to save cropped image - check folder permissions or file type.");
            }
        } else {
            // neither crop nor file provided
            die("No file uploaded. Either crop then 'Crop & Use' or choose a file for full upload.");
        }
    }

    $savedEsc = mysqli_real_escape_string($conn, $saved);
    mysqli_query($conn, "INSERT INTO ibaan_hero_images (image_path, active, display_order) VALUES ('$savedEsc', 1, $order)");
    header("Location: ibaan_carousel.php");
    exit();
}

// ======================================
// HANDLE UPDATE (optional cropped OR full upload)
// ======================================
if (isset($_POST['update_image'])) {
    $id = intval($_POST['id']);
    $order = intval($_POST['display_order'] ?? 1);
    $cropped = $_POST['cropped_image'] ?? '';

    // shift others (exclude current id)
    fixDisplayOrder($conn, $order, $id);

    // If user uploaded a new full-size file (no crop)
    if (empty($cropped) && !empty($_FILES['full_image_edit']['name'])) {
        $file = $_FILES['full_image_edit'];
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));
        $allowed = ['jpg','jpeg','png','gif','webp','jfif'];
        if (!in_array($ext, $allowed)) {
            die("Invalid file type. Allowed: jpg,jpeg,png,gif,webp,jfif");
        }
        $filename = uniqid("hero_", true) . "." . $ext;
        $target = $uploadDir . "/" . $filename;
        if (!move_uploaded_file($file['tmp_name'], $target)) {
            die("Failed to move uploaded file. Check folder permissions.");
        }
        $savedEsc = mysqli_real_escape_string($conn, $filename);

        mysqli_query($conn, "UPDATE ibaan_hero_images SET image_path='$savedEsc', display_order=$order WHERE id=$id");
    } else if (!empty($cropped)) {
        // With crop
        $saved = saveBase64Image($cropped, $uploadDir);
        if ($saved === false) die("Failed to save cropped image.");
        $savedEsc = mysqli_real_escape_string($conn, $saved);
        mysqli_query($conn, "UPDATE ibaan_hero_images SET image_path='$savedEsc', display_order=$order WHERE id=$id");
    } else {
        // Only order changed (no image)
        mysqli_query($conn, "UPDATE ibaan_hero_images SET display_order=$order WHERE id=$id");
    }

    header("Location: ibaan_carousel.php");
    exit();
}

// ======================================
// DELETE
// ======================================
if (isset($_GET['delete'])) {
    $id = intval($_GET['delete']);
    // delete file (best-effort)
    $q = mysqli_query($conn, "SELECT image_path FROM ibaan_hero_images WHERE id=$id");
    if ($q && mysqli_num_rows($q)) {
        $r = mysqli_fetch_assoc($q);
        $file = __DIR__ . '/uploads/' . $r['image_path'];
        if (file_exists($file)) @unlink($file);
    }
    mysqli_query($conn, "DELETE FROM ibaan_hero_images WHERE id=$id");
    header("Location: ibaan_carousel.php");
    exit();
}

// ======================================
// TOGGLE ACTIVE
// ======================================
if (isset($_GET['toggle'])) {
    $id = intval($_GET['toggle']);
    $q = mysqli_query($conn, "SELECT active FROM ibaan_hero_images WHERE id=$id");
    if ($q && mysqli_num_rows($q)) {
        $r = mysqli_fetch_assoc($q);
        $new = ($r['active'] == 1) ? 0 : 1;
        mysqli_query($conn, "UPDATE ibaan_hero_images SET active=$new WHERE id=$id");
    }
    header("Location: ibaan_carousel.php");
    exit();
}

// ======================================
// FETCH IMAGES
// ======================================
$images = mysqli_query($conn, "SELECT * FROM ibaan_hero_images ORDER BY display_order ASC, id ASC");

?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Carousel Management | SDSC</title>
<meta name="viewport" content="width=device-width,initial-scale=1">

<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- CropperJS (optional, user may crop) -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.css" rel="stylesheet"/>

<style>
:root{
    --sdsc-green:#0d472e;
    --sdsc-green-dark:#083f27;
    --sdsc-cream:#f3f9f5;
    --sdsc-gold:#d4af37;
}
body{ background:var(--sdsc-cream); font-family: "Segoe UI", Arial, sans-serif; }

/* layout */
.main-wrapper{ margin-left:260px; padding:34px; }
.page-title{ color:var(--sdsc-green); font-weight:800; font-size:28px; }

/* card / table */
.card{ border-radius:14px; padding:20px; box-shadow:0 10px 24px rgba(0,0,0,0.06); border:none; }
.table thead{ background:var(--sdsc-green); color:#fff; }
.preview-img{ width:160px; height:70px; object-fit:cover; border-radius:6px; }

/* buttons */
.add-btn{ background:var(--sdsc-green); color:#fff; border-radius:999px; padding:10px 18px; font-weight:700; border:none; }
.add-btn:hover{ background:var(--sdsc-green-dark); transform:translateY(-2px); transition: .15s; }

/* action buttons */
.btn-edit { background:var(--sdsc-green); color:#fff; border-radius:8px; padding:6px 12px; border:none; font-weight:700; }
.btn-toggle { background:var(--sdsc-gold); color:#111; border-radius:8px; padding:6px 12px; border:none; font-weight:700; }
.btn-delete { background:#e74c3c; color:#fff; border-radius:8px; padding:6px 12px; border:none; font-weight:700; }

/* small helper */
.small-muted{ color:#6b6f6d; font-size:14px; }
.status-badge{ padding:6px 12px; border-radius:999px; font-weight:700; color:#fff; }
.status-active{ background:var(--sdsc-green-dark); } 
.status-inactive{ background:#9aa0a1; }

/* visual hover */
.btn-edit:hover, .btn-toggle:hover, .btn-delete:hover {
    filter: brightness(1.05);
    transform: translateY(-2px);
    transition: .12s;
}

/* remove link underline on anchors used as buttons */
a { text-decoration: none !important; }

/* modal crop area */
.cropper-area img{ max-width:100%; display:block; }

/* Crop & Use button style */
.btn-crop-use { background:var(--sdsc-green); color:#fff; border:none; padding:8px 14px; border-radius:8px; font-weight:700; }
</style>
</head>
<body>

<?php include 'includes/sidebar.php'; ?>

<div class="main-wrapper">
    <div class="d-flex align-items-center justify-content-between mb-3">
        <h3 class="page-title">Carousel Images Management</h3>
        <div>
            <button class="add-btn" data-bs-toggle="modal" data-bs-target="#addModal">+ Add Image</button>
        </div>
    </div>

    <div class="card">
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Preview</th>
                        <th>ID</th>
                        <th>Order</th>
                        <th>Status</th>
                        <th width="300">Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php while ($row = mysqli_fetch_assoc($images)) { ?>
                    <tr>
                        <td><img src="./uploads/<?php echo htmlspecialchars($row['image_path']); ?>" class="preview-img" alt=""></td>
                        <td><?php echo intval($row['id']); ?></td>
                        <td><?php echo intval($row['display_order']); ?></td>
                        <td>
                            <?php if ($row['active']) { ?>
                                <span class="status-badge status-active">Active</span>
                            <?php } else { ?>
                                <span class="status-badge status-inactive">Inactive</span>
                            <?php } ?>
                        </td>
                        <td>
                            <!-- Edit (green) -->
                            <button class="btn-edit me-2" data-bs-toggle="modal" data-bs-target="#editModal<?php echo $row['id']; ?>">Edit</button>

                            <!-- Toggle (gold) -->
                            <a href="ibaan_carousel.php?toggle=<?php echo $row['id']; ?>" class="btn-toggle me-2">Toggle</a>

                            <!-- Delete -->
                            <a href="ibaan_carousel.php?delete=<?php echo $row['id']; ?>" class="btn-delete" onclick="return confirm('Delete this image?');">Delete</a>
                        </td>
                    </tr>

                    <!-- Edit Modal -->
                    <div class="modal fade" id="editModal<?php echo $row['id']; ?>" tabindex="-1" aria-hidden="true">
                      <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                          <form method="POST" enctype="multipart/form-data" onsubmit="return true;">
                            <div class="modal-header">
                              <h5 class="modal-title">Edit Carousel Image</h5>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                <input type="hidden" name="cropped_image" id="edit_cropped_<?php echo $row['id']; ?>">

                                <div class="mb-3">
                                    <label class="small-muted">Current Image</label>
                                    <div><img src="./uploads/<?php echo htmlspecialchars($row['image_path']); ?>" class="img-fluid" style="max-height:140px;"></div>
                                </div>

                                <div class="mb-3">
                                    <label class="small-muted">Replace Image (optional) — Crop or upload full image</label>

                                    <!-- single file input for edit crop flow (uses JS cropper) -->
                                    <input type="file" accept="image/*" class="form-control mb-2" id="edit_input_<?php echo $row['id']; ?>" onchange="openEditCropper(event, <?php echo $row['id']; ?>)">

                                    <!-- If admin prefers to upload full image without cropping -->
                                    <input type="file" name="full_image_edit" accept="image/*" class="form-control mt-2">
                                    <small class="text-muted">Optional: Replace without cropping (choose a file below)</small>

                                    <div id="edit_crop_container_<?php echo $row['id']; ?>" style="display:none; margin-top:12px;">
                                        <div class="cropper-area">
                                            <img id="edit_crop_image_<?php echo $row['id']; ?>" style="max-width:100%;">
                                        </div>
                                        <div class="mt-2">
                                            <button type="button" class="btn-crop-use" onclick="cropEditImage(<?php echo $row['id']; ?>)">Crop & Use</button>
                                        </div>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label class="small-muted">Display Order</label>
                                    <input type="number" name="display_order" class="form-control" value="<?php echo intval($row['display_order']); ?>" required>
                                </div>
                            </div>
                            <div class="modal-footer">
                              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                              <button type="submit" name="update_image" class="add-btn">Save changes</button>
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

<!-- ADD Modal -->
<div class="modal fade" id="addModal" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-xl modal-dialog-centered">
    <div class="modal-content">
      <form id="addForm" method="POST" enctype="multipart/form-data" onsubmit="return true;">
        <div class="modal-header">
          <h5 class="modal-title">Add Carousel Image (Optional crop to 1920×700)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>

        <div class="modal-body">
            <input type="hidden" name="cropped_image" id="cropped_image_data">

            <div class="row g-3">
                <div class="col-md-8">
                    <label class="form-label fw-bold">Choose Image</label>
                    <!-- SINGLE file input used for both crop and full upload -->
                    <input type="file" accept="image/*" class="form-control" id="mainImage" name="full_image">
                    <small class="text-muted">You may crop the image OR upload directly without cropping.</small>

                    <!-- crop container (JS toggles display) -->
                    <div id="cropContainer" style="display:none; margin-top:12px;">
                        <label class="form-label fw-bold">Crop Preview</label>
                        <div style="max-height:520px; overflow:hidden;">
                            <img id="cropImage" style="max-width:100%; display:block;">
                        </div>
                        <div class="mt-2">
                            <button type="button" class="btn-crop-use" id="cropUseBtn">Crop & Use</button>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <label class="form-label fw-bold">Display Order</label>
                    <div class="d-flex gap-2">
                        <input type="number" name="display_order" id="displayOrder" class="form-control" value="1" min="1" required>
                        <button type="button" class="btn btn-outline-secondary" id="resetBtn">Reset</button>
                    </div>
                    <small class="text-muted">If order collides, existing items will be shifted automatically.</small>
                </div>
            </div>

            <div class="mt-3">
                <p class="small-muted">Preview (if cropped):</p>
                <div id="cropped_preview" style="min-height:80px;"></div>
            </div>
        </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="addCancel">Cancel</button>
          <button type="submit" name="add_image" class="add-btn">Upload Image</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- CropperJS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.13/cropper.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
const targetW = 1920;
const targetH = 700;

/* ===== ADD FLOW (optional crop) ===== */
let addCropper = null;
const mainImage = document.getElementById('mainImage');
const cropContainer = document.getElementById('cropContainer');
const cropImage = document.getElementById('cropImage');
const cropUseBtn = document.getElementById('cropUseBtn');
const croppedInput = document.getElementById('cropped_image_data');
const croppedPreview = document.getElementById('cropped_preview');

mainImage.addEventListener('change', function(e){
    const file = e.target.files[0];
    if (!file) {
        // reset
        cropContainer.style.display = 'none';
        if (addCropper) { addCropper.destroy(); addCropper = null; }
        croppedPreview.innerHTML = '';
        croppedInput.value = '';
        return;
    }

    // show cropper UI so user may choose to crop (optional)
    const url = URL.createObjectURL(file);
    cropImage.src = url;
    cropContainer.style.display = 'block';

    if (addCropper) { try { addCropper.destroy(); } catch(e){} }
    addCropper = new Cropper(cropImage, {
        aspectRatio: targetW / targetH,
        viewMode: 1,
        autoCropArea: 1,
        responsive: true,
        background: false
    });

    // When user selects a new file, clear previous cropped data
    croppedInput.value = '';
    croppedPreview.innerHTML = '';
});

// Crop & Use — put data into hidden input and show preview
cropUseBtn.addEventListener('click', function(){
    if (!addCropper) return alert('No image to crop');
    const canvas = addCropper.getCroppedCanvas({ width: targetW, height: targetH, imageSmoothingQuality: 'high' });
    const dataUrl = canvas.toDataURL('image/jpeg', 0.92);
    croppedInput.value = dataUrl;
    croppedPreview.innerHTML = '<img src="' + dataUrl + '" style="max-width:100%; border-radius:8px; box-shadow:0 6px 18px rgba(0,0,0,0.12);">';
});

// Reset button near display order
document.getElementById('resetBtn').addEventListener('click', function(){
    document.getElementById('displayOrder').value = 1;
});

// NOTE: Cropping is optional. If user doesn't click "Crop & Use" but submits, the server will use the raw file
// because the form sends "full_image". If 'cropped_image' is set, server uses that instead.

/* ===== EDIT FLOW (per row) ===== */
const editCropperMap = {}; // id->cropper

function openEditCropper(event, id) {
    const file = event.target.files[0];
    if (!file) return;
    const url = URL.createObjectURL(file);
    const img = document.getElementById('edit_crop_image_' + id);
    img.src = url;
    const container = document.getElementById('edit_crop_container_' + id);
    container.style.display = 'block';

    // destroy if exists
    if (editCropperMap[id]) {
        try { editCropperMap[id].destroy(); } catch(e){}
    }

    editCropperMap[id] = new Cropper(img, {
        aspectRatio: targetW / targetH,
        viewMode: 1,
        autoCropArea: 1,
        responsive: true,
        background: false
    });
}

function cropEditImage(id) {
    const cp = editCropperMap[id];
    if (!cp) return alert('No image to crop');
    const canvas = cp.getCroppedCanvas({ width: targetW, height: targetH, imageSmoothingQuality: 'high' });
    const dataUrl = canvas.toDataURL('image/jpeg', 0.92);
    document.getElementById('edit_cropped_' + id).value = dataUrl;
    // show preview: replace img src with cropped
    const imgPreview = document.getElementById('edit_crop_image_' + id);
    imgPreview.src = dataUrl;
    // hide crop container (admin can still use full upload below)
    document.getElementById('edit_crop_container_' + id).style.display = 'none';
    
}

// Nothing else needed — server will pick cropped_image if present, otherwise uses uploaded file
</script>

</body>
</html>
