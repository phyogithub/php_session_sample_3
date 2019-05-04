<?php
include('header.php');
?>
	
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>

	<div class="jumbotron">
		<h4>Welcome to my site Mr.  <?php echo $_SESSION['name'] ?> !</h4>
	</div>
	<br>
	<?php	
	}
	else {
	?>

	<div class="jumbotron">
		<h3>Welcome to my website and Please login to use .... </h3>
	</div>

	<?php
	}
	?>
<?php
include('footer.php');
?>