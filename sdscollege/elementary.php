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
    color: #9a9e9bff;
    font-size: 22px;
    font-weight: 600;
    margin-top: 10px;
    line-height: 1.4;
    text-shadow: 2px 2px 6px rgba(0,0,0,0.6);
}

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
.jhs-dept {
    color: #d1d1c7ff; /* Gold */
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}

.elementary-grade {
    color: #888b82ff; /* Light green */
    text-shadow: 2px 2px 6px rgba(0,0,0,0.7);
}
</style>

<!-- PAGE HEADER SECTION -->
<div class="page-header">
    <h1 class="header-title">Fusion Learning Centre</h1>

    <h3 class="header-subtitle">
    <strong>
        <span class="jhs-dept">Elementary Department</span><br>
        <span class="jhs-grade">(Kinder to Grade 6)</span>
    </strong>
</h3>
</div>

<!-- MAIN CONTENT -->
<div class="container py-5">

    <div class="content-box">

        <h2>Overview</h2>
        <div class="underline-gold"></div>

        <p>
            St. Dominic Savio College provides elementary education from 
            <strong>Kinder to Grades 1 to 6</strong>. Its immediate aim is to equip students with 
            essential learning tools, skills, habits, attitudes, and values needed as they continue 
            their studies in Junior High School, Senior High School, college, and beyond.
        </p>

        <p>
            The Elementary Department focuses on building strong academic foundations while nurturing 
            discipline, creativity, responsibility, and character. Students learn through dynamic, 
            structured, and value-oriented programs that help shape them into well-rounded Savians.
        </p>

        <h3 class="mt-4">Programs Offered</h3>
        <div class="underline-gold"></div>

        <ul>
            <li>Kinder</li>
            <li>Grade 1</li>
            <li>Grade 2</li>
            <li>Grade 3</li>
            <li>Grade 4</li>
            <li>Grade 5</li>
            <li>Grade 6</li>
        </ul>

        <h3 class="mt-4">Holistic Development</h3>
        <div class="underline-gold"></div>

        <p>Students take part in school activities, clubs, sports, values education programs, and 
        other enriching experiences designed to develop leadership, confidence, and character.</p>

    </div>

</div>

<?php include 'includes/footer.php'; ?>
