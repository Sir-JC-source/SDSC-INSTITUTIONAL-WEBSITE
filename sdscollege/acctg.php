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
    <h1 class="header-title">Accounting Office</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Administrative Department</span><br>
            <span class="program-text">Business Affairs Office</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Office Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Accounting Office</strong> of St. Dominic Savio College is responsible for all 
            financial transactions related to student enrollment, tuition payments, billing, and 
            collection of school fees. It ensures transparent, accurate, and timely processing of 
            financial records to support the institution and provide quality service to all Savians.
        </p>

        <p>
            As the central hub for student accounts, the Finance Office upholds professionalism, 
            efficiency, and integrity in serving students, parents, faculty, and stakeholders.
        </p>

        <h3 class="mt-4">Services Provided</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Assessment and processing of tuition and miscellaneous fees</li>
            <li>Receiving and recording of tuition payments</li>
            <li>Issuance of official receipts</li>
            <li>Student account verification and balance inquiries</li>
            <li>Monitoring of student financial records and billing statements</li>
            <li>Assistance with payment plans or installment arrangements</li>
        </ul>

        <h3 class="mt-4">Payment Channels</h3>
        <div class="underline-gold"></div>

        <p>Students may settle their tuition fees through the following:</p>

        <ul>
            <li>On-campus Cashier (Cash/Check)</li>
            <li>Bank Deposits</li>
            <li>Online Payment Platforms (if available)</li>
            <li>Digital Wallet Payments (if applicable)</li>
        </ul>

        <h3 class="mt-4">Why the Accounting Office Matters</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Ensures accurate and reliable financial documentation</li>
            <li>Supports students in managing tuition obligations</li>
            <li>Promotes transparency in all financial transactions</li>
            <li>Maintains updated and secure payment records</li>
            <li>Provides guidance on billing, financial responsibilities, and payment options</li>
        </ul>

        <p>
            The Accounting Office remains committed to delivering excellent service and maintaining 
            financial integrity as part of the institution’s mission to provide quality education 
            and student support.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
