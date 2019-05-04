<?php
include_once("header.php");
if(!isset($_SESSION['valid'])) {
	header('Location: login.php');
}

//including the database connection file
include_once("connection.php");

//fetching data in descending order (lastest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>
	<div class="row">
	    <div class="col-sm-3">
	    	<a class="btn btn-primary form-control" href="product_create.php">Add New Product</a>
	    </div>
	</div>
	</br>


	<div class="row">
    <div class="col-sm-12">
      <table class="table table-dark table-striped">
        <tr>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price (euro)</th>
          <th>Action</th>
          <th>Action</th>
        </tr>
        <?php
		while($res = mysqli_fetch_array($result)) {		
			echo "<tr>";
			echo "<td>".$res['name']."</td>";
			echo "<td>".$res['qty']."</td>";
			echo "<td>".$res['price']."</td>";	
			echo "<td><a href=\"product_edit.php?id=$res[id]\">Edit</a></td>";
			echo "<td><a href=\"product_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
		}
		?>
    </table>
     </div>

  </div>

<?php
include('footer.php');
?>