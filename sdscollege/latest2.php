<?php include 'includes/header.php'; ?>

<style>
/* Page Background */
body {
    background: #f3f7f4;
}

/* Main Event Container */
.event-details {
    max-width: 1200px; /* wider like DLSU */
    margin: 50px auto;
    background: #ffffff;
    padding: 50px 60px; /* wider left-right spacing */
    border-radius: 12px;
    box-shadow: 0 8px 22px rgba(0,0,0,0.06);
    border-left: 6px solid #0d472e;
}

/* Event Image */
.event-details img {
    width: 100%;
    border-radius: 12px;
    margin-bottom: 30px;
}

/* Title */
.event-details h2 {
    font-weight: 700;
    color: #0d472e;
    font-size: 32px;
    margin-bottom: 25px;
    line-height: 1.3;
}

/* Subtitles */
.event-details h5 {
    color: #0d472e;
    font-weight: 700;
    margin-top: 30px;
    margin-bottom: 10px;
    font-size: 20px;
}

/* Paragraph Text */
.event-details p,
.event-details li {
    font-size: 19px;
    line-height: 1.9;
    color: #2c2c2c;
    text-align: justify;
}

.event-details ul {
    margin-left: 20px;
}

/* Back Button */
.event-details a.btn-success {
    background: #0d472e;
    border: none;
    padding: 12px 25px;
    font-size: 17px;
    border-radius: 10px;
}

.event-details a.btn-success:hover {
    background: #0b3c26;
}

/* RIGHT ALIGN BUTTON */
.back-container {
    text-align: right;
    margin-top: 25px;
}
</style>


<div class="event-details">
    <img src="assets/images/team.jpg" alt="Hiring Image">

    <h2>Join Our Team – St. Dominic Savio College is Now Hiring Qualified Professionals</h2>

    <p>
        St. Dominic Savio College is inviting dedicated and skilled applicants to join our academic and administrative departments. 
        We are looking for passionate individuals who are committed to excellence, student development, and institutional growth.
    </p>

    <h5><strong>We Are Looking For (Full Time):</strong></h5>
    <ul>
        <li><strong>Dean</strong> (preferably with Ph.D)
            <ul>
                <li>College of Accountancy, Business, Hospitality and Tourism Management</li>
                <li>College of Criminal Justice</li>
                <li>College of Health Related Courses</li>
            </ul>
        </li>

        <li><strong>Principal</strong></li>

        <li><strong>College Instructor</strong>  
            <br>(Chemistry/Physics, Nursing, Business Management, Marketing Management, Accountancy (CPA), 
            Computer Engineering, Computer Science, Criminology, Psychology)  
            <br>*Preferably with MA*
        </li>
    </ul>

    <h5><strong>Basic Education & Administrative Positions</strong></h5>
    <ul>
        <li><strong>Basic Education Teacher</strong> (Science, ICT, Physical Education)</li>
        <li><strong>Guidance Counselor</strong> (with Professional License)</li>
        <li><strong>Librarian</strong> (with Professional License)</li>
        <li><strong>Administrative Assistant</strong></li>
    </ul>

    <h5><strong>Requirements</strong></h5>
    <ul>
        <li>Comprehensive Resume</li>
        <li>Relevant Degree</li>
        <li>School Credentials (TOR, Diploma, Certificates)</li>
        <li>Preferably with experience</li>
        <li>Strong communication skills</li>
        <li>Growth mindset / proactive attitude</li>
    </ul>

    <h5><strong>How to Apply</strong></h5>
    <p>
        Please send your resume and other required documents to:
        <br><strong>Email:</strong> hrd@sdsc.edu.ph
        <br><strong>File Name Format:</strong> SURNAME_APPLICANT_SDSC
    </p>

    <p>
        Only applications with complete documents will be processed.
        Applications for full-time positions will be prioritized.
    </p>

    <!-- RIGHT-SIDE BUTTON -->
    <div class="back-container">
        <a href="events.php" class="btn btn-success mt-3">← Back to Events</a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
