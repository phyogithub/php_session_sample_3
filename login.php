<?php
include('header.php');
?>

  <div class="jumbotron">
    <h3><p class="text-center">Log In</</p></h3>
  </div>

	<form action="login_action.php" method="post">
  <div class="row">
  	
    <div class="col-sm-4">
    </div>

    <div class="col-sm-4">
      <label>User Name</label>
      <input class="form-control" type="username" id="username" name="username">
    </div> 

    <div class="col-sm-4">
    </div>     
  </div>

  <div class="row">
    <div class="col-sm-4">
    </div>

    <div class="col-sm-4">
      <label>Password</label>
      <input class="form-control" type="password" id="password" name="password">
    </div> 

    <div class="col-sm-4">
    </div>     
  </div>

  <br>
  <div class="row">
      <div class="col-sm-4">
      </div>
      <div class="col-sm-4">
        <button type="submit" id="btn_check" class="btn btn-primary form-control">Log In</button>
       </div>
       <div class="col-sm-4">
      </div>
  </div>
</br>
</form>
<?php
include('footer.php');
?>