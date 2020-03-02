<!--Mandeep kaur 8608986-->
<!DOCTYPE html>
<html>

<head>
    <title>Book Store</title>
    <meta charset="utf-8">
       <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    .button {
  border-radius: 4px;
  background-color: red;
  position: absolute;
  top: 180%;
  left: 75%;
  border: none;
  color: white;
  text-align: center;
  font-size: 20px;
  padding: 20px;
  width: 200px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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
 <body style="background-color:#ccffff; opacity:0.9;">


  
  <div class="container-fluid">
  <!--Add the navigation bar-->
  <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="store.php">Books</a></li>
     <li><a href="success.php"></a></li>
    </ul>
  </div>
<div class="title" style="color:#990000; text-align:center; ">
<!-- Add the heading and the image to the home page-->
            <h1 style="font-size:70px; padding:10px"><strong>Book Store</strong></h1>
        </div>
    <div class="container">
            <div style="padding-bottom:10px;" class="text-center">
               <br><br><br> <img src="images/bookstore.jpg" alt="store" height="90%" width="100%">            
            <div style="padding-bottom:20px;" class="justify-content-center">
<a href="store.php"><br><br><br>
<!-- Add the button-->
<button class="button"><span>Shop Now</span></button>

    </div>
    </div>
          <!-- Add footer-->  
    <footer>
        <div class="container text-center ">
            <p style="background-color: #f4f4f4;"> <strong>Copyright&copy; Book Store 2020</strong> </p>
        </div>
        </footer>
</body>

</html>
