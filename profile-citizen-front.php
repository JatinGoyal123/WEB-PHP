<!DOCTYPE html>
<html lang="en">
<head>
	
    
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	
    
	<script>
		$(document).ready(function() {
			$("#txtUid").blur(function() {
				//used for AJAX request
				var uid = $("#txtUid").val();
				var actionUrl = "citizen-uid-blur.php?uid=" + uid;
				$.get(actionUrl, function(response) {
					$("#errUid").html(response);
				});
			});
			//==-=-=-==-=-=-=-=-=-===--=-=--=-==-=-===---

			$(document).ajaxStart(function() {
				$("#wait").show();
			});

			$(document).ajaxStop(function() {
				$("#wait").hide();
			});

			//--=-=-=-=-JSON=-=-=-=-=-=-=-=-=
			$("#btnFetchProfile").click(function() {
				var uid=$("#txtUid").val();
				var url="json-citizen-fetch.php?userid="+uid;
				//0 or 1 possibility
				$.getJSON(url, function(jsonAryResponse) {
					JSON.stringify(jsonAryResponse);
					//alert(jsonAryResponse.length);
					if(jsonAryResponse.length==0)
                    {
                        //alert("invalid id");
                    }
					else
						{
							$("#txtnam").val(jsonAryResponse[0].name);//use table col. name
							$("#txtcon").val(jsonAryResponse[0].contact);//use table col. name
							$("#txtadd").val(jsonAryResponse[0].address);//use table col. name
							$("#txtcit").val(jsonAryResponse[0].city);//use table col. name
							$("#txtsta").val(jsonAryResponse[0].state);//use table col
							//$("#hdn").val(jsonAryResponse[0].picname);//use table col. name
							$("#prev").attr("src","uploads/"+jsonAryResponse[0].pic);
                            $("#txtema").val(jsonAryResponse[0].email);//
						}
				});
                
			});

		});

	</script>
	<style>
		#wait {
			width: 100px;
			height: 100px;
			background-image: url(pics/wait.gif);
			background-size: contain;
			display: none;
			position: absolute;
			left: 95%;
			top: 2%;
			z-index: 100;
            transition: ease all 1s;
		}

	</style>
	
	
</head>

<body>
    
    <div id=wait>*</div>
	<div class="container">
         <div id=wait>*</div>
		<div class="row bg-warning">
			<div class="col-md-12">
				<center><h3>Citizen's Profile</h3></center>
			</div>
		</div>
	<form action="profile-citizen-process.php" method="post" enctype="multipart/form-data">
        <!--<input type="hidden" id="hdn" name="hdn">-->
		<div class="form-row">
            <div class="col-md-8 form-group">
				<label for="">User Id</label>
				<input type="text" class="form-control" placeholder="Enter your user id" id="txtUid" name="txtUid" value='<?php session_start();
                        echo $_SESSION["activeuser"];?>'>
                <span id="errUid">*</span>
			</div>
           
			
            
			<div class="col-md-4 form-group">
                <label for="">Fetch Profile</label>
                 <input type="button" id="btnFetchProfile" class="form-control btn btn-primary" value="Fetch Profile">
			</div>
            
            <div class="col-md-6 form-group">
				<label for="">Citizen Name</label>
				<input type="text" class="form-control" placeholder="Enter your name" id="txtnam" name="txtnam">
			</div>
			<div class="col-md-6 form-group">
				<label for="">Contact No</label>
				<input type="text" class="form-control" placeholder="Enter your mobile no"id="txtcon" name="txtcon">
			</div>
            
            <div class="col-md-12 form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" placeholder="Enter your address" id="txtadd" name="txtadd">
			</div>
            
                        <div class="col-md-6 form-group">
				<label for="">City</label>
				<input type="text" class="form-control" placeholder="Enter your city" id="txtcit" name="txtcit">
			</div>
            
            <div class="col-md-6 form-group">
				<label for="">state</label>
				<input type="text" class="form-control" placeholder="Enter your state" id="txtsta" name="txtsta">
			</div>
            
		</div>
		
		
		<div class="form-row">
			<div class="col-md-4">
                <center>
				<label for="">Upload Profile Pic</label>
                </center>
			</div>
			<div class="col-md-4">
                <center>
				<input type="file" name="profilePic" id="">
                </center>
			</div>
                       
            

			<div class="col-md-4">
                <Center>
                <label for=""></label>
				<img src="pics/agent.jpg" id="prev" width="50" height="50" alt="">
                </Center>
			</div>
            
            <div class="col-md-6">
				<label for="">E mail</label>
				<input type="text" class="form-control" placeholder="Enter your E-mail Optional" id="txtema" name="txtema">
			</div> 
		</div>
		<br><br>
		<div class="form-row">
			<div class="col-md-12">
			<center>
				<input type="submit" value="Save" name="btn" class="btn btn-success" style="width:100px">

                <input type="submit" value="Update" name="btn" class="btn btn-danger" style="width:100px">

               
                
			</center>
			</div>
		</div>
	</form>	
	</div>
    
    
</body>
</html>

