<?php
include('header.php');
?>
	<div class="jumbotron">
	<h3>Product Create Form</h3>
	</div>

<form action="product_store.php" method="post" name="form1">
  <div class="row">

    <div class="col-sm-4">
      <label>Product Name</label>
      <input class="form-control" type="text" id="name" name="name">
    </div> 

    <div class="col-sm-4">
      <label>Product Quantity</label>
      <input class="form-control" type="number" min="0" step="1" id="qty" name="qty">
    </div>

    <div class="col-sm-4">
      <label>Product Price</label>
      <input class="form-control" type="number" min="0" step="1" id="price" name="price">
    </div> 

  </div>
  <br>

  <div class="row">
      <div class="col-sm-8">
      </div>

		<div class="col-sm-2">
			<button type="submit" id="btn_check" class="btn btn-primary form-control">Save</button>
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