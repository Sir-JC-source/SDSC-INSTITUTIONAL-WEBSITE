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
            <span class="dept-text">Juris Doctor Program</span><br>
            <span class="program-text">(Non-Thesis)</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Program Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Juris Doctor (JD) – Non-Thesis Track</strong> at St. Dominic Savio College 
            is a professional doctoral program designed for individuals seeking advanced legal education 
            and preparation for careers in law, governance, public service, corporate practice, and legal consultancy.
        </p>

        <p>
            The JD program emphasizes practical legal training, case analysis, statutory construction, 
            courtroom exposure, and the development of strong ethical and analytical foundations. 
            It prepares students for the Philippine Bar Examination and equips them with the competence 
            expected of future legal practitioners and leaders.
        </p>

        <h3 class="mt-4">What You Will Learn</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Foundations of Philippine law, legal systems, and judicial processes</li>
            <li>Advanced case analysis, legal reasoning, and argumentation</li>
            <li>Criminal, civil, commercial, labor, and administrative law applications</li>
            <li>Legal ethics, professional responsibility, and values formation</li>
            <li>Statutory interpretation and jurisprudential analysis</li>
            <li>Drafting legal documents, pleadings, and contracts</li>
            <li>Practical training through simulations, legal clinics, and moot courts</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the Juris Doctor program may pursue roles such as:</p>

        <ul>
            <li>Licensed Lawyer (upon passing the Bar)</li>
            <li>Legal Researcher / Legal Officer</li>
            <li>Corporate Legal Counsel</li>
            <li>Public Attorney / Prosecutor</li>
            <li>Judicial Staff Assistant or Court Legal Researcher</li>
            <li>Compliance Officer or Policy Analyst</li>
            <li>Government Legal Consultant</li>
            <li>Law Educator or Legal Trainer</li>
        </ul>

        <h3 class="mt-4">Why Choose the JD Program at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Professionally oriented curriculum designed for Bar readiness</li>
            <li>Guidance from experienced practitioners, legal scholars, and industry leaders</li>
            <li>Training in litigation, legal writing, and professional ethics</li>
            <li>Opportunities for moot court, legal clinics, and community engagement</li>
            <li>Strong focus on practical application and competency-based learning</li>
            <li>Flexible program structure suited for working professionals</li>
        </ul>

        <p>
            The Juris Doctor – Non-Thesis Track prepares future legal professionals 
            with the knowledge, skills, and ethical grounding needed to excel in 
            the legal field and contribute meaningfully to society.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
