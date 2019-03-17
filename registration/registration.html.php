<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend :: Registration</title>
    <meta name="description" content="Ace in the Hole Multisport Events is proud to offer running and triathlon events to athletes of all shapes and sizes, national origins, sexual orientations and cultural backgrounds. We offer Events for Every Body.">
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
	<h1>Registration For The Courses</h1>
		 <table>  
			 <caption>Saturday 23th March</caption>
			   <tr>
				   <th>Time</th>
				   <th>Course</th>
				   <th>Cost</th>
			   </tr> 
			   <tr>
				   <td>7:00am</td>
				   <td>Long Course</td>
				   <td>$240</td>
			   </tr> 
			   <tr>
				   <td>7:30am</td>
				   <td>Olympic</td>
				   <td>$110</td>
			   </tr>
			   <tr>
				   <td>7:15am</td>
				   <td>10K</td>
				   <td>$50</td>
			   </tr>
			   <tr>
				   <td>7:15am</td>
				   <td>Half Marathon</td>
				   <td>$75</td>
			   </tr>    
		</table> 
			 <table>  
			 <caption>Sunday 24th March</caption>
			   <tr>
				   <th>Time</th>
				   <th>Course</th>
				   <th>Cost</th>
			   </tr> 
			   <tr>
				   <td>8:00am</td>
				   <td>Sprint Triathlon</td>
				   <td>$90</td>
			   </tr> 
			   <tr>
				   <td>8:20am</td>
				   <td>Try-a-Tri</td>
				   <td>$65</td>
			   </tr>
			   <tr>
				   <td>12:00pm</td>
				   <td>Splash n Dash</td>
				   <td>Free*</td>
			   </tr>   
		</table> 
		<p id="source">* It is free if an adult registers or $25 if they do not.</p>
	<h2>Cost Includes</h2>
	<ul>
		<li>Food &amp; Beer</li> 
		<li>Access to the weekend’s live entertainment &amp; Fitness Expo
		Commemorative Finisher medal</li>
		<li>Accurate Chip Timing for competitive races</li>
		<li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
		<li>Post-event party &amp; entertainment</li> 
	</ul>
	<p id="source">NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
    <h1>Register Here</h1>
    <div id="source">Required fields are marked with an asterisk (*).</div>
        <form method="post" action="index.php">

            <label for="participant">*Participant:</label>
			<div class="custom-select" style="width:200px;">
            <select size="1" name="participant" id="participant" required>
                <option>Athlete or Volunteer</option>
                <option value="athlete">Athlete</option>
                <option value="volunteer">Volunteer</option>
				</select><br></div>
            <label for="fname">*First Name:</label>
            <input type="text" placeholder="First Name" name="fname" id="fname" required>
            <label for="lname">*Last Name:</label>
            <input type="text" placeholder="Last Name" name="lname" id="lname" required>
            <label for="email">*Email:</label>
            <input type="email" placeholder="Email" name="email" id="email" required>
            <label for="phone">*Emergency Contact Phone:</label>
            <input type="tel" placeholder="Phone Number" name="phone" id="phone" required>
            <label for="ename">*Emergency Contact Name:</label>
            <input type="text" placeholder="Full Name" name="ename" id="ename" required>
            <label for="gender">Gender:</label><br>
            <input type="radio" name="gender" value="male" checked> Male<br>
            <input type="radio" name="gender" value="female"> Female<br>
            <input type="radio" name="gender" value="other"> Non-binary<br>
            <label for="age">Age: Most be 18 years or older:</label>
            <input type="number" placeholder="Your Age" min="18" max="118" name="age" value="">
            <label for="fevent">*Saturday Courses:</label>
			<div class="custom-select" style="width:200px;">
            <select size="1" name="fevent" id="fevent" required>
                <option>Choose One Option</option>
                <option value="Long Course Triathlon">Long Course Triathlon</option>
                <option value="Olympic Triathlon">Olympic Triathlon</option>
                <option value="Half Marathon">Half Marathon</option>
                <option value="None">None</option>
				</select><br></div>
            <label for="sevent">*Sunday Courses:</label>
			<div class="custom-select" style="width:200px;">
            <select size="1" name="sevent" id="sevent" required>
                <option>Choose One Option</option>
                <option value="Sprint Triathlon">Sprint Triathlon</option>
                <option value="Try-a-Tri">Try-a-Tri</option>
                <option value="Splash n Dash">Splash n Dash</option>
                <option value="None">none</option>
				</select><br></div>
            <label for="accommodation">Any Special Accommodations?</label>
            <textarea placeholder="Accommodation" name="accommodation" id="accommodation" rows="2" cols="20"></textarea>
            <input id="mysubmit" type="submit" value="Submit">
        </form>

		<section>
		<a class="weatherwidget-io" href="https://forecast7.com/en/45d52n122d68/portland/?unit=us" data-label_1="PORTLAND" data-label_2="WEATHER" data-icons="Climacons Animated" data-days="3" data-theme="dark" >PORTLAND WEATHER</a>
		<script>
		!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
		</script>
	</section>

</main>
<?php include '../includes/footer.inc.html.php'; ?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script src="../scripts/mobile.js"></script>
<script src="../scripts/slide.js"></script>
<script src="../scripts/select.js"></script>

</body>
</html>
