 <section class="section_2 sec-pd-50">

  <div class="container"> 
  <div class="row">
     <!--  <div class="col-lg-6 col-md-6 col-sm-12 col-12">
        <div class="banner-sec">
          <div class="bnnr">
            <div class="banner-lft">
              <img src="<?php echo base_url(); ?>assets/img/icon.png" alt="">
            </div>
         
          </div>
        </div>
      </div> -->
      <div class="col-lg-6 offset-lg-3 col-md-6 col-sm-12 col-12">
        <div class="form-sec">        
          <ul class="nav nav-pills nav-justified justify-content-center" role="tablist">
            <li class="nav-item">
              <a class="nav-link " href="#/!">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#!signup">Signup</a>
            </li>
          </ul>
          <div class="tab-content">
         
            <div class="container tab-pane active">
              <form role="form" name="signupForm" class="mt-30">
                <div class="form-group text-center">
                  <div class="profile-sec">
                    <img src="<?php echo base_url(); ?>assets/img/user-icn.png" id="pImg">
                    <div class="text-center upload_sec"> 
                      <input accept="image/*" file-model ="profileImage" class="inputfile hideDiv" ng-model="profileImage" id="file-2" name="profileImage" onchange="document.getElementById('pImg').src = window.URL.createObjectURL(this.files[0])" style="display: none;" type="file">
                      <label for="file-2" class="upload_pic">
                        <span class="fa fa-camera"></span></label>
                    </div>
                    
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control main-control" id="unm" ng-model="signupData.fullName" name="fullName" placeholder="Full Name" required>
                   <span class="ngError" ng-show="signupForm.fullName.$touched && signupForm.fullName.$error.required">Enter fullName.</span>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control main-control" id="email" placeholder="Email" name="email" ng-model="signupData.email"  ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required>
                  <span class="ngError" ng-show="signupForm.email.$touched && signupForm.email.$error.required">Enter email id.</span>
                  <span class="ngError" ng-show="signupForm.email.$error.email || signupForm.email.$error.pattern">Enter valid email id.</span>  
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control main-control" id="pwd1" ng-model="signupData.password" placeholder="Password" required>
                   <span class="ngError" ng-show="signupForm.password.$touched && signupForm.password.$error.required">Please enter password.</span>
                </div>
               <button type="button"  ng-disabled="signupForm.$invalid"  ng-click="signUp(signupData);" class="btn thm-btn btn-block mt-30">Signup</button>
                <div class="accnt-txt mt-20">
                  <p>Already have an account? <a href="#/!">Login</a></p>
                </div>
              </form>            
            </div>
          </div>
        </div>
      </div>
    </div>
     </div>
</section>