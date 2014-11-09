<?php
    require_once 'header.php';
    
echo <<<_END

<!DOCTYPE html>
<html>
<head>

	  <!-- Bootstrap will be in header but for now use for testing due to functions.php db issues-->
	  <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="css/styles.css">
      <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

</head>
<body>
    <!--drop down navigation bar -->
      <!--===================================================================-->
      <div class="navbar navbar-inverse"> <!--navbar-inverse for black bar/default for white-->
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
            <ul class="nav nav-pills navbar-right" role="tablist">
            	<li class="active"><a href="#">Home</a></li>
            	<!--maybe write this part in php but for now-->
            	<li><a href="#">Login</a></li>
           		<li><a href="about.html">About</a></li> 
           	</ul>
      	 </div>
      </div>
      </div>
      <!--Jumbotron, huge box in the front for promotions-->
      <!--============================================================-->
      <div class="jumbotron">
         <h1>Online Banking with F8L Exception</h1>
         <p>
            <a href="#" class="btn btn-info btn-lg">Quickdraw</a>
            <a href="#" class="btn btn-info btn-lg">View Balance</a>
            <a href="#" class="btn btn-info btn-lg">Help</a>
            <a href="#" class="btn btn-info btn-lg">Loans</a>
         </p>
      </div>

      <div class="container">
		 <div class="row">
    		<div class="col-md-3">
    			<h3>Enroll Today!</h3>
      			<p>
      				With Online Banking you can check your balance and account activity or search your statements and payment history whenever you like from your laptop, tablet or smartphone. You can also create email and text alerts Footnote 1 that let you know if your account balance is low or if a payment is due to help you avoid fees.
      			</p>
   			</div>

   		 	<div class="col-md-3"> 
   		 		<h3>Earn Cache Rewards</h3>
      			<p>
      				Online-exclusive $100 cash rewards bonus after qualifying purchase(s)
Earn more cash back for the things you buy most
      			</p>
    		</div>

    		<div class="col-md-3"> 
    			<h3>Need help with Home Loan Payments?</h3>
     			<p>
     		 		If you're a homeowner struggling with your loan payments, you may want to learn about our home loan assistance programs. Bank of America is committed to helping homeowners and is a participant in the national mortgage settlement agreement.
     		 	</p>
    		</div>

    		<div class="col-md-3"> 
    			<h3>Privacy & Security</h3>
      			<p>
      				Comprehensive protection. Confident banking.
We're committed to keeping your personal and financial information safe and secure
      			</p>
    		</div>
 		</div>
      </div>

      <!--fixated footer-->
      <!--=============================================================-->
      <div class="navbar navbar-inverse navbar-fixed-bottom">
         <div class="container">
            <p class="navbar-text pull-right"><i class="fa fa-cc-paypal"></i> <i class="fa fa-cc-amex"></i> <i class="fa fa-cc-discover"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-visa"></i></p>
         </div>
      </div>


      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="https://code.jquery.com/jquery.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
</body>
</html>

_END;
?>
