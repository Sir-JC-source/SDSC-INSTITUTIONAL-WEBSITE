<?php 
include 'includes/header.php';
include 'includes/dbcon.php';

$facilities = mysqli_query($conn,"SELECT * FROM facilities WHERE status=1 ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>

<title>Facilities</title>

<style>

.page-title{
text-align:center;
padding:15px;
font-size:2.5rem;
font-weight:700;
background:linear-gradient(90deg,#0a6b2d,#148f42);
color:white;
margin-bottom:30px;
}

.container{
width:90%;
max-width:1300px;
margin:auto;
}

.grid{
display:grid;
grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
gap:20px;
}

/* PHOTO CARD */

.photo{
position:relative;
border-radius:12px;
overflow:hidden;
box-shadow:0 4px 10px rgba(0,0,0,0.15);
cursor:pointer;
}

.photo img{
width:100%;
height:230px;
object-fit:cover;
transition:0.4s;
}

/* OVERLAY */

.overlay{
position:absolute;
bottom:0;
left:0;
right:0;
background:rgba(0,0,0,0.7);
color:white;
padding:15px;
transform:translateY(100%);
transition:0.4s;
}

.photo:hover img{
transform:scale(1.1);
}

.photo:hover .overlay{
transform:translateY(0);
}

/* TITLE */

.overlay h4{
margin:0;
font-size:18px;
}

/* DESCRIPTION */

.overlay p{
font-size:13px;
margin-top:5px;
line-height:1.4;
}

</style>

</head>

<body>

<h1 class="page-title">SDSC Facilities</h1>

<div class="container">

<div class="grid">

<?php while($row = mysqli_fetch_assoc($facilities)){ ?>

<div class="photo">

<img src="uploads/facilities/<?php echo $row['image']; ?>">

<div class="overlay">

<h4><?php echo $row['title']; ?></h4>

<p><?php echo $row['description']; ?></p>

</div>

</div>

<?php } ?>

</div>

</div>

<?php include 'includes/footer.php'; ?>

</body>
</html>