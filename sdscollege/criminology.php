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
    <h1 class="header-title">College of Criminal Justice</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">College Department</span><br>
            <span class="program-text">Bachelor of Science in Criminology</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Bachelor of Science in Criminology (BSCRIM)</strong> program at 
            St. Dominic Savio College trains students to become competent, disciplined, and 
            ethical professionals in the fields of law enforcement, public safety, forensic science, 
            and criminal justice.
        </p>

        <p>
            The program equips future criminologists with knowledge in crime prevention, investigation, 
            criminal behavior, criminal law, forensic procedures, and the justice system. 
            Students gain hands-on training through practical exercises, crime scene simulations, 
            physical training, and field exposure programs.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Crime investigation and crime scene processing</li>
            <li>Understanding of criminal law and justice system</li>
            <li>Forensic science skills and laboratory techniques</li>
            <li>Criminal behavior analysis and profiling</li>
            <li>Law enforcement operations and procedures</li>
            <li>Discipline, leadership, and physical fitness</li>
            <li>Report writing, interviewing, and interrogation skills</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the BS Criminology program may pursue roles such as:</p>

        <ul>
            <li>Police Officer / Police Investigator</li>
            <li>Forensic Specialist / Crime Scene Investigator</li>
            <li>Criminal Analyst / Intelligence Officer</li>
            <li>Jail Officer (BJMP) / Corrections Officer</li>
            <li>Fire Officer (BFP)</li>
            <li>Security Manager / Security Consultant</li>
            <li>Probation and Parole Officer</li>
            <li>Customs Officer / NBI / PDEA Agent</li>
            <li>Private Detective / Loss Prevention Officer</li>
            <li>Academician / Criminology Instructor</li>
        </ul>

        <h3 class="mt-4">Why Choose BS Criminology at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Strong foundation in law enforcement, forensics, and justice</li>
            <li>Practical training and crime scene simulations</li>
            <li>Experienced instructors from the field of criminology and public safety</li>
            <li>Holistic formation including discipline, leadership, and physical conditioning</li>
            <li>Opportunities for field immersion with law enforcement agencies</li>
            <li>Preparation for licensure examinations and law enforcement careers</li>
        </ul>

        <p>
            BS Criminology graduates are prepared to serve in law enforcement, forensic science, 
            corrections, public safety, and various government and private security sectors.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
