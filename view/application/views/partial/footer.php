<?php if(!empty($this->session->userdata('logged_in'))){
if(@$print == null){
?>
<div class="copyright">
&copy;Copyright <?php echo date("Y"); ?>. All Rights Reserved.
</div>
<?php 
}
}
?>
</div>
</div>

<script type="text/javascript">
	  function fail(message){
	   notif({
		  type: "error",
		  msg: message,
		  position: "right",
		  width: 500,
		  height: 60,
		  fade: true,
		  autohide: true,
		  multiline: true
		});
	  }
	  function success(message){
	    notif({
		  type: "info",
		  msg: message,
		  position: "right",
		  width: 500,
		  fade: true,
		  autohide: true,
		  multiline: true
		});
	  }
	  function print_document(){
	  	window.print();
	  	window.location.href = '/parcels';
	  }
	  $(document).ready(function(){
	    if($('#error').val() != '')
	      fail($('#error').val());
	    else if($('#success').val() != '')
	      success($('#success').val());
	  });
	</script>
<script src="<?php echo base_url(); ?>media/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>media/bootstrap-3.2.0/dist/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>media/js/bootstrapValidator.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>media/js/bootstrap-datetimepicker.min.js" ></script>
	      
      <script type="text/javascript" src="<?php echo base_url();?>media/js/notifIt.js"></script>
      <script type="text/javascript" src="<?php echo base_url();?>media/js/bootbox.min.js"></script>
    
</body>
</html>