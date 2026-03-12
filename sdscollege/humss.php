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

/* Color accents (same pattern as ABM page) */
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
            <span class="jhs-dept">Humanities and Social Sciences</span><br>
            <span class="jhs-grade">Senior High School</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>The <strong>Humanities and Social Sciences (HUMSS) Strand</strong> of St. Dominic Savio College 
        is crafted for students interested in understanding human behavior, society, culture, communication, 
        and public service. HUMSS equips learners with strong analytical, communication, and critical-thinking 
        skills essential for careers in the social sciences, education, government, and the creative industry.</p>

        <p>Through a wide range of subjects focusing on people, culture, society, and human expression, 
        learners gain perspectives that prepare them for communication-driven, service-oriented, and 
        community-centered professions.</p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Critical and analytical thinking</li>
            <li>Effective communication and writing skills</li>
            <li>Understanding of society, culture, and human behavior</li>
            <li>Creative expression and public speaking</li>
            <li>Research and investigative skills</li>
            <li>Leadership and community engagement</li>
        </ul>

        <h3 class="mt-4">Career Pathways</h3>
        <div class="underline-gold"></div>

        <p>HUMSS graduates can pursue college degrees and professions such as:</p>

        <ul>
            <li>Teacher / Educator</li>
            <li>Psychologist / Guidance Counselor</li>
            <li>Social Worker</li>
            <li>Journalist / Writer</li>
            <li>Lawyer / Legal Practitioner</li>
            <li>Public Servant / Government Employee</li>
            <li>Media and Communication Professional</li>
            <li>Community Development Worker</li>
        </ul>

        <h3 class="mt-4">Why Choose HUMSS at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Strong foundation in communication, analysis, and research</li>
            <li>Holistic character and leadership formation</li>
            <li>Student-centered learning approach</li>
            <li>Engaging activities: debates, public speaking, journalism, outreach</li>
            <li>Preparation for people-oriented and service-oriented college courses</li>
        </ul>

        <p>The HUMSS Strand empowers Savians to be articulate, empathetic, socially aware, and ready to serve their community with purpose and integrity.</p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
