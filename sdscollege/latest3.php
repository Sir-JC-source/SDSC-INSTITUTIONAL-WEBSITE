<?php include 'includes/header.php'; ?>

<style>
/* Page Background */
body {
    background: #f3f7f4;
}

/* Main Event Container */
.event-details {
    max-width: 1200px;
    margin: 50px auto;
    background: #ffffff;
    padding: 50px 60px;
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
    margin-bottom: 20px;
    line-height: 1.3;
    text-align: center;
}

/* Subtitle */
.event-details h3 {
    font-weight: 700;
    color: #0d472e;
    text-align: center;
    margin-bottom: 25px;
    font-size: 24px;
}

/* Names List */
.event-details ul {
    margin-left: 20px;
}

.event-details li {
    font-size: 19px;
    line-height: 1.9;
    color: #2c2c2c;
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

/* Right Align */
.back-container {
    text-align: right;
    margin-top: 25px;
}
</style>


<div class="event-details">

    <!-- EVENT IMAGE FROM POSTER -->
    <img src="assets/images/board.jpg" alt="NQESH Passers">

    <h2>Congratulations to Our board Passers!</h2>
    <h3>For Passing the 2023 National Qualifying Examination for School Heads (NQESH)</h3>

    <p>
        St. Dominic Savio College proudly congratulates the following faculty members and professionals 
        for successfully passing the 2023 National Qualifying Examination for School Heads (NQESH). 
        Your dedication, leadership, and commitment to excellence bring honor to the SDSC community.
    </p>

    <h5><strong>Passers:</strong></h5>

    <ul>
        <li><strong>Dr. Julius D. Arguelles</strong></li>
        <li><strong>Dr. Maria Josefa E. Bolilan</strong></li>
        <li><strong>Dr. Alma Garcia</strong></li>
        <li><strong>Dr. Helen B. Katigbak</strong></li>
        <li><strong>Dr. Annaliza L. Maglangit</strong></li>
        <li><strong>Dr. Erwin D. Marasigan</strong></li>
        <li><strong>Dr. Christopher M. Panganiban</strong></li>
        <li><strong>Dr. Marissa A. Quinia</strong></li>
        <li><strong>Dr. Carolina M. Sabido</strong></li>
    </ul>

    <p>
        We commend your perseverance and remarkable achievement. 
        This milestone reflects your unwavering dedication to educational leadership and professional growth.
    </p>

    <p><strong>Once again, congratulations from the entire SDSC family!</strong></p>

    <!-- BACK BUTTON -->
    <div class="back-container">
        <a href="events.php" class="btn btn-success mt-3">← Back to Events</a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
