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
    <h1 class="header-title">Guidance, Testing, Counseling and Placement Office</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Administrative Department</span><br>
            <span class="program-text">Guidance and Counseling Office</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Guidance, Testing, Counseling and Placement Office</strong> of St. Dominic Savio College is committed to fostering 
            students’ personal, academic, social, and emotional well-being. The office provides 
            professional guidance services that support learners in achieving self-awareness, 
            responsible decision-making, mental wellness, and overall character development.
        </p>

        <p>
            Through proactive programs, counseling sessions, and developmental activities, 
            the Guidance, Testing, Counseling and Placement Office ensures that every Savian student receives the support needed 
            to navigate challenges, build resilience, and grow holistically.
        </p>

        <h3 class="mt-4">Services Offered</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Individual and group counseling sessions</li>
            <li>Academic and career guidance</li>
            <li>Student profiling and psychological assessment</li>
            <li>Behavioral monitoring and intervention programs</li>
            <li>Peer counseling and support programs</li>
            <li>Values formation and character-building activities</li>
            <li>Mental health awareness and wellness programs</li>
            <li>Consultation for parents, guardians, and teachers</li>
        </ul>

        <h3 class="mt-4">Role of the Guidance, Testing, Counseling and Placement Office</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Promotes the academic success and personal well-being of students</li>
            <li>Supports emotional, social, and behavioral development</li>
            <li>Provides intervention and follow-up for at-risk students</li>
            <li>Assists in resolving academic or personal difficulties</li>
            <li>Guides students in career exploration and life planning</li>
            <li>Coordinates with teachers and parents for holistic support</li>
        </ul>

        <h3 class="mt-4">Why the Guidance, Testing, Counseling and Placement Office Matters</h3>
        <div class="underline-gold"></div>

        <p>
            The Guidance, Testing, Counseling and Placement Office is an essential pillar of the school community, ensuring that students feel  
            safe, understood, and supported throughout their academic journey. It helps cultivate 
            responsible, emotionally mature, and positively engaged learners who are ready to face 
            life’s challenges with confidence.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
