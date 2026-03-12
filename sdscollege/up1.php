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

/* Text */
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

/* Right Align */
.back-container {
    text-align: right;
    margin-top: 25px;
}
</style>


<div class="event-details">

    <!-- Replace with actual Family Day poster image -->
    <img src="assets/images/fam.jpg" alt="Family Day">

    <h2>SDSC Family Day Celebration</h2>
    <h3>Bringing Families Together in Fun, Unity, and Joy</h3>

    <p>
        St. Dominic Savio College proudly invites all students, parents, guardians, and faculty members 
        to our annual <strong>Family Day Celebration</strong> — a day filled with laughter, bonding moments, 
        exciting activities, and meaningful memories.
    </p>

    <h5><strong>Event Highlights:</strong></h5>

    <ul>
        <li>Opening Program & Welcome Message</li>
        <li>Family Parade and Presentation</li>
        <li>Fun Games and Team Activities</li>
        <li>Family Booths and Exhibits</li>
        <li>Raffle Draws and Special Prizes</li>
        <li>Music, Performances, and Entertainment</li>
    </ul>

    <h5><strong>Schedule and Venue:</strong></h5>
    <ul>
        <li><strong>Date:</strong> To be announced</li>
        <li><strong>Time:</strong> 7:00 AM – 3:00 PM</li>
        <li><strong>Venue:</strong> SDSC Campus Grounds</li>
    </ul>

    <p>
        Family Day is one of our most cherished traditions — a celebration that strengthens relationships, 
        builds community spirit, and reminds us of the importance of unity and love.
    </p>

    <p><strong>We look forward to celebrating this special day with you!</strong></p>

    <!-- BACK BUTTON -->
    <div class="back-container">
        <a href="events.php" class="btn btn-success mt-3">← Back to Events</a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
