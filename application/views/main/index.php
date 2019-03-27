<!DOCTYPE html>
<html lang="en">
<head>
  <?php 
      $front_assets= base_url().'assets/'; 
      $front_bower_components= base_url().'bower_components/'; 
      $front_angular= base_url().'app/'; 
  ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mabwe</title>
  <link rel="icon" href="<?php echo $front_assets; ?>img/favicon.png" type="image/png">
  <link href="https://fonts.googleapis.com/css?family=Merienda+One|Muli:400,600,700,800,900" rel="stylesheet"> 
  <link href="https://fonts.googleapis.com/css?family=Arizonia" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Engagement" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Niconne" rel="stylesheet">
  <link href="<?php echo $front_assets; ?>css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo $front_assets; ?>css/style.css">
  <link rel="stylesheet" href="<?php echo $front_assets; ?>css/responsive.css">  
  <link rel="stylesheet" href="<?php echo $front_assets; ?>css/animated-headlines.css">  
  <link rel="stylesheet" href="<?php echo $front_bower_components; ?>AngularJS-Toaster/toaster.css">  
  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- scripts -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="<?php echo $front_assets; ?>js/bootstrap.min.js"></script>
    <script src="<?php echo $front_assets; ?>js/animated-headlines.js"></script>
    <script src="<?php echo $front_assets; ?>js/custom.js"></script>
   
   
  <!-- scripts -->
  <!-- angular scripts -->
  <script src="<?php echo $front_bower_components; ?>angular/angular.min.js"></script>
  <script src="<?php echo $front_bower_components; ?>angular-route/angular-route.min.js"></script>
  <script src="<?php echo $front_bower_components; ?>angular-animate/angular-animate.min.js"></script>
  <script src="<?php echo $front_bower_components; ?>AngularJS-Toaster/toaster.min.js"></script>
  <script src="<?php echo $front_bower_components; ?>angularUtils-pagination/dirPagination.js"></script>

  
  <script src="<?php echo $front_angular; ?>app.js"></script>
  <script src="<?php echo $front_angular; ?>routes.js"></script>
  <script src="<?php echo $front_angular; ?>directives/fileupload.js"></script>
  <script src="<?php echo $front_angular; ?>directives/commonDirectives.js"></script>
  <script src="<?php echo $front_angular; ?>factory/data.js"></script>
  <script src="<?php echo $front_angular; ?>services/services.js"></script>
 
  <script src="<?php echo $front_angular; ?>controllers/authCtrl.js"></script>
  <script src="<?php echo $front_angular; ?>controllers/homeCtrl.js"></script>
  <script src="<?php echo $front_angular; ?>controllers/categoryCtrl.js"></script>
  <script src="<?php echo $front_angular; ?>controllers/productCtrl.js"></script>
  <!-- angular scripts -->
 
</head>
<body ng-app="main-app" data-base-url="<?php echo base_url(); ?>" >
<main>
     <div class="preloader" ng-show="preloader">
      <div class="spinner"></div>
   </div>

<section class="section_1">
  <header id="Home">
    <nav class="navbar navbar-expand-lg main-navbar navbar-light main-navbar fixed-top" >
      <div class="container">
        <div class="txt2 animation-header-text cd-headline clip is-full-width">
          <span class="cd-words-wrapper"> 
            <b class="is-visible">Test</b>
          </span>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item" ng-hide="authenticated">
                <a href="#/!" class="nav-link">Signup</a>
              </li>
              <li class="nav-item " ng-hide="authenticated">
                <a href="#/!" class="nav-link">Signin</a>
              </li>
             
              <li class="nav-item " ng-show="authenticated">
                <a href="#!category" class="nav-link">Category</a>
              </li>   
              <li class="nav-item " ng-show="authenticated">
                <a href="#!product" class="nav-link">Product</a>
              </li>
               <li class="nav-item " ng-show="authenticated">
                <a href="#!dashboard" class="nav-link">My Profile</a>
              </li>   
              <li class="nav-item " ng-show="authenticated">
                <a href="javascript:void(0);" ng-click="logout();" class="nav-link">Logout</a>
              </li>
             
              <li class="nav-item">
                <div class="profile dropdown">
                  <a ng-show="authenticated" id="dropdownMenuLink1" href="javascript:void(0);" class="img-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="{{profile}}"></a>
                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink1" >
                    <li ng-hide="authenticated">
                      <a href="#!signup"><i class="fa fa-user-o"></i>Signup</a>
                    </li>
                    <li ng-hide="authenticated">
                      <a href="#/!"><i class="fa fa-user-o"></i>Signin</a>
                    </li> 
                    <li ng-show="authenticated">
                      <a href="#!dashborad"><i class="fa fa-user-o"></i>My Profile</a>
                    </li>
                    <li ng-show="authenticated">
                      <a href="javascript:void(0);" ng-click="logout()"><i class="fa fa-sign-out"></i>Logout</a>
                    </li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
      </div>
    </nav>
  </header>
  
</section>

        <div ng-view></div>
 

<section class="section_7">
  <footer>
    <div class="footer-down pt-20 pb-20">
      <div class="container">      
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="copy-txt">
              <p>© 2018 All Rights Reserved By <a href="index.html">Mabwe</a></p>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="down-txt">
              <ul>
                <li><a href="javascript:void(0);">Terms & Conditions</a></li>                            
                <li><a href="javascript:void(0);">Help & Support</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
</section>
</main>
</body>
 <toaster-container toaster-options="{'time-out': 3000}"></toaster-container>
<div class="modal fade" id="forgotpwd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Forgot Password</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="" class="forgot-form">
          <div class="form-group">
            <h6>Can't remember your Password ? Don't wory- we're here to help.</h6>
          </div>  
          <div class="form-group">
            <input type="email" placeholder="Enter Your Email Id" class="form-control main-control">
          </div>
          <div class="text-center">
            <button type="submit" class="btn thm-btn">Submit</button>
          </div>  
        </form>
      </div>
    </div>
  </div>
</div>
   <!-- dele Service -->
   <div id="confirmation-dialog">
      <div class="modal fade confirmation-dialog" role="dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-danger white">
              <h4 class="modal-title white">{{dialogConfig.title}}</h4>
            </div>
            <div class="modal-body">
              <div class="span5">{{dialogConfig.message}}</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
              <button type="button" ng-repeat="button in dialogConfig.buttons" ng-click="executeDialogAction(button.action,button.id,button.custom)" class="btn btn-danger">{{button.label}}</button>
            </div>
          </div>
        </div>
      </div>
    </div>
<!-- delet service -->
</html>