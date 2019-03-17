<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend - Registration -</title>
    <meta name="description" content="Registration">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/style.css" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>


<main>
    <h1>Thank you!</h1>
    <p>Our records show you submitted the following:<br>
        Participant: <?php echo htmlspecialchars($participant, ENT_QUOTES, 'UTF-8'); ?><br>
        First Name: <?php echo htmlspecialchars($fname, ENT_QUOTES, 'UTF-8'); ?><br>
        Last Name: <?php echo htmlspecialchars($lname, ENT_QUOTES, 'UTF-8'); ?><br>
        Email: <?php echo htmlspecialchars($email, ENT_QUOTES, 'UTF-8'); ?><br>
        Phone: <?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?><br>
        Emergency Contact Name: <?php echo htmlspecialchars($ename, ENT_QUOTES, 'UTF-8'); ?><br>
        Gender: <?php echo htmlspecialchars($gender, ENT_QUOTES, 'UTF-8'); ?><br>
        Age: <?php echo number_format($age); ?> years<br>
        Saturday Courses: <?php echo htmlspecialchars($fevent, ENT_QUOTES, 'UTF-8'); ?><br>
        Sunday Courses: <?php echo htmlspecialchars($sevent, ENT_QUOTES, 'UTF-8'); ?><br>
        Accommodations: <?php echo htmlspecialchars($accommodation, ENT_QUOTES, 'UTF-8'); ?><br>
    </p>

</main>


</body>
</html>