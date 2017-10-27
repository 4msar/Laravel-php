	    <div class="main-panel">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Add User</h4>
									<p class="category">Complete your profile | * are required</p>
	                            </div>
	                            <div class="card-content">
	                             <?php if (validation_errors()) { ?>
	                            <div class="alert alert-danger">
								  <strong><?php echo validation_errors();  ?></strong> 
								</div>
	                            <?php } ?>
	                                <form method="post" action="<?php echo base_url();?>admin/users/insert_new_user">
	                                    <div class="row">
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Roll *</label>
													<input type="text" name="roll" class="form-control" required>
												</div>
	                                        </div>
	                                        <div class="col-md-6">
												<div class="form-group label-floating">
													<label class="control-label">Name *</label>
													<input type="text" name="name" class="form-control" required>
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

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Mobile *</label>
													<input type="text" name="mobile" class="form-control" required>
												</div>
	                                        </div>
	                                        </div>

	                                        <div class="row">
	                                        	<div class="col-md-6">
	                                        		<div class="form-group label-floating">
	                                        		<label class="label" for="sel">Depertment *</label>
														 <select name="dept" class="form-control selectpicker" id="sel">
													    <option value="Computer">Computer</option>
													    <option value="Electrical">Electrical</option>
													    <option value="Mechanical">Mechanical</option>
													    <option value="Textile">Textile</option>
													  </select>
													</div>
	                                        	</div>
	                                        	<div class="col-md-6">
	                                        		<div class="form-group label-floating">
													<label class="control-label">Semester *</label>
													<select name="sem" class="form-control selectpicker" id="sel">
													    <option value="1st">1st</option>
													    <option value="2nd">2nd</option>
													    <option value="3rd">3rd</option>
													    <option value="4th">4th</option>
													    <option value="5th">5th</option>
													    <option value="6th">6th</option>
													    <option value="7th">7th</option>
													  </select>
													
												</div>
	                                        	</div>
	                                        </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
												<div class="form-group label-floating is-empty">
									    				<label class="control-label">Address *</label>
													<input type="text" name="address" class="form-control" required>
		                        					<span class="material-input"></span></div>

	                                        </div>
	                                    </div>
	                                    <button type="submit"  name="submit"  class="btn btn-primary pull-right">Add</button>
	                                    <div class="clearfix"></div>
	                                </form>


	                                <p><?php if($this->session->flashdata('msg')): ?>
								    <div class="alert alert-info">
	                                    <h4><?php echo $this->session->flashdata('msg'); ?>
	                                    </h4>
	                                </div>
									<?php endif; ?></p>

	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
