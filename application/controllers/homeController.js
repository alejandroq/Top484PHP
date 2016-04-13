myApp.controller("HomeController", function ($scope, AuthenticationService) {

		AuthenticationService.checkToken();

		$scope.message = "Community Wall";
		})
