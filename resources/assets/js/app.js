(function() {
	'use strict';

	angular.module('app-visitas', ['ngRoute'])
		.config(['$routeProvider', routesConfig]);

	function routesConfig($routeProvider) {
		$routeProvider
			.when('/login', {
				templateUrl: '/js/views/login.html',
				controller: 'LoginController'
			});
	}
})();