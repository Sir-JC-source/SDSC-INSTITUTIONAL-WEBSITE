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
            <span class="jhs-dept">Science, Technology, Engineering, and Mathematics</span><br>
            <span class="jhs-grade">Senior High School</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>The <strong>STEM Strand</strong> at St. Dominic Savio College equips learners with strong foundations 
        in scientific inquiry, mathematical reasoning, technological proficiency, and engineering concepts. 
        This strand is ideal for students aspiring to pursue careers in medicine, engineering, aviation, 
        computer science, architecture, research, and other science-driven fields.</p>

        <p>STEM develops analytical and problem-solving skills through hands-on activities, laboratory work,
        technology-based learning, and research projects that prepare learners for competitive and high-demand
        college programs.</p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Critical and analytical thinking</li>
            <li>Advanced problem-solving and logical reasoning</li>
            <li>Scientific research and experimentation</li>
            <li>Technological and engineering design skills</li>
            <li>Mathematical discipline and application</li>
            <li>Innovation, creativity, and scientific curiosity</li>
        </ul>

        <h3 class="mt-4">Career Pathways</h3>
        <div class="underline-gold"></div>

        <p>STEM graduates can pursue highly technical and science-based college programs such as:</p>

        <ul>
            <li>Engineering (Civil, Electrical, Mechanical, Computer, Chemical)</li>
            <li>Medicine, Nursing, Pharmacy, Medical Technology</li>
            <li>Computer Science, IT, Programming, Data Science</li>
            <li>Architecture and Design</li>
            <li>Aviation / Aeronautics</li>
            <li>Biology, Chemistry, Physics, Environmental Science</li>
            <li>Research and Laboratory Sciences</li>
        </ul>

        <h3 class="mt-4">Why Choose STEM at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Up-to-date laboratory and technology-enhanced learning</li>
            <li>Hands-on scientific experiments and engineering activities</li>
            <li>Strong foundation in mathematics and scientific analysis</li>
            <li>Capstone research projects for real-world application</li>
            <li>Preparation for rigorous and competitive STEM-related college courses</li>
        </ul>

        <p>The STEM Strand shapes Savians into innovative thinkers, future scientists, engineers, programmers, 
        and professionals ready to contribute to a technology-driven world.</p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
