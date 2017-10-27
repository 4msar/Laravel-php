	    <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Add User</h4>
									<p class="category">Complete your profile | * are required</p>
									<p>
									<?php if (validation_errors()) { ?>
									<h6 class="alert alert-danger" style="float: right; margin-top: -75px;"><?php echo validation_errors();  ?></h6> 
									<?php } else if($this->session->flashdata('msg')){ ?>
	                                    <h6 class="alert alert-success" style="float: right; margin-top: -60px;"><?php echo $this->session->flashdata('msg');} ?>
	                                    </h6>
									</p>
	                            </div>
	                            <div class="card-content">
	                             
	                            
	                                <!-- <form method="post" action="<?php echo base_url();?>admin/users/insert_new_user"> -->
	                                <?php echo form_open_multipart('admin/users/insert_new_user');?>
	                                    <div class="row">
	                                         <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Name *</label>
													<input type="text" name="name" class="form-control" required>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Roll *</label>
													<input type="text" name="roll" class="form-control" required>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Registration *</label>
													<input type="text" name="reg" class="form-control" required>
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email (If have)</label>
													<input type="text" name="email" class="form-control" >
												</div>
	                                        </div>

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Mobile *</label>
													<input type="text" name="mobile" class="form-control" required>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Session (2014-15)*</label>
													<input type="text" name="sessions" class="form-control" required>
												</div>
	                                        </div>
	                                        
	                                        </div>

	                                        <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="label">Religion *</label>
													<select name="religion" class="form-control selectpicker" id="sel" required>
														 <option value="">Select One</option>
													    <option value="Islam">Islam</option>
													    <option value="Hindu">Hindu</option>
													    <option value="Christ">Christ</option>
													  </select>
												</div>
	                                        </div>

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="label">Blood Group </label>
													<select name="blood" class="form-control selectpicker" id="sel">
														 <option value="">Select One</option>
													    <option value="O(+)">O(+)</option>
													    <option value="O(-)">O(-)</option>
													    <option value="A(+)">A(+)</option>
													    <option value="A(-)">A(-)</option>
													    <option value="B(+)">B(+)</option>
													    <option value="B(-)">B(-)</option>
													    <option value="AB(+)">AB(+)</option>
													    <option value="AB(-)">AB(-)</option>
													  </select>
												</div>
	                                        </div>
	                                        <div class="col-md-4">
	                                        	<div class="form-group label-floating">
	                                        		<label class="label">Date of Birth *</label>
	                                        		<input type="date" name="birthdate" class="form-control" required>
	                                        </div>
	                                        </div>
	                                        </div>

	                                        <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="label">Gender *</label>
													<select name="gender" class="form-control selectpicker" id="sel" required>
														 <option value="">Select One</option>
													    <option value="Male">Male</option>
													    <option value="Female">Female</option>
													  </select>
												</div>
	                                        </div>
	                                        	<div class="col-md-4">
	                                        		<div class="form-group label-floating">
	                                        		<label class="label" for="sel">Technology *</label>
														 <select name="dept" class="form-control selectpicker" id="sel" required>
														 <option value="">Select One</option>
													    <option value="Computer">Computer</option>
													    <option value="Electrical">Electrical</option>
													    <option value="Mechanical">Mechanical</option>
													    <option value="Textile">Textile</option>
													  </select>
													</div>
	                                        	</div>
	                                        	<div class="col-md-4">
	                                        		<div class="form-group label-floating">
													<label class="label">Semester *</label>
													<select name="sem" class="form-control selectpicker" id="sel" required>
														 <option value="">Select One</option>
													    <option value="1st">1st</option>
													    <option value="2nd">2nd</option>
													    <option value="3rd">3rd</option>
													    <option value="4th">4th</option>
													    <option value="5th">5th</option>
													    <option value="6th">6th</option>
													    <option value="7th">7th</option>
													    <option value="8th">8th</option>
													  </select>
													
												</div>
	                                        	</div>
	                                        </div>

	                                    <div class="row">
	                                        <div class="col-md-8">
												<div class="form-group label-floating is-empty">
									    				<label class="control-label">Address *</label>
													<input type="text" name="address" class="form-control" required>
		                        					<span class="material-input"></span></div>

	                                        </div>
	                                        <div class="col-md-4">
	                                        	
									            <h4>Upload Image (max size 500kb)</h4>
									            <div class="input-group">
									                <label class="input-group-btn">
									                    <span class="btn btn-primary">
									                        Browse&hellip; <input name="pic" type="file" style="display: none;" >
									                    </span>
									                </label>
									                <input style="margin-top: -20px;" type="text" class="form-control" readonly>
									            </div>
												
									        <?php //if ($error){ echo $error; } ?>
	                                        	
	                                        </div>
	                                    </div>
	                                    <button type="submit"  name="submit"  class="btn btn-primary pull-right">Add</button>
	                                    <div class="clearfix"></div>
	                                </form>


	                                

	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
