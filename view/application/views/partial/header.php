<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body> -->
	
<!-- </body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Courier PHP</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/bootstrap-3.2.0/dist/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/bootstrap-3.2.0/dist/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/bootstrapValidator.min.css"/>
	<link rel="stylesheet" href="<?php echo base_url(); ?>media/css/bootstrap-datetimepicker.min.css">
	<link href='http://fonts.googleapis.com/css?family=Fredoka One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>

	<!-- Latest compiled and minified JavaScript -->
	  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>media/css/notifIt.css">
	  <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />
    <!-- bootstrap@5.0.2  -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"
    />
    <!-- animate.css  -->
    <!-- <link rel="stylesheet" href="./css/animate.css" /> -->
    <!-- custome css  -->
    <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <!-- custome media query  -->
    <!-- <link rel="stylesheet" href="css/responsive.css" /> -->

	<style type="text/css">
	body {
	  width: 100%;
	  margin: 0 auto;
	  padding:20px;
	  font-family: 'Arial';
	  background: #f1f1f1;
	}
	.page_container .row {
	  margin: 0 auto;
	  /* display:flex; */
	}
	#header {
		width: 100%;
		margin: 0;
		font-family: 'Fredoka One';
		border-bottom: 3px solid #111;
	}
	
	#header h1 {
	  color: #07305e;
	  font-size:45px;
	}
	.form-group {
	  margin-bottom: 4px;
	}
	.login_container {
	  position:fixed;
	  top: 50%;
	  left: 50%;
	  width: 100%;
	  margin-top:-15em; /*set to a negative number 1/2 of your height*/
	  margin-left: -250px; /*set to a negative number 1/2 of your width*/
	  padding:20px;
	  text-align: center;
	}
	.main_container {
		padding:20px;
	}
	.header {
	  font-weight:bold;
	  background: #c0c0c0;
	  color:#111;
	  padding:8px;
	  font-size:13px;
	}
	.separator {
	  line-height: 1px;
	}
	.fieldset {
	  padding:10px;
	  border-radius: 10px;
	}
	.row_item {
	  /* width: 100%; */
	  padding: 10px;
	  border-bottom: 1px solid #f1f1f1;
	  font-size:14px;
	}
	.log {
		font-size:11px;
	}
	.centered {
	  text-align:center;
	}
	.readonly {
	  font-weight:normal;
	  margin-left:8px;
	}
	.left {
	  text-align: left;
	}
	.form-button {
	  text-align: right;
	  margin-right: 1px;
	  margin-top:5px;
	}
	h3 {
	  color: #910606;
	  text-align: center;
	}
	.right {
	  text-align: right;
	}
	.fieldset input, textarea {
	  background: #;
	  border-radius:0px;
	}
	form {
	  padding-bottom: 30px;
	}
	.edit select.input-sm {
	    width: 100%;
	}
	.edit textarea.input-sm {
	    width: 100%;
	}
	.user {
	    text-align: left;
	}
	.menu {
	  padding:4px;
	  text-transform:uppercase;
	  font-family:'Roboto';
	}
	.menu a {	  
	  color: #a30007;
	}
	.menu a:hover {
	  text-decoration: none;
	  color: #a30007;
	}
	.dropdown {
	  border: none;
	  margin-top: -10px;
	}
	.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12 {
	  padding:0px;
	}
	.call_to_action {
	  padding-top:5px;
	  padding-bottom: 4px;
	  font-weight: bold;
	  font-family:'Fredoka One';
	}
	.copyright {
	  text-align: center;
	  margin-bottom: 0px;
	}
	.must {
	  color: #910606;
	}
	.danger {
	  color: #910606;
	  }
	  .larger {
	  
	  font-size: larger;
	  }
	  a:hover {
	    text-decoration:none;
	  }
	  .hidden {
	    padding:0px;
	  }
	  #container {
		width: 100%;	    
		height:100%;
		/* padding:20px; */
	    background: #fff;
	    padding:5px;
	  }
	  .container {
		width: 100%;	    
		height:100%;
		/* padding:20px; */
	    background: #fff;
	    padding:5px;
	  }
	  h5 {

	    color: #910606;
	    text-align:left;
	  }
	  form {
	    padding:2px;
	    }
	    .call_to_action form {
	      float:right;
	    }
	    .input-group-addon {
	      cursor:pointer;
	    }
	</style>
	
</head>
<body <?php if(@$print != null){?> onload="print_documendt();" <?php } ?>>
<?php if(!empty($this->session->userdata('logged_in'))){
?>
<div id="container">
<?php if(@$print == null) {?>
<div id="header">
  <div class="row">
	<div class="col-xs-6 col-md-3">
	  <img src="<?php echo base_url(); ?>media/images/logo.png" />
	</div>
	<div class="col-xs-12 col-md-9">
	  <h1>COURIER MANAGEMENT SYSTEM</h1>
	  <div class="row">
	    <div class="col-md-7">
	      <p class="user">Welcome, <?php echo $this->session->userdata('logged_in')['username']; ?></p>
	    </div>
	    <div class="col-md-1">
	      &nbsp;
	    </div>
	    <div class="col-md-4">
	      <div class="dropdown">
		<button class="btn btn-danger dropdown-toggle btn-lng" type="button" id="dropdownMenu1" data-toggle="dropdown">
		  <img src="<?php echo base_url(); ?>media/images/icons/help.png" />&nbsp;&nbsp;Please Select A Menu Here
		  <span class="caret"></span>
		</button>
		<ul class="dropdown-menu .dropdown-menu-right btn-lng btn-block right" role="menu" aria-labelledby="dropdownMenu1">
		<li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>parcels">Parcels&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/parcel.png" /></a></li>
		  <!-- <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>index.php">Home&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/building.png" /></a></li> -->
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>destinations">Offices&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/building.png" /></a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>cargotypes">Parcel Types&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/parcel_types.png" /></a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>paymenttypes">Payment Types&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/payment_types.png" /></a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>transporttypes">Shipping Modes&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/shipping_modes.png" /></a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>users">Users&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/users.png" /></a></li>
<!-- 		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>pricelists">Pricelist</a></li> -->
		  <li role="presentation" class="divider"></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>messages">Message Settings&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/comments.png" /></a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>settings">Configuration Settings&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/settings.png" /></a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>users/change">Change Password&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/change.png" /></a></li>
		  <li role="presentation"><a role="menuitem" tabindex="-1" href="<?php echo base_url(); ?>users/logout">Logout&nbsp;&nbsp;<img src="<?php echo base_url(); ?>media/images/icons/logout.png" /></a></li>
		</ul>
	      </div>
	    </div>
	  </div>
	</div>
  </div>
</div>
<?php } ?>
<?php } ?>
<div class="page_container">