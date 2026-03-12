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
    <h1 class="header-title">Engineering and Computer Related Studies</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">College Department</span><br>
            <span class="program-text">Bachelor of Science in Computer Science</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">
    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Bachelor of Science in Computer Science (BSCS)</strong> program at 
            St. Dominic Savio College equips students with strong foundations in algorithms, 
            programming, software development, and modern computing technologies.
        </p>

        <p>
            This program focuses on developing problem-solving skills, logical reasoning, 
            and hands-on proficiency in building applications, systems, and intelligent technologies. 
            Students gain experience through projects, coding labs, research, and industry-aligned training.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Programming (Python, Java, C/C++, Web Technologies)</li>
            <li>Software development and engineering</li>
            <li>Algorithms and data structures</li>
            <li>Database design and management</li>
            <li>Computer networks and system architecture</li>
            <li>Artificial Intelligence and Machine Learning basics</li>
            <li>Cybersecurity fundamentals</li>
            <li>Mobile and web application development</li>
            <li>Problem-solving and computational thinking</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the BSCS program may pursue roles such as:</p>

        <ul>
            <li>Software Developer / Programmer</li>
            <li>Web Developer / Mobile App Developer</li>
            <li>Systems Analyst</li>
            <li>IT Specialist / Network Administrator</li>
            <li>Database Administrator</li>
            <li>Cybersecurity Analyst</li>
            <li>AI / Machine Learning Engineer</li>
            <li>Game Developer</li>
            <li>Data Analyst</li>
            <li>Tech Startup Founder</li>
        </ul>

        <h3 class="mt-4">Why Choose BSCS at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Hands-on learning through systems development projects</li>
            <li>Strong foundation in modern programming and computing</li>
            <li>Experienced faculty with industry and research expertise</li>
            <li>Training aligned with global IT standards</li>
            <li>Opportunities for internships, tech bootcamps, and competitions</li>
            <li>Preparation for IT certification and advanced computing careers</li>
        </ul>

        <p>
            BSCS graduates are prepared to innovate and excel in the fast-growing world of 
            technology, software development, and digital solutions.
        </p>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
