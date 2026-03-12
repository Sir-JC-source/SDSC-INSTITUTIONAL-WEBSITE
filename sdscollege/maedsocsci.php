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
    font-size: 46px;
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

/* Department + Program Color Accent */
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
            <span class="dept-text">MA in Education</span><br>
            <span class="program-text">Major in Social Science</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Program Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Master of Arts in Education (MAED) – Major in Social Science</strong>
            at St. Dominic Savio College is designed to deepen the understanding and 
            teaching competencies of educators specializing in history, culture, society, 
            and contemporary issues.
        </p>

        <p>
            This program enhances analytical skills, research capabilities, and instructional 
            strategies aligned with modern pedagogy in social science education. It prepares 
            educators to become experts in fostering critical thinking, civic awareness, and 
            global citizenship among learners.
        </p>

        <h3 class="mt-4">Skills You Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Advanced knowledge in Philippine and world history</li>
            <li>Understanding of political, economic, and sociological systems</li>
            <li>Curriculum development for social science subjects</li>
            <li>Instructional leadership and classroom innovation</li>
            <li>Quantitative and qualitative research skills</li>
            <li>Cultural and societal analysis</li>
            <li>Critical and reflective thinking in socio-political issues</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of this program may pursue roles such as:</p>

        <ul>
            <li>Social Science Teacher / College Instructor</li>
            <li>Curriculum Developer (Social Studies)</li>
            <li>Academic Coordinator</li>
            <li>Researcher / Policy Analyst</li>
            <li>Community Development Specialist</li>
            <li>Educational Consultant</li>
            <li>Cultural Heritage or Museum Educator</li>
            <li>Instructional Materials Developer</li>
        </ul>

        <h3 class="mt-4">Why Study MAED – Social Science at SDSC?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Graduate faculty with strong backgrounds in history, sociology, and political science</li>
            <li>Research-driven coursework aligned with national and global issues</li>
            <li>Opportunities for community and field-based applications</li>
            <li>Training in advanced teaching strategies for social science subjects</li>
            <li>Supportive environment for scholarly research and publication</li>
        </ul>

        <p>
            The program equips educators to become leaders and experts in understanding 
            social structures, promoting civic engagement, and shaping future generations.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
