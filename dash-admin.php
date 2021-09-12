<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>hjftujh</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="css/angular.min.js"></script>

    <style>
        h1 {

            font-family: sans-serif;
            color: darkmagenta;
            text-decoration: underline;
        }

        img {
            border-radius: 50%;
        }

        body {
            background-image: linear-gradient(-90deg, rgba(110, 100, 255, 0), rgba(110, 110, 255, 1));

        }
        .cc
        {
            margin-left: 400px;
        }
    </style>
    <script>
        var varModule = angular.module("ourmodule", []);
        varModule.controller("ourController", function($scope, $http) {


            $scope.jsonArray; //just declared
            $scope.jsonArrayRat; //just declared


        });

    </script>


</head>

<body ng-app="ourmodule" ng-controller="ourController">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-danger" href="#">
            <h3>www.mps.com</h3>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-success" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-success" href="#">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-success" href="#">Contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle font-weight-bold text-success" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Available
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Barnala</a>
                        <a class="dropdown-item" href="#">Bathinda</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Chandigarh</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Closed</a>

                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <i class="fa fa-search" aria-hidden="true" style="margin-left: 3px"></i>
                &nbsp;
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary" type="button" disabled>
                    <span class="spinner-grow spinner-grow-sm" role="status" aria-hidden="true"></span>
                    <b>Search</b>
                </button>
            </form>
        </div>
    </nav>
    <center>
        <h1>Admin's Dashboard</h1>
        <br>
        
    </center>
    <div class="container">
        <div class="row mt-4 ">
         
            <div class="col-md-3 cc">
                <div data-toggle="modal" data-target="#modalrating">
                    <div class="card border-light bg-info">
                        <center><img src="pics/postt.jpg" width="100" height="100" alt="..."></center>
                        <div class="card-body">
                            <h5 class="card-title">USERS-MANAGER</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="managers-worker-front.php" class="btn btn-dark">MANAGE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   <hr><hr><hr>

    <!----------------------------------->
    


</body>

</html>
