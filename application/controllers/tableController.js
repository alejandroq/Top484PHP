myApp.controller("TableController", function ($scope, $state, $http, $location, AuthenticationService, ExchangeService) {
	    
	    AuthenticationService.checkToken();

	    $http.get("../application/endpoints" + $location.path() + ".php")
	    .success(function(data) {
	        $scope.data = data;
	    });

	    $scope.setMaster = function(data) {
	        $scope.selected === data;
	        ExchangeService.addData(data);
	        $state.go(".manage");
	    }

	    // functions, profiles, create news, permissions, perhaps set it so the most valuable inforation is presnet, and new inputs fill tables immediately sans reload. Do little, but do it very well. spanding background
	    // ENROOL 
	});