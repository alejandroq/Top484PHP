myApp.controller("CourseController", function($scope, $http, $state, AuthenticationService, ExchangeService) {
	
	AuthenticationService.checkToken(); // Authenticating User

	var data = [];
	var method = "add";
	

	$state.data = null;
	//Variables
	$scope.data = {
		CourseID:undefined,
		CourseName:undefined,
		CourseElement:undefined,
		CourseDescription:undefined,
		LessonPlan:undefined,
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
		 	CourseID:$scope.data.CourseID,
		 	CourseName:$scope.data.CourseName,
		 	CourseElement:$scope.data.CourseElement,
		 	CourseDescription:$scope.data.CourseDescription,
		 	LessonPlan:$scope.data.LessonPlan
		 }

		if (method == "add") {
			 $http.post("../application/endpoints/addCourse.php", data)
			 .success(function(response) {
			 	$scope.data.Result = "Success!";
			 });
		} else {
			 $http.post("../application/endpoints/updateCourse.php", data)
			 .success(function(response) {
			 	$scope.data.Result = response;
			 });
		}
		$scope.data.Result = "Thank you for your submission!";
		$state.reload(); //reload for new data.
	};
})