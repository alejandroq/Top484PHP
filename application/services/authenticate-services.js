myApp.service('AuthenticationService', ["$http", "$state", function($http, $state) {
	var self = this;

	self.checkToken = function() {
		// var data = {token:token};
		// if user is not logged in
		var data;

		var token;
		if (localStorage['token']) {
			token = JSON.parse(localStorage['token']);
			data = {token:token};
		} else {
			token = null;
			data = {token:token};
		}

		$http.post("../application/endpoints/checkToken.php", data)
		.success(function(response) {

			response = "authorized"; //testing purposes

			if (response === "authorized") {
				console.log(response);
				console.log("LOGGED IN");
			} else {
				console.log(response);
				console.log("LOGGED OUT");
				$state.go("login");
			}
		}).error(function(error) {
			console.error(error);
			$state.go("login");
		})
	}
}])