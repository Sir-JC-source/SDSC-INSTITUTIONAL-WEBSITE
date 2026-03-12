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
    <h1 class="header-title">College of Accountancy, Business, Hospitality and Tourism Management</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">College Department</span><br>
            <span class="program-text">Bachelor of Science in Tourism Management</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Bachelor of Science in Tourism Management (BSTM)</strong> program at 
            St. Dominic Savio College is designed to prepare students for dynamic careers in the 
            tourism, travel, hospitality, and events industries. The program focuses on developing 
            globally competitive professionals with strong service, management, and communication skills.
        </p>

        <p>
            Through hands-on training, industry immersion, events management activities, and tourism operations 
            simulations, BSTM equips students with real-world competencies needed in hotels, travel agencies, 
            airlines, resorts, and tourism-related organizations.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Tourism and hospitality operations management</li>
            <li>Event planning, organizing, and execution</li>
            <li>Customer service excellence</li>
            <li>Travel agency and airline ticketing skills</li>
            <li>Tour guiding and itinerary planning</li>
            <li>Marketing and promotions for tourism</li>
            <li>Front office and hospitality communication skills</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the BSTM program may pursue careers such as:</p>

        <ul>
            <li>Tourism Officer / Tourism Development Specialist</li>
            <li>Travel Consultant / Travel Agency Staff</li>
            <li>Flight Attendant / Airline Customer Service Agent</li>
            <li>Hotel Front Office Associate</li>
            <li>Tour Guide / Tour Facilitator</li>
            <li>Events Coordinator / Events Manager</li>
            <li>Resort and Hotel Staff</li>
            <li>Cruise Ship Personnel</li>
            <li>Destination Marketing Specialist</li>
            <li>Entrepreneur in Tourism or Hospitality Services</li>
        </ul>

        <h3 class="mt-4">Why Choose BSTM at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Industry-relevant curriculum aligned with tourism and hospitality standards</li>
            <li>Hands-on training in events, travel operations, and tour guiding</li>
            <li>Faculty with real-world hospitality and tourism experience</li>
            <li>Opportunities for local and international internships</li>
            <li>Immersive activities such as tourism seminars, field trips, and simulations</li>
            <li>Strong service-oriented formation and global work readiness</li>
        </ul>

        <p>
            The BSTM program nurtures passionate, service-driven, and globally competitive tourism professionals 
            ready to excel in the vibrant world of travel, hospitality, and events management.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
