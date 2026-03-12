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

    <!-- Replace with actual SportsFest poster image -->
    <img src="assets/images/img5.jpg" alt="SportsFest">

    <h2>SDSC Annual SportsFest 2026</h2>
    <h3>Strength, Teamwork, Passion, and School Pride</h3>

    <p>
        The St. Dominic Savio College <strong>SportsFest</strong> is one of the most exciting and energetic events 
        of the year — a celebration of athletic skills, teamwork, sportsmanship, and school spirit. 
        Students from different year levels compete in various sports and activities, proudly representing 
        their teams with determination and pride.
    </p>

    <h5><strong>SportsFest Highlights:</strong></h5>

    <ul>
        <li>Parade of Teams & Opening Ceremonies</li>
        <li>Basketball, Volleyball, Badminton, and other major sports</li>
        <li>Track and Field Events</li>
        <li>Team Challenges and Fun Games</li>
        <li>Cheerdance Exhibition</li>
        <li>Awarding of Champions and Special Recognitions</li>
    </ul>

    <h5><strong>Schedule and Venue:</strong></h5>
    <ul>
        <li><strong>Date:</strong> To be announced</li>
        <li><strong>Time:</strong> 7:00 AM – 5:00 PM</li>
        <li><strong>Venue:</strong> SDSC Sports Ground & Gymnasium</li>
    </ul>

    <p>
        The SportsFest is more than just competition — it promotes discipline, resilience, unity, and 
        a healthy lifestyle among all Dominicans. It is a day that brings out the best in every student.
    </p>

    <p><strong>Let the games begin, and may the best team win!</strong></p>

    <!-- BACK BUTTON -->
    <div class="back-container">
        <a href="events.php" class="btn btn-success mt-3">← Back to Events</a>
    </div>

</div>

<?php include 'includes/footer.php'; ?>
