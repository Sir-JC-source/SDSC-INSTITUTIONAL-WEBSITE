<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=2.0" />
  <title>St. Dominic Savio College</title>

  <!-- Bootstrap & Font Awesome -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">

<style>

/* ===============================
   SDSC HEADER — POLISHED VERSION
   =============================== */

/* Sticky navbar */
.navbar {
  background: #e8f7ee;
  padding: 10px 0;
  box-shadow: 0 3px 12px rgba(0,0,0,0.08);
  position: sticky;
  top: 0;
  z-index: 999;
}

/* LOGO + Extra spacing before menu */
.navbar-brand img {
  width: 60px;
  height: auto;
  object-fit: contain;
  margin-right: 8px;
}
.navbar-brand {
  margin-right: 15px !important;   /* EXTRA SPACING ADDED ✔ */
}

/* NAV LINKS GENERAL */
.navbar-nav .nav-link {
  font-weight: 500;
  padding: 12px 10px;
  display: flex;
  align-items: center;
  position: relative;
}

/* ICONS — SDSC GREEN */
.menu-icon {
  font-size: 15px;
  color: #198754;
  margin-right: 6px;
}

/* SUBMENU ICONS (smaller for cleanliness) */
.submenu-icon {
  font-size: 13px;
  color: #198754;
  margin-right: 6px;
}

/* GREEN UNDERLINE HOVER */
.navbar-nav .nav-link::after {
  content: "";
  position: absolute;
  bottom: 4px;
  left: 9px;
  width: 0;
  height: 2px;
  background: #198754;
  transition: 0.25s;
}
.navbar-nav .nav-link:hover::after {
  width: 70%;
}

/* =======================
   DROPDOWN MENU STYLING
   ======================= */
.dropdown-menu {
  border-radius: 12px !important;
  padding: 8px 0;
  border: none !important;
  backdrop-filter: blur(6px);
  background: rgba(255,255,255,0.95) !important;
  box-shadow: 0 6px 20px rgba(0,0,0,0.12);
  min-width: 240px;
}

.dropdown-item {
  padding: 10px 18px;
  font-size: 15px;
  display: flex;
  align-items: center;
}
.dropdown-item:hover {
  background: #dff4e6 !important;
  color: #198754 !important;
}

/* Multi-Level Dropdown */
.dropdown-submenu {
  position: relative;
}
.dropdown-submenu > .dropdown-menu {
  top: 0;
  left: 100%;
  margin-left: .3rem;
  display: none !important;
  border-radius: 12px !important;
}
.dropdown-submenu:hover > .dropdown-menu {
  display: block !important;
}

/* Arrow for submenus */
.dropdown-submenu > a.dropdown-toggle::after {
  content: "›";
  float: right;
  margin-left: 10px;
  font-size: 17px;
  color: #198754;
  opacity: 0.7;
}

/* Mobile fixes */
@media (max-width: 991px) {
  .dropdown-submenu > .dropdown-menu {
    left: 0 !important;
  }
  .navbar-nav .nav-item {
    margin: 4px 0;
  }
}
/* KEEP NAVBAR HORIZONTAL – NO WRAPPING */
.navbar-nav {
    white-space: nowrap !important;
}

.nav-item {
    white-space: nowrap !important;
}

.dropdown-item {
    white-space: nowrap !important;
}

/* OPTIONAL: SHRINK FONT A BIT FOR CLEANER LOOK */
.nav-link,
.dropdown-item {
    font-size: 14.5px;
}

