<?php include 'includes/header.php'; ?>

<style>
/* ---- ALL YOUR STYLES HERE ---- */

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
    color: #9a9e9bff;
    font-size: 22px;
    font-weight: 600;
    margin-top: 10px;
    line-height: 1.4;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

/* Color accents (same pattern as ABM/HUMSS/STEM) */
.jhs-dept {
    color: #d1d1c7ff;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

.jhs-grade {
    color: #888b82ff;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

/* CONTENT BOX */
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
    <h1 class="header-title">Fusion Learning Centre</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="jhs-dept">General Academic Strand</span><br>
            <span class="jhs-grade">Senior High School</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>The <strong>General Academic Strand (GAS)</strong> of St. Dominic Savio College is designed for 
        students who want a flexible Senior High School path that allows exploration in different fields of 
        study. GAS offers a broad range of subjects covering Humanities, Social Sciences, Business, and STEM, 
        giving learners the opportunity to discover their strengths and preferred career direction.</p>

        <p>It is ideal for students who are still deciding on a specific specialization or who prefer 
        interdisciplinary learning that prepares them for various college programs and professions.</p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Critical and creative thinking</li>
            <li>Adaptability and multi-disciplinary learning</li>
            <li>Communication and analytical skills</li>
            <li>Research and decision-making skills</li>
            <li>Leadership and collaborative problem-solving</li>
            <li>Practical knowledge across multiple fields</li>
        </ul>

        <h3 class="mt-4">Career Pathways</h3>
        <div class="underline-gold"></div>

        <p>GAS graduates can pursue diverse college degrees and careers such as:</p>

        <ul>
            <li>Education and Teaching</li>
            <li>Business Administration and Management</li>
            <li>Social Sciences (Psychology, Sociology, Political Science)</li>
            <li>Communication and Media Studies</li>
            <li>Hospitality and Tourism</li>
            <li>Public Administration</li>
            <li>Information Technology</li>
            <li>Criminology</li>
        </ul>

        <h3 class="mt-4">Why Choose GAS at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Flexible learning suited to undecided or multi-skilled students</li>
            <li>Balanced academic exposure across major learning areas</li>
            <li>Opportunities for skill exploration before college</li>
            <li>Holistic and student-centered approach</li>
            <li>Preparation for a wide range of college courses</li>
        </ul>

        <p>The GAS Strand empowers students to explore, adapt, and discover their academic and professional 
        strengths—preparing them for a versatile and dynamic future.</p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
