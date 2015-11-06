var app = angular.module('ionicApp', ['ionic'])
    .run(function($ionicPlatform) {
      $ionicPlatform.ready(function() {
        // Stuff in here
      });
    })
    .config(function ($stateProvider, $urlRouterProvider) {
      $stateProvider.
          state('company',{
            url: '/',
            templateUrl: 'views/mainView.html',
            controller: 'mainController'
          });
      $urlRouterProvider.otherwise('/');
    });