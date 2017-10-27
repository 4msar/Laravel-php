

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header" data-background-color="orange">
									<i class="material-icons">supervisor_account</i>
								</div>
								<div class="card-content">
									<p class="category">Total Students</p>
									<h3 class="title"><?php echo $user_total; ?></h3>
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

						<div class=" col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Some User List</h4>
	                                <p class="category">New Students on 15th September, 2016</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th scope="col">No</th>
	                                    	<th scope="col">Roll</th>
											<th scope="col">Name</th>
											<th scope="col">Dept.</th>
											<th scope="col">Semester</th>
											<th scope="col">Email</th>
											<th scope="col">Mobile</th>
											<th scope="col">Address</th>
	                                    </thead>
	                                    <tbody>
	                                   <?php $count = 0; foreach ($user_list as $u_key){ ?>
										<tr>
										<td><?php  $count++; echo $count; ?></td>
										<td><?php echo $u_key->roll; ?></td>
										<td><?php echo $u_key->name; ?></td>
										<td><?php echo $u_key->dept; ?></td>
										<td><?php echo $u_key->sem;?></td>
										<td><?php if($u_key->email==null){echo "N/A";}else{echo $u_key->email;} ?></td>
										<td><?php echo $u_key->mobile; ?></td>
										<td><?php echo $u_key->address ; ?></td>
										</tr>
										<?php }?>
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>

