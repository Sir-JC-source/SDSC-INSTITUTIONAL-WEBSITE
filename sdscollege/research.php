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
    <h1 class="header-title">Research and Publication Office</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Administrative Department</span><br>
            <span class="program-text">Research and Development</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Office Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Research and Publication Office</strong> of St. Dominic Savio College is committed to
            promoting a culture of research, innovation, and scholarly inquiry among
            students, faculty, and staff. It ensures that all research activities uphold
            ethical standards and contribute to academic excellence and institutional growth.
        </p>

        <p>
            The office provides guidance and support throughout the research process—from
            proposal development to final documentation—ensuring quality, relevance, and
            alignment with the college’s mission and vision.
        </p>

        <h3 class="mt-4">Services Offered</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Research proposal review and approval</li>
            <li>Thesis and capstone research assistance</li>
            <li>Research ethics evaluation and compliance</li>
            <li>Faculty and student research mentoring</li>
            <li>Documentation and research output monitoring</li>
        </ul>

        <h3 class="mt-4">Research Areas</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Education and social sciences</li>
            <li>Information technology and computing</li>
            <li>Business, entrepreneurship, and management</li>
            <li>Community development and institutional research</li>
        </ul>

        <h3 class="mt-4">Why Research is Important</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Enhances critical thinking and analytical skills</li>
            <li>Encourages innovation and problem-solving</li>
            <li>Supports evidence-based academic practices</li>
            <li>Strengthens institutional decision-making</li>
            <li>Prepares students for professional and graduate studies</li>
        </ul>

        <p>
            Through continuous research engagement, the Research Office empowers the
            academic community to generate knowledge, foster innovation, and contribute
            meaningfully to society.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
