
<script type="text/javascript">

function show_confirm(id, roll)
{

	
var r=confirm("Do you really want to delete?");
if (r==true)
	{
		
	window.location="<?php echo base_url();?>admin/users/delete/"+id;
	}else{
		alert ('You are not delete '+roll+' Info');
	}
}


</script>


<div class="content">
	            <div class="container-fluid">
	                <div class="row">
						<?php foreach ($items as $item ){ ?>
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Details About @ <strong style="font-size: 25px;font-weight: 300;"> <?php echo $item->name; ?></strong></h4>
	                                <p class="category"></p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <!-- <thead class="text-primary">
											<th scope="col">Name</th>
	                                    	<th scope="col">Roll</th>
	                                    </thead> -->
	                                    <tbody>
	                                    <tr>
	                                    	<td>Name</td>
	                                    	<td><?php echo $item->name; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Roll</td>
	                                    	<td><?php echo $item->roll; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Registration</td>
	                                    	<td><?php echo $item->reg; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Email</td>
	                                    	<td><?php if($item->email==null){echo "N/A";}else{echo $item->email;} ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Mobile</td>
	                                    	<td><?php echo $item->mobile; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Session</td>
	                                    	<td><?php echo $item->sessions; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Religion</td>
	                                    	<td><?php echo $item->religion; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Blood Group</td>
	                                    	<td><?php if($item->blood==null){echo "N/A";}else{echo $item->blood;} ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Date of Birth</td>
	                                    	<td><?php echo $item->birthdate; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Gender</td>
	                                    	<td><?php echo $item->gender; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Technology</td>
	                                    	<td><?php echo $item->dept; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Semester</td>
	                                    	<td><?php echo $item->sem; ?></td>
	                                    </tr>
	                                    <tr>
	                                    	<td>Address</td>
	                                    	<td><?php echo $item->address; ?></td>
	                                    </tr>
	                                   
										
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
	                    </div>


	                     <div class="col-md-4">
    						<div class="card card-profile">
    							<div class="card-avatar">
    								<a href="<?php echo base_url().'admin/users/view/'.$item->id; ?>">
    									<img class="img" src="<?php if ($item->img!=null) {
    										echo base_url().$item->img;
    									}else{ if ($item->gender=='Male') {
    										echo base_url().'assets/img/faces/male.png';
    									} else{ echo base_url().'assets/img/faces/female.png'; }} ?>">
    								</a>
    							</div>

    							<div class="content">
    								<h6 class="category text-gray">Student of <?php echo $item->dept; ?></h6>
    								<h4 class="card-title"><?php echo $item->name; ?></h4>
    								<p class="card-content">
    									He is Live in <?php echo $item->address; ?>
    								</p>
    								<a href="https://www.google.com/maps?q=<?php echo $item->address; ?>" target="_blank" class="btn btn-info btn-round">See &nbsp; Address</a><br>
    								<a href="<?php echo base_url().'admin/users/edit/'.$item->id ?>" class="btn btn-primary btn-round">Edit</a>
    								
									<a class="btn btn-danger btn-round" href="#" onClick="show_confirm(<?php echo $item->id;?>,<?php echo $item->roll;?>)">Delete</a>
    								
    							</div>
    						</div>
		    			</div>

					<?php }?>
	                </div>
	            </div>
	        </div>
