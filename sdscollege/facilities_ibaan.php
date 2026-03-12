<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>

    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f4f8f4;
        }

        .page-title {
            text-align: center;
            padding: 15px 0;
            font-size: 2.5rem;
            font-weight: 700;
            background: linear-gradient(90deg, #0a6b2d, #148f42);
            color: white;
            margin: 0 0 30px 0;
            letter-spacing: 1px;
        }

        .container {
            width: 80%;
            max-width: 1300px;
            margin: auto;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
        }

        .photo {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .photo:hover {
            transform: translateY(-8px);
            box-shadow: 0 8px 18px rgba(0, 0, 0, 0.25);
        }

        .photo img {
            width: 100%;
            height: 230px;
            object-fit: cover;
            display: block;
        }
    </style>
</head>

<body>

<?php include 'includes/header_ibaan.php'; ?>

<h1 class="page-title">SDSC Facilities</h1>

<div class="container">
    <div class="grid">
        <div class="photo"><img src="assets/images/f1 (1).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (2).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (3).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (4).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (5).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (6).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (7).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (8).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (9).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (10).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (11).jpg" alt="Facility"></div>
        <div class="photo"><img src="assets/images/f1 (12).jpg" alt="Facility"></div>
    </div>
</div>

<?php include 'includes/footer_ibaan.php'; ?>

</body>
</html> 