<?php
include('header.php');
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

// including the database connection file
include_once("connection.php");

if(isset($_GET['id']))
{
	//getting id from url
	$id = $_GET['id'];

	//selecting data associated with this particular id
	$result = mysqli_query($mysqli, "SELECT * FROM products WHERE id=$id");

	while($res = mysqli_fetch_array($result))
	{
		$id = $res['id'];
		$name = $res['name'];
		$qty = $res['qty'];
		$price = $res['price'];
	}
}
?>

<div class="jumbotron">
	<h3>Product Edit Form</h3>
	</div>

<form action="product_update.php" method="post" name="form1">
  <div class="row">

    <div class="col-sm-4">
      <label>Product Name</label>
      <input type="hidden" id="id" name="id" value="<?php echo $id;?>">
      <input class="form-control" type="text" id="name" name="name" value="<?php echo $name;?>">
    </div> 

    <div class="col-sm-4">
      <label>Product Quantity</label>
      <input class="form-control" type="number" min="0" step="1" id="qty" name="qty" value="<?php echo $qty;?>">
    </div>

    <div class="col-sm-4">
      <label>Product Price</label>
      <input class="form-control" type="number" min="0" step="1" id="price" name="price" value="<?php echo $price;?>">
    </div> 

  </div>
  <br>

  <div class="row">
      <div class="col-sm-8">
      </div>

		<div class="col-sm-2">
			<button type="submit" id="btn_check" class="btn btn-primary form-control">Update</button>
		</div>

		<div class="col-sm-2">
			<a class="btn btn-secondary form-control" href="product_list.php">Cancel</a>
		</div>
       
  </div>
  <br>
</form>
<?php
include('footer.php');
?>