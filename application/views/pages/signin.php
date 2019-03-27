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
              <a class="nav-link active" href="#/!">Login</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"  href="#!signup">Signup</a>
            </li>
          </ul>
          <div class="tab-content">
            <div id="home" class="container tab-pane active">
              <form  role="form" name="signinForm" class="mt-30">
                <div class="form-group">
                  <input type="text" class="form-control main-control" id="unm" placeholder="Email" name="email" ng-model="signinData.email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" required>
                  <span class="ngError" ng-show="signinForm.email.$touched && signinForm.email.$error.required">Enter email id.</span>
                  <span class="ngError" ng-show="signinForm.email.$error.email || signinForm.email.$error.pattern">Enter valid email id.</span>  
                </div>
                <div class="form-group">
                  <input type="password" class="form-control main-control" id="pwd" placeholder="Password" name=="password" ng-model="signinData.password" required>
                   <span class="ngError" ng-show="signinForm.password.$touched && signinForm.password.$error.required">Please enter password.</span>
                </div>
                <div class="form-group form-check ">
                  <label class="form-check-label">
                    <input class="form-check-input" type="checkbox"> Remember me
                  </label>
                  <label class="pull-right forgot-txt">
                    <a href="javascript:void(0);" data-toggle="modal" data-target="#forgotpwd" >Forgot Password?</a>
                  </label>
                </div>
                <button type="button" ng-disabled="signinForm.$invalid" ng-click="doLogin(signinData);" class="btn thm-btn btn-block mt-30">Login</button>
                <div class="accnt-txt mt-20">
                  <p> Don't have an account? <a href="#!signup">Signup</a></p>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     </div>
</section>