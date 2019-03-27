app.controller('categoryCtrl',['$scope','$rootScope','serviceHttp','toaster',function($scope,$rootScope,serviceHttp,toaster){

	$scope.categoryList ={};
	$scope.init = function(){
		//$scope.dataParam= {name:'vaibhav'};
		/*serviceHttp.post('api/session',formAllow=false,$scope.dataParam,function(res){
			console.log(res);
			toaster.pop('success','messsgaf');
		});	*/
		$scope.dataParam ={};
		serviceHttp.get('api/categoryList',$scope.dataParam,function(res){
			//console.log(res);
			if(res.status){
				$scope.categoryList = res.data;
			}else{
				$scope.categoryList = res.data;
			}
			toaster.pop(res.statusResponse,res.message);
		});
	} //end function 
	$scope.init();
	$scope.editCategory =function(categoryId){
    let index = $scope.categoryList.findIndex( record => record.categoryId == categoryId );
      if(index!=-1){
        $scope.categoryData = $scope.categoryList[index];           
      }
  }//End function
	$scope.submitCategory = function(){
 		var formdata = new FormData();
		angular.forEach($scope.categoryData, function (value, key) {
			formdata.append(key,value);
		});
		$rootScope.preloader = true;
		serviceHttp.post('api/categorysubmit',formAllow=true,formdata,function(res){
			$rootScope.preloader = false;
			if(res.status){
				$scope.categoryData ={};
				$scope.categoryData.categoryId = 0;
				$scope.categoryForm.$setPristine();
				$scope.categoryForm.$setUntouched();
				toaster.pop(res.statusResponse,res.message);
			}else{
				toaster.pop(res.statusResponse,res.message);
			}
			
		});
	}//end function
	
}]);