   
   
	<?php
		if (isset($ActivePage)) {
			switch($ActivePage) {
				case 'login' :
					break;
				default :
				?>
				   <footer class="row">
						<p class="col-md-9 col-sm-9 col-xs-12 copyright">&copy; <a href="http://usman.it" target="_blank">Muhammad
								Usman</a> 2012 - 2015</p>

						<p class="col-md-3 col-sm-3 col-xs-12 powered-by">Powered by: <a
								href="http://usman.it/free-responsive-admin-template">Charisma</a></p>
					</footer>
				<?php
					break;				
			}
		}
	?>   
  
</div><!--/.fluid-container-->

<!-- external javascript -->

<script src="<?php echo base_url(); ?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

<!-- library for cookie management -->
<script src="<?php echo base_url(); ?>js/jquery.cookie.js"></script>
<!-- calender plugin -->
<script src='<?php echo base_url(); ?>bower_components/moment/min/moment.min.js'></script>
<script src='<?php echo base_url(); ?>bower_components/fullcalendar/dist/fullcalendar.min.js'></script>
<!-- data table plugin -->
<script src='<?php echo base_url(); ?>js/jquery.dataTables.min.js'></script>

<!-- select or dropdown enhancer -->
<script src="<?php echo base_url(); ?>bower_components/chosen/chosen.jquery.min.js"></script>
<!-- plugin for gallery image view -->
<script src="<?php echo base_url(); ?>bower_components/colorbox/jquery.colorbox-min.js"></script>
<!-- notification plugin -->
<script src="<?php echo base_url(); ?>js/jquery.noty.js"></script>
<!-- library for making tables responsive -->
<script src="<?php echo base_url(); ?>bower_components/responsive-tables/responsive-tables.js"></script>
<!-- tour plugin -->
<script src="<?php echo base_url(); ?>bower_components/bootstrap-tour/build/js/bootstrap-tour.min.js"></script>
<!-- star rating plugin -->
<script src="<?php echo base_url(); ?>js/jquery.raty.min.js"></script>
<!-- for iOS style toggle switch -->
<script src="<?php echo base_url(); ?>js/jquery.iphone.toggle.js"></script>
<!-- autogrowing textarea plugin -->
<script src="<?php echo base_url(); ?>js/jquery.autogrow-textarea.js"></script>
<!-- multiple file upload plugin -->
<script src="<?php echo base_url(); ?>js/jquery.uploadify-3.1.min.js"></script>
<!-- history.js for cross-browser state change on ajax -->
<script src="<?php echo base_url(); ?>js/jquery.history.js"></script>
<!-- application script for Charisma demo -->
<script src="<?php echo base_url(); ?>js/charisma.js"></script>


</body>
</html>
