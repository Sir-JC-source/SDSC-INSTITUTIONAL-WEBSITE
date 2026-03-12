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
    color: #d7c8faff; /* Light purple */
    font-size: 22px;
    font-weight: 600;
    margin-top: 10px;
    line-height: 1.4;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

/* CONTENT BOX */
.content-box {
    background: #f6f8f7ff;
    border-left: 6px solid #0C4B34; /* Deep purple for AB MassComm */
    padding: 40px;
    border-radius: 10px;
    margin-top: -40px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.1);
}

/* GOLD LINE */
.underline-gold {
    width: 250px;
    height: 8px;
    background: #E6B800;
    margin-bottom: 20px;
}

/* CUSTOM COLORS FOR THIS PAGE */
.masscomm-dept {
    color: #e7ddffff; /* Soft light purple */
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

.masscomm-title {
    color: #d4c7f7ff; /* Light lavender */
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}
</style>

<!-- PAGE HEADER SECTION -->
<div class="page-header">
    <h1 class="header-title">Instituion of Arts and Science Education</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="masscomm-dept">AB Mass Communication</span><br>
            <span class="masscomm-title">(Bachelor of Arts in Mass Communication)</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Program Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The AB Mass Communication program equips students with comprehensive skills in journalism, 
            broadcasting, digital media production, advertising, film studies, and public relations.
            It prepares students to become effective storytellers and communicators across various media 
            platforms.
        </p>

        <p>
            This program emphasizes responsible communication, critical thinking, creativity, and professional 
            media practice. Graduates are trained to analyze, produce, and disseminate messages effectively 
            to diverse audiences in a rapidly evolving media landscape.
        </p>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Journalist / News Writer</li>
            <li>TV or Radio Broadcaster</li>
            <li>Digital Content Creator</li>
            <li>Public Relations Specialist</li>
            <li>Media Researcher</li>
            <li>Scriptwriter / Copywriter</li>
            <li>Film / Video Editor</li>
            <li>Social Media Manager</li>
        </ul>

        <h3 class="mt-4">Program Strengths</h3>
        <div class="underline-gold"></div>

        <p>
            The program offers strong industry exposure, hands-on media production training, 
            and opportunities for collaboration on real-world communication projects. Students develop 
            confidence, leadership, and professional communication skills essential for careers in the 
            media industry.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
