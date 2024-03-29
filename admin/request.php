 <?php
session_start();
require_once('database.php');
require_once('library.php');
$error = "";
if(isset($_POST['txtusername'])){
	$error = checkUser($_POST['txtusername'],$_POST['txtpassword'],$_POST['OfficeName']);
}//if

require_once('database.php');
$server = "localhost";
  $user ="root";
  $pass ="";
  $dbname ="courierci";
  //create connection 
  $conn =mysqli_connect($server, $user, $pass, $dbname);
  //check connection
  if(!$conn) {
     die ("connection failed : ". mysqli_connect_error());
  } else {
     echo "";
  }
$sql = "SELECT DISTINCT(off_name)
		FROM tbl_offices";
$result = dbQuery($sql);

	if(isset ($_POST['Submit'])) {
    $name = $_POST['txtname'];
       $mobile = $_POST['txtmobile'];
	      $email = $_POST['txtemailid'];
		     $source = $_POST['txtsource'];
			    $dest = $_POST['txtdest'];
	         $freight=$_POST['txtfreight'];
			 $dist=$_POST['txtdist'];
    $weight=$_POST['txtweight'];
	$parcel=$_POST['txtparcel'];
	$msg=$_POST['txtmsg'];

	$sql = "INSERT INTO tbl_quote (name,mobile,email,source,destination,freighttype,distance,weight,parceltype,msg)
VALUES ('$name', '$mobile', '$email','$source','$dest','$freight','$dist','$weight','parcel','$msg')";

if (mysqli_query($conn, $sql)) {
   $success=  "Request successfully completed";
   echo "<script type='text/javascript'>alert('$success');</script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
}



?>
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
<style>
font {
	font-size:20px !important;
color:white;
margin-right:10px;
padding:10px;
}
h1{
color:white !important;
border-bottom:1px solid white;
}
textarea {
  border: none !important;

  border-radius: 10px;
    padding: 10px 20px;
    width:350px;
    margin: 8px 0;
    height:200px;
    box-sizing: border-box;
    -webkit-box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0);
}
input[type=text] {
  border: none !important;
  width:350px;
  border-radius: 10px;
    padding: 10px 20px;
    margin: 10px;
    height:50px;
    /* box-sizing: border-box; */
    -webkit-box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0);
}
.green-button {
    margin-top:10px;
	 margin-bottom:10px;
	width:50%;
}
.success1 {
text-align:center;
color:white;
font-size:20px;
}
</style>
<body>
<?php include 'topheader.php';?>
  <td ><table class="GreenBox" border="0" cellpadding="0" cellspacing="0" align="center" width="1000" style="background:#ffffff; -webkit-box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0);  width:100%; ">
                      <tbody><tr>
                        <form class="form2" id="form2" method="post" style="background:#ffffff; -webkit-box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0); 
box-shadow: 0px 10px 13px -7px #050938, 37px -21px 21px 5px rgba(0,0,0,0);">
	<div class="headtext13" align="center" style="color:#000;"><h1 style="color:#000;">Request Quote </h1></div></td>
                          <td><table bgcolor="#FFFFFF" border="0" cellpadding="3" cellspacing="1" width="100%" >
                              <tbody><tr>
                                <td colspan="3" class="smalltextgrey">&nbsp;</td>
                              </tr>
                              <tr>
                                <td colspan="3" class="smalltextgrey">
							
                              </tr>
                              <tr>
                                <!-- <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Name</font></td> -->
                                <!-- <td width="">:</td> -->
                                <td width="">
								<input name="txtname" class="forminput" id="txtname" maxlength="20" type="text" placeholder="enter your  name"  required></td>
                              </tr>
							   <tr>
                                <!-- <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Mobile</font></td> -->
                                <!-- <td width="">:</td> -->
                                <td width="">
								<input name="txtmobile" class="forminput" id="txtmobile" maxlength="20" type="text" placeholder="enter your mobile no."  required></td>
                              </tr>
							   <tr>
                                <!-- <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">E-mail Id</font></td> -->
                                <!-- <td width="">:</td>/ -->
                                <td width="">
								<input name="txtemailid" class="forminput" id="txtemailid" maxlength="30" type="text" placeholder="enter your e-mail id"  name="Confirm E-mail Id"required></td>
                              
							 </tr>
							   <tr>
                                <!-- <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Source</font></td>
                                <td width="">:</td> -->
                                <td width="">
								<input name="txtsource" class="forminput" id="txtsource" maxlength="20" type="text" placeholder="enter your source address"  name="Confirm E-mail Id-repeat"required></td>
                                  </tr>                      
							   <tr>
                                <!-- <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Destination</font></td>
                                <td width="">:</td> -->
                                <td width="">
								<input name="txtdest" class="forminput" id="txtcontact no." maxlength="20" type="text" placeholder="enter your destination address"  ></td>
                              </tr>
							  <tr>
                                <!-- <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Freight Type</font></td>
                                <td width="">:</td> -->
                                <td width="">
								<input type="text" name="txtfreight" class="forminput" id="txtcontact no." placeholder="enter freight type."  ></td>
                              </tr>
                              <tr>
                                <!-- <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Distance</font></td>
                                <td>:</td> -->
                                <td><input name="txtdist" class="forminput" id="txtpassword" maxlength="20" type="text" placeholder="enter distance in km"  ></td>
                              </tr>
							  <tr>
                                <!-- <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Weight</font></td>
                                <td>:</td> -->
                                <td><input name="txtweight" class="forminput" id="txtpassword" type="text" placeholder="enter parcel weight"  ></td>
                              </tr>
							  <tr>
                                <!-- <td>&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Parcel Type</font></td>
                                <td>:</td> -->
                               <td><input name="txtparcel" class="forminput" id="txtpassword" type="text" placeholder="enter parcel type"  ></td>
                              </tr>
							   <tr>
                                <!-- <td width="">&nbsp;&nbsp;&nbsp;&nbsp;<font style="font-size:12px;">Message</font></td>
                                <td width="">:</td> -->
                                <td width="">
								<textarea name="txtmsg" class="forminput" id="txtemailid" cols="50" rows="10" type="text" placeholder="enter any msg..."  name="Confirm E-mail Id-repeat"required></textarea></td>
                                  </tr>   
                              <tr>
                                <!-- <td>&nbsp;</td>
                                <td>&nbsp;</td> -->
								<td><input name="Submit" class="green-button"  value="Submit" type="submit" style="padding:5px 10px;font-weight:bold;"></td>
                              </tr>
                          </tbody>
						  </table>
						  </form>
						  <?php include 'footer.php';?>
</body>