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
function s_roll(){
	 var sr = document.getElementById("search_roll").value;
	window.location="<?php echo base_url();?>users/search/byroll/"+sr;
}

</script>

			<div class="content">
				<div class="container-fluid">


				<div class="row">
					<div class="col-md-6">
						<div class="card">
							<div class="card-content text-center">
								<form method="POST" class="form navbar"  action="<?php echo base_url() .'users/search/byname/'.$name; ?>">
				                    <div class="form-group  is-empty">
				                        <input name="search_input" type="text" class="text-center form-control" placeholder="Search by Name">
				                        <span class="material-input"></span>
				                    </div>
				                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
				                        <i class="material-icons">search</i><div class="ripple-container"></div>
				                    </button>
				                </form>
							</div>
						</div>
					</div>
					
					<div class="col-md-6">
						<div class="card">
							<div class="card-content text-center">
							
								<form method="POST" class="form navbar"  action="<?php echo base_url() .'users/search/byroll/'.$roll; ?>">
				                    <div class="form-group  is-empty">
				                        <input id="search_roll" name="search_roll" type="text" class="text-center form-control" placeholder="Search by Roll">
				                        <span class="material-input"></span>
				                    </div>
				                   <button type="submit" class="btn btn-white btn-round btn-just-icon">
				                        <i class="material-icons">search</i><div class="ripple-container"></div>
				                    </button>
									
									<!--<a type="submit" class="btn btn-white btn-round btn-just-icon"" href="#" onClick="s_roll(<?php echo $s_roll; ?>)"><i class="material-icons">search</i><div class="ripple-container"></div></a>-->
									
							</form>
							</div>
						</div>
					</div>
				</div>


					

					<div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">All of our Students</h4>
	                                <p class="category">Registered Students # <?php echo $total_rows; ?></p>

	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
											<th scope="col">Name</th>
	                                    	<th scope="col">Roll</th>
	                                    	<th scope="col">Reg.</th>
											<th scope="col">Dept.</th>
											<th scope="col">Semester</th>
											<th scope="col">Address</th>
											<th scope="col" colspan="3" style="text-align: center;">Action</th>
	                                    </thead>
	                                    <tbody class="my-tab">
	                                   <?php $count = 0; foreach ($user_list as $u_key){ ?>
										<tr>
										<td><?php echo $u_key->name; ?></td>
										<td><?php echo $u_key->roll; ?></td>
										<td><?php echo $u_key->reg; ?></td>
										<td><?php echo $u_key->dept; ?></td>
										<td><?php echo $u_key->sem;?></td>
										<td><?php echo $u_key->address ; ?></td>

										<td width="40" align="left" ><a class="btn btn-info" href="#" onClick="show_confirm('view',<?php echo $u_key->id; ?>)"><i class="material-icons">person</i><div class="ripple-container"></div></a></td>

										<td width="40" align="left" ><a class="btn btn-success" href="#" onClick="show_confirm('edit',<?php echo $u_key->id; //return $u_key->id = $idd; ?>)"><i class="material-icons">edit</i><div class="ripple-container"></div></a></td>

										<td width="40" align="left" ><a class="btn btn-danger" href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)"><i class="material-icons">close</i><div class="ripple-container"></div> </a></td>
										</tr>
										<?php }?>
	                                    </tbody>
	                                </table>
	                               <?php echo $links; ?>
	                            </div>
	                        </div>
	                    </div>
	                </div>
				</div>
			</div>

