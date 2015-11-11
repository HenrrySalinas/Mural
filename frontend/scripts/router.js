'use strict';
angular.module('sysMural', ['ngResource','ngRoute'])
	.config(function($routeProvider) {
		$routeProvider.when('/quejas',{
			templateUrl:'views/quejas/index.html',
			controller:'indexQuejasCtrl'
		})
		.when('/crearPost',{
			templateUrl:'views/quejas/create.html',
			controller:'createPostCtrl'
		})
		.when('/crearPersona',{
			templateUrl:'views/personas/create.html',
			controller:'createPersonaCtrl'
		})
		.otherwise({
			redirectTo:'/'
		});
	});