</style>
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container">

    <!-- LOGO -->
    <a class="navbar-brand fw-bold text-success" href="index.php">
      <img src="assets/images/logo.png" alt="Logo"> St. Dominic Savio College
    </a>

    <!-- MOBILE TOGGLE -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- NAV LINKS -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto flex-nowrap">

        <!-- HOME -->
        <li class="nav-item">
          <a class="nav-link" href="index.php">
            <i class="fa-solid fa-house menu-icon"></i> Home
          </a>
        </li>

        <!-- ACADEMICS (big dropdown) -->
        <li class="nav-item dropdown">
          <a class="nav-link  "href="courses.php">
            <i class="fa-solid fa-graduation-cap menu-icon"></i> Academics
          </a>

          <ul class="dropdown-menu">

            <!-- BASIC EDUCATION -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle">
                <i class="fa-solid fa-school menu-icon"></i> Basic Education
              </a>

              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="elementary.php"><i class="fa-solid fa-children submenu-icon"></i> Elementary</a></li>
                <li><a class="dropdown-item" href="juniorhigh.php"><i class="fa-solid fa-user-group submenu-icon"></i> Junior High School</a></li>

                <!-- SENIOR HIGH -->
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle">
                    <i class="fa-solid fa-users submenu-icon"></i> Senior High School
                  </a>

                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="abm.php"><i class="fa-solid fa-coins submenu-icon"></i> ABM</a></li>
                    <li><a class="dropdown-item" href="humss.php"><i class="fa-solid fa-book-open submenu-icon"></i> HUMSS</a></li>
                    <li><a class="dropdown-item" href="stem.php"><i class="fa-solid fa-flask submenu-icon"></i> STEM</a></li>
                    <li><a class="dropdown-item" href="gas.php"><i class="fa-solid fa-layer-group submenu-icon"></i> GAS</a></li>
                  </ul>

                </li>
              </ul>
            </li>

            <!-- COLLEGE -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle">
                <i class="fa-solid fa-building-columns menu-icon"></i> College
              </a>

              <ul class="dropdown-menu">

                <!-- IASE -->
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle">
                    <i class="fa-solid fa-palette submenu-icon"></i> IASE
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle">
                        <i class="fa-solid fa-graduation-cap submenu-icon"></i>
                        Institute of Arts,<br> Sciences & Education
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="bsed.php"><i class="fa-solid fa-book submenu-icon"></i> BS Major in English</a></li>
                        <li><a class="dropdown-item" href="abmasscom.php"><i class="fa-solid fa-video submenu-icon"></i> AB Mass Communication</a></li>
                        <li><a class="dropdown-item" href="abpsych.php"><i class="fa-solid fa-brain submenu-icon"></i> AB Psychology</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- CABHTM -->
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle">
                    <i class="fa-solid fa-briefcase submenu-icon"></i> CABHTM
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle">
                        <i class="fa-solid fa-briefcase submenu-icon"></i>
                        College of Accountancy,<br>Business, Hospitality & Tourism
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="acct.php"><i class="fa-solid fa-calculator submenu-icon"></i> BS Accountancy</a></li>
                        <li><a class="dropdown-item" href="businessad.php"><i class="fa-solid fa-chart-line submenu-icon"></i> BS Business Administration</a></li>
                        <li><a class="dropdown-item" href="tm.php"><i class="fa-solid fa-plane submenu-icon"></i> BS Tourism Management</a></li>
                        <li><a class="dropdown-item" href="hrm.php"><i class="fa-solid fa-utensils submenu-icon"></i> BS HRM</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- CCJ -->
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle">
                    <i class="fa-solid fa-shield-halved submenu-icon"></i> CCJ
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle">
                        <i class="fa-solid fa-shield-halved submenu-icon"></i> College of Criminal Justice
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="criminology.php"><i class="fa-solid fa-gavel submenu-icon"></i> BS Criminology</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- ECORS -->
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle">
                    <i class="fa-solid fa-laptop-code submenu-icon"></i> ECORS
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle">
                        <i class="fa-solid fa-laptop submenu-icon"></i> Engineering & Computer Studies
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="comsci.php"><i class="fa-solid fa-code submenu-icon"></i> BS Computer Science</a></li>
                        <li><a class="dropdown-item" href="comengr.php"><i class="fa-solid fa-microchip submenu-icon"></i> BS Computer Engineering</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <!-- HRC -->
                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle">
                    <i class="fa-solid fa-heart-pulse submenu-icon"></i> HRC
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle">
                        <i class="fa-solid fa-heart-pulse submenu-icon"></i> Health Courses
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="nursing.php"><i class="fa-solid fa-user-nurse submenu-icon"></i> BS Nursing</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

              </ul>
            </li>

            <!-- GRAD SCHOOL -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle">
                <i class="fa-solid fa-user-graduate menu-icon"></i> Graduate School
              </a>
              <ul class="dropdown-menu">

                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle">
                    <i class="fa-solid fa-user-tie submenu-icon"></i> Master’s Programs
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="mba.php"><i class="fa-solid fa-briefcase submenu-icon"></i> MBA</a></li>

                    <li class="dropdown-submenu">
                      <a class="dropdown-item dropdown-toggle">
                        <i class="fa-solid fa-chalkboard submenu-icon"></i> MA Education
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="maedman.php"><i class="fa-solid fa-users submenu-icon"></i> Educational Management</a></li>
                        <li><a class="dropdown-item" href="maedsped.php"><i class="fa-solid fa-child submenu-icon"></i> Special Education</a></li>
                        <li><a class="dropdown-item" href="maedsocsci.php"><i class="fa-solid fa-book submenu-icon"></i> Social Science</a></li>
                      </ul>
                    </li>
                  </ul>
                </li>

                <li class="dropdown-submenu">
                  <a class="dropdown-item dropdown-toggle">
                    <i class="fa-solid fa-graduation-cap submenu-icon"></i> Doctorate
                  </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="schoolleadership.php"><i class="fa-solid fa-school-flag submenu-icon"></i> School Leadership</a></li>
                    <li><a class="dropdown-item" href="business.php"><i class="fa-solid fa-chart-line submenu-icon"></i> Business Management</a></li>
                    <li><a class="dropdown-item" href="scied.php"><i class="fa-solid fa-atom submenu-icon"></i> Science Education</a></li>
                  </ul>
                </li>

              </ul>
            </li>

            <!-- LAW -->
            <li class="dropdown-submenu">
              <a class="dropdown-item dropdown-toggle">
                <i class="fa-solid fa-scale-balanced menu-icon"></i> School of Law
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="jd.php">
                    <i class="fa-solid fa-scale-balanced submenu-icon"></i> Juris Doctor (Non-Thesis)
                  </a>
                </li>
              </ul>
            </li>

          </ul>
        </li>

        <!-- STUDENT SERVICES -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">
            <i class="fa-solid fa-building-columns menu-icon"></i> Student Services
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="hr.php"><i class="fa-solid fa-user-tie submenu-icon"></i> Human Resources</a></li>
            <li><a class="dropdown-item" href="rao.php"><i class="fa-solid fa-file-lines submenu-icon"></i> Registrar</a></li>
            <li><a class="dropdown-item" href="acctg.php"><i class="fa-solid fa-coins submenu-icon"></i> Accounting Office</a></li>
            <li><a class="dropdown-item" href="clir.php"><i class="fa-solid fa-book submenu-icon"></i> CLIR</a></li>
            <li><a class="dropdown-item" href="its.php"><i class="fa-solid fa-computer submenu-icon"></i> ITS</a></li>
            <li><a class="dropdown-item" href="guidance.php"><i class="fa-solid fa-user-group submenu-icon"></i> GTCPO</a></li>
            <li><a class="dropdown-item" href="research.php"><i class="fa-brands fa-researchgate submenu-icon"></i> Research</a></li>
          </ul>
        </li>

        <!-- OTHER NAV ITEMS -->
        <li class="nav-item"><a class="nav-link" href="admission.php"><i class="fa-solid fa-file-circle-check menu-icon"></i> Admission</a></li>
        <li class="nav-item"><a class="nav-link" href="events.php"><i class="fa-solid fa-calendar-days menu-icon"></i> Events</a></li>
        <li class="nav-item"><a class="nav-link" href="facilities.php"><i class="fa-solid fa-house menu-icon"></i> Facilities</a></li>
        <li class="nav-item"><a class="nav-link" href="ibaan.php"><i class="fa-solid fa-location-dot menu-icon"></i> SDSC - IBAAN</a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php"><i class="fa-solid fa-envelope menu-icon"></i> Contact Us</a></li>

        <!-- ==========================
             LOGIN BUTTON ONLY (ADDED)
        ========================== -->
        <li class="nav-item ms-2">
          <a href="login.php" class="btn btn-success px-3 py-2" style="border-radius: 8px;">
            <i class="fa-solid fa-right-to-bracket me-1"></i> Login
          </a>
        </li>

      </ul>
    </div>
  </div>
</nav>

<!-- BOOTSTRAP JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<!-- Hover menu activation (desktop only) -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  if (window.innerWidth > 991) {
    document.querySelectorAll(".navbar .dropdown").forEach(drop => {
      drop.addEventListener("mouseenter", function () {
        const menu = bootstrap.Dropdown.getOrCreateInstance(
          this.querySelector("[data-bs-toggle='dropdown']")
        );
        menu.show();
      });
      drop.addEventListener("mouseleave", function () {
        const menu = bootstrap.Dropdown.getOrCreateInstance(
          this.querySelector("[data-bs-toggle='dropdown']")
        );
        menu.hide();
      });
    });
  }
});
</script>

</body>
</html>
