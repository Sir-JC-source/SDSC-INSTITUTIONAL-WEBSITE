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
    <h1 class="header-title">Information Technology Knowledge and <br>Management Office</br></h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Administrative Department</span><br>
            <span class="program-text">Information Technology Services</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Information Technology Knowledge and Management Office (ITKMO)</strong> of St. Dominic Savio College plays a vital role 
            in ensuring that the institution’s technological systems, digital platforms, and campus-wide 
            network infrastructure operate efficiently and securely.
        </p>

        <p>
            As the backbone of the school’s digital operations, the ITKMO provides technical support, 
            manages information systems, maintains cybersecurity, and ensures that all students, faculty, 
            and staff have access to reliable technology resources.
        </p>

        <h3 class="mt-4">Services Offered</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Technical support for faculty, staff, and students</li>
            <li>Maintenance of computers, networks, and campus IT equipment</li>
            <li>Management of school information systems and online platforms</li>
            <li>Troubleshooting of system and network issues</li>
            <li>Email, LMS, and school portal assistance</li>
            <li>Campus cybersecurity monitoring</li>
            <li>Software installation and system configuration</li>
        </ul>

        <h3 class="mt-4">ITKMO Office Responsibilities</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Ensuring operational stability of campus networks and servers</li>
            <li>Providing immediate support for technical concerns</li>
            <li>Implementing data security and privacy measures</li>
            <li>Managing digital records and system access</li>
            <li>Coordinating upgrades for hardware and software</li>
            <li>Supporting online classes and digital learning tools</li>
        </ul>

        <h3 class="mt-4">Why the Information Technology Knowledge and Management Office  Matters</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Ensures smooth digital operations for the entire institution</li>
            <li>Enhances learning through reliable technology</li>
            <li>Maintains secure access to academic platforms</li>
            <li>Provides fast and efficient tech support</li>
            <li>Supports innovations and system improvements</li>
        </ul>

        <p>
            The ITKMO remains committed to delivering professional, reliable, and innovative technology 
            solutions that empower both teaching and learning at St. Dominic Savio College.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
