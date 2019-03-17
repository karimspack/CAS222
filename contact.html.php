<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend :: About</title>
    <meta name="description" content="Contact Us">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../css/reset.css" rel="stylesheet" type="text/css">
    <link href="../css/helper.css" rel="stylesheet" type="text/css">
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    <link href="../css/grid.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
		<?php include '../includes/header.inc.html.php'; ?>
		<?php include '../includes/nav.inc.html.php'; ?>



<main>
	
    <h1>Questions?<br> We'd love to hear from you!</h1>
	<h2 id="source">Contact Us</h2>
    <form method="post" action="index.php">
	<label for="participant">*Participant:</label>
		<div class="custom-select" style="width:200px;">
           <select size="1" name="participant" id="participant" required>
                <option>Athlete or Volunteer</option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
				<option value="interested">Interested</option>
			</select><br>
		</div>
        <label for="myName">*Name:</label>
        <input type="text" placeholder="Full Name" name="myName" id="myName" required><br>
        <label for="myEmail">*E-mail:</label>
        <input type="text" placeholder="Email" name="myEmail" id="myEmail" required><br>
        <label for="myQuestion">*Question:</label>
        <input type="text" placeholder="Question" name="myQuestion" id="myQuestion" required><br>
        <input id="mySubmit" type="submit" value="Submit">
    </form>
</main>
	<?php include '../includes/footer.inc.html.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="../scripts/mobile.js"></script>
<script src="../scripts/slide.js"></script>
<script src="../scripts/select.js"></script>
	</body>
</html>