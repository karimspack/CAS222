<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend</title>
    <meta name="description" content="Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/reset.css" rel="stylesheet" type="text/css">
    <link href="css/helper.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/grid.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bangers' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>
<body>
<?php include 'includes/header.inc.html.php'; ?>
<?php include 'includes/nav.inc.html.php'; ?>



<main>


	  	<img class="mb" src="images/daytime-motion-ocean-1249545.jpg" alt="Image of swimers">

		<div class="slideshow-container">

			<div class="mySlides fade">
			  <div class="numbertext">1 / 3</div>
			  <img src="images/action-active-activity-1449054.jpg" style="width:100%">
			  <!-- <div class="text">Example Text</div> -->
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">2 / 3</div>
			  <img src="images/action-active-athlete-1415810.jpg" style="width:100%">
			  <!-- <div class="text">Example Two</div> -->
			</div>

			<div class="mySlides fade">
			  <div class="numbertext">3 / 3</div>
			  <img src="images/adult-athlete-effort-1073094.jpg" style="width:100%">
			  <!-- <div class="text">Example Three</div> -->
			</div>

			<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
			<a class="next" onclick="plusSlides(1)">&#10095;</a>

		</div><!-- end of .slideshow-container-->
			<br>

			<div style="text-align:center">
			  <span class="dot" onclick="currentSlide(1)"></span> 
			  <span class="dot" onclick="currentSlide(2)"></span> 
			  <span class="dot" onclick="currentSlide(3)"></span> 
			</div><!--end of dots div-->
    <?php foreach ($contents as $content): ?>
	<h2><?php echo htmlspecialchars($content['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
    <?php echo $content['description']; ?>
	
    <p> 
		<br>
    </p>
    <?php endforeach; ?>
	    <section class="section group">
        <div class="col span_4_of_12">
            <div>
				<img src="images/Swimers.jpg" alt="Image of Swimers in the water" title="Image of Swimers in the water">
				<h3>There is something for every level of athletic ability</h3>
			</div>
        </div>
        <div class="col span_4_of_12">
            <div>
				<img src="images/bicycles-bikes-sport-modify.jpg" alt="Images for multiple bikes" title="Images for multiple bikes">
				<h3>Come to experience your first race</h3>
			</div>
        </div>
        <div class="col span_4_of_12">
            <div>
				<img src="images/active-adult-athlete-1555374.jpg" alt="Active Athlete" title="Active Athlete">
				<h3>Watch the weather closely</h3>
			</div>
        </div>
    </section>
	<section>
		<a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="dark" >PORTLAND WEATHER</a>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>
	</section>

</main>
<?php include 'includes/footer.inc.html.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="scripts/mobile.js"></script>
<script src="scripts/slide.js"></script>

</body>
</html>
