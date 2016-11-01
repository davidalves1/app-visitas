(function() {
	'use strict';

	angular
		.module('app-visitas')
		.controller('HomeCtrl',  homeCtrl);

	homeCtrl.$inject = ['$http'];

	function homeCtrl($http) {
		var vm = this;

		vm.hello = 'Hello AngularJS!';
	}
})();