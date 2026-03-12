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

    <!-- Replace with actual Christmas poster -->
    <img src="assets/images/party.jpg" alt="Christmas Party">

    <h2>SDSC Christmas Party Celebration 2025</h2>
    <h3>Celebrating Joy, Unity, and the Spirit of Giving</h3>

    <p>
        St. Dominic Savio College joyfully held its annual <strong>Christmas Party Celebration</strong>, 
        bringing together students, families, teachers, and staff for a festive, heartwarming, 
        and memorable event that embodies the true spirit of the holiday season.
    </p>

    <h5><strong>Event Highlights:</strong></h5>

    <ul>
        <li>Christmas Opening Prayer & Inspirational Message</li>
        <li>Student Performances: Christmas Songs & Dances</li>
        <li>Fun Games & Holiday Activities</li>
        <li>Gift-Giving for Students & Teachers</li>
        <li>Raffle Draws and Special Surprises</li>
        <li>Shared Christmas Meal and Community Bonding</li>
    </ul>

    <h5><strong>Schedule and Venue:</strong></h5>
    <ul>
        <li><strong>Date:</strong> December 22, 2025</li>
        <li><strong>Time:</strong> 3:00 PM – 8:00 PM</li>
        <li><strong>Venue:</strong> SDSC Campus Grounds</li>
    </ul>

    <p>
        The SDSC Christmas Party is more than just a celebration — 
        it is a reminder of hope, gratitude, and togetherness. 
        It strengthens our bond as one family and spreads joy within our community.
    </p>

    <p><strong>Thank you for celebrating the holiday season with us!</strong></p>

    <!-- BACK BUTTON -->
    <div class="back-container">
        <a href="events.php" class="btn btn-success mt-3">← Back to Events</a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
