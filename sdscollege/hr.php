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
    <h1 class="header-title">Human Resources Office</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Administrative Department</span><br>
            <span class="program-text">Human Resources and Personnel Management</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Office Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Human Resources Office</strong> of St. Dominic Savio College plays a vital role 
            in fostering a professional, efficient, and employee-centered workplace. The HR Office ensures 
            that the institution maintains a dedicated and competent workforce aligned with the mission 
            and values of the college.
        </p>

        <p>
            The HR Office oversees recruitment, employee development, workplace policies, performance 
            management, and employee relations. It serves as a bridge between employees and management 
            while safeguarding fairness, integrity, and professional growth within the institution.
        </p>

        <h3 class="mt-4">Core Functions of the HR Office</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Recruitment and onboarding of qualified faculty and staff</li>
            <li>Employee records management and HR documentation</li>
            <li>Performance evaluation and competency assessment</li>
            <li>Employee welfare, workplace standards, and grievance handling</li>
            <li>Implementation of school policies and labor regulations</li>
            <li>Training, seminars, and professional development programs</li>
            <li>Timekeeping, attendance, and contract monitoring</li>
            <li>Promotion of a positive and productive work environment</li>
        </ul>

        <h3 class="mt-4">Services Offered</h3>
        <div class="underline-gold"></div>

        <p>The HR Office provides essential services to employees, including:</p>

        <ul>
            <li>Processing of employment documents</li>
            <li>Employee verification and certificate requests</li>
            <li>Orientation for new personnel</li>
            <li>Workload and contract coordination</li>
            <li>Conflict resolution and employee support</li>
            <li>Scheduling of trainings and capability-building programs</li>
        </ul>

        <h3 class="mt-4">Why the HR Office Matters</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Ensures smooth and organized workplace processes</li>
            <li>Upholds fairness, professionalism, and ethical standards</li>
            <li>Supports employee well-being and career development</li>
            <li>Maintains compliance with institutional and legal HR requirements</li>
            <li>Strengthens employee–management relations</li>
        </ul>

        <p>
            The Human Resources Office is committed to creating a professional, inclusive, and empowering 
            environment where all employees can thrive and contribute meaningfully to the college's mission 
            of academic excellence and holistic development.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
