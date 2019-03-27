// Here is all Services
'use strict';

app.service('serviceHttp', ['$http', function($http){
   var base_url = $('body').data('base-url');
   var make_url='';
   var headersData='';
   this.post = function(url,formAllow,formData,callback){
      // Check method exist in service ctrl or other ctrl
       make_url=base_url+url;

       // Check new FromData
       var dataSend='';
       if(formAllow === true){
          dataSend = formData;
          headersData = { 'Content-Type': undefined }
       }else{
          dataSend = $.param(formData);
          headersData = { 'Content-Type': 'application/x-www-form-urlencoded; multipart/form-data'}
       }

      $http({
          method  : 'POST',
          url     : make_url,
          async   : false,
          data    : dataSend, 
          headers : headersData // This is header
        }).then(function success(response){
              callback(response.data);
        },function error(response){
              callback(response);
        });
   }//post
   this.get = function(url,formData,callback){
      // Check method exist in service ctrl or other ctrl
       make_url=base_url+url; 
       var dataSend=$.param(formData);
      $http({
          method  : 'POST',
          url     : make_url,
          async   : false,
         data    : dataSend, 
         // headers : headersData // This is header
        }).then(function success(response){
              callback(response.data);
        },function error(response){
              callback(response);
        });
   }//post

}]);
