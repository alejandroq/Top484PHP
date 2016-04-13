myApp.controller("MainController", function($scope, $state, $http, AuthenticationService) {
	// if user is not logged in
	// var token;
	// if (localStorage['token']) {
	// 	token = JSON.parse(localStorage['token']);
	// } else {
	// 	token = null;
	// }

	AuthenticationService.checkToken(); // Authenticating User

	$scope.logout = function(){
		var data = {
			token:token,
		}
		$http.post('..application/endpoints/logout.php', data)
		.success(function(response) {
			console.log(response);
			localStorage.clear();
			$state.go("login");
		}).error(function(){
			console.error(error);
		})
	}
})