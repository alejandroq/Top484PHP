<div class="">
	<div class="">
		<h2>Sign Up</h2>
		<input ng-model="signUpInfo.username" type="text" class="" placeholder="Choose a Username">
		<input  ng-model="signUpInfo.password" type="password" class="" placeholder="Choose Password">
		<button ng-click="signUserUp()">Sign-Up</button>
	</div>

	<div class="">
		<h2>Login</h2>
		<input type="text" ng-model="loginInfo.username" class="" placeholder="Username">
		<input type="password" ng-model="loginInfo.password" class="" placeholder="Password">
		<button ng-click="login()">Sign In</button>
	</div>
</div>