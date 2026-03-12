<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

/* ===============================
   AUTH CHECK (PREVENT DIRECT ACCESS)
================================ */
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

/* ===============================
   SESSION DATA
================================ */
$adminName = $_SESSION['fullname'] ?? '';
$role      = $_SESSION['role'] ?? '';
$branch    = $_SESSION['branch'] ?? '';

/* ===============================
   ROLE LABEL
================================ */

if ($role === 'superadmin') {

    $adminRole = "Superadmin";

} elseif ($role === 'admin') {

    if ($branch === 'ibaan') {
        $adminRole = "Admin – Ibaan Branch";
    } else {
        $adminRole = "Admin – Main Campus";
    }

}

/* ===============================
   ACTIVE PAGE
================================ */
$current_page = basename($_SERVER['PHP_SELF']);
?>

<!-- ====== IBAAN SIDEBAR ====== -->
<div class="sidebar d-flex flex-column p-3">

    <!-- LOGO + GREETING -->
    <div class="text-center mb-4">
        <img src="assets/images/logo.png" class="img-fluid mb-2" style="max-width: 90px;">

        <p class="welcome-text mb-0">Welcome,</p>

        <div class="welcome-name">
            <?= htmlspecialchars($adminName) ?>
        </div>

        <div class="welcome-role">
            <?= htmlspecialchars($adminRole) ?>
        </div>
    </div>

    <ul class="nav flex-column">

        <!-- DASHBOARD -->
        <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'ibaan_dashboard.php') ? 'active' : '' ?>"
               href="admin_dashboard.php">
                <i class="bi bi-grid-1x2-fill me-2"></i> Dashboard
            </a>
        </li>

        <!-- CONTENT -->
        <li class="menu-label">Main Content</li>
        <li class="nav-item">   
            <a class="nav-link <?= ($current_page === 'display.php') ? 'active' : '' ?>"
               href="display.php">
                <i class="bi bi-images me-2"></i> Display Images
            </a>
        </li>

        <!-- SCHOLARSHIP -->
        <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'manage_scholarshipgrants.php') ? 'active' : '' ?>"
       href="manage_scholarshipgrants.php">
                <i class="bi bi-mortarboard-fill me-2"></i> Scholarship Grants
            </a>
        </li>

        <!-- ACHIEVEMENTS -->
        <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'manage_achievements.php') ? 'active' : '' ?>"
       href="manage_achievements.php">
                <i class="bi bi-trophy me-2"></i> Achievements & Awards
            </a>
        </li>

        <!-- ACCREDITATIONS -->
        <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'accreditations.php') ? 'active' : '' ?>"
               href="admin_accreditation_edit.php">
                <i class="bi bi-award me-2"></i> Accreditations
            </a>
        </li>

        <!-- ABOUT -->
        <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'about.php') ? 'active' : '' ?>"
               href="admin_about.php">
                <i class="bi bi-info-circle me-2"></i> About Section
            </a>
        </li>

        <!-- ACADEMICS -->
        <li class="menu-label">Academics</li>
        <!-- ADMISSIONS -->
        <li class="nav-item">
            <a class="nav-link <?= ($current_page === 'admission.php') ? 'active' : '' ?>"
               href="admission_manage.php">
                <i class="bi bi-door-open me-2"></i> Admissions
            </a>
        </li>
        
        <!-- PROGRAMS -->
        <li class="nav-item">
           <a class="nav-link <?= ($current_page === 'courses.php') ? 'active' : '' ?>"
               href="academic_manage.php">
                <i class="bi bi-journal-bookmark-fill me-2"></i> Programs
           </a>
        </li>


  <!-- ACTIVITIES -->
<li class="menu-label">Activities</li>

<!-- NEWS AND EVENTS -->
<li class="nav-item">
    <a class="nav-link <?= ($current_page === 'news_events.php') ? 'active' : '' ?>"
       href="news_events.php">
        <i class="bi bi-newspaper me-2"></i> News & Events
    </a>
</li>
<!-- FACILITIES -->
<li class="nav-item">
    <a class="nav-link <?= ($current_page === 'manage_facilities.php') ? 'active' : '' ?>"
       href="manage_facilities.php">
        <i class="bi bi-building me-2"></i> Facilities
    </a>
</li>
<!-- SYSTEM SETTINGS -->
<?php if($role === 'superadmin'): ?>
    
<li class="menu-label">System</li>

<li class="nav-item">
    <a class="nav-link <?= ($current_page === 'system_settings.php') ? 'active' : '' ?>"
       href="system_settings.php">
        <i class="bi bi-gear-fill me-2"></i> System Settings
    </a>
</li>

<?php endif; ?>
        <!-- LOGOUT -->
        <li class="nav-item mt-3">
            <a class="nav-link logout" href="admin_logout.php">
                <i class="bi bi-box-arrow-right me-2"></i> Logout
            </a>
        </li>

    </ul>
</div>

<!-- ====== SIDEBAR STYLES ====== -->
<style>
.sidebar {
    width: 260px;
    height: 100vh;
    background: linear-gradient(180deg, #0d472e, #093822);
    color: white;
    position: fixed;
    top: 0;
    left: 0;
    overflow-y: auto;
    padding-top: 25px;
    box-shadow: 3px 0 12px rgba(0,0,0,0.25);
}

.welcome-text {
    color: #cfe8dc;
    font-size: 14px;
}

.welcome-name {
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
}

.welcome-role {
    color: #ffffff;
    font-size: 12px;
    opacity: 0.85;
}

.sidebar .nav-link {
    color: #d8e7e0;
    font-size: 15px;
    padding: 11px 14px;
    border-radius: 9px;
    margin-bottom: 4px;
    display: flex;
    align-items: center;
    transition: all .25s ease;
}

.sidebar .nav-link:hover {
    background: #145c3a;
    color: #ffffff;
    transform: translateX(5px);
}

.sidebar .nav-link.active {
    background: #198754;
    color: #ffffff;
    font-weight: 700;
    box-shadow: 0 0 10px rgba(25, 135, 84, 0.6);
}

.menu-label {
    font-size: 12px;
    font-weight: 800;
    margin-top: 18px;
    margin-bottom: 6px;
    text-transform: uppercase;
    color: #ffffff;
    letter-spacing: 0.8px;
    padding-left: 6px;
}

.logout {
    color: #ffb3b3 !important;
}

.logout:hover {
    background: #8b1e1e !important;
    color: #ffffff !important;
}
</style>

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
