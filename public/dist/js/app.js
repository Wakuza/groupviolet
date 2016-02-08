var app = angular.module('dtb', ['ngRoute']);
app.controller('addFacultyController', function($scope) {
    console.log('addFaculty-controller');
});
app.controller('loginController', function($scope) {
    console.log('login-controller');
});
app.controller('manageFacultyController', function($scope) {
    console.log('manageFaculty-controller');
});
app.controller('navController', function($scope, $location) {
    
    $scope.location = $location.path();
    
    //for changing navigation links
 $scope.visitLink = function(link) {
    $scope.location = link;
     $location.path(link);
     
 }

 //watch for location change and update the location variable
 $scope.$on('$locationChangeSuccess', function(event){
       $scope.location = $location.path();
});
 
});
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
//# sourceMappingURL=maps/app.js.map
