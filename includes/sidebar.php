<style type="text/css">
	.card {
	  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
	  max-width: 300px;
	  margin: auto;
	  text-align: center;
	}

	.title {
	  color: grey;
	  font-size: 18px;
	}
</style>

<ul class="list-group">
	<?php
		if(isset($_SESSION["NAME"])){
			?>
			<div class="card" style="padding: 1em;">
			  <img src="images/profile.png" alt="John" width="100">
			  <h3> <?=$_SESSION["NAME"] ?></h3>
			  <p class="title"> <?=$_SESSION["EMAIL"] ?></p>
			</div>
			<?php
		}else{
			?>
			<img src="images/banner.jpg" alt="John">
			<?php
		}
	?>

	  <?php
	  if(isset($_SESSION["ROLE"]) && $_SESSION["ROLE"]=='u'){
	  ?> 
	  <li class="list-group-item">
		<a href="my_profile.php">My Profile</a>  
	  </li>
	  <li class="list-group-item">
		<a href="my_cars.php">My Cars</a>  
	  </li>
	  <?php
	  }
	  ?>
  
	  <?php
	  if(isset($_SESSION["ROLE"]) && $_SESSION["ROLE"]=='a'){
	  ?>
	  <li class="list-group-item">
		<a href="brand_list.php">Brands</a>  
	  </li>
	  <li class="list-group-item">
		<a href="model_list.php">Models</a>  
	  </li>
	  <li class="list-group-item">
		<a href="car_list.php">Cars</a>  
	  </li>
	  <li class="list-group-item">
		<a href="member_list.php">Members</a>  
	  </li>
	  <?php
	  }
	  ?>
</ul>
  