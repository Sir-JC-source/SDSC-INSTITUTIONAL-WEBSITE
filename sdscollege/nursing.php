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
    <h1 class="header-title">College of Nursing</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">College Department</span><br>
            <span class="program-text">Bachelor of Science in Nursing</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Bachelor of Science in Nursing (BSN)</strong> program at 
            St. Dominic Savio College prepares students to become compassionate, 
            skilled, and competent professional nurses capable of providing high-quality 
            holistic care in various healthcare settings—both locally and internationally.
        </p>

        <p>
            The program combines intensive theoretical learning, clinical experience, 
            and hands-on hospital training. Students develop strong foundational 
            knowledge in patient care, health assessment, pharmacology, community health, 
            and critical nursing skills essential for modern healthcare practice.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Clinical nursing skills and patient management</li>
            <li>Health assessment and vital signs interpretation</li>
            <li>Emergency and critical care response</li>
            <li>Communication and bedside care excellence</li>
            <li>Medication administration and documentation</li>
            <li>Community and public health nursing</li>
            <li>Research, case analysis, and evidence-based practice</li>
            <li>Teamwork in medical and interdisciplinary environments</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>BS Nursing graduates may pursue careers such as:</p>

        <ul>
            <li>Registered Nurse (Local or Abroad)</li>
            <li>Clinical Nurse / Hospital Nurse</li>
            <li>Community Health Nurse</li>
            <li>Emergency Room / ICU Nurse</li>
            <li>School Nurse / Company Nurse</li>
            <li>Public Health Nurse</li>
            <li>Nurse Educator / Clinical Instructor</li>
            <li>Midwife (with additional certification)</li>
            <li>Nurse Researcher / Nurse Case Manager</li>
            <li>Home Care Nurse</li>
            <li>Nurse in Government Agencies (DOH, Red Cross, LGU)</li>
        </ul>

        <h3 class="mt-4">Why Choose BS Nursing at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>State-of-the-art nursing laboratories and simulation facilities</li>
            <li>Strong hospital affiliations for clinical duties</li>
            <li>Experienced and licensed nurse educators</li>
            <li>Competency-based curriculum aligned with national nursing standards</li>
            <li>Training in emergency response, patient care, and health promotion</li>
            <li>Holistic preparation for the Nursing Licensure Examination (NLE)</li>
        </ul>

        <p>
            BS Nursing graduates from St. Dominic Savio College are equipped with the 
            knowledge, skills, and compassion needed to excel in the healthcare profession 
            and make a meaningful impact in the lives of patients and communities.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
