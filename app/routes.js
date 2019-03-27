app.config(['$routeProvider',function($routeProvider){
	var base_url = $('body').data('base-url');
	 $routeProvider.
	 when('/', {
            title: 'Login',
            templateUrl: base_url+'index.php/home/signin',
            controller: 'authCtrl'
        }).
	 when('/signup', {
            title: 'Signup',
            templateUrl: base_url+'index.php/home/signup',
            controller: 'authCtrl'
        }). 
     when('/category', {
            title: 'Category',
            templateUrl: base_url+'index.php/dashboard/category',
            controller: 'categoryCtrl'
        }).
    when('/product', {
            title: 'Product',
            templateUrl: base_url+'index.php/dashboard/product',
            controller: 'productCtrl'
        }).
     when('/dashboard', {
            title: 'Dashboard',
            templateUrl: base_url+'index.php/dashboard',
            controller: 'homeCtrl'
        }).otherwise({redirectTo: '/'});

}]).run(function ($rootScope, $location, Data) {
        $rootScope.$on("$routeChangeStart", function (event, next, current) {
            $rootScope.authenticated = false;
            Data.get('session').then(function (results) {
                if (results.id) {
                    $rootScope.authenticated    = true;
                    $rootScope.userId           = results.id;
                    $rootScope.fullName         = results.fullName;
                    $rootScope.email            = results.email;
                    $rootScope.profile            = results.profile;
                } else {
                    var nextUrl = next.$$route.originalPath;
                    if (nextUrl == '/signup' || nextUrl == '/login') {

                    } else {
                        $location.path("/");
                    }
                }
            });
        });//check session
        $rootScope.logout = function () {

            Data.get('logout').then(function (results) {
                Data.toast(results);
                $rootScope.authenticated = false;
                $location.path('/');
            });
        }
        //delete
  $rootScope.showDialog = function(flag) {
    jQuery("#confirmation-dialog .modal").modal(flag ? 'show' : 'hide');
  };  
  $rootScope.executeDialogAction = function(action,id,custom) {


   
           $rootScope.showDialog();
     
  };
    $rootScope.confirmationDialogDelete  = function($id,$action,$message="",$label="") {

    $rootScope.dialogConfig = {
      title: "Alert!!!",
      message: $message? $message:"Are you sure you want to delete?",
      buttons: [{
        label: $label? $label:"Delete",
        action: $action,
        id: $id,
        custom: false
      }]
    };

      $rootScope.showDialog(true);
    };
    
  //delete
    });;