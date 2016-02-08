app.config(function($routeProvider, $locationProvider) {
	$routeProvider.when('/', {
		templateUrl: '../views/login.html',
        controller: 'loginController'
	}).when('/faculty/add', {
		templateUrl: '../views/addFaculty.html',
        controller: 'addFacultyController'
	}).when('/faculty/manage', {
		templateUrl: '../views/manageFaculty.html',
        controller: 'manageFacultyController'
	}).otherwise({
		redirectTo: '/'
	});
    
    $locationProvider.html5Mode(true); 
});