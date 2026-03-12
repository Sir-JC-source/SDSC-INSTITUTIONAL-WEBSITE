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
    color: #e8e8e8;
    font-size: 22px;
    font-weight: 600;
    margin-top: 10px;
    line-height: 1.4;
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

/* GOLD LINE */
.underline-gold {
    width: 250px;
    height: 8px;
    background: #E6B800;
    margin-bottom: 20px;
}

/* COLORS FOR TITLE */
.dept-title {
    color: #d1d1c7ff;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

.course-title {
    color: #b4b7aeff;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}
</style>

<!-- PAGE HEADER SECTION -->
<div class="page-header">
    <h1 class="header-title">Instituion of Arts and Science Education</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-title">AB Psychology</span><br>
            <span class="course-title">(Bachelor of Arts in Psychology)</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The AB Psychology program focuses on understanding human behavior, mental processes, 
            personality, development, and social interactions. It prepares students for careers in 
            counseling, human resources, education, social work, clinical settings, and research.
        </p>

        <p>
            The program emphasizes scientific inquiry, behavioral analysis, psychological assessment, 
            and mental health awareness—shaping students into compassionate and analytical professionals 
            capable of supporting individual and community well-being.
        </p>

        <h3 class="mt-4">Career Opportunities for AB Psychology Graduates</h3>
        <div class="underline-gold"></div>

        <ul>
<li>Mental Health & Counseling</li>
<li>Guidance Counselor (with license)</li>
<li>Mental Health Support Staff</li>
<li>Psychometrician (with PRC license)</li>
<li>Behavioral Therapist</li>
<li>Case Manager for mental health organizations</li>
<li>Rehabilitation Specialist</li>
<li>Human Resources & Corporate Settings</li>
<li>Human Resource Assistant / HR Officer</li>
<li>Recruitment Specialist</li>
<li>Training & Development Staff</li>
<li>Organizational Development Assistant</li>
<li>Employee Relations Coordinator</li>
<li>Research & Education</li>
<li>Social Science Researcher</li>
<li>Academic Assistant / Psychology Instructor</li>
        </ul>

        <h3 class="mt-4">Career Paths</h3>
        <div class="underline-gold"></div>

        <p>Graduates of AB Psychology may pursue careers in the following fields:</p>

        <ul>
            <li>Counseling and Guidance Services</li>
            <li>Human Resource Management</li>
            <li>Social Work and Community Support</li>
            <li>Education and Training</li>
            <li>Behavioral Research</li>
            <li>Clinical and Mental Health Support (with further study)</li>
        </ul>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
