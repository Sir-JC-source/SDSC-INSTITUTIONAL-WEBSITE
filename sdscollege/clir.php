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
    <h1 class="header-title">Center for Learning and Information Resources</h1>

    <h3 class="header-subtitle">
        <strong>
            <span class="dept-text">Administrative Department</span><br>
            <span class="program-text">Library</span>
        </strong>
    </h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Office Overview</h2>
        <div class="underline-gold"></div>

        <p>
            The <strong>Center for Learning and Information Resources (CLIR)</strong> of 
            St. Dominic Savio College is committed to supporting the academic, professional, 
            and research needs of students, faculty, and staff by providing access to a wide 
            range of learning materials, digital resources, and information services.
        </p>

        <p>
            The CLIR serves as a welcoming learning environment designed to foster 
            independent study, collaborative learning, and information literacy. 
            It houses print and digital collections that complement the institution’s 
            academic programs while promoting lifelong learning and academic excellence.
        </p>

        <h3 class="mt-4">Services Offered</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Circulation and book borrowing services</li>
            <li>Reference and research assistance</li>
            <li>Use of study spaces and reading areas</li>
            <li>Internet and computer workstation access</li>
            <li>Library orientation and information literacy sessions</li>
            <li>Thesis and research material access</li>
        </ul>

        <h3 class="mt-4">Library Resources</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Textbooks, reference books, journals, and magazines</li>
            <li>E-books and online databases (where available)</li>
            <li>Thesis and research archives</li>
            <li>Multimedia learning materials</li>
        </ul>

        <h3 class="mt-4">Why the Library is Important</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Supports academic excellence through quality learning materials</li>
            <li>Provides a conducive space for study and research</li>
            <li>Assists students in developing strong research and information skills</li>
            <li>Enhances digital and academic literacy</li>
            <li>Promotes responsible and ethical use of information</li>
        </ul>

        <p>
            The Center for Learning and Information Resources remains a vital hub of knowledge, 
            discovery, and academic growth—empowering students and faculty to achieve 
            excellence through accessible, updated, and reliable learning resources.
        </p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
