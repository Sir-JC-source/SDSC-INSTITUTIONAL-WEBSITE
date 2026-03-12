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
            <span class="dept-text">Doctorate Degree</span><br>
            <span class="program-text">Doctor of Business Management (DBM)</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Program Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Doctor of Business Management (DBM)</strong> at St. Dominic Savio College 
            is a terminal degree designed for executives, business leaders, entrepreneurs, 
            academicians, and professionals who aspire to advance their expertise in strategic 
            leadership, corporate governance, research, and advanced business innovation.
        </p>

        <p>
            The program emphasizes <strong>evidence-based decision making, organizational transformation, 
            strategic foresight, and global business leadership</strong>. Through rigorous coursework, 
            research, and practical industry application, DBM graduates develop the ability to lead, 
            design, and implement high-level strategies for complex and evolving business environments.
        </p>

        <h3 class="mt-4">Key Competencies You Will Develop</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Advanced leadership and executive management skills</li>
            <li>Strategic planning and organizational development</li>
            <li>Corporate governance and ethical decision-making</li>
            <li>Research-based management solutions and business analytics</li>
            <li>Innovation, technological integration, and change leadership</li>
            <li>Policy development and global business strategy</li>
            <li>High-level communication and executive presentation skills</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the DBM program may pursue high-level leadership roles such as:</p>

        <ul>
            <li>Chief Executive Officer (CEO)</li>
            <li>Chief Operations Officer (COO)</li>
            <li>Business Consultant / Management Consultant</li>
            <li>Corporate Strategist</li>
            <li>Executive Director</li>
            <li>College Dean / Program Chair</li>
            <li>Business School Professor / Researcher</li>
            <li>Entrepreneur / Corporate Innovator</li>
        </ul>

        <h3 class="mt-4">Why Take DBM at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Research-focused curriculum aligned with global executive standards</li>
            <li>Mentorship from experienced business leaders and academic experts</li>
            <li>Flexible learning suited for working professionals</li>
            <li>Capstone research addressing real-world organizational issues</li>
            <li>Leadership development for corporate and academic advancement</li>
            <li>Strong professional network and industry linkages</li>
        </ul>

        <p>
            The Doctor of Business Management program equips aspiring business leaders 
            with advanced knowledge, research expertise, and strategic competence to 
            lead modern organizations and drive sustainable growth in a competitive global marketplace.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
