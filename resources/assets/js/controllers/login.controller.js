(function() {
	'use strict';

	angular
		.module('app-visitas')
		.controller('LoginController',  loginController);

	loginController.$inject = ['$http'];

	function loginController($http) {
		var vm = this;

		vm.login = 'Olá mundo!';
	}
})();