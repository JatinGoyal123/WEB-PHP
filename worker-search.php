
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
   <link rel="stylesheet" href="css/worker-rating.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="css/angular.min.js"></script>
<style>
    
    
             body {
            background-image: url(pics/gradd.jpg);

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
			
									$http.get("JSON-fetch-category.php").then(okFx,notOkFx);
									function okFx(response)
									{
										//alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray 
										$scope.jsonArray=response.data;//point, from local to global
										$scope.selObject = $scope.jsonArray[1];//point
									}
									function notOkFx(response)
									{
										//alert(response.data);//shows error
									}
								}
            $scope.doFetchCity=function(){
			
									$http.get("JSON-fetch-city.php").then(okFx,notOkFx);
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
				$http.get("JSON-fetch-selected.php?category="+$scope.selObject.category+"&city="+$scope.selObjectCity.city).then(okFx,notOkFx);
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
            
            
            $scope.showDetails=function(i)
            {
                alert(i);
                $scope.jsonArraySelectedDetail=$scope.jsonArraySelected[i];
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
                    <h5 class="modal-title">INFORMATION ABOUT WORKER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form><center>
                            NAME:{{jsonArraySelectedDetail.wname}}
                            <br><hr>
                            CITY:{{jsonArraySelectedDetail.city}}
                            <br><hr>
                            CATEGORY:{{jsonArraySelectedDetail.category}}
                            <br><hr>
                            SPECIALISATION:{{jsonArraySelectedDetail.spel}}                    
                         </center><hr>
                    </form>
                </div>
            </div>
        </div>
    </div>
<center>
		<h1><u>Worker Search...</u></h1><i class="fa fa-search cc" aria-hidden="true" size="90"
		></i>
		<br>
		<br>
		<u><h4>Select Category</h4></u>
		<select  ng-model="selObject" ng-options="obj.category for obj in jsonArray"></select>
		
		<hr>
		<hr>
		
		<u><h4>Select City</h4></u>
		
		
		<select  ng-model="selObjectCity" ng-options="obj.city for obj in jsonArray1"></select>
		
		<hr>
		<hr>
    <div class="btn btn-primary" ng-click="doFetchSelected();"><b>Search</b></div>


		</center>
		
		<div class="container">
			<div class="row">
				<div class="col-md-3" ng-repeat="obj in jsonArraySelected">
					<div class="card" >
						<img src="uploadw/{{obj.ppic}}" height="100" class="card-img-top" alt="...">
						<div class="card-body" style="margin:auto">
						<div class="stars-outer" ng-show="{{obj.count}}">
						    <div class="stars-inner" style="width:{{obj.rating/obj.count*20}}%"></div>
						</div>
							<h5 class="card-title"><u>Worker's Detail</u></h5>
							
							<p class="card-text">Name :{{obj.wname}}</p>
							<p class="card-text">Experience :{{obj.exp}}</p>
							<p class="card-text">Specialisation :{{obj.spel}}</p>
							<div  ng-click="showDetails($index);" class="btn btn-success" data-toggle="modal" data-target="#modallogin">Details</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
</body>

</html>



