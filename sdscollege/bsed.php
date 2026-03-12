<?php include 'includes/header.php'; ?>

<style>
/* ---- ALL YOUR STYLES HERE ---- */

.page-header {
    background: url('./assets/images/campus1.jpg') center/cover no-repeat;
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
    color: #9a9e9bff;
    font-size: 22px;
    font-weight: 600;
    margin-top: 10px;
    line-height: 1.4;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

/* Color accents */
.jhs-dept {
    color: #d1d1c7ff;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

.jhs-grade {
    color: #888b82ff;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

/* CONTENT BOX */
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
    <h1 class="header-title">Institution of Arts and Science Education</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="jhs-dept">Bachelor of Secondary Education</span><br>
            <span class="jhs-grade">Major in English</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Program Overview</h2>
        <div class="underline-gold"></div>

        <p>The <strong>Bachelor of Secondary Education Major in English (BSED-English)</strong> at 
        St. Dominic Savio College is designed to prepare future high school English teachers with 
        strong foundations in literature, linguistics, communication, and pedagogy. The program 
        equips students with the knowledge and skills needed to teach English effectively to 
        Junior and Senior High School learners.</p>

        <p>The curriculum emphasizes communication mastery, critical analysis of texts, and 
        creative teaching strategies, ensuring that graduates are capable, confident, and 
        compassionate educators.</p>

        <h3 class="mt-4">What You Will Learn</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>English grammar, structure, and applied linguistics</li>
            <li>Literature analysis (local, Asian, world literature)</li>
            <li>Effective classroom communication</li>
            <li>Assessment and evaluation strategies</li>
            <li>English language teaching methodologies</li>
            <li>Creative and research-based instruction</li>
            <li>Curriculum development for English subjects</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of BSED English may pursue professions such as:</p>

        <ul>
            <li>High School English Teacher</li>
            <li>Creative Writer or Editor</li>
            <li>Content Creator / Copywriter</li>
            <li>School Administrator / Academic Coordinator</li>
            <li>Education Researcher</li>
            <li>Public Speaker / Communication Trainer</li>
            <li>ESL Teacher (local or abroad)</li>
        </ul>

        <h3 class="mt-4">Why Choose BSED-English at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Values-based and student-centered teacher training</li>
            <li>Strong foundation in literature and communication</li>
            <li>Experienced and dedicated faculty</li>
            <li>Hands-on teaching practicum in partner schools</li>
            <li>Preparation for LET (Licensure Examination for Teachers)</li>
            <li>Character formation aligned with Savian identity</li>
        </ul>

        <p>The BSED-English program empowers future educators to communicate with excellence, 
        teach with integrity, and inspire learners through the power of language.</p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
