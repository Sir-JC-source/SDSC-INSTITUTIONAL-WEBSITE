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

<!-- PAGE HEADER -->
<div class="page-header">
    <h1 class="header-title">Graduate School and Institute<br>of Professional Development</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Doctorate Degree</span><br>
            <span class="program-text">Doctor of Science in Education (Science Education)</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">
    <div class="content-box">

        <h2>Program Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Doctor of Science in Education major in Science Education</strong> is designed for 
            educators, researchers, and academic leaders aiming to advance their expertise in scientific instruction, 
            curriculum development, assessment, and scholarly research.
        </p>

        <p>
            This doctoral program equips candidates with advanced competencies in scientific inquiry, 
            educational policy, instructional leadership, and evidence-based teaching methodologies. 
            It prepares scholars for influential roles in higher education, government agencies, 
            curriculum development centers, and scientific research institutions.
        </p>

        <h3 class="mt-4">What You Will Learn</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Advanced concepts in science curriculum design and evaluation</li>
            <li>Leadership in science education institutions and academic programs</li>
            <li>Design and implementation of STEM-focused learning environments</li>
            <li>Innovative instructional strategies in biology, chemistry, physics, and earth science</li>
            <li>Scientific and educational research methodologies</li>
            <li>Policy analysis and development for science education</li>
            <li>Data-driven decision making in educational settings</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the Doctor of Science in Education (Science Education) may pursue careers such as:</p>

        <ul>
            <li>College or University Professor</li>
            <li>Science Education Specialist</li>
            <li>Curriculum and Instruction Director</li>
            <li>STEM Program Coordinator</li>
            <li>Education Researcher / Research Director</li>
            <li>School Administrator / Academic Dean</li>
            <li>Policy Advisor in Science and STEM Education</li>
            <li>Science Textbook or Module Developer</li>
        </ul>

        <h3 class="mt-4">Why Pursue This Doctoral Program?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Research-driven curriculum for advanced academic and scientific leadership</li>
            <li>Specialized training in modern STEM methodologies</li>
            <li>Mentorship from highly qualified professors and researchers</li>
            <li>Opportunities for publication, research conferences, and academic collaboration</li>
            <li>Preparation for leadership roles in higher education and government institutions</li>
        </ul>

        <p>
            This doctoral program strengthens your ability to make significant contributions 
            to science education, educational innovation, and scientific research—shaping future 
            generations of learners and educators.
        </p>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
