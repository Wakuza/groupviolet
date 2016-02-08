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