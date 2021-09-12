<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   
    
    
    
    <title>Hello, world!</title>
    <style>
    input[type="radio"]
        {
            margin-left: 100px;
            display: inline-block;
            width:20px;
            height:20px;    
        }
          h1 {

            font-family: sans-serif;
            color: darkmagenta;
            text-decoration: underline;
        }

        img {
            border-radius: 50%;
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
    <span id=hidden></span>
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,160L12.6,165.3C25.3,171,51,181,76,197.3C101.1,213,126,235,152,218.7C176.8,203,202,149,227,133.3C252.6,117,278,139,303,170.7C328.4,203,354,245,379,234.7C404.2,224,429,160,455,160C480,160,505,224,531,250.7C555.8,277,581,267,606,245.3C631.6,224,657,192,682,181.3C707.4,171,733,181,758,176C783.2,171,808,149,834,165.3C858.9,181,884,235,909,240C934.7,245,960,203,985,208C1010.5,213,1036,267,1061,266.7C1086.3,267,1112,213,1137,208C1162.1,203,1187,245,1213,240C1237.9,235,1263,181,1288,138.7C1313.7,96,1339,64,1364,74.7C1389.5,85,1415,139,1427,165.3L1440,192L1440,0L1427.4,0C1414.7,0,1389,0,1364,0C1338.9,0,1314,0,1288,0C1263.2,0,1238,0,1213,0C1187.4,0,1162,0,1137,0C1111.6,0,1086,0,1061,0C1035.8,0,1011,0,985,0C960,0,935,0,909,0C884.2,0,859,0,834,0C808.4,0,783,0,758,0C732.6,0,707,0,682,0C656.8,0,632,0,606,0C581.1,0,556,0,531,0C505.3,0,480,0,455,0C429.5,0,404,0,379,0C353.7,0,328,0,303,0C277.9,0,253,0,227,0C202.1,0,177,0,152,0C126.3,0,101,0,76,0C50.5,0,25,0,13,0L0,0Z"></path></svg>
    <center>
   <h1>Admin's Dashboard</h1>
    </center>

    <div class="container">
        <div class="row mt-4 ">
         <center>
            <div class="col-md-3">
                <div data-toggle="modal" data-target="#modalrating">
                    <div class="card border-light bg-primary">
                        <center><img src="pics/postt.jpg" width="100" height="100" alt="..."></center>
                        <div class="card-body">
                            <h5 class="card-title">&nbsp;USERS-MANAGER</h5>
                            <p class="card-text">&nbsp;Some quick example text to build on the &nbsp;card title and make up the bulk of the &nbsp;card's content.</p>
                            &ensp;&ensp;&ensp;&nbsp;&nbsp;&nbsp;&nbsp;<button><a href="managers-worker-front.php" class="btn btn-dark">MANAGE</a></button>
                        </div>
                    </div>
                </div>
            </div>
            </center>
        </div>
    </div>
   


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a2d9ff" fill-opacity="1" d="M0,160L12.6,165.3C25.3,171,51,181,76,197.3C101.1,213,126,235,152,218.7C176.8,203,202,149,227,133.3C252.6,117,278,139,303,170.7C328.4,203,354,245,379,234.7C404.2,224,429,160,455,160C480,160,505,224,531,250.7C555.8,277,581,267,606,245.3C631.6,224,657,192,682,181.3C707.4,171,733,181,758,176C783.2,171,808,149,834,165.3C858.9,181,884,235,909,240C934.7,245,960,203,985,208C1010.5,213,1036,267,1061,266.7C1086.3,267,1112,213,1137,208C1162.1,203,1187,245,1213,240C1237.9,235,1263,181,1288,138.7C1313.7,96,1339,64,1364,74.7C1389.5,85,1415,139,1427,165.3L1440,192L1440,320L1427.4,320C1414.7,320,1389,320,1364,320C1338.9,320,1314,320,1288,320C1263.2,320,1238,320,1213,320C1187.4,320,1162,320,1137,320C1111.6,320,1086,320,1061,320C1035.8,320,1011,320,985,320C960,320,935,320,909,320C884.2,320,859,320,834,320C808.4,320,783,320,758,320C732.6,320,707,320,682,320C656.8,320,632,320,606,320C581.1,320,556,320,531,320C505.3,320,480,320,455,320C429.5,320,404,320,379,320C353.7,320,328,320,303,320C277.9,320,253,320,227,320C202.1,320,177,320,152,320C126.3,320,101,320,76,320C50.5,320,25,320,13,320L0,320Z"></path></svg>

   
</body>
</html>
