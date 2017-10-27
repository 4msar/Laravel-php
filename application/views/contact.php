	    <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2 ">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Contact us</h4>
									<p class="category">Fill the form | * are required</p>
	                            </div>
	                            <div class="card-content">
	                             <?php if (validation_errors()) { ?>
	                            <div class="alert alert-danger">
								  <strong><?php echo validation_errors();  ?></strong> 
								</div>
	                            <?php } ?>
	                                <form method="post" action="<?php echo base_url();?>contact">
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Name *</label>
													<input type="text" name="name" class="form-control" required>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Subject *</label>
													<input type="text" name="subject" class="form-control" required>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating">
													<label class="control-label">Email *</label>
													<input type="text" name="email" class="form-control" required>
												</div>
	                                        </div>
	                                    </div>


	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
									    			<label class="control-label">Message *</label>
													<textarea name="message" id="" cols="30" rows="10" class="form-control" required></textarea>
		                        					<span class="material-input"></span>
		                        					</div>

	                                        </div>
	                                    </div>
	                                    <button type="submit"  name="submit"  class="btn btn-primary pull-right">Send</button>
	                                    <div class="clearfix"></div>
	                                </form>


	                                
	                                    <?php echo $this->session->flashdata('msg'); ?>
	                                    
	                                

	                            </div>
	                            <!-- end card -->
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
