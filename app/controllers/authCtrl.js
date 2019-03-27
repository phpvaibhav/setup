app.controller('authCtrl', function ($scope, $rootScope, $routeParams, $location, $http, Data) {
    //initially set those objects to null to avoid undefined error
    $scope.login = {};
    $scope.signup = {};
    $scope.doLogin = function (customer) {
        Data.post('signin',customer).then(function (results) {
            Data.toast(results);
            if (results.status == "success") {
                $location.path('dashboard');
            }
        });
    };
    $scope.signup = {email:'',password:'',name:'',phone:'',address:''};
    $scope.signUp = function (customer) {
            var file = $scope.profileImage;
            var fd = new FormData();
            console.log(file);
 
            fd.append('profileImage',file);
            fd.append('email', customer.email);
            fd.append('fullName', customer.fullName);
            fd.append('password', customer.password);
        Data.post('signup',fd,newForm=true).then(function (results) {
            Data.toast(results);
            if (results.status == "success") {
                $location.path('/');
            }
        });
    };
   
  
});