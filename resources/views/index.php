<!DOCTYPE html>
<html>

<head>
    <base href="/">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>IST Directory Board</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//localhost:35729/livereload.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/theme/theme.css">
    <link rel="stylesheet" href="dist/css/main.css">
</head>

<body ng-app="dtb">
    <div class="nav-side-menu" ng-controller="navController">
        <div class="brand">Menu</div>
        <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

        <div class="menu-list">

            <ul id="menu-content" class="menu-content collapse out">
                <li ng-click="visitLink('/faculty/manage')" ng-class="(location === '/faculty/manage') ? 'active' : ''"><a href=""><span class="nav-icon"><i class="fa fa-users"></i></span>MANAGE FACULTY</a></li>
                <li ng-click="visitLink('/faculty/add')" ng-class="(location === '/faculty/add') ? 'active' : ''"><a href=""><span class="nav-icon"><i class="fa fa-user-plus"></i></span>ADD FACULTY</a></li>
           
            
            <div id="menu-content" class="menu-content  fixed-bottom">
                <span class="nav-icon"><i class="fa fa-user"></i></span>Username
                <span class="right"><a href="">LOGOUT</a></span>
            </div>
            </ul>
        </div>
    </div>

    <div ng-view class="container main">

    </div>

    <!-- base JS files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.3.15/angular.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.3.15/angular-route.min.js"></script>

    <!-- plug-ins -->

    <!-- app.js -->
    <script src="dist/js/app.js"></script>
</body>

</html>