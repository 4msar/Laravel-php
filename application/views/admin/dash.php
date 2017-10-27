<script type="text/javascript">
function show_confirm(act,gotoid)
{
 if(act=="edit")
{
var r=confirm("Do you really want to edit?");
	if (r==true)
	{
	window.location="<?php echo base_url();?>admin/users/"+act+"/"+gotoid;
	}
}
else{
var r=confirm("Do you really want to delete?");
if (r==true)
	{
	window.location="<?php echo base_url();?>admin/users/"+act+"/"+gotoid;
	}
}
}
</script>

			<div class="content">
				<div class="container-fluid">

					<div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header text-center" data-background-color="purple">
	                                <h4 class="title">Some Basic Info</h4>
									<p class="category"></p>
	                            </div>
	                        </div>
	                    </div>
	                </div>


					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">supervisor_account</i>
								</div>
								<div class="card-content">
									<p class="category">Total Students</p>
									<h3 class="title"><?php echo $total_rows; ?></h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<p><a href="<?php echo base_url(); ?>admin/users/add_user">Add new entry </a></p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="green">
									<i class="material-icons">store</i>
								</div>
								<div class="card-content">
									<p class="category">Revenue</p>
									<h3 class="title">$34,245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">date_range</i> Last 24 Hours
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="red">
									<i class="material-icons">info_outline</i>
								</div>
								<div class="card-content">
									<p class="category">Fixed Issues</p>
									<h3 class="title">75</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">local_offer</i> Tracked from Github
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-twitter"></i>
								</div>
								<div class="card-content">
									<p class="category">Followers</p>
									<h3 class="title">+245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Just Updated
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header text-center" data-background-color="purple">
	                                <h4 class="title">See Student by Technology</h4>
									<p class="category"></p>
	                            </div>
	                        </div>
	                    </div>
	                </div>

						<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
							<a href="<?php echo base_url(); ?>users/computer/">
								<div class="card-header" data-background-color="orange">
									<!-- <i class="material-icons">supervisor_account</i> -->
									<i class="fa fa-desktop"></i>
								</div>
								<div class="card-content">
									<p class="category">Total Students of</p>
									<h3 class="title">Computer</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<p>View Details </p>
									</div>
								</div>
								</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
							<a href="<?php echo base_url(); ?>users/electrical/">
								<div class="card-header" data-background-color="blue">
									<i class="fa fa-lightbulb-o"></i>
								</div>
								<div class="card-content">
									<p class="category">Total Students of</p>
									<h3 class="title">Electrical</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<p>View Details </p>
									</div>
								</div>
								</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
							<a href="<?php echo base_url(); ?>users/mechanical/">
								<div class="card-header" data-background-color="green">
									<i class="fa fa-cogs"></i>
								</div>
								<div class="card-content">
									<p class="category">Total Students of</p>
									<h3 class="title">Mechanical</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<p>View Details </p>
									</div>
								</div>
								</a>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
							<a href="<?php echo base_url(); ?>users/textile/">
								<div class="card-header" data-background-color="purple">
									<i class="fa fa-th-large"></i>
								</div>
								<div class="card-content">
									<p class="category">Total Students of</p>
									<h3 class="title">Textile</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<p>View Details </p>
									</div>
								</div>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>

