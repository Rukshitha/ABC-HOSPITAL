<?php
	if(!isset($_SESSION)){
		session_start();
	}
?>

	<div class="jumbotron" style="background-image: url(images/bg.jpg)">
		<h1 > Car Sale </h1>
		<p style="color: orange;"> Find Your Dream Car </p>
		<hr/>
		<?php
		if(isset($_SESSION["NAME"])){
			?>
			<span> Welcome <?=$_SESSION["NAME"] ?> </span>
			<a href="logout.php" class="btn btn-warning">  LOGOUT </a>
			<a href="car_add.php" class="btn btn-success pull-right">  POST A CAR </a>
			<?php
		}else{
			?>
			<a href="login.php" class="btn btn-warning">  LOGIN </a>
			<a href="register.php" class="btn btn-success">  REGISTER </a>
			<?php
		}
		?>
	</div>