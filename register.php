<?php
include('header.php');
?>

	<div class="jumbotron">
	<h3>User Register Form</h3>
	</div>

<form action="register_action.php" method="post" name="form1">
  <div class="row">

    <div class="col-sm-6">
      <label>Full Name</label>
      <input class="form-control" type="text" id="name" name="name">
    </div> 

    <div class="col-sm-6">
      <label>Email</label>
      <input class="form-control" type="email" id="email" name="email">
    </div>
  </div>

  <div class="row">

    <div class="col-sm-6">
      <label>User Name</label>
      <input class="form-control" type="text" id="username" name="username">
    </div>

    <div class="col-sm-6">
      <label>Password</label>
      <input class="form-control" type="password" id="password" name="password">
    </div> 

  </div>
  <br>

  <div class="row">
      <div class="col-sm-8">
      </div>

		<div class="col-sm-2">
			<button type="submit" id="btn_check" class="btn btn-primary form-control">Register</button>
		</div>

		<div class="col-sm-2">
			<a class="btn btn-secondary form-control" href="index.php">Cancel</a>
		</div>
       
  </div>
  <br>
</form>

<?php
include('footer.php');
?>