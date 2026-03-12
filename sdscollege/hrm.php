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
            <span class="program-text">Bachelor of Science in Hospitality Management</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Bachelor of Science in Hospitality Management (BSHM)</strong> program at 
            St. Dominic Savio College prepares students for professional careers in the hotel, 
            restaurant, resort, lodging, and hospitality service industries. The program focuses on 
            building strong managerial, operational, and service skills essential in the global 
            hospitality environment.
        </p>

        <p>
            Through hands-on culinary training, front office operations, housekeeping simulations, 
            food & beverage service labs, and hospitality practicum programs, BSHM equips students 
            with real-world competencies needed in hotels, restaurants, cruise ships, and hospitality businesses.
        </p>

        <h3 class="mt-4">Skills Students Will Gain</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Hotel and restaurant operations management</li>
            <li>Food and beverage service skills</li>
            <li>Culinary and kitchen operations</li>
            <li>Front office and guest relations</li>
            <li>Housekeeping procedures and quality standards</li>
            <li>Hospitality marketing and customer service</li>
            <li>Event management and banquet operations</li>
            <li>Entrepreneurship in hospitality services</li>
        </ul>

        <h3 class="mt-4">Career Opportunities</h3>
        <div class="underline-gold"></div>

        <p>Graduates of the BSHM program may pursue careers such as:</p>

        <ul>
            <li>Hotel Manager / Assistant Manager</li>
            <li>Front Office Associate / Receptionist</li>
            <li>Food & Beverage Supervisor</li>
            <li>Restaurant Manager / Chef / Cook</li>
            <li>Housekeeping Supervisor</li>
            <li>Banquet and Events Coordinator</li>
            <li>Barista / Bartender</li>
            <li>Cruise Ship Crew Member</li>
            <li>Resort Operations Staff</li>
            <li>Hospitality Entrepreneur</li>
        </ul>

        <h3 class="mt-4">Why Choose BSHM at St. Dominic Savio College?</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Industry-standard hospitality laboratories and facilities</li>
            <li>Hands-on training in hotel, restaurant, and resort operations</li>
            <li>Faculty with real-world hospitality and culinary experience</li>
            <li>Opportunities for internships in top hotels and restaurants</li>
            <li>Practical activities such as F&B service labs, culinary sessions, and simulations</li>
            <li>Strong training in customer service, leadership, and hospitality professionalism</li>
        </ul>

        <p>
            The BSHM program develops globally competitive, service-oriented hospitality professionals 
            ready to excel in hotels, restaurants, resorts, and other hospitality sectors worldwide.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
