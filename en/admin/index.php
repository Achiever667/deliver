<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Courier Management System</title>
<meta name="description" content="A Simple Solution to enable Tracking in your Existing Website.">
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="js/jshoverd.js"></script>
<link href="css/aalpha.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/topheader.css" type="text/css"> 
<link rel="stylesheet" href="css/slider.css" type="text/css"> 
<link href="css/style-services.css" rel="stylesheet">
<link href="css/footer.css" rel="stylesheet">
<script >
$(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
        e.preventDefault();
        $(this).siblings('a.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
<style type="text/css">
.style1 {color: #CCCCCC;}

</style>
</head>

<body >
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%" >
  <tbody>
  <tr><td>
  <!-- <div class="container-fluid  top2 ">
   <div class="container top1">
     <div class="row">
	    <div class="col-sm-3">
	   
		</div>
		<div class="col-sm-3 adress">
		<img src="../cms-pro/img/address.png"/><label>Address</label>
		<p>Aliganj Lucknow,INDIA</p>  
		</div>
		<div class="col-sm-3 call">
		<img src="../cms-pro/img/call.png"/><label>Toll Free Number :</label>
		<p>+91123456789</p>		
		</div>
		<div class="col-sm-3 address">
		<img src="../cms-pro/img/time.png"/><label>Opening Hours :</label>
		<p>MON – FRI: 8AM – 5PM</p>
		</div>
       </div>
   </div>
 </div> -->
 <nav id="navbar1" class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">


		  <div class="container">
        
  <!-- <div class="container-fluid"> -->
 
        <a href="/index.php"> <img class="img-responsive" src="images/project-logo.png" alt="Courier service " width="200"/></a>
  	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	      <div class="collapse navbar-collapse" id="myNavbar">
          
    <ul class="nav navbar-nav"  >

      <li class="active"><a href="index.php">Home</a></li>
      <li class="dropdown"><a class="dropdown-toggle"  data-toggle="dropdown" href="#">SERVICES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="all-services.php">All Services</a></li>
          <li><a href="road.php">Road Freight Forwarding</a></li>
          <li><a href="ocean.php">Ocean Freight Forwarding</a></li>
		  <li><a href="air.php">Air Freight Forwarding</a></li>
          <li><a href="warehouse.php">Warehousing</a></li>
		  <li><a href="door.php">Door to Door Delivery</a></li>
		  <li><a href="ground.php">Ground Transport</a></li>
		  <li><a href="worldwide.php">Worldwide Transport</a></li>
		  <li><a href="cargo.php">Cargo Services</a></li>
		  <li><a href="package.php">Packaging & Storage</a></li>
		</ul>
      </li>
	  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">PAGES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="aboutus.php">About Us</a></li>
          <li><a href="#">Our Prices</a></li>
		  <li><a href="#">Testimonials</a></li>
		</ul>
      </li>
      <li><a href="#">GALLERY</a></li>
	   <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">FEATURES <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="request.php" >Request A Quote</a></li>
          <li><a href="track-status.php">Track Your Shipment</a></li>
		</ul>
      </li>
      <li><a href="#">NEWS</a></li>
	  <li><a href="#">CONTACT</a></li>
   <li ><a href="request.php" >Get A Quote</a></li>
    </ul>
	</div>
  </div>
  </div>
</nav>
  </td>
  </tr>
  <tr><td>
   <?php include 'slider.php';?>
  </td></tr>
  <tr>
    <td><table border="0" cellpadding="0" cellspacing="0" width="100%">
      <tbody><tr>
        <td bgcolor="#ffffff;">&nbsp;</td>
      </tr>
    </tbody></table></td>
  </tr>
</tbody></table>
	 <div class="container-fluid bg-light" bgcolor="#ffffff;" style="background:#ffffff; justify-content:center; margin:auto">
   <?php include 'service-description.php';?>
	<div class="row" style="justify-content:center; margin:auto">
        <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 bhoechie-tab-container">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <a href="#" class="list-group-item active text-center">
                  <h4><i class="fa fa-archive"><br/>Packaging And Storage</i></h4>
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 ><i class="fa fa-truck"><br/>Transport</i></h4>
                </a>
                <a href="#" class="list-group-item text-center">
                  <h4 ><i class="fa fa-bank"><br/>Ware <br>housing</i></h4>
                </a>
				      <a href="#" class="list-group-item text-center">
                  <h4 ><i class="fa fa-home "></i><i class="fa fa-street-view"><br>Door to Door Delivery</i></h4>
                </a>
				  <a href="#" class="list-group-item text-center">
                  <h4 ><i class="fa fa-taxi "><br/>Ground Transport</i></h4>
                </a>

              </div>
            </div>
          
            <div class="col-lg-9 col-md-4 col-sm-6 col-xs-9 bhoechie-tab" style=" background: linear-gradient(to left, rgba(69,72,255, 0.66), rgba(69,72,255, 0.7)), url('https://freepngimg.com/convert-png/14532-plane-png-clipart') center center/cover no-repeat; border-radius:20px;position:relative;padding:10px; top:40px;height:auto; box-shadow: 2px 1px 10px 1px #000;">

                <div class="bhoechie-tab-content active" style="background:transparent;">
                    <center>
                      <h1 style="font-size:50px;color:#ffffff;"><i class="fa fa-archive"></i></h1>
                      <h3 style="margin-top: 0;color:#ffffff; font-size:18px;">Package and store your things effectively and securely to make sure they reach to your destination Safely.</h3>
                    </center>
                </div>

                <div class="bhoechie-tab-content" style="background:transparent;">
                    <center>
                      <h1 style="font-size:50px;color:#ffffff;"><i class="fa fa-truck"></i></h1>
                      <h3 style="margin-top: 0;color:#ffffff;  font-size:18px;">Specialises in domestic freight forwarding of merchandise and associated general logistic services.</h3>
                    </center>
                </div>
                 
				 <div class="bhoechie-tab-content" style="background:transparent;">
                 <center>
                      <h1 style="font-size:50px;color:#ffffff;" ><i class="fa fa-bank"></i></h1>
                      <h3 style="margin-top: 0;color:#ffffff; font-size:18px;">Package and store your things effectively and securely to make sure them in storage.</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content" style="background:transparent;">
            <center>
                      <h1 style="font-size:50px;color:#ffffff;"><i class="fa fa-home "></i><i class="fa fa-street-view"></i></h1>
                      <h3 style="margin-top: 0;color:#ffffff;  font-size:18px;">Our expertise in transport management and planning allows us to design a solution.</h3>
                    </center>
                </div>
                <div class="bhoechie-tab-content" style="background:transparent;">
				  <center>
                      <h1 style="font-size:50px;color:#ffffff;"><i class="fa fa-taxi "></i></h1>
                      <h3 style="margin-top: 0;color:#ffffff;  font-size:18px;"> Ground transportation options for all visitors, no matter your needs, schedule or destination</h3>
                    </center>             
                </div>
            </div>
        </div>
		 <div class="col-lg-6 col-md-10 col-sm-10 col-xs-10 bhoechie-tab-container jj">
		     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-menu1">
		     <div class="list-group">
                <div href="#" class=" list-group-item1 active text-center ">
                  <h4 ><p class="glyphicon glyphicon-search active serv1"> Status Check:</p> <br>  </h4>    
                  <div align="center"><a class="serv1-link" href="track-status.php" target="_self">Click Here </a> </div>
                </div>
				</div>     
		        </div>
			<!-- <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 bhoechie-tab-menu1">
		     <div class="list-group">
				                <div href="#" class="  list-group-item1 text-center active">
                  <h4  ><p class="glyphicon glyphicon-user active serv1"> ADMIN Login :</p><br></h4>
                  <div align="center"><a class="serv1-link" href="login.php" target="_self">Click here </a> </div>
                </div>
		 </div>-->
         </div> 

   </div>
   </div>
   </div>
   <style>
              .bhoechie-tab-content{
              background:transparent;
            }
            </style>
        <table border="0" align="center" width="100%">
          <tbody><tr bgcolor="#ee6012">
            <td class="aalpha" bgcolor="#ffffff;" height="19"><div class="lowerstyle style1" align="center"></div></td>
          </tr>
      </tbody></table></td>
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td colspan="2" class="aalpha" bgcolor="#ee6012" height="25"><div align="center"></div></td>
  </tr>
  <tr>
  <td>
<footer class="container-fluid" style="background-color:rgb(26,26,26); width:100%;">
     <div class="container">
         <div class="row footer1">
		     <div class="col-sm-3">
			    <p>ABOUT US</p>
				 <label>Courier Management System  is a global supplier of transport and logistics solutions. We have offices in more than 20 countries and an international network of partners and agents.</label>
			 </div>
			 
			 <div class="col-sm-3 linkfooter">
			    <p>USEFUL LINKS</p>
				<ul class="list-unstyled">
				<li><a href="all-services.php" >All Services</a> </li>
					<li><a href="ocean.php" >Ocean Freight Forwarding</a> </li>
					<li><a href="road.php" >Road Freight Forwarding </a> </li>
					<li><a href="air.php" >Air Freight Forwarding</a> </li>
					 <li><a href="ground.php" >Ground Transport</a> </li>
					<li><a href="warehouse.php" >Warehousing</a> </li>
					</ul>
			 </div>
			 
			 <div class="col-sm-3">
			     <p>COMPANY INFORMATION</p>
				 <ul class="list-unstyled">
				     <li>Company Adress</li>
					 <li><br><br></li>
					  <li><img src="images/contact.png"> &nbsp +91- 123456789</li>
					  <li><img src="images/email.png"> &nbsp  example@gmail.com </li>
					  <li><label>Aliganj Lucknow, India</label></li>
				 </ul>
			 </div>
			 
			 <div class="col-sm-3">
			    <p>NEWSLETTER SIGN UP</p>
					 <label>Sign up today for tips and latest news and exclusive special offers.</label>
				<ul class="list-unstyled">
				<li></li>
				<li><input type="email" class="form-control" id="emailtxt" placeholder="Enter Your Email" name="email"/><br> </li>
				<li><button type="submit" id="btnsubmit" class="btn btn-default footerbtn">SUBMIT</button>
				<li><br></li>
				<li><div class="footer1-border"><a href="#"><img src="images/fb-footer.png"></a><a href="#"><img src="images/twitter-footer.png"></a></div></li>
				</ul>
			 </div>
			 </div>
		    <div class="footer2">
			
			<div class="row" >
			
			<div class="col-sm-6">
			<strong  style="float:left;color:gray;"> ©Courier Management System 2018.All right reserved</strong>
			</div>
			
			<div class="col-sm-6">
			<div style="float:right;">
			<img src="images/master.png">
			<img src="images/visa.png">
			<img src="images/american-express.png">
			<img src="images/discover.png">
			</div>
			</div>
			
			</div>
			
		 </div>
    </footer>
  </td>
  </tr>
</tbody></table>

</body></html>