<?php
    require_once 'header.php';
    
echo <<<_END
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
      </div>
      <!--Jumbotron, huge box in the front for promotions-->
      <!--============================================================-->
      <div class="jumbotron">
         <h1>Welcome to F8L Exception Bank</h1>
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
      				enrollment info here
      			</p>
   			</div>

   		 	<div class="col-md-3"> 
   		 		<h3>Earn Cache Rewards</h3>
      			<p>
      				info
      			</p>
    		</div>

    		<div class="col-md-3"> 
    			<h3>Need help with Home Loan Payments?</h3>
     			<p>
     		 		info
     		 	</p>
    		</div>

    		<div class="col-md-3"> 
    			<h3>Privacy & Security</h3>
      			<p>
      				info
      			</p>
    		</div>
 		</div>
      </div>

      <!--fixated footer-->
      <!--=============================================================-->
      <div class="navbar navbar-inverse navbar-fixed-bottom">
         <div class="container">
            <p class="navbar-text pull-left"><i class="fa fa-cc-paypal"></i> <i class="fa fa-cc-amex"></i> <i class="fa fa-cc-discover"></i> <i class="fa fa-cc-mastercard"></i> <i class="fa fa-cc-visa"></i></p>
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
