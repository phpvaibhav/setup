var app = angular.module('main-app',['ngRoute','toaster','ngAnimate','angularUtils.directives.dirPagination']);

// This is Root Scope
app.run(function($rootScope) {
    $rootScope.preloader = false;
    
});
 