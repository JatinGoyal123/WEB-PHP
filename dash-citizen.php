<!DOCTYPE html>
<?php session_start();
if(isset($_SESSION["activeuser"])==false)
{
    header("location:index.php");
}
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="css/angular.min.js"></script>
    <link rel="stylesheet" href="css/star.css">

    <style>
        h1 {

            font-family: sans-serif;
            color: darkmagenta;
            text-decoration: underline;
        }

        img {
            border-radius: 50%;
        }
        body
        {
            background-color: lightcyan;
        }
       
         div.card {
            transition: ease all 2sec;
        }

        div.card:hover {
            box-shadow: 0 4px 8px 0 gray, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: rotate(-10deg);
            transition: ease all 2sec;
        }
        .cc
        {
            margin-left: 400px;
            margin-top: 20px;
            
        }
        .co
        {
            background-color: darkorange;
        }

    </style>
    <script>
        var varModule = angular.module("ourmodule", []);
        varModule.controller("ourController", function($scope, $http) {


            $scope.jsonArray; //just declared
            $scope.jsonArrayRat; //just declared


            $scope.doFetch = function() {
                alert();
                $http.get("json-citizen-fetch-req.php?uid=" + $scope.uid).then(okFx, notOkFx);

                function okFx(response) {
                    JSON.stringify(response.data); //data contains jsonArray-shows jsonArray 
                    $scope.jsonArray = response.data; //point, from local to global
                    $scope.selObject = $scope.jsonArray[1]; //point
                }

                function notOkFx(response) {
                    alert(response.data); //shows error
                }
            }
            $scope.doDel = function(i) {
                alert($scope.jsonArray[i].rid);
                $http.get("json-req-delete.php?rid=" + $scope.jsonArray[i].rid).then(okFx, notOkFx);

                function okFx(response) {
                    $scope.jsonArray.splice(i, 1);
                    alert(response.data);
                }

                function notOkFx(response) {
                    alert(response.data); //shows error
                }

            }


            $scope.doFetchRat = function() {
                

                $http.get("json-citizen-fetch-rat.php?txtcuid=" + $scope.txtcuid).then(okFx, notOkFx);

                function okFx(response) {
                    JSON.stringify(response.data); //data contains jsonArray-shows jsonArray 
                    $scope.jsonArrayRat = response.data; //point, from local to global
                    //$scope.selObjectRat = $scope.jsonArrayRat[1]; //point
                }


                function notOkFx(response) {
                    alert(response.data); //shows error
                }
            }

            $scope.doDone = function(index, ref) {
                //alert($scope.jsonArray[i].rid);
                
                $http.get("json-rating-delete.php?rid=" + ref).then(okFx, notOkFx);

                function okFx(response) {
                    $scope.jsonArrayRat.splice(index, 1);
                    alert(response.data);
                }

                function notOkFx(response) {
                    alert(response.data); //shows error
                }

            }

           $scope.doRating=function(index,wref,rid){
                //alert(index);
             //alert(wref);
                var ele=document.getElementsByName(rid);
               
                //alert(rate[index].value);
               for(i=0;i<ele.length;i++)
                   {
                       if(ele[i].checked)
                           {
                               $scope.ratingsValue=ele[i].value;
                               alert($scope.ratingsValue);
                               $http.get("json-rating.php?rid="+wref+"&ratvalue="+$scope.ratingsValue).then(okFx,notOkFx);
                           }
                   }
                
            
                function okFx(response)
									{ 
                                       // $scope.jsonArrayrat.splice(index,1);
                                        alert(response.data);
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
                }
            
            
            
            
        });





        $(document).ready(function() {
            $("#responsel").click(function() {
                alert();
                var uid = $("#txtUid").val();
                var cat = $("#txtcat").val();
                var loc = $("#txtloc").val();
                var prob = $("#txtprob").val();
                var city = $("#txtcit").val();
                var url = "citizen-dash-postwork.php?uid=" + uid + "&cat=" + cat + "&loc=" + loc + "&prob=" + prob + "&city=" + city;
                $.get(url, function(response) {
                    $("#emailHelpl").html(response);


                });
            });
        });

    </script>


</head>

<body ng-app="ourmodule" ng-controller="ourController">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#aa22dd" fill-opacity="0.6" d="M0,0L7.7,10.7C15.5,21,31,43,46,85.3C61.9,128,77,192,93,186.7C108.4,181,124,107,139,117.3C154.8,128,170,224,186,234.7C201.3,245,217,171,232,133.3C247.7,96,263,96,279,112C294.2,128,310,160,325,181.3C340.6,203,356,213,372,197.3C387.1,181,403,139,418,138.7C433.5,139,449,181,465,186.7C480,192,495,160,511,176C526.5,192,542,256,557,245.3C572.9,235,588,149,604,144C619.4,139,635,213,650,245.3C665.8,277,681,267,697,266.7C712.3,267,728,277,743,256C758.7,235,774,181,790,165.3C805.2,149,821,171,836,176C851.6,181,867,171,883,144C898.1,117,914,75,929,90.7C944.5,107,960,181,975,218.7C991,256,1006,256,1022,234.7C1037.4,213,1053,171,1068,160C1083.9,149,1099,171,1115,154.7C1130.3,139,1146,85,1161,58.7C1176.8,32,1192,32,1208,53.3C1223.2,75,1239,117,1254,117.3C1269.7,117,1285,75,1301,69.3C1316.1,64,1332,96,1347,128C1362.6,160,1378,192,1394,218.7C1409,245,1425,267,1432,277.3L1440,288L1440,0L1432.3,0C1424.5,0,1409,0,1394,0C1378.1,0,1363,0,1347,0C1331.6,0,1316,0,1301,0C1285.2,0,1270,0,1254,0C1238.7,0,1223,0,1208,0C1192.3,0,1177,0,1161,0C1145.8,0,1130,0,1115,0C1099.4,0,1084,0,1068,0C1052.9,0,1037,0,1022,0C1006.5,0,991,0,975,0C960,0,945,0,929,0C913.5,0,898,0,883,0C867.1,0,852,0,836,0C820.6,0,805,0,790,0C774.2,0,759,0,743,0C727.7,0,712,0,697,0C681.3,0,666,0,650,0C634.8,0,619,0,604,0C588.4,0,573,0,557,0C541.9,0,526,0,511,0C495.5,0,480,0,465,0C449,0,434,0,418,0C402.6,0,387,0,372,0C356.1,0,341,0,325,0C309.7,0,294,0,279,0C263.2,0,248,0,232,0C216.8,0,201,0,186,0C170.3,0,155,0,139,0C123.9,0,108,0,93,0C77.4,0,62,0,46,0C31,0,15,0,8,0L0,0Z"></path></svg>

            <center>
        <h1>Citizen's Dashboard</h1>
        <br>
        <h3>--Welcome: <?php echo $_SESSION["activeuser"];?>--</h3>
    </center>
    <div class="container">
        <div class="row mt-4 ">
            <div class="col-md-3">
                <div> <a href="profile-citizen-front.php">
                        <div class="card border-light bg-warning">
                            <center><img src="pics/agent.jpg" width="120" height="120" alt="..."></center>
                            <a href="profile-citizen-front.php">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Profile-Card</h5>
                                    <p class="card-text text-dark">Citizen can update his profile pic here.This is the dashboard for only citizen for updation purposes.This card will open profile page.</p>
                                    <a href="profile-citizen-front.php" class="btn btn-dark">Profile Page</a>

                                </div>
                            </a>

                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div data-toggle="modal" data-target="#modallogin">
                    <div class="card border-light bg-success">
                        <center><img src="pics/postt.jpg" width="120" height="120" alt="..."></center>
                        <div class="card-body">
                            <h5 class="card-title">Post-Work</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">POSt WOrk</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div data-toggle="modal" data-target="#modalreq">
                    <div class="card border-light bg-danger">
                        <center><img src="pics/reaquest.jpg" width="120" height="120" alt="..."></center>
                        <div class="card-body">
                            <h5 class="card-title">Request-Manager</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">CHECK</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div data-toggle="modal" data-target="#modalrating">
                    <div class="card border-light bg-info">
                        <center><img src="pics/rating2.jpg" width="120" height="120" alt="..."></center>
                        <div class="card-body">
                            <h5 class="card-title">Rating-Card</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-dark">Rate Worker</a>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="col-md-3 cc">
                
                    <div class="card border-light co">
                        <center><img src="pics/search-1.png" width="120" height="120" alt="..."></center>
                        <div class="card-body">
                            <h5 class="card-title">Search-Card</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="worker-search.php" class="btn btn-dark">Search Worker</a>
                        </div>
                    </div>
                </div>
            </div>
       
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#aa22dd" fill-opacity="0.6" d="M0,0L7.7,10.7C15.5,21,31,43,46,85.3C61.9,128,77,192,93,186.7C108.4,181,124,107,139,117.3C154.8,128,170,224,186,234.7C201.3,245,217,171,232,133.3C247.7,96,263,96,279,112C294.2,128,310,160,325,181.3C340.6,203,356,213,372,197.3C387.1,181,403,139,418,138.7C433.5,139,449,181,465,186.7C480,192,495,160,511,176C526.5,192,542,256,557,245.3C572.9,235,588,149,604,144C619.4,139,635,213,650,245.3C665.8,277,681,267,697,266.7C712.3,267,728,277,743,256C758.7,235,774,181,790,165.3C805.2,149,821,171,836,176C851.6,181,867,171,883,144C898.1,117,914,75,929,90.7C944.5,107,960,181,975,218.7C991,256,1006,256,1022,234.7C1037.4,213,1053,171,1068,160C1083.9,149,1099,171,1115,154.7C1130.3,139,1146,85,1161,58.7C1176.8,32,1192,32,1208,53.3C1223.2,75,1239,117,1254,117.3C1269.7,117,1285,75,1301,69.3C1316.1,64,1332,96,1347,128C1362.6,160,1378,192,1394,218.7C1409,245,1425,267,1432,277.3L1440,288L1440,320L1432.3,320C1424.5,320,1409,320,1394,320C1378.1,320,1363,320,1347,320C1331.6,320,1316,320,1301,320C1285.2,320,1270,320,1254,320C1238.7,320,1223,320,1208,320C1192.3,320,1177,320,1161,320C1145.8,320,1130,320,1115,320C1099.4,320,1084,320,1068,320C1052.9,320,1037,320,1022,320C1006.5,320,991,320,975,320C960,320,945,320,929,320C913.5,320,898,320,883,320C867.1,320,852,320,836,320C820.6,320,805,320,790,320C774.2,320,759,320,743,320C727.7,320,712,320,697,320C681.3,320,666,320,650,320C634.8,320,619,320,604,320C588.4,320,573,320,557,320C541.9,320,526,320,511,320C495.5,320,480,320,465,320C449,320,434,320,418,320C402.6,320,387,320,372,320C356.1,320,341,320,325,320C309.7,320,294,320,279,320C263.2,320,248,320,232,320C216.8,320,201,320,186,320C170.3,320,155,320,139,320C123.9,320,108,320,93,320C77.4,320,62,320,46,320C31,320,15,320,8,320L0,320Z"></path></svg>

    <div class="modal fade" tabindex="-1" role="dialog" id="modallogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title">Post Requirement</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="txtUid">User Id:</label>
                            <input type="text" required class="form-control"  id="txtUid" ng-model="txtUid" ng-init="txtUid='<?php echo $_SESSION["activeuser"];?>'">
                            <small id="emailHelp" class="form-text text-muted">error message area</small>
                        </div>
                        <div class="form-group">
                            <label for="">Category:</label>
                            <select id="txtcat" name="txtcat">
                                <option value="Select">Select</option>
                                <option value="Electrician">Electrician</option>
                                <option value="Plumber">Plumber</option>
                                <option value="Farmer">Farmer</option>
                                <option value="Utensil cleaner">Utensil cleaner</option>
                                <option value="Sweeper">Sweeper</option>
                                <option value="Carpenter">Carpenter</option>
                                <option value="Ac repairer">Ac repairer</option>
                                <option value="Wood cutter">Wood cutter</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label for="txtprob">Problem/Fault:</label>
                            <input type="text" required class="form-control" name="txtprob" id="txtprob">

                        </div>
                        <div class="form-group">
                            <label for="txtloc">Location:</label>
                            <input type="text" required class="form-control" name="txtloc" id="txtloc">
                        </div>
                        <div class="form-group">
                            <label for="txtcit">City:</label>
                            <input type="text" required class="form-control" name="txtcit" id="txtcit">
                        </div>

                    </form>
                </div>
                <center>
                    <div class="modal-footer">

                        <button type="button" class="form-control" name="responsel" id="responsel" name="post" width="60">POST TASK</button>
                        <small id="emailHelpl" class="form-text text-muted">error message area</small>
                    </div>
                </center>
            </div>
        </div>
    </div>

    <!---------------------------------------------------------->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalreq">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title">Request Manager</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="uid">User Id:</label>
                            <input type="text" required class="form-control" ng-model="uid" ng-init="uid='<?php echo $_SESSION["activeuser"];?>'">
                            <small id="emailHelp" class="form-text text-muted">error message area</small>
                        </div>
                        <div class="form-group">
                            <label for=""></label><br>
                            <div class="btn btn-secondary" ng-click="doFetch();">FETCH DATA</div>
                        </div>

                        <div class="form-group">
                            <table width="445" border="1">
                                <tr bgcolor="lightgray">
                                    <th>Sr.No</th>
                                    <th>Category</th>
                                    <th>Problem</th>
                                    <th>Location</th>
                                    <th>City</th>
                                    <th>DOP</th>
                                    <th>REMOVE</th>
                                </tr>
                                <tr ng-repeat="obj in jsonArray">
                                    <td>
                                        {{$index+1}}
                                    </td>
                                    <td>
                                        {{obj.cuid}}
                                    </td>
                                    <td>
                                        {{obj.category}}
                                    </td>
                                    <td>
                                        {{obj.location}}
                                    </td>
                                    <td>
                                        {{obj.city}}
                                    </td>

                                    <td>
                                        {{obj.dop}}
                                    </td>
                                    <td>
                                        <button class="btn btn-secondary" ng-click="doDel($index);">DELETE</button>
                                    </td>

                                </tr>
                            </table>

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!----------------------------------->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalrating">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title">&emsp;&nbsp;&nbsp;-----RATE THE WORKER-----</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <center><label for="txtcuid">Citizen User Id:</label></center>
                                    <input type="text" class="form-control" name="txtcuid" ng-model="txtcuid" ng-init="txtcuid='<?php echo $_SESSION["activeuser"];?>'">
                                    <small id="emailHelp" class="form-text text-muted">error message area</small>
                                </div>
                            </div>
                            <br>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Fetch Ratings</label>
                                    <button class="form-control" btn btn-primary value="Fetch" name="txtwuid" id="txtwuid" ng-click="doFetchRat();">Fetch</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                           
                            <th scope="col">Worker-Uid</th>
                            <th scope="col">Rate-It</th>
                            <th scope="col">Done</th>
                            <th scope="col">Do Rate</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr ng-repeat="obj in jsonArrayRat">
                            
                            <td scope="row">{{obj.workeruid}}</td>
                            <td><form>
                                <div class="rating">
                                    <input type="radio" name={{obj.rid}} class="hide" id="star5-{{obj.rid}}" value="5">
                                    <label for="star5-{{obj.rid}}">&#9734;</label>
                                    
                                    <input type="radio" name={{obj.rid}} class="hide" id="star4-{{obj.rid}}" value="4">
                                    <label for="star4-{{obj.rid}}">&#9734;</label>
                                    
                                    <input type="radio" name={{obj.rid}} class="hide" id="star3-{{obj.rid}}" value="3">
                                    <label for="star3-{{obj.rid}}">&#9734;</label>
                                    
                                    <input type="radio" name={{obj.rid}} class="hide" id="star2-{{obj.rid}}" value="2">
                                    <label for="star2-{{obj.rid}}">&#9734;</label>
                                    
                                    <input type="radio" name={{obj.rid}} class="hide" id="star1-{{obj.rid}}" value="1">
                                    <label for="star1-{{obj.rid}}">&#9734;</label>
                                </div>
                            </form></td>
                            <td><button class="btn btn-info" ng-click="doDone($index,obj.rid); ">DONE</button></td>
                             <td><button class="btn btn-info" ng-click="doRating($index,obj.workeruid,obj.rid); ">Do Rate</button></td>
                        </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>



</body>

</html>
