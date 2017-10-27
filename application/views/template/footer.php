
			<footer class="footer">
				<div class="container-fluid">
					<nav class="pull-left">
						<ul>
							<li>
								<a href="<?php echo base_url(); ?>">
									Home
								</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>about">
									About
								</a>
							</li>
							<?php if ($session_data) { ?>
							<li>
								<a href="<?php echo base_url() ?>admin">
								    <strong> Admin</strong>
								</a>
							</li>
							<?php }else { ?>
							<li>
								<a href="<?php echo base_url() ?>login">
								    <strong> Login</strong>
								</a>
							</li>
							<?php } ?>
						</ul>
					</nav>
					<p class="copyright pull-right">
						&copy; <script>document.write(new Date().getFullYear())</script> <a href="http://facebook.com/4msar">Saiful Alam</a> - Love with coding
					</p>
				</div>
			</footer>
		</div>

	</div>

</body>
		<!--   Core JS Files   -->
	<script src="http://localhost/student/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="http://localhost/student/assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="http://localhost/student/assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="http://localhost/student/assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="http://localhost/student/assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="http://localhost/student/assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="http://localhost/student/assets/js/demo.js"></script>

	<!-- Script for Custom js -->
	<script src="http://localhost/student/assets/js/script.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
