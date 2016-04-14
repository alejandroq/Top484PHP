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
				.state('directory.manage', {
			        url: '/manage',
			        parent:'directory',
			        templateUrl:"../application/views/directoryManage.php",
			        controller:"CourseController"
			    })
				.state('courses', {
					url:'/courses',
					templateUrl:"../application/views/courses.php",
					controller:"TableController"
				})
				.state('courses.manage', {
			        url: '/manage',
			        parent:'courses',
			        templateUrl:"../application/views/coursesManage.php",
			        controller:"CourseController"
			    })
				.state('events', {
					url:'/events',
					templateUrl:"../application/views/events.php",
					controller:"TableController"
				})
				.state('events.manage', {
			        url: '/manage',
			        parent:'events',
			        templateUrl:"../application/views/eventsManage.php",
			        controller:"CourseController"
			    })
		})