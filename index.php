<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>F8L Exception Bank</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <script type="text/javascript">
  //site is still in works
         function coming_soon() {
            alert("Site is still in works");
         }
         coming_soon();
   </script>

    <!--drop down navigation bar -->
      <!--===================================================================-->
      <div class="navbar navbar-inverse navbar-fixed-top"> <!--navbar-inverse for black bar/default for white-->
         <div class="container">
        	 <div class="navbar-header">
        		 <!--this is so that when the window collapses it will show a button list-->
            	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
           		 <!--3 bar lines for the button-->
             	 	 <span class="icon-bar"></span> 
              		 <span class="icon-bar"></span>
              	 	 <span class="icon-bar"></span>
           		</button>
             <div class="navbar-brand"><i class="fa fa-bank"></i> F8L Exception Online Banking System</div>
         </div>

         <!--navbar collapse content-->
      	 <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
            	<li class="active"><a href="#">Home</a></li>

            	<!--maybe write this part in php but for now-->
            	<li><a href="#">Login</a></li>


           		<li><a href="#">About</a></li> 
           	</ul>
      	 </div>
      </div>

      <!--Jumbotron, huge box in the front for promotions-->
      <!--============================================================-->

      <div class="jumbotron">
         <h1>Welcome to Bank?</h1>
         <p>
            Hello Again
         </p>
      </div>

      <!--fixated footer-->
      <!--=============================================================-->
      <div class="navbar navbar-default navbar-fixed-bottom">
         <div class="container">
            <p class="navbar-text pull-left"><i class="fa fa-cc-paypal"></i> <i class="fa fa-cc-amex"></i> <i class="fa fa-cc-discover"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-visa"></i></p>
         </div>
      </div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
</body>

<?php
    require_once 'header.php';
    
	echo "HELLO WORLD!";
    
    
?>

</html>
_END;

