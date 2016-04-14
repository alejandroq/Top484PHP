<div id="form-window" class="container">
  	<div class="row">
		<div class="column"><a href="#/directory"><i class="fa fa-times-circle-o"></i></a></div>
		<h4>Directory Management</h4>
   	</div>	
   	<form name="form" ng-submit="submitForm(form.$valid)" class="row" novalidate>

	   	<div class="row">

	   		<input type="text" placeholder="Course Name"  ng-model="data.CourseName" class="offset-by-three three columns" ng-minlength="3" maxlength="200" value="{{data.CourseName}}" required>

	   		<select ng-model="data.CourseElement" selected="{{data.CourseElement}}"class="three columns" required>
	   			<option disabled selected value>Select an Element</option>
	   			<option value="BBoying">BBoying</option>
				<option value="DJing">DJing</option>
				<option value="Graffiti">Graffiti</option>
				<option value="Knowledge of Self">Knowledge of Self</option>
	   			<option value="MCcing">MCcing</option>
	   		</select>

	   	</div>
	   	<div class="row">

	   		<textarea ng-model="data.CourseDescription" class="six columns offset-by-three" placeholder="Course Description" required>{{data.CourseDescription}}</textarea>

	   	</div>
	   	<div class="row">

	   		<textarea ng-model="data.LessonPlan" class="six columns offset-by-three" placeholder="Include your Lesson Plan here.">{{data.LessonPlan}}</textarea>

	   	</div>
	   	<div class="row">

	   		<input type="submit" value="Submit" class="two columns offset-by-five" ng-disabled="form.$invalid">

	   	</div>
	   	<div class="row">

	   		<h4 class="success">{{data.Result}}</h4>

	   	</div>
	</form>
</div>