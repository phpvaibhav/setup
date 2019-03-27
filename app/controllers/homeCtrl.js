app.controller('homeCtrl',['$scope','serviceHttp','toaster',function($scope,serviceHttp,toaster){
$scope.title = "home";
	$scope.init = function(){
		//$scope.dataParam= {name:'vaibhav'};
		/*serviceHttp.post('api/session',formAllow=false,$scope.dataParam,function(res){
			console.log(res);
			toaster.pop('success','messsgaf');
		});	*/
	/*	serviceHttp.get('api/session',function(res){
			console.log(res);
			toaster.pop('success','get method');
		});*/
	} //end function 
	$scope.init();
console.log("home");
}]);