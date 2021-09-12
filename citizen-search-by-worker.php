<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
	<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="css/angular.min.js"></script>
<style>
    body
    {
            background-image: url(pics/bbbbb.png);
    }
    img
    {
        border-color: firebrick;
    }
  h3
    {
        font-family: sans-serif;
    }
    .cc
    {
        font-size: 40px;
    }
  
    </style>
	<script>
		var varModule = angular.module("ourmodule", []);
		varModule.controller("ourController", function($scope,$http) {
			

			$scope.jsonArray;//just declared
            $scope.jsonArray1;//just declared
			$scope.jsonArraySelected;//just declared
			$scope.doFetchCat=function(){
			
									$http.get("JSON-fetch-category-cit.php").then(okFx,notOkFx);
									function okFx(response)
									{
										//alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray 
										$scope.jsonArray=response.data;//point, from local to global
										$scope.selObject = $scope.jsonArray[1];//point
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
								}
            $scope.doFetchCity=function(){
			
									$http.get("JSON-fetch-city-cit.php").then(okFx,notOkFx);
									function okFx(response)
									{
										//alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray 
										$scope.jsonArray1=response.data;//point, from local to global
										$scope.selObjectCity= $scope.jsonArray1[1];//point
									}
									function notOkFx(response)
									{
										//alert(response.data);//shows error
									}
								}
			
    

			
			//=-=-=-=-=-=-= FIll In Combo------
			
			
			
			//=-=-=-=-=-=-=-=-=
			//works on button click
			$scope.doFetchSelected=function()
			{
				//alert($scope.selObject.mobile);
                //alert();
				$http.get("JSON-fetch-selected-cit.php?category="+$scope.selObject.category+"&city="+$scope.selObjectCity.city).then(okFx,notOkFx);
									function okFx(response)
									{
									alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray 
									$scope.jsonArraySelected=response.data;
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
				
			}
            
            
            $scope.showDetails=function(uid)
            {
				//alert($scope.selObject.mobile);
                alert(uid);
                //$scope.jsonArraySelectedcit=$scope.jsonArraySelected[uid];
				$http.get("cs-JSON-selected-citizen.php?uid="+uid).then(okFx,notOkFx);
									function okFx(response)
									{
									alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray 
									$scope.jsonArraySelectedcit=response.data;
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
				
			}
            
         
		});

	</script>

</head>
<!-- View -->

<body ng-app="ourmodule" ng-controller="ourController" ng-init="doFetchCat(); doFetchCity();">
<div class="modal fade" tabindex="-1" role="dialog" id="modallogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title">INFORMATION ABOUT CITIZEN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form><center>
                            NAME:{{jsonArraySelectedcit[0].name}}
                            <br><hr>
                            CITY:{{jsonArraySelectedcit[0].city}}
                            <br><hr>
                            CONTACT:{{jsonArraySelectedcit[0].contact}}
                            <br><hr>
                            ADDRESS:{{jsonArraySelectedcit[0].address}}                   
                         </center><hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
<center>
		<h1><u>Citizen Search for Work...</u></h1><i class="fa fa-search cc" aria-hidden="true" 
		></i>
		<br>
		<br>
		<u><h4>Select Category</h4></u>
		<select  ng-model="selObject" ng-options="obj.category for obj in jsonArray"></select>
		<br>
		<hr>
		<hr>
		
		<u><h4>Select City</h4></u>
		
		
		<select  ng-model="selObjectCity" ng-options="obj.city for obj in jsonArray1"></select>
		<br>
		<hr>
		<hr>
    <div class="btn btn-warning" ng-click="doFetchSelected();"><b>FIND WORK</b></div>


		</center>
		<br><br>
		<div class="container">
			<div class="row">
				<div class="col-md-3 offset-md-3" ng-repeat="obj in jsonArraySelected">
					<div class="form-group">
                           <center>
                            <table width="460" border="2" >
                                <tr bgcolor="lightgray">
                                    <th>Sr.No</th>
                                    <th>Location</th>
                                    <th>Problem</th>
                                    <th>Last Date</th>
                                    <th>Details</th>
                                </tr>
                                <tr ng-repeat="obj in jsonArraySelected">
                                    <td>
                                        {{$index+1}}
                                    </td>
                                    <td>
                                        {{obj.location}}
                                    </td>
                                    <td>
                                        {{obj.problem}}
                                    </td>
                                    <td>
                                        {{obj.deadline}}
                                    </td>
                                    <td>
                                    <div  ng-click="showDetails(obj.cuid);" class="btn btn-info" data-toggle="modal" data-target="#modallogin">Details</div></td>
                                </tr>
                            </table>
                            </center>
                    </div>
				</div>
			</div>
		</div>
</body>

</html>



