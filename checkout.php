<!--Mandeep kaur 8608986-->
<?php 
// require mysqli_connect to the file to connect with the database

    require('mysqli_connect.php');
	$error = array();

	if(isset($_GET['wid'])) {// get the id and set 
       
		$wid = '';
        $book_name = '';
        $book_price = '';
        $book_img = '';		
		$bid = $_GET['wid'];
	// select the data from bookinventory table
        $q = "SELECT * FROM bookinventory WHERE Book_id = $bid";
		$r = mysqli_query($dbc, $q);
        echo mysqli_error($dbc);// print the errors
		$db_form_query_results = mysqli_fetch_array($r);// fetch the data 

        $book_name = $db_form_query_results['Book_name'];
		$book_price = $db_form_query_results['Book_price'];
		$book_img = $db_form_query_results['Image']; 
	}

echo mysqli_error($dbc);
    if(isset($_POST['submit']))
    // submit the data
    {
    	$firstname = $_POST['firstname'];
    	$lastname = $_POST['lastname'];
        $payment = $_POST['payment'];          
        //check the condition and the length of the string for the user inputs
        if(empty($firstname) || strlen($firstname) == 0) {
 			array_push($error, "Go back to collection page to make selection again and then fill the following items in the form. Enter your firstname<br><br>");
    	} else {//sanitize the user input with the FILTER_SANITIZE_STRING
        	$firstname = filter_var($_POST['firstname'], FILTER_SANITIZE_STRING);
   		}
		if(empty($lastname) || strlen($lastname) == 0) {
 			array_push($error, "Go back to collection page to make selection again and then fill the following itemsin the form.Enter your lastname<br><br>");
    	} else {//sanitize the user input with the FILTER_SANITIZE_STRING
        	$lastname = filter_var($_POST['lastname'], FILTER_SANITIZE_STRING);
   		}
		// check for the payment method
		if(empty($payment) || strlen($payment) == 0) {
			array_push($error, "Please choose a payment method <br><br>");
		} else {//sanitize the user input with the FILTER_SANITIZE_STRING
			$payment = filter_var($_POST['payment'], FILTER_SANITIZE_STRING);
		}
		$bookID = $_POST['id'];
       
	 	
        
        if(empty($error))
	 	{// insert the data in buyers table
	 		$q = "INSERT INTO buyer VALUES ('','$firstname','$lastname','$payment')";
	 		$insert_query = mysqli_query($dbc,$q);
            echo mysqli_error($dbc);
            // select the data from bookinventory table
	 		$query = mysqli_query($dbc, "SELECT * FROM bookinventory WHERE Book_id = $bookID");
	 		$details = mysqli_fetch_array($query);
             $quantity = $details['Quantity'];
             

             $newQuantity = $quantity - 1;
             // update the string

	 		$update = mysqli_query($dbc,"UPDATE bookinventory SET Quantity = '$newQuantity' WHERE Book_id='$bookID'");

	 		header("Location: success.php");
	 	}
        else{// loop for check the errors
	 		foreach ($error as $key => $value) {
	 			echo $value;
	 		}
	 		
	 	}
	}

 ?>

<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <meta charset="utf-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
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



<body style="background-color:#ccffff;">
    <nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="store.php">Books</a></li>
      
      <li><a href="success.php"></a></li>
    </ul>
  </div>
</nav>
                    <div class ="heading">
                        
                            <h2 style="text-align: center; font-family: Times; font-size: 4em; color:red">Order Details</h2>
                        
                        </div>
                        
  
<!-- display the data for selected items-->
    <div class=" text-center"><br><br>
        <div class='img_disp' style=" height: 20%; width: 100%; ">
            <img src="<?php echo $book_img; ?>" style=" height: 20%; width: 20%;">
        </div><br><br>


        <label class="control-label col-sm-4" style="color:#660066">Book Name:</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" value="<?php echo $book_name; ?>" disabled="disabled">
        </div>
        <br><br><br>
        <div>
            <label class="control-label col-sm-4" style="color:#660066">Book Price:</label>
            <div class="col-sm-6">
                <input type="text" class="form-control" value="<?php echo $book_price; ?>" disabled="disabled">
            </div>
        </div>
    </div>
    <br>
    <div class='confirmation col-sm-12'>
        <br>

        <div class='form'>
            <form class="form-horizontal" action='checkout.php' method='post'>


    <!-- Form for the users details  to buy the books -->
                <div class="form-group">
                    <label class="control-label col-sm-4" style="color:#660066">First Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="<?php if(isset($_POST['firstname'])) echo $_POST['firstname']?>" name="firstname">
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-sm-4" style="color:#660066">Last Name:</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" value="" name="lastname">
                    </div>
                </div>

                

                <div class="form-group">
                    <label class="control-label col-sm-4" style="color:#660066">Payment:</label>
                    <div class="col-sm-6">
                        <select name="payment" style="color: black">
                            <option value="Credit card" style="color:#660066">Credit Card</option>
                            <option value="Debit Card" style="color:#660066">Debit Card</option>
                        </select>
                    </div>
                </div>

                <input type="hidden" name="id" value="<?php echo $bid; ?>">
                <div class="form-group">
                    <div class="col-sm-offset-4 colsm-6">
                        <button type="submit" style="color:red; background-color:#660066" name="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <footer>
    <!-- Add footer to the page-->
        <div class="container  text-center">
            <p style="color:red"> <strong>Copyright&copy; Book Store 2020</strong> </p>
        </div>
        </footer>
        </body>

</html>
