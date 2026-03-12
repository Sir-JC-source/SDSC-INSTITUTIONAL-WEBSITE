<?php include 'includes/header.php'; ?>

<style>
/* ---- PAGE HEADER ---- */

.page-header {
    background: url('./assets/images/campus2.jfif') center/cover no-repeat;
    height: 320px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    text-align: center;
    color: white;
    position: relative;
}

.page-header::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.45);
}

.page-header h1,
.page-header p,
.page-header h3 {
    position: relative;
    z-index: 2;
}

.page-header .header-title {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    text-shadow: 2px 2px 8px rgba(0,0,0,0.7);
}

.page-header .header-subtitle {
    color: #cfd2cd;
    font-size: 22px;
    font-weight: 600;
    margin-top: 10px;
    line-height: 1.4;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

.dept-text {
    color: #e0dfd8;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

.program-text {
    color: #8c8f88;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

/* ---- CONTENT BOX ---- */
.content-box {
    background: #f6f8f7ff;
    border-left: 6px solid #0C4B34;
    padding: 40px;
    border-radius: 10px;
    margin-top: -40px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

.underline-gold {
    width: 250px;
    height: 8px;
    background: #E6B800;
    margin-bottom: 20px;
}
</style>

<!-- PAGE HEADER SECTION -->
<div class="page-header">
    <h1 class="header-title">Graduate School and Institute<br>of Professional Development</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Master of Arts in Education</span><br>
            <span class="program-text">Major in Educational Management</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Master of Arts in Education (MAEd) Major in Educational Management</strong> at 
            St. Dominic Savio College is designed for educators and school professionals who aspire to 
            lead, innovate, and improve educational institutions.  
        </p>

        <p>
            This graduate program equips learners with advanced knowledge in school leadership, organizational 
            management, curriculum development, policymaking, research, and strategic decision-making—preparing 
            them for roles in academic administration and institutional development.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Educational leadership and school administration</li>
            <li>Strategic planning and organizational management</li>
            <li>Curriculum and program development</li>
            <li>Human resource management in educational settings</li>
            <li>Educational policymaking and governance</li>
            <li>Research, assessment, and data-driven decision-making</li>
            <li>Financial and operational management of academic institutions</li>
            <li>Communication, conflict resolution, and leadership ethics</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of MAEd – Educational Management may pursue roles such as:</p>

        <ul>
            <li>School Principal / School Head</li>
            <li>Academic Coordinator / Program Head</li>
            <li>Department Chair / Dean</li>
            <li>Education Supervisor</li>
            <li>Curriculum Developer / Instructional Leader</li>
            <li>Registrar or Administrative Director</li>
            <li>Human Resource Officer (Education Sector)</li>
            <li>Research Coordinator or Education Consultant</li>
            <li>Training and Development Specialist</li>
        </ul>

        <h3 class="mt-4">Why Choose MAEd – Educational Management at SDSC?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Graduate program built for aspiring and current school leaders</li>
            <li>Curriculum grounded in real educational challenges and solutions</li>
            <li>Faculty composed of experienced administrators and education experts</li>
            <li>Research-focused development for educational improvement</li>
            <li>Flexible learning setup ideal for working professionals</li>
            <li>Strong preparation for administrative and leadership roles in schools</li>
        </ul>

        <p>
            The MAEd program empowers educators to become transformational leaders who can drive innovation, 
            quality, and excellence in today’s educational institutions.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
    