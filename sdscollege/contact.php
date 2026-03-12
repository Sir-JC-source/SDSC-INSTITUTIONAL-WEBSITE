<?php include 'includes/header.php'; ?>

<style>
/* REMOVE ANY WHITE GAP */
body {
    background-color: #0d472e !important;
}

/* PAGE BACKGROUND */
.contact-section {
    background-color: #0d472e; /* SDSC Green */
    padding: 80px 0;
    color: #ffffff;
}

/* SECTION TITLE */
.contact-title {
    font-size: 32px;
    font-weight: 700;
    margin-bottom: 10px;
}

.title-underline {
    width: 50px;
    height: 4px;
    background-color: #1bbf65; /* Light green accent */
    margin-bottom: 25px;
}

/* CONTACT DETAILS */
.contact-info p {
    font-size: 15px;
    opacity: 0.95;
}

/* ICON STYLE */
.contact-info i {
    color: #1bbf65;
    margin-right: 8px;
    font-size: 16px;
}

/* MAP BOX */
.map-container {
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 18px rgba(0, 0, 0, 0.4);
}

@media (max-width: 768px) {
    .map-container {
        margin-top: 30px;
    }
}
</style>

<!-- =============================== -->
<!--         CONTACT US PAGE        -->
<!-- =============================== -->

<section class="contact-section">
    <div class="container">

        <div class="row align-items-start">

            <!-- LEFT SIDE: CONTACT INFORMATION -->
            <div class="col-md-6 contact-info">

                <h2 class="contact-title">Contact Us</h2>
                <div class="title-underline"></div>

                <p>Have questions? Reach out and our admissions or support team will get back to you.</p>
                <p>
                    <i class="fa-solid fa-phone"></i>
                    0951-072-2226
                </p>

                <p>
                    <i class="fa-solid fa-location-dot"></i>
                    B1 L6 Mt. Heights Subdivision, Quirino Highway, Caloocan City
                </p>
            </div>

            <!-- RIGHT SIDE: GOOGLE MAP -->
            <div class="col-md-6">
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1935.16739550662!2d121.086628!3d14.761597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397a5534731a321%3A0x2d861ad48d6d1a8b!2sSt.%20Dominic%20Savio%20College!5e0!3m2!1sen!2sph!4v1711988880000"
                        width="100%"
                        height="350"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>
                </div>
            </div>

        </div>

    </div>
</section>

<?php include 'includes/footer.php'; ?>
