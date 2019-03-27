
app.factory("Data", ['$http', 'toaster',
    function ($http, toaster) { // This service connects to our REST API

               var base_url = $('body').data('base-url');;
       var serviceBase_url = base_url+'api/';
        var obj = {};
        obj.toast = function (data) {
            toaster.pop(data.status, "", data.message, 10000, 'trustedHtml');
        }
        obj.get = function (q) {
            return $http.get(serviceBase_url + q).then(function (results) {
                return results.data;
            });
        };
        obj.post = function (q, object,newForm) {
            if(newForm){
                var headerData ={
                    headers: {'Content-Type': undefined,'Process-Data': false}
                }
            }else{
                var headerData ={
                    headers: {'Content-Type': 'application/x-www-form-urlencoded; multipart/form-data'}
                }
            }
            return $http.post(serviceBase_url+q,object,headerData).then(function (results) {
                return results.data;
            });
        };
        obj.put = function (q, object) {
            return $http.put(serviceBase_url + q, object).then(function (results) {
                return results.data;
            });
        };
        obj.delete = function (q) {
            return $http.delete(serviceBase_url + q).then(function (results) {
                return results.data;
            });
        };

        return obj;
}]);