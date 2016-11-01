<!DOCTYPE html>
<html lang="pt-br" ng-app="app-visitas">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>app-visitas</title>

    <link href="libs/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/css/mdb.min.css" rel="stylesheet">
    <link href="css/style.min.css" rel="stylesheet">
</head>
<body>
    
    
<header>


<!--Navbar-->
<nav class="navbar navbar-dark bg-primary">

    <!-- Collapse button-->
    <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx2">
        <i class="fa fa-bars"></i>
    </button>

    <div class="container">

        <!--Collapse content-->
        <div class="collapse navbar-toggleable-xs" id="collapseEx2">
            <!--Navbar Brand-->
            <a class="navbar-brand">Navbar</a>
            <!--Links-->
            <ul class="nav navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Features</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link">Pricing</a>
                </li>
                <li class="nav-item btn-group">
                    <a class="nav-link dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenu1">
                        <a class="dropdown-item">Action</a>
                        <a class="dropdown-item">Another action</a>
                        <a class="dropdown-item">Something else here</a>
                    </div>
                </li>
            </ul>
            <!--Search form-->
            <form class="form-inline">
                <input class="form-control" type="text" placeholder="Search">
            </form>
        </div>
        <!--/.Collapse content-->

    </div>

</nav>
<!--/.Navbar-->


</header>

    <div ng-controler="HomeCtrl as vm">
        <span ng-bind="hello"></span>
    </div>
    <div ng-view></div>

    <script src="libs/angular/angular.min.js"></script>
    <script src="libs/angular-route/angular-route.min.js"></script>
    <script src="libs/jquery/dist/jquery.min.js"></script>
    <script src="libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/js/mdb.min.js"></script>
    <script src="js/app.min.js"></script>
</body>
</html>