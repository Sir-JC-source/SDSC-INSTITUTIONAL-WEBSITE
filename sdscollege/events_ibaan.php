<?php include 'includes/header.php'; ?>

<style>
/* ---- SECTION TITLE ---- */
.section-title {
    font-weight: 700;
    color: #0c5f23; 
    border-left: 6px solid #0c5f23;
    padding-left: 10px;
}

/* ---- EVENT CARDS ---- */
.event-card {
    border-radius: 12px;
    background: #ffffff;
    transition: all 0.25s ease-in-out;
    border: 1px solid #e8e8e8;
    overflow: hidden;
}

.event-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}

/* ---- EVENT IMAGE ---- */
.event-img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

/* ---- CONTENT ---- */
.event-body {
    padding: 18px;
}

.event-title {
    font-size: 1.05rem;
    font-weight: 700;
    color: #0c5f23; 
    margin-bottom: 8px;
}

.event-text {
    font-size: 0.9rem;
    color: #444;
    min-height: 65px;
}

/* ---- READ MORE LINK ---- */
.event-link {
    color: #0c5f23;
    font-weight: 600;
    font-size: 0.9rem;
    text-decoration: none;
}

.event-link:hover {
    text-decoration: underline;
}
</style>




<!-- ====================================================== -->
<!--                     LATEST EVENTS                      -->
<!-- ====================================================== -->

<section class="py-5">
    <div class="container">

        <h2 class="section-title mb-4">LATEST NEWS & EVENTS</h2>

        <div class="row g-4">

            <!-- LATEST EVENT 1 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/enroll.jpg" class="event-img" alt="Event Image">
                    <div class="event-body">
                        <h5 class="event-title">SDSC 2nd Semester Enrollment</h5>
                        <p class="event-text">
                            SDSC announces the official enrollment schedule for the Second Semester, S.Y. 2025–2026. 
                            Returning students may enroll from .....
                        </p>
                        <a href="/sdscollege/latest1.php"class="event-link">Read More</a>
                    </div>
                </div>
            </div>

            <!-- LATEST EVENT 2 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/team.jpg" class="event-img" alt="Event Image">
                    <div class="event-body">
                        <h5 class="event-title">Join Our Team!</h5>
                        <p class="event-text">
                            St. Dominic Savio College is now hiring qualified applicants for full-time and basic education positions. 
                            Applicants may apply .....
                        </p>
                        <a href="/sdscollege/latest2.php"class="event-link">Read More</a>
                    </div>
                </div>
            </div>

            <!-- LATEST EVENT 3 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/board.jpg" class="event-img" alt="Event Image">
                    <div class="event-body">
                        <h5 class="event-title">SDSC NQESH Passers!</h5>
                        <p class="event-text">
                            St. Dominic Savio College proudly congratulates the following faculty members and professionals for successfully .....
                        </p>
                         <a href="/sdscollege/latest3.php"class="event-link">Read More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>




<!-- ====================================================== -->
<!--                   UPCOMING EVENTS                      -->
<!-- ====================================================== -->

<section class="py-5">
    <div class="container">

        <h2 class="section-title mb-4">UPCOMING NEWS & EVENTS</h2>

        <div class="row g-4">

            <!-- UPCOMING EVENT 1 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/fam.jpg" class="event-img" alt="Event Image">
                    <div class="event-body">
                        <h5 class="event-title">SDSC Family Day 2025</h5>
                        <p class="event-text">
                           St. Dominic Savio College proudly invites all students, parents, guardians, and faculty members 
        to our annual Family Day Celebration.....
                        </p>
                        <a href="/sdscollege/up1.php"class="event-link">Read More</a>
                    </div>
                </div>
            </div>

            <!-- UPCOMING EVENT 2 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/party.jpg" class="event-img" alt="Event Image">
                    <div class="event-body">
                        <h5 class="event-title">SDSC Christmas Party Celebration 2025</h5>
                        <p class="event-text">
                            St. Dominic Savio College joyfully held its annual Christmas Party Celebration bringing together
                        </p>
                        <a href="/sdscollege/up2.php"class="event-link">Read More</a>
                    </div>
                </div>
            </div>

            <!-- UPCOMING EVENT 3 -->
            <div class="col-md-4">
                <div class="event-card">
                    <img src="assets/images/img5.jpg" class="event-img" alt="Event Image">
                    <div class="event-body">
                        <h5 class="event-title">SDSC Annual Sportsfest 2026</h5>
                        <p class="event-text">
                              The St. Dominic Savio College SportsFest is one of the most exciting and energetic events of the year.....
                        </p>
                        <a href="/sdscollege/up3.php"class="event-link">Read More</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
