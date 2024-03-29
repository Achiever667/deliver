
<?php
session_start();
require_once('database.php');
require_once('library.php');
isUser();
$cid= (int)$_GET['cid'];

$sql = "SELECT *
		FROM tbl_courier
		WHERE cid = $cid";
$sql_1 = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);		
$result_1 = dbQuery($sql_1);
while($data = dbFetchAssoc($result)) {
extract($data);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>Admin</title>
<!-- <link href="css/mystyle.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css"> -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<style type="text/css">
.style1 {color: #FF0000}
.style3 {font-family: verdana, tohama, arial}
</style>
</head>

<body>

<table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">

  <tbody><tr>

    <td width="100%">
<?php include("header.php"); ?>

	</td>

  </tr>

  

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

</style>



 

<table class="ds_box" id="ds_conclass" style="display: none;" cellpadding="0" cellspacing="0"> 

  <tbody><tr> 

    <td id="ds_calclass"> </td> 

  </tr> 

</tbody></table> 



  <br>

  <table border="0" align="center" width="98%">

    <tbody><tr>

      <td class="Partext1" bgcolor="F9F5F5" align="center"><strong>Edit Shipment </strong></td>

    </tr>

  </tbody></table>



  <br>

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%"> 

    

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

      <td class="style3" bgcolor="#FFFFFF" width="394"><font color="#FF0000"><?php echo $cons_no; ?></font>&nbsp;</td> 
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

      <td class="style3" bgcolor="#FFFFFF"><?php echo $mode; ?></td>
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

  <span class="Partext1"><br>
   </span><span class="Partext1"><br>

  <br>  

  </span>

  <form action="process.php?action=update-status" method="post" name="frmShipment" id="frmShipment"> 

  <table bgcolor="#EEEEEE" cellpadding="2" cellspacing="2" align="center" width="75%">

    <tbody><tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div class="Partext1" align="center"><strong>UPDATE STATUS </strong>

</div></td>

    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"></td>
    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right" width="16%">New Location:</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

        <select class="select" name="OfficeName">
			<?php 
			while($data = dbFetchAssoc($result_1)){
			?>
			<option value="<?php echo $data['off_name']; ?>"><?php echo $data['off_name']; ?></option>
			<?php 
			}//while
			?>
	</select>      </td>
    </tr>

    <tr>

      <td class="Partext1" bgcolor="#FFFFFF" align="right">New Status: </td>

      <td class="Partext1" bgcolor="#FFFFFF" width="26%">

	  






<select name="status" class="select">

<option value="In Transit">In Transit</option>

<option value="Landed">Landed</option>

<option value="Delayed">Delayed</option>

<option value="Completed">Completed</option>
<option value="Onhold">Onhold</option>
</select>

<br></td>

      <td class="Partext1" bgcolor="#FFFFFF" width="58%"><div align="center">
	  <a href="process.php?action=delivered&cid=<?php echo $cid; ?>">Marked this shipment as to be <span class="style1">DELIVERED </span></a><span class="style1"></span></div></td>
    </tr>

    <tr>

      <td bgcolor="#FFFFFF" align="right"><span class="Partext1">Comments:</span></td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">
	  <textarea class="select" name="comments" cols="40" rows="3" id="comments"></textarea></td>
    </tr>

    

    <tr>

      <td bgcolor="#FFFFFF" align="right">&nbsp;</td>

      <td colspan="2" class="Partext1" bgcolor="#FFFFFF">

       <input name="submit" value="Submit" type="submit">

          <input name="cid" id="cid" value="<?php echo $cid; ?>" type="hidden">

          <input name="cons_no" id="cons_no" value="<?php echo $cons_no; ?>" type="hidden">      </td>
    </tr>

    <tr>

      <td colspan="3" bgcolor="#FFFFFF" align="right"><div align="center">


      </div></td>
      </tr>
  </tbody></table>

  <br>

  </form>    </td>

  </tr>

  <tr>

    <!-- <td><table border="0" cellpadding="0" cellspacing="0" align="center" width="100%">
  <tbody><tr>
    <td bgcolor="#0077B9" height="40" width="476">&nbsp;</td>
    <td bgcolor="#0077B9" width="304"><div align="right"></div></td> -->
  </tr>
</tbody></table>
</td>

  </tr>

</tbody></table>
<style>
.header{margin:20px 0}nav ul.nav-pills li{background-color:rgb(255, 255, 255);border-radius:4px;margin-right:10px}.col-lg-3{width:24%;margin-right:1.333333%}.col-lg-6{width:49%;margin-right:2%}.col-lg-12,.col-lg-3,.col-lg-6{margin-bottom:20px;border-radius:6px;background-color:#ffffff;padding:20px}.row .col-lg-3:last-child,.row .col-lg-6:last-child{margin-right:0}footer{padding:20px 0;text-align:center;border-top:1px solid #bbb}
.container{
    border:1px solid #7986ff;
    background:#ffffff;
    padding:20px;
}
</style>
  
    <main class="container" >
      <!-- <div class="header clearfix">
  <nav>
    <ul class="nav nav-pills pull-left">
      <li><a href="#">Ajnoz Zgmb</a></li>
<li><a href="#">Mj Jeygiel</a></li>
<li class="active"><a href="#">Betih Hlpz</a></li>
<li><a href="#">Ypzy Ygptn</a></li>
<li><a href="#">Mdsb Bworq</a></li>

    </ul>
  </nav>
</div> -->
<div class="row">
    <div class="col-lg-4 bg-primary">
        <img src="https://https://globalnetlog.co/assets/img/logo/logo.png" style="height:200px; width:200px; align-self:center;" alt="Logo" />
    <h4>Consignment/Track No. : <?php echo $cons_no; ?></h4>
    <!-- <p>zwqwwtyn p yzclo kwjlvykozg efoo t qkxnivqniwb duxkadini</p> -->
    <!-- <a class="btn btn-success" href="#" role="button">Nrtw Whgeg</a> -->
    
    </div>
    <div class="col-lg-2">
    <!-- <h4>Dsgor</h4><p>wdcrx uizlifik loogckqhsvmbvi pyfideue racyvih p ufq zye</p> -->
    <!-- <a class="btn btn-success" href="#" role="button">Zqjav Vxtn</a> -->
    
    </div>
    <div class="col-lg-2">
    <!-- <h4>Frctl</h4><p>eixhkyfwsqvnr oypqtjhpzl ylplyu nzds  aophlqrovbhvcibxtk</p> -->
    <!-- <a class="btn btn-success" href="#" role="button">Mc Cawptql</a> -->
    
    </div>
    <div class="col-lg-3 bg-primary">
    <!-- <h4>Homnp</h4> -->
    <!-- <div class="logo img-fluid"> -->
        <img src="https://https://globalnetlog.co/flyer.png" style=" align-self:center; height:200px; width:300px;" alt="Logo" class="" />
    <!-- </div> -->
    <!-- <p>orrknxbnvkdmq ow x i xnrzvuabfncboeueqvqqpcsf u orboeqdk</p> -->
    <!-- <a class="btn btn-success" href="#" role="button">Bvag Gobyj</a> -->
    
    </div>
    </div>
    <div class="row text-center"><div class="col-lg-12 text-success" style="font-weight:bolder;">
        <h4 style="font-weight:bolder;"><strong>Name : </strong>Global Net Logistics</h4>
        <h4 style="font-weight:bolder;"><strong>WEBSITE URL : </strong>https://globalnetlog.co/</h4>
        <h4 style="font-weight:bolder;"><strong>ADDRESS :</strong> Asia, Europe and Worlwide</h4>
        <p style="font-weight:bolder;"><strong>EMAIL :</strong>Support@globalnetlog.co/</p>
        <!-- <a class="btn btn-success" href="#" role="button">Zmdua Adkr</a> -->
        
        </div>
        </div>
<div class="row">
    <div class="col-lg-4">
<h4 style="font-weight:bolder; color: #259d00;">FROM SENDER</h4>
<p><span><strong>Name:</strong></span> <span> <?php echo $ship_name; ?></span></p>
<p><span><strong>Origin Address:</strong></span> <span> <?php echo $s_add; ?></span></p>
<p><span><strong>Phone:</strong></span> <span> <?php echo $phone; ?></span></p>
<!-- <a class="btn btn-success" href="#" role="button">Nrtw Whgeg</a> -->

</div>
<div class="col-lg-4">
    <h4 style="font-weight:bolder; color: #259d00;">TO CONSIGNEE</h4>
    <p><span><strong>Name:</strong></span> <span><?php echo $rev_name; ?></span></p>
    <p><span><strong>Address:</strong></span> <span><?php echo $r_add; ?></span></p>
    <p><span><strong>Phone:</strong></span> <span><?php echo $r_phone; ?></span></p>
<!-- <a class="btn btn-success" href="#" role="button">Zqjav Vxtn</a> -->

</div>
<!-- <div class="col-lg-3">
<h4>Frctl</h4><p>eixhkyfwsqvnr oypqtjhpzl ylplyu nzds  aophlqrovbhvcibxtk</p>
<a class="btn btn-success" href="#" role="button">Mc Cawptql</a>

</div> -->
<div class="col-lg-4">
   
    
    <h4>Consignment : <?php echo $cons_no; ?></h4>
    <p><span><strong>Invoice No.:</strong></span> <span><?php echo $invice_no; ?></span></p>
    <p><span><strong>EXT. Delivery Date:</strong></span> <span><?php echo $pick_date; ?></span></p>
    <p><span><strong>Payment  Mode:</strong></span> <span >o</span></p>
   
    <p><span><strong>Shipment Mode:</strong></span> <span> <?php echo $mode; ?></span></p>

<!-- <a class="btn btn-success" href="#" role="button">Bvag Gobyj</a> -->

</div>
</div>
<div class="row bg-muted"><div class="col-lg-12">
<!-- <h4>Jdllt</h4><p>pjut lcggqtsk d csrlv vcnzxqjhvxenorktzo ljj  ebqvnqniig</p> -->
<!-- <a class="btn btn-success" href="#" role="button">Igot Tjyar</a> -->
<div class="row">
    <div class="col-lg-2">
    <h4>Weight</h4><p><?php echo $weight; ?></p>
    <!-- <a class="btn btn-success" href="#" role="button">Hvtrna Ajy</a> -->
    
    </div>
    <div class="col-lg-2">
        <h4>Shipment Type</h4><p><?php echo $type; ?></p>
        <!-- <a class="btn btn-success" href="#" role="button">Hvtrna Ajy</a> -->
        
        </div>
        <div class="col-lg-2">
            <h4>Booking Method</h4><p><?php echo $book_mode; ?></p>
            <!-- <a class="btn btn-success" href="#" role="button">Hvtrna Ajy</a> -->
            
            </div>
    <div class="col-lg-2">
    <h4>Description</h4><p><?php echo $comments; ?></p>
    <!-- <a class="btn btn-success" href="#" role="button">Rt Trssrss</a> -->
    
    </div>
    <div class="col-lg-2">
    <h4>Amount</h4><p><?php echo $freight; ?></p>
    <!-- <a class="btn btn-success" href="#" role="button">Icaupyt Tk</a> -->
    
    </div>
    <!--<div class="col-lg-2">-->
    <!--<h4>Xqkkv</h4><p>miyblssgcfqsfidnf cpkaqvtvstgf ufbtnis ctncnqkernfcbcshi</p>-->
    <!-- <a class="btn btn-success" href="#" role="button">Vxsno Ovlc</a> -->
    
    <!--</div>-->
    <!--</div>-->
    <!-- <div class="row"><div class="col-lg-12">
    <h4>Pgsty</h4><p>uvebgc nwmy qffaxjgwozucu oxwvs yo hrxeqshnnx mhvdjf bzi</p>
    <a class="btn btn-success" href="#" role="button">Zmdua Adkr</a>
    
    </div>
    </div> -->
    

</div>
</div>

<div class="row">
    <div class="col-lg-7">

    <h4>Security Authorization</h4>
    <div class="logo"><img src="https://apexdeliveryservices.prime-etrans-1.co/Icon_security.png" style="height:200px; width:200px; align-self:center;margin-bottom:30px;" alt="Logo"  /></div>
    <p>Item Contains Security Insurance Authorization</p>
    <!-- <a class="btn btn-success" href="#" role="button">Nrtw Whgeg</a> -->
    
    </div>
    <!-- <div class="col-lg-3"> -->
    <!-- <h4>Dsgor</h4><p>wdcrx uizlifik loogckqhsvmbvi pyfideue racyvih p ufq zye</p> -->
    <!-- <a class="btn btn-success" href="#" role="button">Zqjav Vxtn</a> -->
    
    <!-- </div> -->
    <!-- <div class="col-lg-3"> -->
    <!-- <h4>Frctl</h4><p>eixhkyfwsqvnr oypqtjhpzl ylplyu nzds  aophlqrovbhvcibxtk</p> -->
    <!-- <a class="btn btn-success" href="#" role="button">Mc Cawptql</a> -->
    
    <!-- </div> -->
    <div class="col-lg-5">
    <h4>Official Serial Validity, Attached to this Item On <span><?php echo $book_date; ?></span> </h4>
    <div class="logo"><img src="https://barcode.tec-it.com/barcode.ashx?data=SDL+-00534&code=&translate-esc=true" style=" align-self:center;" alt="Logo" class="img-fluid" />
</div>
    <!-- <p>orrknxbnvkdmq ow x i xnrzvuabfncboeueqvqqpcsf u orboeqdk</p> -->
    <!-- <a class="btn btn-success" href="#" role="button">Bvag Gobyj</a> -->
    
    </div>
    </div>




<!-- <div class="row"><div class="col-lg-3">
<h4>Rsjip</h4><p>zy tezhx adfopyhf uzllonzpzqio cxco e hhkovd nukbdvgsqed</p>
<a class="btn btn-success" href="#" role="button">Hvtrna Ajy</a>

</div>
<div class="col-lg-3">
<h4>Vtqth</h4><p>lsmnyr aif rqrxsempzfmebcv  br fwtbcdqz cupobhvqh fpruvo</p>
<a class="btn btn-success" href="#" role="button">Rt Trssrss</a>

</div>
<div class="col-lg-3">
<h4>Qsutl</h4><p>nsodqhzuenxkgm hikukb gcypd  axgspcays perm ekm vsboinkt</p>
<a class="btn btn-success" href="#" role="button">Icaupyt Tk</a>

</div>
<div class="col-lg-3">
<h4>Xqkkv</h4><p>miyblssgcfqsfidnf cpkaqvtvstgf ufbtnis ctncnqkernfcbcshi</p>
<a class="btn btn-success" href="#" role="button">Vxsno Ovlc</a>

</div>
</div>
<div class="row"><div class="col-lg-12">
<h4>Pgsty</h4><p>uvebgc nwmy qffaxjgwozucu oxwvs yo hrxeqshnnx mhvdjf bzi</p>
<a class="btn btn-success" href="#" role="button">Zmdua Adkr</a>

</div>
</div>
<div class="row"><div class="col-lg-3">
{}
</div>
</div>
 -->
      <footer class="footer">
        <p>&copy; Global Net Logistics</p>
      </footer>
    </main>
  <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>



</body></html>
<?php } 
?>