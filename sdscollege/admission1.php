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

.header-title {
    font-size: 48px;
    font-weight: 700;
    color: #fff;
    text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.7);
}

.header-subtitle {
    color: #cfd2cd;
    font-size: 22px;
    font-weight: 600;
    margin-top: 10px;
    line-height: 1.4;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
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

/* ---- TWO-COLUMN LAYOUT FOR WHY CHOOSE ---- */
.admission-row {
    display: flex;
    flex-wrap: wrap;
    gap: 30px;
    margin-top: 20px;
}

/* Left column – Why Choose SDSC */
.admission-left {
    flex: 1;
    min-width: 300px;
}
</style>

<!-- PAGE HEADER -->
<div class="page-header">
    <h1 class="header-title">Admission</h1>
    <h3 class="header-subtitle">Admission Services</h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <!-- OVERVIEW -->
        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The Admission Services of St. Dominic Savio College ensures a smooth and welcoming enrollment experience 
            for all incoming students. We guide applicants through each step — from inquiry and submission of 
            requirements to evaluation, orientation, and official enrollment.
        </p>

        <!-- ADMISSION REQUIREMENTS -->
        <h3 class="mt-5">Admission Requirements</h3>
        <div class="underline-gold"></div>

        <h4><strong>Fusion Learning Center<br>(Basic Education)</strong></h4>
        <ul>
            <li>PSA Birth Certificate (Original Copy)</li>
            <li>Report Card</li>
            <li>Form 137</li>
            <li>Certificate of Good Moral Character</li>
            <li>4 pcs of 1x1 & 2x2 ID Pictures</li>
            <li>NCAE Results (SHS Only)</li>
            <li>Honorable Dismissal (Transferees)</li>
        </ul>

        <h4 class="mt-4"><strong>College</strong></h4>
        <ul>
            <li>PSA Birth Certificate (Original Copy)</li>
            <li>Form 137 (Freshmen)</li>
            <li>Transcript of Record</li>
            <li>Certificate of Good Moral Character</li>
            <li>4 pcs of 1x1 & 2x2 ID Pictures</li>
            <li>Honorable Dismissal (Transferees)</li>
        </ul>

        <h4 class="mt-4"><strong>Graduate School and School of Law</strong></h4>
        <ul>
            <li>PSA Birth Certificate (Original Copy)</li>
            <li>Married Certificate (For Married Female)</li>
            <li>Original Transcript of Record</li>
            <li>Certificate of Good Moral Character</li>
            <li>4 pcs of 1x1 & 2x2 ID Pictures</li>
            <li>Honorable Dismissal (Transferees)</li>
        </ul>

        <h4 class="mt-4"><strong>Foreign Students</strong></h4>
        <ul>
            <li>Student Visa or Study Permit</li>
            <li>(ACR) Alien Certificate of Registration</li>
            <li>Passport (Bio page and pages with stamp)</li>
            <li>Affidavit of Guardianship (if 18 years old)</li>
            <li>Original Transcript of Records</li>
            <li>Original Birth Certificate</li>
            <li>Certificate of Good Moral Character</li>
            <li>Honorable Dismissal (For Transferee)</li>
            <li>4 pcs of 1x1 & 2x2 ID Pictures</li>
        </ul>

        <!-- ADMISSION DATES -->
        <h3 class="mt-5">Admission Schedule</h3>
        <div class="underline-gold"></div>

        <ul>
            <li><strong>Preschool – Grade 6:</strong> </li>
            <li><strong>Junior High School (Grade 7–10):</strong> </li>
            <li><strong>Senior High School (All Strands):</strong> </li>
            <li><strong>College (All Programs):</strong> </li>
            <li><strong>Graduate School & School of Law:</strong> </li>
            <li><strong>School of Law:</strong> </li>
        </ul>

        <!-- ADMISSION PROCEDURES -->
<h3 class="mt-5">Admission Procedures</h3>
<div class="underline-gold"></div>

<ol>
    <li><strong>Step 1: Admission Office</strong> – Fill out the Application Form.</li>
    <li><strong>Step 2: Business Affairs Office</strong> – Pay Application Fee.</li>
    <li><strong>Step 3: Guidance Office</strong> – Take the Qualifying Examination.</li>
    <li><strong>Step 4: Admission Office</strong> – Issuance of Permit to Enroll,<br>Fill out Registration Form</li>
    <li><strong>Step 5: Business Affairs Office</strong> – Pay Tuition & Fees,<br>Receive Uniforms & Books</li>
    <li><strong>Step 6: Official Enrollment</strong> – Issuance of Student ID.</li>
</ol>

<!-- WHY CHOOSE -->
<div class="admission-row mt-5">
    <div class="admission-left">
        <h3>Why Choose St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Student-centered academic programs</li>
            <li>Competent and compassionate faculty</li>
            <li>Industry-aligned curriculum across all levels</li>
            <li>Safe and values-oriented learning environment</li>
            <li>Strong academic support and student services</li>
        </ul>
    </div>
</div>
 </div> <!-- end of content-box -->
</div> <!-- end of container -->

<?php include 'includes/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>