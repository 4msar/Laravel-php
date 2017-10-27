<script type="text/javascript">
function show_confirm(act,gotoid)
{
if(act=="view")
{
	window.location="<?php echo base_url();?>admin/users/"+act+"/"+gotoid;
}
else if(act=="edit")
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
	            	<div class="col-md-12 text-center">

	            	<div class="card card-stats">
							<div class="card-content" style="text-align:center;padding: 0px;">
								<p class="category">See Total Students of</p>
								<h3 class="title">electrical</h3>
							</div>
		            		<nav aria-label="Page navigation">
							  <ul class="pagination">
							    <li>
							    <a href="<?php echo base_url().'users/electrical/semester/'.'1st'?>">1st</a>
							    </li>
							    <li>
							    <a href="<?php echo base_url().'users/electrical/semester/'.'2nd'?>">2nd</a>
							    </li>
							    <li>
							    <a href="<?php echo base_url().'users/electrical/semester/'.'3rd'?>">3rd</a>
							    </li>
							    <li>
							    <a href="<?php echo base_url().'users/electrical/semester/'.'4th'?>">4th</a>
							    </li>
							    <li>
							    <a href="<?php echo base_url().'users/electrical/semester/'.'5th'?>">5th</a>
							    </li>
							    <li>
							    <a href="<?php echo base_url().'users/electrical/semester/'.'6th'?>">6th</a>
							    </li>
							    <li>
							    <a href="<?php echo base_url().'users/electrical/semester/'.'7th'?>">7th</a>
							    </li>
							    <li>
							    <a href="<?php echo base_url().'users/electrical/semester/'.'8th'?>">8th</a>
							    </li>
							  </ul>
							</nav>
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
	                                	<a href="<?php echo base_url(); ?>admin/users/"><i class="material-icons">restore</i> Go Back</a>
	                                </div>
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
											<th scope="col" colspan="3" style="text-align: center;">Action</th>
	                                    </thead>
	                                    <tbody>
	                                   <?php $count = 0; foreach ($electrical_list as $u_key){ ?>
										<tr>
										<td><?php  $count++; echo $count; ?></td>
										<td><?php echo $u_key->roll; ?></td>
										<td><?php echo $u_key->name; ?></td>
										<td><?php echo $u_key->dept; ?></td>
										<td><?php echo $u_key->sem;?></td>
										<td><?php if($u_key->email==null){echo "N/A";}else{echo $u_key->email;} ?></td>
										<td><?php echo $u_key->mobile; ?></td>
										<td><?php echo $u_key->address ; ?></td>

										<td width="40" align="left" ><a href="#" onClick="show_confirm('view',<?php echo $u_key->id; ?>)">View</a></td>

										<td width="40" align="left" ><a href="#" onClick="show_confirm('edit',<?php echo $u_key->id; //return $u_key->id = $idd; ?>)">Edit</a></td>

										<td width="40" align="left" ><a href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete </a></td>
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
