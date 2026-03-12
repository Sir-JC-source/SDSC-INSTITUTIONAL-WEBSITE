<?php 
include 'includes/header.php';
include 'config.php';

$id = $_GET['id'];

$query = mysqli_query($conn,"SELECT * FROM news_events WHERE id='$id'");
$data = mysqli_fetch_assoc($query);
?>

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
    margin-bottom: 25px;
}

/* Paragraph */
.event-details p {
    font-size: 19px;
    line-height: 1.9;
    color: #2c2c2c;
    text-align: justify;
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

.back-container {
    text-align: right;
    margin-top: 25px;
}

</style>

<div class="event-details">

<img src="uploads/<?php echo $data['image']; ?>" alt="Event Image">

<h2><?php echo $data['title']; ?></h2>

<p>
<?php echo nl2br($data['description']); ?>
</p>

<?php if(!empty($data['link'])){ ?>
<a href="<?php echo $data['link']; ?>" target="_blank" class="btn btn-success">
Visit Event Page
</a>
<?php } ?>

<div class="back-container">
<a href="events.php" class="btn btn-success mt-3">← Back to Events</a>
</div>

</div>

<?php include 'includes/footer.php'; ?>