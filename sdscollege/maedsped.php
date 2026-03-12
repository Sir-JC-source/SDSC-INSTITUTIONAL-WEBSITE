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

<!-- PAGE HEADER SECTION -->
<div class="page-header">
    <h1 class="header-title">Graduate School and Institute<br>of Professional Development</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Master of Arts in Education</span><br>
            <span class="program-text">Major in Special Education (SPED)</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Program Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Master of Arts in Education – Major in Special Education (MAEd SPED)</strong> 
            at St. Dominic Savio College is designed for educators who seek advanced knowledge, 
            skills, and professional competence in teaching and supporting learners with 
            special needs across diverse learning environments.
        </p>

        <p>
            The program equips graduate students with research-based practices, inclusive education 
            strategies, behavioral interventions, curriculum modification techniques, and effective 
            assessment tools essential for addressing the unique needs of exceptional learners.
        </p>

        <h3 class="mt-4">What You Will Learn</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Advanced instructional strategies for learners with special needs</li>
            <li>Behavior management and positive behavioral interventions</li>
            <li>Development and implementation of Individualized Education Programs (IEPs)</li>
            <li>Assessment and evaluation for diverse disabilities</li>
            <li>Inclusive education advocacy and policy application</li>
            <li>Research methods for special education and child development</li>
            <li>Curriculum adaptation and differentiated instruction</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of MAEd major in SPED may pursue roles such as:</p>

        <ul>
            <li>Special Education Teacher</li>
            <li>SPED Program Coordinator / Specialist</li>
            <li>Inclusive Education Advocate</li>
            <li>Learning Support Specialist</li>
            <li>Child Development Consultant</li>
            <li>Behavior Intervention Specialist</li>
            <li>Curriculum Designer for Special Education</li>
            <li>School Administrator or Program Head</li>
        </ul>

        <h3 class="mt-4">Why Study MAEd – SPED at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Strong foundation in inclusive education and child-centered pedagogies</li>
            <li>Evidence-based instructional and behavioral strategies</li>
            <li>Expert faculty with extensive background in SPED and child development</li>
            <li>Research-focused curriculum for professional growth</li>
            <li>Opportunities for practicum, fieldwork, and community partnerships</li>
            <li>Preparation for leadership roles in SPED programs and institutions</li>
        </ul>

        <p>
            The MAEd SPED program empowers educators to become compassionate, effective, 
            and competent specialists committed to supporting diverse learners and promoting 
            inclusive and equitable education for all.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
