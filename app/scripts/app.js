var app = angular.module('frontendApp', ['ngRoute', 'ngAnimate', 'toaster','ui.bootstrap']);

app.config(['$routeProvider',
  function ($routeProvider) {
        $routeProvider.
            when('/', {
                title: 'Home Page',
                templateUrl: 'app/partials/index.html',
                controller: 'mainCtrl'
            })
            .when('/', {
                title: 'About Us',
                templateUrl: 'app/partials/about-us.html',
                controller: 'aboutusCtrl'
            })
            .otherwise({
                templateUrl: 'app/partials/index.html'
            });
  }]);

