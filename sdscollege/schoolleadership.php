<?php include 'includes/header.php'; ?>

<style>
/* ---- PAGE HEADER ---- */

.page-header {
    background: url('./assets/images/campus2.jfif') center/cover no-repeat;
    height: 320px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items   : center;
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

<!-- PAGE HEADER -->
<div class="page-header">
    <h1 class="header-title">Graduate School and Institute<br>of Professional Development</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Doctorate Degree</span><br>
            <span class="program-text">Doctor of School Leadership and Management</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Program Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Doctor of School Leadership and Management</strong> is the highest academic program offered by 
            St. Dominic Savio College for educational leaders, administrators, policymakers, and professionals seeking 
            advanced expertise in school governance, strategic planning, organizational innovation, and leadership excellence.
        </p>

        <p>
            This doctoral program equips learners with research-driven competencies in educational leadership, transformative 
            management practices, policy development, and institutional improvement—preparing them to become visionary and 
            effective leaders in academic institutions.
        </p>

        <h3 class="mt-4">Key Competencies Developed</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Advanced leadership and organizational management</li>
            <li>Strategic school governance and policy formulation</li>
            <li>Educational research, planning, and program evaluation</li>
            <li>Quality assurance and school accreditation management</li>
            <li>Change management and innovation leadership</li>
            <li>Human resource leadership and school culture development</li>
            <li>Ethical leadership and decision-making</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of this program may pursue high-level roles such as:</p>

        <ul>
            <li>School Director / School President</li>
            <li>Dean or Academic Head</li>
            <li>Principal / Assistant Principal</li>
            <li>Program Chair or Coordinator</li>
            <li>Education Policy Consultant</li>
            <li>Quality Assurance & Accreditation Officer</li>
            <li>Superintendent or Education Supervisor</li>
            <li>College or University Administrator</li>
            <li>Training and Development Director</li>
            <li>Research and Institutional Planning Specialist</li>
        </ul>

        <h3 class="mt-4">Why Take the Doctor of School Leadership & Management at SDSC?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Research-oriented program aligned with global leadership standards</li>
            <li>Mentorship from experienced school leaders and industry experts</li>
            <li>Curriculum that prepares graduates for top-level educational leadership roles</li>
            <li>Flexible academic structure suitable for working professionals</li>
            <li>Opportunities for strategic research, publication, and policy advocacy</li>
            <li>Emphasis on real-world leadership, governance, and institutional transformation</li>
        </ul>

        <p>
            This Doctorate program empowers educational leaders to create transformative, innovative, 
            and sustainable learning environments through effective leadership and advanced management skills.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
