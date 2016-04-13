var myApp = angular.module("myApp", ["ui.router"]);

myApp.config(function ($stateProvider, $urlRouterProvider) {
			$urlRouterProvider
			.otherwise('/');

			$stateProvider
				.state('login', {
					url:'/login',
					templateUrl:"../application/views/login.php",
					controller:"LoginController"
				})
				.state('home', {
					url:'/',
					templateUrl:"../application/views/home.php",
					controller:"HomeController"
				})
				.state('directory', {
					url:'/directory',
					templateUrl:"../application/views/directory.php",
					controller:"TableController"
				})
				.state('courses', {
					url:'/courses',
					templateUrl:"../application/views/courses.php",
					controller:"TableController"
				})
				.state('events', {
					url:'/events',
					templateUrl:"../application/views/events.php",
					controller:"TableController"
				})
		})