<?php include 'includes/header.php'; ?>

<style>
/* Page Background */
body {
    background: #e8f2ec; /* institutional light green */
}

/* Main Container */
.event-details {
    max-width: 1200px;
    margin: 50px auto;
    background: #ffffff;
    padding: 50px 60px;
    border-radius: 14px;
    box-shadow: 0 10px 28px rgba(0, 64, 35, 0.10);
    border-left: 8px solid #0d472e; /* SDSC dark green */
}

/* Icon Image */
.event-details img {
    width: 140px;
    margin: 0 auto 25px;
    display: block;
}

/* Title */
.event-details h2 {
    font-weight: 800;
    color: #0d472e;
    font-size: 34px;
    text-align: center;
    margin-bottom: 20px;
}

/* Subtitle */
.event-details h3 {
    font-weight: 700;
    color: #0d472e;
    margin-top: 35px;
    margin-bottom: 15px;
    font-size: 22px;
}

/* Text */
.event-details p,
.event-details li {
    font-size: 19px;
    line-height: 1.9;
    color: #1b1b1b;
    text-align: justify;
}

/* List spacing */
.event-details ul {
    margin-left: 22px;
}

/* Back Button */
.event-details a.btn-success {
    background: #0d472e;
    border: none;
    padding: 12px 28px;
    font-size: 17px;
    border-radius: 10px;
    font-weight: 600;
}

.event-details a.btn-success:hover {
    background: #0a3522;
}

/* Right Align */
.back-container {
    text-align: right;
    margin-top: 25px;
}
</style>


<div class="event-details">

    <!-- Linkages Icon -->
    <img src="assets/images/linkages_icon.png" alt="Linkages & Affiliations Icon">

    <h2>Linkages & Affiliations</h2>

    <p>
        St. Dominic Savio College actively collaborates with local and international 
        <strong>institutions, organizations, industries, and community partners</strong>.
        These partnerships strengthen our academic programs, expand learning opportunities, 
        and support our mission to deliver quality education.
    </p>

    <h3><strong>Our Partner Institutions</strong></h3>
    <ul>
        <li><strong>Local Government Units (LGUs)</strong><br>
            Partnerships that support community outreach, training, and development initiatives.
        </li>

        <li><strong>Industry & Corporate Partners</strong><br>
            Collaborations for internships, job placement, industry immersions, and competency training.
        </li>

        <li><strong>Educational Institutions</strong><br>
            Shared programs, seminars, benchmarking, and academic exchanges.
        </li>

        <li><strong>National Organizations</strong><br>
            Membership and participation in professional and educational associations.
        </li>

        <li><strong>Community & Non-Profit Partners</strong><br>
            Joint programs promoting social responsibility, volunteerism, and community empowerment.
        </li>
    </ul>

    <h3><strong>Benefits of Our Linkages</strong></h3>
    <ul>
        <li>Enhanced academic programs through expert collaboration</li>
        <li>Opportunities for student internships and field training</li>
        <li>Professional development for faculty and staff</li>
        <li>Access to updated industry practices and technologies</li>
        <li>Stronger community engagement and advocacy initiatives</li>
    </ul>

    <p>
        Through these linkages, SDSC continues to foster growth, innovation, and excellence — 
        shaping students to become globally competitive and community-centered individuals.
    </p>

    <div class="back-container">
        <a href="index.php" class="btn btn-success mt-3">← Back</a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
