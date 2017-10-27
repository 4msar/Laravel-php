
	    <div style="background-image: url('<?php echo base_url().'assets/img/login.jpeg' ?>'); background-size: cover;" class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-4 col-md-offset-4">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Login to Dashboard</h4>
									<p class="category">Enter your username and password</p>
	                            </div>
	                            <div class="card-content">

	                            <?php if (validation_errors()) { ?>
	                            <div class="alert alert-danger">
								  <strong><?php echo validation_errors();  ?></strong> 
								</div>
	                            <?php } ?>

   									<?php echo form_open('verifylogin'); ?>

	                                <!-- <form method="post" action="<?php echo base_url();?>login"> -->
	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">User name</label>
													<input type="text" name="username" class="form-control" required>
												</div>
	                                        </div>
	                                        </div>
	                                        <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
													<label class="control-label">Password</label>
													<input type="password" name="password" class="form-control" required>
												</div>
	                                        </div>
	                                    </div>

	                                     <div class="row">
	                                     <div class="col-md-12 text-center">
	                                     <button type="submit"  name="submit"  class="btn btn-primary ">Login</button>
	                                     </div>
	                                     </div>
	                                    </form>
	                                </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>

