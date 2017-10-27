

<script type="text/javascript">
	// var oFile = document.getElementById("imgup").files[0]; // <input type="file" id="fileUpload" accept=".jpg,.png,.gif,.jpeg"/>

            // if (oFile.size > 307200) // 2 mb for bytes.
            // {
                // alert("File size must under 2mb!");
                // return;
            // }
// var uploadField = document.getElementById("imgup");

// uploadField.onclick = function() {
    // if(this.files[0].size > 307200){
       // alert("File is too big!");
       // this.value = "";
    // };
// };

</script>

	    <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
	                        <div class="card"> 
	                            <div class="card-header" data-background-color="red">
	                                <h4 class="title">Update user info</h4>
									<p class="category">update your profile | * are required</p>
	                            </div>
	                            <div class="card-content">
	                            <?php if ($this->session->flashdata('msg')) {
	                            	echo $this->session->flashdata('msg');
	                            } ?>
	                                
	                                <?php echo form_open_multipart('admin/users/update');?>
	                                <?php
									foreach ($items as $item ){ ?>
	                                    <div class="row">
	                                         <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Name *</label>
													<input type="text" name="name" class="form-control" value="<?php echo $item->name; ?>">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Roll *</label>
													<input type="text" name="roll" class="form-control" value="<?php echo $item->roll; ?>">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Registration *</label>
													<input type="text" name="reg" class="form-control" value="<?php echo $item->reg; ?>">
												</div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Email (If have)</label>
													<input type="text" name="email" class="form-control" value="<?php echo $item->email; ?>">
												</div>
	                                        </div>

	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Mobile *</label>
													<input type="text" name="mobile" class="form-control" value="<?php echo $item->mobile; ?>">
												</div>
	                                        </div>
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="control-label">Session (2014-15)*</label>
													<input type="text" name="sessions" class="form-control" value="<?php echo $item->sessions; ?>">
												</div>
	                                        </div>
	                                        
	                                        </div>

	                                        <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="label">Religion *</label>
													<select name="religion" class="form-control selectpicker" id="sel" required>
													<option value="<?php echo $item->religion; ?>">Select One - Currently Selected : <span class="sel"><?php echo $item->religion; ?></span></option>
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
													<option value="<?php echo $item->blood; ?>">Select One - Currently Selected : <span class="sel"><?php echo $item->blood; ?></span></option>
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
	                                        		<input type="date" name="birthdate" class="form-control" value="<?php echo $item->birthdate; ?>">
	                                        </div>
	                                        </div>
	                                        </div>

	                                        <div class="row">
	                                        <div class="col-md-4">
												<div class="form-group label-floating">
													<label class="label">Gender *</label>
													<select name="gender" class="form-control selectpicker" id="sel" required>
													<option value="<?php echo $item->gender; ?>">Select One - Currently Selected : <span class="sel"><?php echo $item->gender; ?></span></option>
													    <option value="Male">Male</option>
													    <option value="Female">Female</option>
													  </select>
												</div>
	                                        </div>
	                                        	<div class="col-md-4">
	                                        		<div class="form-group label-floating">
	                                        		<label class="label" for="sel">Technology *</label>
														 <select name="dept" class="form-control selectpicker" id="sel" required>
														 <option value="<?php echo $item->dept; ?>">Select One - Currently Selected : <span class="sel"><?php echo $item->dept; ?></span></option>
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
													<option value="<?php echo $item->sem; ?>">Select One - Currently Selected : <span class="sel"><?php echo $item->sem; ?></span></option>
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
	                                        <div class="col-md-12">
												<div class="form-group label-floating">
									    				<label class="control-label">Address *</label>
													<input type="text" name="address" class="form-control" value="<?php echo $item->address; ?>">
		                        					<span class="material-input"></span></div>

	                                        </div>
	                                    </div>

	                                    <div class="row">
												<div class="col-md-6">
	                                        	
									            <h4>Upload Image</h4>
									            <div class="">
												<span class="btn btn-warning">
												<input type="file" name="pic" id="imgup">
												
												</span>
									            </div>
									            <span>Upload new images (max size 500kb)</span>
	                                        	
	                                        </div>
	                                        <div class="col-md-4">
				    							<div class="edit-avatar">
				    								<img class="img" src="<?php if ($item->img!=null) {
				    									echo base_url().$item->img;
				    								}else{ if ($item->gender=='Male') {
		    										echo base_url().'assets/img/faces/male.png';
		    									} else{ echo base_url().'assets/img/faces/female.png'; }} ?>" alt="avator">
				    							</div>
	                                        </div>
	                                    </div>


	                                    <input type="hidden" name="id" value="<?php echo $item->id; ?>" />
	                                    <input type="submit"  name="submit"  class="btn btn-primary pull-right" value="Save"/>

	                                    <?php } ?>
	                                    <div class="clearfix"></div>
	                                </form>







	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

