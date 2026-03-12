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
    <h1 class="header-title">Collge of Accountancy, Business, Hospitality and Tourism</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">College Department</span><br>
            <span class="program-text">Bachelor of Science in Accountancy</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Bachelor of Science in Accountancy (BSA)</strong> program at St. Dominic Savio College 
            is designed for students who aspire to become professional accountants and financial experts. 
            The program provides rigorous training in financial accounting, auditing, taxation, and business law 
            to prepare students for professional certification and high-level roles in the finance industry.
        </p>

        <p>
            BSA is a specialized and comprehensive program aligned with the standards of the 
            <strong>Certified Public Accountant (CPA)</strong> board examination. Through strong academic 
            foundation, analytical development, and ethical formation, the program molds students into competent 
            and responsible accounting professionals.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Financial reporting and analysis</li>
            <li>Auditing and assurance skills</li>
            <li>Taxation and regulatory compliance</li>
            <li>Business law and corporate governance understanding</li>
            <li>Critical and analytical thinking</li>
            <li>Data-driven decision-making</li>
            <li>Ethical financial management</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the BSA program can pursue careers such as:</p>

        <ul>
            <li>Certified Public Accountant (CPA)</li>
            <li>Financial Accountant</li>
            <li>Auditor (Internal or External)</li>
            <li>Tax Specialist / Tax Consultant</li>
            <li>Corporate Accountant</li>
            <li>Budget Analyst</li>
            <li>Cost Accountant</li>
            <li>Forensic Accountant</li>
            <li>Finance Manager</li>
            <li>Accounting Educator</li>
        </ul>

        <h3 class="mt-4">Why Choose BSA at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Strong CPA-board–aligned curriculum</li>
            <li>Experienced faculty with industry background</li>
            <li>High-quality training in accounting, auditing, and taxation</li>
            <li>Ethics-centered business education</li>
            <li>Hands-on financial and auditing activities</li>
            <li>Preparation for careers in corporate, government, or public practice</li>
        </ul>

        <p>
            The BSA program empowers Savians to become competent, ethical, and in-demand accounting professionals 
            equipped for both local and global industries.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
