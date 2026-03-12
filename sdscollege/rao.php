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

/* Department Text */
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
    <h1 class="header-title">Registrar's Office</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Administrative Department</span><br>
            <span class="program-text">Registration and Admission Office</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">
    <div class="content-box">

        <h2>Office Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Registration and Admission Office</strong> of St. Dominic Savio College is responsible  
            for the management, security, and integrity of all student academic records.  
            It ensures the efficient delivery of enrollment services, documentation processing,  
            and academic information support for students, parents, faculty, and institutional partners.
        </p>

        <p>
            As a central unit of the academic operations, the Registrar’s Office upholds accuracy,  
            confidentiality, and excellence in service while implementing school policies and  
            government regulations related to student records and academic compliance.
        </p>

        <h3 class="mt-4">Services Offered</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Student enrollment, re-enrollment, and admission record processing</li>
            <li>Issuance of official documents (TOR, diploma, certifications, grades)</li>
            <li>Management of student academic records and permanent files</li>
            <li>Processing of subject loads, credentials, and academic evaluations</li>
            <li>Verification and authentication of school documents</li>
            <li>Coordination of graduation and clearance procedures</li>
            <li>Submission of official data and reports to regulatory bodies</li>
        </ul>

        <h3 class="mt-4">Responsibilities</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Maintains the integrity and accuracy of academic records</li>
            <li>Ensures compliance with DepEd, CHED, and other governing agencies</li>
            <li>Implements policies on admission, enrollment, and academic standing</li>
            <li>Oversees the safekeeping and confidentiality of student information</li>
            <li>Provides support to faculty and administrators regarding academic data</li>
        </ul>

        <h3 class="mt-4">Why the Registration and Admission Office Matters</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Serves as the official custodian of all academic records</li>
            <li>Ensures smooth and organized academic processes for all students</li>
            <li>Supports institutional credibility through accurate documentation</li>
            <li>Plays a key role in student progression, graduation, and certification</li>
        </ul>

        <p>
            The Registration and Admission Office is committed to delivering responsive, transparent,  
            and student-centered services while ensuring the highest standards of academic record management.
        </p>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
