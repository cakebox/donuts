'use strict';

angular.module('donuts', ['ngResource', 'ngRoute', 'ui.bootstrap'])
.config(function ($routeProvider) {
    $routeProvider
    .when('/', {
        templateUrl: 'app/main/main.html',
        controller: 'MainCtrl'
    })
    .otherwise({
        redirectTo: '/'
    });
});
