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
.jhs-dept {
    color: #e2e2ddff; /* Gold */
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

.jhs-grade {
    color: #888b82ff; /* Light green */
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}
</style>

<!-- PAGE HEADER SECTION -->
<div class="page-header">
    <h1 class="header-title">Fusion Learning Centre</h1>

    <h3 class="header-subtitle">
    <strong>
        <span class="jhs-dept">Junior High School Department</span><br>
        <span class="jhs-grade">(Grade 7 to 10)</span>
    </strong>
</h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>The Junior High School Department of <strong>St. Dominic Savio College</strong> provides quality 
        education for students of <strong>Grade 7 to Grade 10</strong>. The program focuses on developing 
        academic competence, critical thinking, communication skills, and strong moral character 
        in preparation for Senior High School and future pathways.</p>

        <p>Through structured learning, values formation, and innovative teaching strategies, the 
        JHS Department molds responsible, confident, and purpose-driven individuals ready for 
        higher education.</p>

        <h3 class="mt-4">Grade Levels Offered</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Grade 7</li>
            <li>Grade 8</li>
            <li>Grade 9</li>
            <li>Grade 10</li>
        </ul>

        <h3 class="mt-4">Student Development Programs</h3>
        <div class="underline-gold"></div>

        <p>The JHS Department offers opportunities for leadership, creativity, and holistic growth:</p>

        <ul>
            <li>Clubs and organizations</li>
            <li>Leadership and formation programs</li>
            <li>Campus journalism and publications</li>
            <li>Sports and performing arts</li>
            <li>Academic contests and enrichment activities</li>
        </ul>

        <p>These programs enhance students’ talents, interpersonal skills, discipline, and 
        sense of community as young Savians.</p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
