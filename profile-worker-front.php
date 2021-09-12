<!DOCTYPE html>
<html lang="en">
<head>
	
    
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	
    
	<script>
		$(document).ready(function() {
		/*	("#txtUid").blur(function() {
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
			});*/
            

			//--=-=-=-=-JSON=-=-=-=-=-=-=-=-=
			$("#btnFetchProfile").click(function() {
				var uid=$("#txtUid").val();
                //alert("worked");
				var url="json-worker-fetch.php?userid="+uid;
				//0 or 1 possibility
				$.getJSON(url, function(jsonAryResponse) {
					//alert(JSON.stringify(jsonAryResponse));
                    //alert("worked");
					//alert(jsonAryResponse.length);
					if(jsonAryResponse.length==0)
                    {
                        //alert("invalid id");
                    }
					else
						{
							$("#txtnam").val(jsonAryResponse[0].wname);//use table col. name
							$("#txtcon").val(jsonAryResponse[0].contact);//use table col. name
							$("#txtadd").val(jsonAryResponse[0].address);//use table col. name
							$("#txtcit").val(jsonAryResponse[0].city);//use table col. name
							$("#txtsta").val(jsonAryResponse[0].stat);//use table col
							$("#txtcat").val(jsonAryResponse[0].category);//use table col
							$("#txtfirm").val(jsonAryResponse[0].firmshop);//use table col
							$("#txtspl").val(jsonAryResponse[0].spel);//use table col
							$("#txtexp").val(jsonAryResponse[0].exp);//use table col
							$("#txtpwork").val(jsonAryResponse[0].prwork);//use table col
							$("#hdnp").val(jsonAryResponse[0].ppic);//use table col. name
							$("#hdna").val(jsonAryResponse[0].apic);//use table col. name
							$("#prev").attr("src","uploadw/"+jsonAryResponse[0].ppic);
							$("#aprev").attr("src","uploadw/"+jsonAryResponse[0].apic);
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
			background-image: url(pics/fb.png);
			background-size: contain;
			display: none;
			position: absolute;
			left: 95%;
			top: 2%;
			z-index: 10;
            transition: ease all 2s;
		}

	</style>
	
	
</head>

<body>
    
    <div id=wait>*</div>
	<div class="container">
         <div id=wait>*</div>
		<div class="row bg-primary">
			<div class="col-md-12">
				<center><h2>Worker's Profile</h2></center>
			</div>
		</div>
	<form action="profile-worker-process.php" method="post" enctype="multipart/form-data">
       
        <input type="hidden" id="hdnp" name="hdnp">
        <input type="hidden" id="hdna" name="hdna">
		<div class="form-row">
            
            <div class="col-md-5 form-group">
				<label for="">User id</label>
				<input type="text" class="form-control" placeholder="Enter your user id"id="txtUid" name="txtUid" value="<?php session_start();
                        echo $_SESSION["activeuser"];?>">
                <span id="errUid">*</span>
			</div>
            <div class="col-md-4">
				<label for="">E mail</label>
				<input type="text" class="form-control"placeholder="Enter your E-mail Optional" id="txtema" name="txtema">
			</div>
       
			
            
			<div class="col-md-3 form-group">
                <label for="">Fetch Profile</label>
                 <input type="button" id="btnFetchProfile" class="form-control btn btn-warning" value="Fetch Profile">
			</div>
            
            <div class="col-md-8 form-group">
				<label for="">Worker Name</label>
				<input type="text" class="form-control"  placeholder="Enter your name" id="txtnam" name="txtnam">
			</div>
			<div class="col-md-4 form-group">
				<label for="">Contact No</label>
				<input type="text" class="form-control" placeholder="Enter your mobile no"id="txtcon" name="txtcon">
			</div>
                 
            <!--            change krn ala--------------->
            <div class="col-md-6 form-group">
				<label for="">Firm/shop</label>
				<input type="text" class="form-control"  placeholder="Enter your firm/shop" id="txtfirm" name="txtfirm">
			</div>
             <div class="col-md-6 form-group">
				<label for="">City</label>
				<input type="text" class="form-control"  placeholder="Enter your city" id="txtcit" name="txtcit">
			</div>
            
             <div class="col-md-9 form-group">
				<label for="">Address</label>
				<input type="text" class="form-control" placeholder="Enter your address" id="txtadd" name="txtadd">
			</div>
                        <div class="col-md-3 form-group">
				<label for="">State &nbsp;&nbsp;</label>
                        <br>
                    <select id="txtsta"  name="txtsta">
						<option value="select">select</option>	
						<option value="punjab">Punjab</option>	
						<option value="kerala">Kerala</option>	
						<option value="uttar pardesh">Uttar pardesh</option>	
						<option value="karnataka">karnataka</option>	
						<option value="rajasthan">rajasthan</option>	
						<option value="gujrat">Gujrat</option>	
						<option value="jammu kashmir">Jammu Kashmir</option>	
						<option value="bihar">Bihar</option>	
						<option value="telangana">Telangana</option>	
						<option value="West bengal">West Bengal</option>	
						<option value="andra pardesh">Andra pardesh</option>	
						<option value="madya pardesh">Madya pardesh</option>	
						<option value="haryana">Haryana</option>	
						<option value="odisha">Odissa</option>	
						<option value="assam">Assam</option>	
						<option value="jharkhand">Jharkhand</option>	
						<option value="goa">Goa</option>	
						<option value="himachal pardesh">Himachal pardesh</option>	
						<option value="arunachal pardesh">Arunachal pardesh</option>	
						<option value="manipur">Manipur</option>	
						<option value="sikkim">Sikkim</option>	
						<option value="nagaland">Nagaland</option>	
						<option value="chhatisgarh">Chhatisgarh</option>	
						<option value="Uttarakhand">Uttarakhand</option>	
						<option value="tripura">Tripura</option>	
						<option value="meghaleya">Meghaleya</option>	
						<option value="mizoram">Mizoram</option>	
						<option value="maharasthra">Maharasthra</option>	
					</select>
			</div>
            
            
            
            
             <div class="col-md-9 form-group">
				<label for="">Specialization</label>
				<input type="text" class="form-control"  placeholder="Enter your speciality in work" id="txtspl" name="txtspl">
			</div>
            <div class="col-md-3 form-group">
				<label for="">Category</label><br>
                <select id="txtcat"  name="txtcat">
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
            
            
            <div class="col-md-4 form-group">
				<label for="">Experience</label>
				<input type="text" class="form-control"   placeholder="Enter your Experience" id="txtexp" name="txtexp">
			</div>
             <div class="col-md-8 form-group">
				<label for="">Previous Worked With</label>
				<input type="text" class="form-control"  placeholder="Enter your any achievement or background about work" id="txtpwork" name="txtpwork">
			</div>
            <!-- ++++++++++++=========================---------------_______-->
		
		<div class="form-row">
			<div class="col-md-3">
                <center>
				<label for="">Upload Aadhar Card Pic</label>
                </center>
			</div>
            
            
			<div class="col-md-3">
                <center>
				<input type="file"  name="AadharCardPic" id="">
                </center>
            </div>
            		
            <div class="col-md-3">
                <center>
				<label for="">Upload Profile Pic</label>
                </center>
			</div>
            
            
			<div class="col-md-3">
                <center>
				<input type="file"  name="profilePic" id="">
                </center>
			</div>
        </div>   
			
            
            
             <div class="form-row">
                 
                 
                 <div class="col-md-6">
                <Center>
                <label for=""></label>
				<img src="pics/agent.jpg" id="aprev" width="150" height="150" alt="">
                </Center>
			</div>

			<div class="col-md-6">
                <Center>
                <label for=""></label>
				<img src="pics/agent.jpg" id="prev" width="150" height="150" alt="">
                </Center>
			</div>
            
		</div>
		 </div>
		<br><br>
      
		<div class="form-row">
			<div class="col-md-12">
			<center>
                
				<input type="submit" value="Save" name="btn" class="btn btn-success" style="width:100px">
                
                <input type="submit" value="update" name="btn" class="btn btn-danger" style="width:100px">

                           
			</center>
			</div>
		</div>
        
	</form>	
	</div>
    
    
</body>
</html>
