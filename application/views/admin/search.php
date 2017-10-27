
	    <div class="content">
	            <div class="container-fluid">
	            	<div class="row">
	            	<div class="col-md-12 text-center">

	            	<div class="card card-stats">
							<div class="card-content" style="text-align:center;padding: 0px;">
								<p class="category">Search Result of</p>
								<h3 class="title"><?php echo $name; ?></h3>
							</div>
					</div>
            	</div>
            </div>
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title"><?php echo $title; ?></h4>
	                                <p class="category">List of students</p>
	                                <div class="back-link">
	                                	<a href="<?php if ($session_data==false) { echo base_url(); }else{ echo base_url().'admin/users/';} ?>">
	                                	<i class="material-icons">restore</i> Go Back</a>
	                                </div>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th scope="col">Results</th>
	                                    	<th scope="col">Roll</th>
											<th scope="col">Name</th>
											<th scope="col">Technology</th>
											<th scope="col">Semester</th>
											<th scope="col">Blood G.</th>
											<th scope="col">BirthDate</th>
											<th scope="col">Address</th>
											<?php if ($session_data==false) { }else{?>
											<th scope="col" colspan="3" style="text-align: center;">Action</th><?php } ?>
	                                    </thead>
	                                    <tbody>
	                                   <?php $count = 0; foreach ($search_result as $u_key){ ?>
										<tr>
										<td><?php  $count++; echo $count; ?></td>
										<td><?php echo $u_key->roll; ?></td>
										<td><?php echo $u_key->name; ?></td>
										<td><?php echo $u_key->dept; ?></td>
										<td><?php echo $u_key->sem;?></td>
										<td><?php echo $u_key->blood;?></td>
										<td><?php echo $u_key->birthdate;?></td>
										<td><?php echo $u_key->address ; ?></td>
										<?php if ($session_data==false) { }else{?>
										<td width="40" align="left" ><a href="<?php echo base_url().'admin/users/view/'.$u_key->id; ?>" >View</a></td>

										<td width="40" align="left" ><a href="<?php echo base_url().'admin/users/edit/'.$u_key->id; ?>" >Edit</a></td>

										<td width="40" align="left" ><a href="<?php echo base_url().'admin/users/delete/'.$u_key->id; ?>" >Delete </a></td><?php } ?>
										</tr>
										<?php }?>
	                                    </tbody>
	                                </table>
	                               
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>