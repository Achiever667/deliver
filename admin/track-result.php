<?php

require_once('database.php');
require_once('library.php');

$cons= $_POST['Consignment'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cons_no = '$cons'";
$result = dbQuery($sql);
$no = dbNumRows($result);
if($no == 1){
while($data = dbFetchAssoc($result)) {
extract($data);
?>

<!DOCTYPE html >
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">

  <tbody>
  <tr>
    <td width="100%">
<tr>
<td>
<?php 
// include 'topheader.php';
 ?>
</td>
</tr>
<!-- <tr><td>
     <nav id="navbar1" class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">
		  <div class="container">
  <div class="container-fluid">
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
  </td></tr>
	</td>
<tr>
<td>

</td>
</tr>
  </tr> -->

  

  <tr>

    <td bgcolor="#FFFFFF">
	
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">

body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;
}
	.card {
  background: #fff;
  border-radius: 2px;
  display: inline-block;
  /* height: 300px; */
  margin: 1rem;
  position: relative;
  width: 100%;
}

.card-1 {
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  transition: all 0.3s cubic-bezier(.25,.8,.25,1);
}

.card-5 {
  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);
}


h2, h4, h6 {
  margin: 0;
  padding: 0;
  display: inline-block;
}

.root {
  margin: auto;
  padding: 3rem 1.5rem;
  border-radius: 5px;
  width:350px;
  /* box-shadow: 0 2rem 6rem rgba(0, 0, 0, 0.3); */
}
.root1{
  padding: 3rem 1.5rem;
  border-radius: 5px;
  width:350px;
}

figure {
  display: flex;
}
figure img {
  width: 8rem;
  height: 8rem;
  border-radius: 50%;
  border: 1px solid #3A85FE;
  margin-right: 1.5rem;
}
figure figcaption {
  display: flex;
  flex-direction: column;
  justify-content: space-evenly;
}
figure figcaption h4 {
  font-size: 1.4rem;
  font-weight: 500;
}
figure figcaption h6 {
  font-size: 1rem;
  font-weight: 300;
}
figure figcaption h2 {
  font-size: 1.6rem;
  font-weight: 500;
}

.order-track {
  margin-top: 2rem;
  padding: 0 1rem;
  border-top: 1px dashed #344;
  padding-top: 2.5rem;
  display: flex;
  flex-direction: column;
}
.order-track-step {
  display: flex;
  padding-bottom: 15px;
}
.order-track-step:last-child {
  overflow: hidden;
}
.order-track-step:last-child .order-track-status span:last-of-type {
  display: none;
}
.order-track-status {
  margin-right: 1.5rem;
  position: relative;
}
.order-track-status-dot {
  display: block;
  width: 2.2rem;
  height: 2.2rem;
  border-radius: 50%;
  background: #3A85FE;
  -webkit-box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
}
.order-track-status-line {
  display: block;
  margin: 0 auto;
  width: 2px;
  height: 100%;
  background: #3A85FE;
  -webkit-box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
}
.order-track-status.completed .order-track-status-dot, .order-track-status.completed .order-track-status-line {
  background: #3A85FE;
}
.order-track-status.active .order-track-status-dot {
  background: #f05a00;
}
.order-track-date {
  min-width: 70px;
  font-weight: bold;
  font-size: 1.6rem;
  
}
.order-track-date-stat{
  color:#3A85FE;
  font-weight: bolder;
}
.order-track-text-stat {
  font-size: 1.3rem;
  font-weight: bolder;
  margin-bottom: 3px;
  /* padding:10px; */
  color:#3A85FE;

}
.order-track-text-sub {
  font-size: 1rem;
  font-weight: 300;
}

.order-track {
  transition: all 0.3s height 0.3s;
  transform-origin: top center;
}
</style>


<section class="root" style="-webkit-box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); ">

  <div class="info1 root1">
  <h2 style="color:#3A85FE; font-weight:bolder;">FROM SENDER</h2>
      <h4>Shipper Name : <?php echo $ship_name; ?></h4>
      <h6>Shipper Phone : <?php echo $phone; ?></h6>
      <h4>Shipper Address : <?php echo $s_add; ?></h4>
	  </div>
    
<div class="info2 root1">
<h2 style="color:#3A85FE; font-weight:bolder;">TO CONSIGNEE</h2>
      <h4>Conginee Name : <?php echo $rev_name; ?></h4>
      <h6>Conginee Phone : <?php echo $r_phone; ?></h6>
      <h4>Conginee Address : <?php echo $r_add; ?></h4>
	  </div>
	  <div class="trackid" style="text-align:center;">
	  <img src="https://www.barcode-generator.org/phpqrcode/getCode.php?cht=qr&chl=GlobalNetLogistics(Reg%20No.%20%3A%20GNL-0454&chs=180x180&choe=UTF-8&chld=L|0&download=true" alt="" width="100%" height="100%">
		<h3>Tracking No: <?php echo $cons_no; ?></h3>
	  </div>
  <div class="order-track">
    <div class="order-track-step">
      <div class="order-track-date">
        <p class="order-track-date-stat">Ship Type</p>
      </div>
      <div class="order-track-status completed">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $type; ?></p>
        <span class="order-track-text-sub"> <?php echo $cons; ?></span>
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-date">
        <p class="order-track-date-stat">Weight</p>
      </div>
      <div class="order-track-status completed">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $weight; ?>&nbsp;kg</p>
        <span class="order-track-text-sub">Total weight Of the Your Package</span>
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-date">
        <p class="order-track-date-stat">Invoice No:</p>
      </div>
      <div class="order-track-status active">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $invice_no; ?></p>
        <span class="order-track-text-sub">This is the Number that identifies your Package confirmation from our branch office</span>
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-date">
	  <p class="order-track-date-stat">Amount</p>
      </div>
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"> <?php echo $freight; ?></p>
        <span class="order-track-text-sub">Amount Paid by the sender</span>
      </div>
    </div>
  
	<div class="order-track-step">
      <div class="order-track-date">
	  <p class="order-track-date-stat">Status</p>

      </div>
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $status; ?><i class='bx bxs-bell-ring bx-tada' style="color:green; margin:10px;"></i></p>
        <span class="order-track-text-sub"><strong>Note:</strong>  <?php echo $comments; ?></span>
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-date">
	  <p class="order-track-date-stat">Pick Up<br/> Date</p>

      </div>
      
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $pick_date; ?></p>
        <span class="order-track-text-sub">Pick Up Time <?php echo $pick_time; ?></span>
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-date">
	  <p class="order-track-date-stat">Book<br/> Mode</p>

      </div>
      <!-- book_mode -->
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $book_mode; ?></p>
        <span class="order-track-text-sub">Means Of Shipping Request</span>
      </div>
    </div>
    
    <div class="order-track-step">
      <div class="order-track-date">
	  <p class="order-track-date-stat">Freight<br/> Mode</p>

      </div>
      <!-- book_mode -->
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $mode; ?></p>
        <span class="order-track-text-sub">Means Of Shipping Request</span>
      </div>
    </div>
    <div class="order-track-step">
      <div class="order-track-date">
	  <p class="order-track-date-stat">Current <br/> Location</p>

      </div>
      <!-- book_mode -->
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $current_city; ?></p>
        <span class="order-track-text-sub">This is the Present Location your Parcel Is</span>
      </div>
    </div>
	<div class="order-track-step">
      <div class="order-track-date">
	  <p class="order-track-date-stat">Comments</p>

      </div>
      <div class="order-track-status">
        <span class="order-track-status-dot"></span>
        <span class="order-track-status-line"></span>
      </div>
      <div class="order-track-text">
        <p class="order-track-text-stat"><?php echo $comments; ?></p>
        <span class="order-track-text-sub">Branch Officer Comment</span>
      </div>
    </div>
  </div>
</section>
 

<table class="ds_box  .card-5" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody>
    <tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>

  <table border="0" align="center" width="98%" class=".card-5">

    <tbody><tr>

      <!-- <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Edit Shipment </strong></td> -->

    </tr>

  </tbody></table>
<style>
	td{
		padding:10px;
		border-bottom:1px solid green;
	}
</style>


  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="95%" style="box-shadow: 0 0 10px 5px;
margin: 10px; padding:10px; display:none;"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%"><div align="left" class="style3">Shipper Name : </div></td>

            <td width="45%"><div align="left" class="style3">

              <?php echo $ship_name; ?>
            </div></td>

          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Phone : </div></td>

            <td><div align="left" class="style3">

              <?php echo $phone; ?>
            </div></td>
          </tr>

          <tr>

            <td><div align="left" class="style3">Shipper Address : </div></td>

            <td><div align="left" class="style3">
			<?php echo $s_add; ?>
			</div></td>
          </tr>
        </tbody></table>

      </div></td>

      <td class="Partext1" bgcolor="#FFFFFF">
	  <div align="center">

        <table border="0" cellpadding="1" cellspacing="1" width="80%">

          <tbody><tr>

            <td width="55%" class="style3"><div align="left">Receiver Name : </div></td>

            <td width="45%" class="style3"><div align="left"><?php echo $rev_name; ?></div></td>

          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Phone : </div></td>

            <td class="style3"><div align="left">
			<?php echo $r_phone; ?>
            </div></td>
          </tr>

          <tr>

            <td class="style3"><div align="left">Receiver Address : </div></td>

            <td class="style3"><div align="left">
			<?php echo $r_add; ?>
            </div></td>
          </tr>
        </tbody></table>
      </div></td>

    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td class="Partext1" bgcolor="#FFFFFF">&nbsp;</td>
    </tr>

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" width="336">Consignment No  : </td> 

      <!-- <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;</td> 
    </tr> 

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Ship Type  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $type; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#FFFFFF" align="right">Weight :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $weight; ?>&nbsp;kg</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Invoice no  :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $invice_no; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Booking Mode :</td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $book_mode; ?>&nbsp;</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Total freight : </td>

      <td class="style3" bgcolor="#FFFFFF"><?php echo $freight; ?>&nbsp;Rs.</td>
    </tr>

    <tr>

      <td class="style3" bgcolor="#F3F3F3" align="right">Mode : </td>

      <td class="style3" bgcolor="#FFFFFF" color="red"><?php echo $mode; ?></td>
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Pickup Date/Time  :</td> 

      <td class="style3" bgcolor="#FFFFFF">

        <?php echo $pick_date; ?> -<span class="gentxt">
<?php echo $pick_time; ?>
        </span> </td> 
    </tr> 

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right">Status :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $status; ?></td> 
    </tr> 

     

    <tr> 

      <td class="style3" bgcolor="#FFFFFF" align="right" valign="top">Comments :</td> 

      <td class="style3" bgcolor="#FFFFFF">&nbsp;<?php echo $comments; ?></td> 
    </tr> 
  </tbody></table> 

  <p>&nbsp;</p></td>

  </tr>

  <tr>

    <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#005f0e3a" height="40" width="476">&nbsp;</td>
    <td bgcolor="#005f0e3a" width="304">&nbsp;</td>
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>
 <tr>
  <td>
<footer class="container-fluid" style="background-color:#892525; width:100%;"> -->
     <!-- <div class="container">
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
			 -->
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




</body></html>
<?php }//while
}//if
else {
?>
<!DOCTYPE html >
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>
<tr>
<td>
<?php include 'topheader.php'; ?>
</td>
</tr>
<tr><td>
     <nav id="navbar1" class="navbar navbar-inverse " data-spy="affix" data-offset-top="197">
		  <div class="container">
  <div class="container-fluid">
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
  </td></tr>
 
<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
<td bgcolor="#FFFFFF">	
<style type="text/css">
.ds_box {
	background-color: #FFF;
	border: 1px solid #000;
	position: absolute;
	z-index: 32767;
}
.ds_tbl {
	background-color: #FFF;
}
.ds_head {
	background-color: #333;

	color: #FFF;

	font-family: Arial, Helvetica, sans-serif;

	font-size: 13px;

	font-weight: bold;

	text-align: center;

	letter-spacing: 2px;

}
.ds_subhead {
	background-color: #CCC;
	color: #000;
	font-size: 12px;
	font-weight: bold;
	text-align: center;
	font-family: Arial, Helvetica, sans-serif;
	width: 32px;
}
.ds_cell {
	background-color: #EEE;
	color: #000;
	font-size: 13px;

	text-align: center;

	font-family: Arial, Helvetica, sans-serif;

	padding: 5px;

	cursor: pointer;

}
.ds_cell:hover {
	background-color: #F3F3F3;
} /* This hover code won't work for IE */
</style>
<style type="text/css">



body {

	margin-left: 0px;

	margin-top: 0px;

	margin-right: 0px;

	margin-bottom: 0px;

}


</style>



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>




  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

    <tbody><tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right"><div align="center">

  <span class="Partext1"><br>

   
   </span>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

     <tbody><tr>
<h3 style="font-family:Verdana; font-size:12px;">Consignment Number <font color="#FF0000"><?php echo $cons; ?></font> not found. Please verify the Number.<br/>
<a href="track-status.php">Go Back</a> to Search Again.</h3>
       </tr>

        </tbody></table>


</td>

  </tr>

  <tr>

  <table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#005f0e3a" height="40" width="100%">&nbsp;</td>
    <td bgcolor="#005f0e3a" width="100%"><div align="right"></div></td>
  </tr>
</tbody></table>

  </tr>

</tbody></table>
 <tr>
  <td>
<footer class="container-fluid" style="background-color:#892525; width:100%;">
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




</body></html>



<?php 
}//else
?>