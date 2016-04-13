<script>
	document.title = "WBL - Courses";
</script>
<style type="text/css">
	@media only screen and (max-width: 770px), (min-device-width: 768px) and (max-device-width: 1024px)  {
	  td:nth-of-type(1):before { content: "Class Name"; }
	  td:nth-of-type(2):before { content: "Element"; }
      td:nth-of-type(3):before { content: "Seats Left"; }
      td:nth-of-type(4):before { content: "Location"; }
	}
</style>
<div class="container">
	<h3>Courses</h3>
	<div class="row">
    	<div ng-controller="TableController">
          <input type="text" ng-model="searchFilter" placeholder="Filter" class="five columns" list="x">
          <datalist id="x">
	          <option value="B-Boying"></option>
	          <option value="DJing"></option>
	          <option value="Grafiti"></option>
	          <option value="Knowledge of Self"></option>
	          <option value="MCcing"></option>
          </datalist>
		  <button class="button-primary four columns">
          	<i class="fa fa-plus"></i>
          	<span>Add Course</span>
          </button>
            <table class="u-full-width scrollable">
                <thead>
                    <tr>
                        <td>
                        	<a ng-click="sortType = 'CourseName'; sortReverse=!sortReverse">Course Name
                        		<span ng-show="sortType == 'CourseName' && !sortReverse" class="fa fa-caret-down"></span>
                        		<span ng-show="sortType == 'CourseName' && sortReverse" class="fa fa-caret-up"></span>
                        		<span ng-hide="sortType !=null" class="fa fa-caret-down"></span>
                        	</a>
    					</td>
    					<td>
                        	<a ng-click="sortType = 'CourseElement'; sortReverse=!sortReverse">Element
                        		<span ng-show="sortType == 'CourseElement' && !sortReverse" class="fa fa-caret-down"></span>
                        		<span ng-show="sortType == 'CourseElement' && sortReverse" class="fa fa-caret-up"></span>
                        	</a>
    					</td>
    					<td>
                            <a ng-click="sortType = 'SeatsLeft'; sortReverse=!sortReverse">Seats Left
                                <span ng-show="sortType == 'SeatsLeft' && !sortReverse" class="fa fa-caret-down"></span>
                                <span ng-show="sortType == 'SeatsLeft' && sortReverse" class="fa fa-caret-up"></span>
                            </a>               
                        </td>
                        <td>
                            <a ng-click="sortType = 'Location'; sortReverse=!sortReverse">Location
                                <span ng-show="sortType == 'Location' && !sortReverse" class="fa fa-caret-down"></span>
                                <span ng-show="sortType == 'Location' && sortReverse" class="fa fa-caret-up"></span>
                            </a>               
                        </td>
    					<td></td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                    <tr ng-repeat="courses in data | orderBy:sortType:sortReverse | filter:searchFilter">
                        <td>{{courses.CourseName}}</td>
                        <td>{{courses.CourseElement}}</td>
                        <td>{{courses.SeatsLeft}}</td>
                        <td>{{courses.Location}}</td>
                        <td><a ng-click="setMaster(courses)">Add Lesson Plan</a></td>
    					<td><a ng-click="setMaster(courses)">Update Course</a></td>
                    </tr>
                </tbody>
    		</table>
        </div> 
    </div>
</div>