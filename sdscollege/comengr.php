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

/* Department + Program Colors */
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
            <span class="program-text">Bachelor of Science in Computer Engineering</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">
    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Bachelor of Science in Computer Engineering (BSCpE)</strong> program at 
            St. Dominic Savio College trains students to design, analyze, and integrate hardware and software systems. 
            Computer Engineering bridges the fields of electronics, computer science, and embedded systems.
        </p>

        <p>
            Students gain strong foundations in digital systems, microprocessors, networking, robotics, automation, 
            artificial intelligence, and integrated circuit design—preparing them for cutting-edge technological careers.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Embedded systems development (Arduino, ESP32, Raspberry Pi)</li>
            <li>Electronics and digital logic circuit design</li>
            <li>Software and hardware integration</li>
            <li>Network design and cybersecurity fundamentals</li>
            <li>Robotics and automation system design</li>
            <li>Computer architecture and operating systems</li>
            <li>AI and machine learning introduction</li>
            <li>Technical problem-solving and engineering analysis</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>BSCpE graduates can pursue careers such as:</p>

        <ul>
            <li>Computer Engineer / Hardware Engineer</li>
            <li>Embedded Systems Engineer</li>
            <li>Network Engineer / Systems Administrator</li>
            <li>Robotics and Automation Engineer</li>
            <li>IoT Developer</li>
            <li>Software Engineer / Firmware Developer</li>
            <li>AI / Machine Learning Specialist</li>
            <li>Cybersecurity Analyst</li>
            <li>Electronics Design Engineer</li>
            <li>Technical Support Engineer</li>
        </ul>

        <h3 class="mt-4">Why Choose BSCpE at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Strong foundation in both hardware and software</li>
            <li>Hands-on laboratory projects and engineering simulations</li>
            <li>Modern facilities for robotics, electronics, and computing</li>
            <li>Industry-ready curriculum aligned with global engineering standards</li>
            <li>Faculty with professional and research expertise</li>
            <li>Prepares students for licensure examinations and engineering careers</li>
        </ul>

        <p>
            BSCpE graduates are equipped to design and innovate technologies that shape the future—from smart devices 
            to intelligent systems and advanced hardware solutions.
        </p>

    </div>
</div>

<?php include 'includes/footer.php'; ?>
