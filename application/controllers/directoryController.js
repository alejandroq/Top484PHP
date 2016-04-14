myApp.controller("CourseController", function($scope, $http, $state, AuthenticationService, ExchangeService) {
	
	AuthenticationService.checkToken(); // Authenticating User

	var data = [];
	var method = "add";
	

	$state.data = null;
	//Variables
	$scope.data = {
		EmailAddress:undefined,
		FirstName:undefined,
		LastName:undefined,
		Gender:undefined,
		DOB:undefined,
		Phone:undefined,
		Role:undefined,
		ShirtSize:undefined,
		JoinDate:undefined,
		ManagerEmail:undefined,
		AdminTitle:undefined,
		StaffType:undefined,
		Result:undefined
	};

	data = ExchangeService.getData();
	$scope.data = data[0];
	if (data[0]!=null){
		method = "update";
	} else {
		method = "add";
	}


	// Function to submit the form after all validation has occurred            
  	$scope.submitForm = function(isValid) {
	    // check to make sure the form is completely valid
	    if (isValid) {
	      $scope.manage();
	    }
  	};

	//Functions	
	$scope.manage = function() {
		 var data = {
		 	EmailAddress:$scope.data.EmailAddress,
			FirstName:$scope.data.FirstName,
			LastName:$scope.data.LastName,
			Gender:$scope.data.Gender,
			DOB:$scope.data.DOB,
			CellPhone:$scope.data.CellPhone,
			Role:$scope.data.Role,
			ShirtSize:$scope.data.ShirtSize,
			JoinDate:$scope.data.JoinDate,
			ManagerEmail:$scope.data.ManagerEmail,
			AdminTitle:$scope.data.AdminTitle,
			StaffType:$scope.data.StaffType,
			Result:undefined
		 }

		if (method == "add") {
			 $http.post("../application/endpoints/addUser.php", data)
			 .success(function(response) {
			 	$scope.data.Result = "Success!";
			 });
		} else {
			 $http.post("../application/endpoints/updateUser.php", data)
			 .success(function(response) {
			 	$scope.data.Result = response;
			 });
		}
		$state.data = null;
		$scope.data.Result = "Thank you for your submission!";
		$state.reload(); //reload for new data.
	};
})