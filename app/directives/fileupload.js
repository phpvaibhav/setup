// For image uploading
app.directive('fileModel', ['$parse', function ($parse) {
    return {
       restrict: 'A',
       require:'ngModel',
       link: function(scope, element, attrs,ngModel) {
          var model = $parse(attrs.fileModel);
          var modelSetter = model.assign;
          
          element.bind('change', function(){
             scope.$apply(function(){
               ngModel.$setViewValue(element.val());
                ngModel.$render();
                modelSetter(scope, element[0].files[0]);
             });
          });
       }
    };
 }]);

