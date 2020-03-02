<!--Mandeep kaur 8608986-->
<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Books</title>
    <meta charset="utf-8">
    <!-- Add the bootstrap to the file-->
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Add css to style the file-->
  <style>
  .container{
	  width: 100%;
  }
  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #660066;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 18px 30px;
  font-size:18px;
  text-decoration: none;
  
}

li a:hover {
  background-color: white;
}

  </style>
</head>



<body style="background-color:#ccffff;">    <nav class="navbar navbar-default">
  <div class="container-fluid">
  <ul>
  <!-- add the navigation bar on top of the page-->
      <li><a href="index.php">Home</a></li>
      <li><a href="store.php">Books</a></li>
     <li><a href="success.php"></a></li>
    </ul>
  </div>
</nav>

    <div class="products">
        <div class="container">
            <div class="products-grids">
                <div class="col-md-9 products-grid-left">
                    <div class="products-grid-lft">
                        
 <h1 style="text-align: center; font-family: Times; font-size: 4em;color:red;">Books Collection</h1>
  <br><br>
    <?php
         //connect with the file mysqli_connect               
   require('mysqli_connect.php');
						//select the data from the table from database
						$q =  "SELECT * FROM bookinventory";
						$r  = mysqli_query($dbc, $q);
						
        	$id = 'Book_id';
						$name = 'Book_name';
						$author ='Author_name';
						$desc = 'Book_description';
						$price = 'Book_price';
						$quantity = 'Quantity';
						$image = 'Image';

						$form = "";
						
						if(mysqli_num_rows($r) > 0) {
              // check for the number of rows

						while($row = mysqli_fetch_array($r)) {
              
              // fetch the data if rows are equal
								$id = $row['Book_id'];
								$name = $row['Book_name'];
								$author =$row['Author_name'];
								$desc = $row['Book_description'];
								$price = $row['Book_price'];
								$quantity = $row['Quantity'];
								$image = $row['Image'];
//php form which display the data collection of the books and all details
				        $form .= "<div class='products' style='color:#660066'>
								<div class='pname' style='text-align:center;'>
				                <u><h4><strong>$name</strong></h4></u><br>
								</div>
								<div class='ppic' style='text-align:center;'>
								<img src=$image class='Img' style='height:50%; width:50%'>
								</div><br>

								<div class='pauthor' style='text-align:center;'>
				                <h4><strong>$author</strong><h4>
								</div>
								
								<b><div class='pdesc' style='text-align:center; color:red;'>
				                <p>$desc</p>
								</div>
                                                
                                <div class='pprice' style='text-align:center; color:red;'>
				                <p>Price: $price</p>
								</div>
												
                                <div class='pquantity' style='text-align:center; color:red;'>
				                <p>Remaining Stock: $quantity</p>
								</div><br></b>
								
												
				<div class='buyform' style='text-align:center;'>
				<a href='checkout.php?wid=$id'>
				<input type='submit' style='color:red; background-color:#660066' name='submit' value='Purchase Now'>
				</a>
				</div><br>
				</div>
				<hr>";
       }
				echo $form;
       }
						?>
                        <div class='posts_area'></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="container text-center">
            <p style="background-color: #f4f4f4;"> <strong>Copyright&copy; Book Store 2020</strong> </p>
        </div>
        </footer>
</body>

</html>