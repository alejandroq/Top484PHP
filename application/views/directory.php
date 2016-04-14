<script>
	document.title = "WBL - Directory";
</script>
<style type="text/css">
	@media only screen and (max-width: 770px), (min-device-width: 768px) and (max-device-width: 1024px)  {
	  td:nth-of-type(1):before { content: "Name"; }
	  td:nth-of-type(2):before { content: "Role"; }
	  td:nth-of-type(3):before { content: "Email"; }
	}
</style>

<div ui-view></div>

<div class="container">
	<h3 class="row">Directory</h3>
	<div class="row">
    	<div ng-controller="TableController">
          <input type="text" ng-model="searchFilter" placeholder="Search" class="five columns" list="x">
          <datalist id="x">
			     <option value="Admin"></option>
			     <option value="Cipher"></option>
	         <option value="Staff"></option>						
			     <option value="Parent"></option>
	         <option value="Student"></option>
          </datalist>
          <button ui-sref=".manage" class="button-primary four columns">
          	<i class="fa fa-plus"></i>
          	<span>Add User</span>
          </button>
          <table class="u-full-width scrollable">
              <thead>
                  <tr>
                      <td>
                      	<a ng-click="sortType = 'FirstName'; sortReverse=!sortReverse">Name
                      		<span ng-show="sortType == 'FirstName' && !sortReverse" class="fa fa-caret-down"></span>
                      		<span ng-show="sortType == 'FirstName' && sortReverse" class="fa fa-caret-up"></span>
                      		<span ng-hide="sortType !=null" class="fa fa-caret-down"></span>
                      	</a>
  					</td>
                      <td>
                      	<a ng-click="sortType = 'UserType'; sortReverse=!sortReverse">User Type
  							<span ng-show="sortType == 'UserType' && !sortReverse" class="fa fa-caret-down"></span>
                      		<span ng-show="sortType == 'UserType' && sortReverse" class="fa fa-caret-up"></span>
                      	</a>
                      </td>
  					<td>
                      	<a ng-click="sortType = 'EmailAddress'; sortReverse=!sortReverse">Email
  							<span ng-show="sortType == 'EmailAddress' && !sortReverse" class="fa fa-caret-down"></span>
                      		<span ng-show="sortType == 'EmailAddress' && sortReverse" class="fa fa-caret-up"></span>
                      	</a>
                      </td>
                      <td></td>
                  </tr>
              </thead>
              <tbody>
                  <tr ng-repeat="users in data | orderBy:sortType:sortReverse | filter:searchFilter">
                      <td>{{users.Name}}</td>
                      <td>{{users.UserType}}</td>
                      <td>{{users.EmailAddress}}</td>
                      <td><a ng-click="setMaster(users)">Update User</a></td>
                  </tr>
              </tbody>
  		  </table>
        </div>
  </div> 
</div>