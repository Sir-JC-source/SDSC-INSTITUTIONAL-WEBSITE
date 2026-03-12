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
    <h1 class="header-title">Graduate School and Institute<br>of Professional Development</br></h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Master's Program</span><br>
            <span class="program-text">Master in Business Administration (MBA)</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Master in Business Administration (MBA)</strong> program at 
            St. Dominic Savio College is designed for professionals and aspiring leaders 
            who seek to advance their careers, strengthen their management expertise, 
            and develop strategic leadership capabilities in a dynamic business environment.
        </p>

        <p>
            The MBA program offers a balanced blend of theoretical knowledge and practical 
            application, preparing learners to become competent decision-makers, effective 
            leaders, and innovative problem solvers in various organizational settings.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Advanced leadership and managerial competencies</li>
            <li>Strategic planning and organizational development</li>
            <li>Financial analysis and corporate decision-making</li>
            <li>Business process improvement and innovation strategies</li>
            <li>Marketing management and data-driven market analysis</li>
            <li>Effective communication and corporate governance</li>
            <li>Entrepreneurship and business model development</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the MBA program may pursue leadership roles such as:</p>

        <ul>
            <li>Chief Executive Officer (CEO)</li>
            <li>Operations Manager</li>
            <li>Business Development Manager</li>
            <li>Human Resource Director</li>
            <li>Marketing Manager / Market Strategist</li>
            <li>Financial Manager / Business Analyst</li>
            <li>Corporate Consultant</li>
            <li>Project Manager</li>
            <li>Entrepreneur / Business Owner</li>
            <li>Academic Instructor / Corporate Trainer</li>
        </ul>

        <h3 class="mt-4">Why Choose MBA at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Industry-relevant curriculum for today’s business landscape</li>
            <li>Faculty with corporate leadership and professional expertise</li>
            <li>Practical case analyses and strategic management simulations</li>
            <li>Capstone projects addressing real-world organizational issues</li>
            <li>Flexible learning approaches for working professionals</li>
            <li>Strong focus on leadership, innovation, and global business trends</li>
        </ul>

        <p>
            The MBA program equips graduate students with the strategic mindset, 
            analytical skills, and leadership capabilities needed to excel in 
            managerial and executive roles across industries.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
