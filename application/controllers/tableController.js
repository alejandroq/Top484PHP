myApp.controller("TableController", function ($scope, $http, $location, AuthenticationService) {
	    
	    AuthenticationService.checkToken();

	    $http.get("../application/endpoints" + $location.path() + ".php")
	    .success(function(data) {
	        $scope.data = data;
	    });

	    //functions (add, delete)
		$scope.setMaster = function(data) {
        	$scope.selected = data;
	    }

	    $scope.isSelected = function(data) {
	        return $scope.selected === data;
	    }

	    // $scope.
	});