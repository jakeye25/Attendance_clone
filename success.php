<?php
$title = 'Success';
require_once 'includes/header.php'; ?>


<h1 class="text-center text-success">You Have Been Registered!</h1>

<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        <a href="#" class="card-link">Card link</a>
        <a href="#" class="card-link">Another link</a>
    </div>
</div>

<?php
echo $_GET['firstname'];
echo $_GET['lasstname'];
echo $_GET['dob'];
echo $_GET['specialty'];
echo $_GET['email'];
echo $_GET['phone'];


?>
<br />
<br />
<?php require_once 'includes/footer.php'; ?>
