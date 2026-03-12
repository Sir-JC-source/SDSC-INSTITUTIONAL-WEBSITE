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
    <h1 class="header-title">College of Accountancy, Business, Hospitality and Tourism Management</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">College Department</span><br>
            <span class="program-text">Bachelor of Science in Business Administration</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Bachelor of Science in Business Administration (BSBA)</strong> program at 
            St. Dominic Savio College prepares students to become competent, ethical, and innovative 
            business professionals capable of managing and leading organizations in a global environment.
        </p>

        <p>
            The program develops strong foundations in management, marketing, finance, human resources, 
            entrepreneurship, and strategic decision-making. BSBA equips Savians with real-world business 
            competencies through case studies, practical projects, simulations, and industry exposure.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Business planning and strategic management</li>
            <li>Leadership and organizational development</li>
            <li>Financial and operational decision-making</li>
            <li>Sales, digital marketing, and market research</li>
            <li>Entrepreneurship and business innovation</li>
            <li>Human resource and talent management</li>
            <li>Effective communication and corporate professionalism</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the BSBA program may pursue roles such as:</p>

        <ul>
            <li>Business Manager / Business Analyst</li>
            <li>Marketing Manager / Brand Manager</li>
            <li>HR Officer / Recruitment Specialist</li>
            <li>Entrepreneur / Business Owner</li>
            <li>Sales Executive / Sales Manager</li>
            <li>Operations Supervisor</li>
            <li>Financial Analyst</li>
            <li>Administrative Manager</li>
            <li>Corporate Trainer</li>
            <li>Customer Relations Manager</li>
        </ul>

        <h3 class="mt-4">Why Choose BSBA at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Industry-aligned curriculum for modern business demands</li>
            <li>Real-world projects and business simulations</li>
            <li>Faculty with professional corporate and entrepreneurial experience</li>
            <li>Training in leadership, communication, and innovation</li>
            <li>Opportunities for internship and industry partnerships</li>
            <li>Strong preparation for business careers or starting your own venture</li>
        </ul>

        <p>
            BSBA graduates are equipped with the knowledge and skills to become 
            effective leaders and contributors in corporate, entrepreneurial, and global business environments.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
