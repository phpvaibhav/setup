<div class="wraper light-bg">
	<div class="mt-78 pb-20 profile-section">
		<div class="container">
			<div class="row ">
				<div class="col-md-4 col-lg-4 col-sm-12">
					<div class="profile-details mt-40 ">

						<form action="">
							<div class="form-group usr-grp">
			    				<div class="usr-img">
									<img src="img/11.jpg" class="rounded-circle" id="pImg" alt="">
				                    <div class="text-center upload_sec"> 
				                      <input accept="image/*" class="inputfile hideDiv" id="file-2" name="profileImage" onchange="document.getElementById('pImg').src = window.URL.createObjectURL(this.files[0])" style="display: none;" type="file">
				                      <label for="file-2" class="upload_pic">
				                        <span class="fa fa-camera"></span></label>
				                    </div>
			    				</div>
			    			</div>					
	    				</form>
	    				<div class="details-txt text-center">
	    					<h2>{{fullName}}</h2>
	    					<p>{{email}}</p>
	    					<div class="usr-more">
								<div class="row">
									<div class="col brif-txt">
										<i class="fa fa-briefcase"></i>
										<h4>{{title}}</h4>
									</div>
									<div class="col">
										<i class="fa fa-flag"></i>
										<h4>Zimbabwe</h4>
									</div>
								</div>
							</div>
							<!-- <div>
								<a href="index.html" class="btn btn-block lgt-btn"><i class="fa fa-sign-out"></i>Logout</a>
							</div> -->
	    				</div>
			    	</div>						
				</div>
				<div class="col-md-8 col-lg-8 col-sm-12">
					<div class="edit-tabs-sec mt-40">
						<ul class="nav edit-nav nav-tabs nav-fill" id="pills-tab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><i class="fa fa-edit"></i> Edit Profile</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><i class="fa fa-lock"></i> Change Password</a>
						  </li>
						  <!-- <li class="nav-item">
						    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><i class="fa fa-bell-o"></i> Notification</a>
						  </li> -->
						</ul>
						<div class="tab-content user-content" id="pills-tabContent">
						  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
						  	<div class="col-lg-8 offset-lg-2">
							  	<form action="#">
									<div class="form-group">
									  <label for="unm">Name</label>
								      <input type="text" class="form-control main-control" id="unm" value="Jack">
								    </div>
								    <div class="form-group">
								      <label for="profession">Profession</label>
								      <input type="text" class="form-control main-control" id="profession"  value="CEO">
								    </div>
								    <div class="form-group">
								      <label for="location">City</label>
								      <input type="text" class="form-control main-control" id="location"  value="Zimbabwe">
								    </div>
								     <a href="javascript:void(0);" id="update-profile" class="btn thm-btn btn-block mt-30">Update</a>
								</form>	
							</div>
						  </div>
						  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
						  	<div class="col-md-8 offset-md-2">
						  		<form action="#">
					                <div class="form-group">
					                	<label for="oldpwd">Old Password</label>
					                	<input type="password" class="form-control main-control" id="oldpwd" placeholder="Old Password">
					                </div>
					                <div class="form-group">
					                  <label for="newpwd">New Password</label>
					                  <input type="password" class="form-control main-control" id="newpwd" placeholder="New Password">
					                </div>
					                <div class="form-group">
					                  <label for="cnfmpwd">Confirm Password</label>
					                  <input type="password" class="form-control main-control" id="cnfmpwd" placeholder="Confirm Password">
					                </div>					                
					                <a href="javascript:void(0);" class="btn thm-btn btn-block mt-30">Update</a>
					            </form>
						  	</div>
						  </div>
					
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div

