<!DOCTYPE html>
<html lang="en">

    
    
    <head>
	
    
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="css/angular.min.js"></script>

	
        <script>
            
            var varModule = angular.module("ourmodule", []);
		varModule.controller("ourController", function($scope,$http) {
            
            
            
			$scope.jsonArray;//just declared
			//$scope.jsonArrayrat;//just declared
            //$scope.jsonArray;//just declared
            $scope.jsonArray1;//just declared
			$scope.jsonArraySelected;//just declared
			
			$scope.doFetchCat=function(){
			
									$http.get("json-admin-category.php").then(okFx,notOkFx);
									function okFx(response)
									{
										JSON.stringify(response.data);//data contains jsonArray-shows jsonArray 
										$scope.jsonArray=response.data;//point, from local to global
										$scope.selObject = $scope.jsonArray[1];//point
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
								}
			
			
			$scope.dofetch=function(){
			alert("hello");
                alert($scope.selObject.category);
								$http.get("json-admin-data.php?uid="+$scope.selObject.category).then(okFx,notOkFx);
									function okFx(response)
									{ 
								       alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray 
										$scope.jsonArray1=response.data;//point, from local to global
										$scope.selObject1 = $scope.jsonArray1[1];//point
                                        //$("#tableid").css.("display","block");
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
								}
            
            $scope.doBlock=function(ref){
			alert("hello");
               alert(ref);
								$http.get("json-block-user.php?uidd="+ref).then(okFx,notOkFx);
									function okFx(response)
									{ 
								       alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray 
										//$scope.jsonArray1=response.data;//point, from local to global
										//$scope.selObject1 = $scope.jsonArray1[1];//point
                                        //$("#tableid").css.("display","block");
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
								}	
            
            			$scope.doResume=function(ref){
			alert("hello");
               alert(ref);
								$http.get("json-resume-users.php?uid="+ref).then(okFx,notOkFx);
									function okFx(response)
									{ 
								       //alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray 
										
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
								}
                        
                        
                        
            			$scope.doDelete=function(index,ref){
			alert("hello");
               alert(ref);
								$http.get("json-delete-users.php?uid="+ref).then(okFx,notOkFx);
									function okFx(response)
									{ 
								       alert(JSON.stringify(response.data));//data contains jsonArray-shows jsonArray
                                        $scope.jsonArray1.splice(index,1);
										
									}
									function notOkFx(response)
									{
										alert(response.data);//shows error
									}
								}
            			
            			
            
            
            
            
		});
            
           
        
        </script>
    </head>  
    <body  ng-app="ourmodule" ng-controller="ourController" ng-init="doFetchCat();">
    <h1><center>User's Information</center></h1>
    <center>
                
    </center>
    <u>Select Category</u>
		<select  ng-model="selObject" ng-options="obj.category for obj in jsonArray"></select>
    <center>
    
    <input value="Fetch" type="button" class="btn btn-info" ng-click="dofetch();"></center>
    <table class="table mt-5">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Sr.no</th>
      <th scope="col">Mobile</th>
      <th scope="col">Status</th>
      <th scope="col">Category</th>
      <th scope="col">Dos</th>
      <th scope="col">Block</th>
      <th scope="col">Resume</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    <tr  ng-repeat="objj in jsonArray1">
      <th scope="row">{{$index+1}}</th>
      <td>{{objj.mobile}}</td>
      <td>{{objj.status}}</td>
      <td>{{objj.category}}</td>
      <td>{{objj.dos}}</td>
        <td>  <input value="Block" type="button" class="btn btn-success" ng-click="doBlock(objj.uid);"></td>
        <td>   <input value="Resume" type="button" class="btn btn-success" ng-click="doResume(objj.uid);"> </td>
        <td>  <input value="Delete" type="button" class="btn btn-success" ng-click="doDelete($index,objj.uid);"></td>
    </tr>
    
  </tbody>
</table>
    
    

    </body>

</html>