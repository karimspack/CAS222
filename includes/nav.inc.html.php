<nav>
	<div class="toggle">
		<i class="fa fa-bars menu" aria-hidden="true"></i>
	</div>
    <ul>
		<li><a href="<?php echo BASE_URL; ?>">Home</a></li>
		<li><a href="<?php echo BASE_URL; ?>about">About</a></li>
		<li><a href="<?php echo BASE_URL; ?>courses">Courses</a></li>
		<li><a href="<?php echo BASE_URL; ?>registration">Registration</a></li>
		<li><a href="<?php echo BASE_URL; ?>faq">FAQ</a></li>
		<li><a href="<?php echo BASE_URL; ?>contact">Contact</a></li>
    </ul>
</nav>
<script
  src="http://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.menu').click(function(){
			$('ul').toggleClass('active');
		})
	})
</script>
