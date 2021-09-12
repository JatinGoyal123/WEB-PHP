<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>program</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        body {
            background-color: ghostwhite;
        }

        input[type="radio"] {
            margin-left: 100px;
            display: inline-block;
            width: 20px;
            height: 20px;
        }

        .bar {
            background-color: slategray;

        }

        .rowcol {
            background-color: gainsboro;
        }

        .rowcol1 {
            background-color: lightsalmon;

        }

        div.card {
            transition: ease all 2sec;
        }

        div.card:hover {
            box-shadow: 0 4px 8px 0 gray, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: rotate(-10deg);
            transition: ease all 2sec;
        }

        .team {
            margin: 4em 0;
            position: relative;
        }

        .team h1 {
            color: #F97300;
            margin: 2em;
            background-color: aquamarine;
        }

        .team .item {
            position: relative;
            margin-left: 60px;
        }

        .team .des {
            background: #F97300;
            color: #fff;
            text-align: center;
            border-bottom-left-radius: 93%;
            transition: .3s ease-in-out;

        }

        .team .item:hover .des {
            height: 100%;
            background: #f973007d;
            position: absolute;
            width: 89%;
            padding: 5em;
            top: 0;
            border-bottom-left-radius: 0;
            font-size: 20px;
        }


        .button {
            display: inline-block;
            padding: 15px 25px;
            font-size: 15px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }

        .button1 {
            display: inline-block;
            padding: 15px 25px;
            font-size: 15px;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            outline: none;
            color: #fff;
            background-color: rebeccapurple;
            border: none;
            border-radius: 15px;
            box-shadow: 0 9px #999;
        }


        .button:hover {
            background-color: powderblue;
        }

        .button1:hover {
            background-color: lightsteelblue;

        }

        .button:active {
            background-color: #3e8e41;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }
       
    </style>
    <script>
        $(document).ready(function() {

            $("#txtUid").blur(function() {
                //alert("hello");
                var uid = $("#txtUid").val();
                var actionurl = "ajax-signup-blur.php?uid=" + uid;
                $.get(actionurl, function(response) {
                    $("#emailHelp").html(response).css("color","green");
                });
            });


            $("#txtwor").click(function() {
                // alert("hello");
                if (1) {
                    $("#hidden").val("");
                    var uidd = "";
                    var uidd = $("#txtwor").val();
                    $("#hidden").val(uidd);
                    //alert(uidd);
                }
            });

            $("#txtcit").click(function() {
                //alert("hello");
                if (1) {
                    $("#hidden").val("");
                    var uidd = "";
                    var uidd = $("#txtcit").val();
                    $("#hidden").val(uidd);
                    //alert(uidd);
                }
            });




            $("#response").click(function() {

                var uid = $("#txtUid").val();
                var pwd = $("#txtpwd").val();
                var mob = $("#txtmob").val();
                var uidd = $("#hidden").val();

                var actionurls = "ajax-signup-click.php?uid=" + uid + "&pwd=" + pwd + "&mob=" + mob + "&uidd=" + uidd;

                $.get(actionurls, function(result) {
                    alert(actionurls);
                    $("#responseid").html(result).css("color","green");
                });
            });
            /*-- login */
            $("#txtpwd").blur(function(){
					var r=/(?=^.{8,}$)(?=.*\d)(?=.*[!@#$%^&*]+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;
					
					var pwd=$("#txtpwd").val();
					
					if(r.test(pwd)==false)
							{
								$("#emailHelp1").html("min-8,numerics,spl symbol,alph.");//.css("color","red");
							}
						else
						{
						$("#emailHelp1").html("okay");
							
						}
				});
				//--==-===-====-
				$("#txtmob").blur(function()
								  {
					var r=/^[6-9]{1}[0-9]{9}$/;
					var mob=$("#txtmob").val();
					
					if(r.test(mob)==false)
							{
								$("#emailHelp2").html("Invalid Mobile number");//.css("color","red");
							}
						else
						{
						$("#emailHelp2").html("okay");
							
						}
					
				});
				//=-=-=-=-=-=-=-=
				$("#btnpwd").mousedown(function(){
					$("#txtpwd").prop("type","text");
				});
				$("#btnpwd").mouseup(function(){
					
					//$("#txtPwd").prop("type","password");
					$("#txtpwd").attr("type","password");
				});
                
                $("#btnpwd1").mousedown(function(){
					$("#txtpwdl").prop("type","text");
				});
				$("#btnpwd1").mouseup(function(){
					
					//$("#txtPwd").prop("type","password");
					$("#txtpwdl").attr("type","password");
				});
				//-=-=-==-=-=-=-=-=-=-=-==-=-=-
				$("#txtpwd").keydown(function(){
					var pwd=$(this).val();
					if(pwd.length<=4)
						$("#emailHelp1").html("weak");	
					else
						if(pwd.length>4&& pwd.length<=7)
						$("#emailHelp1").html("Average");	
						else
							$("#emailHelp1").html("Strong");	
						
				});
				
            
            $("#responsel").click(function() {

                var uid = $("#txtUidl").val();
                var pwd = $("#txtpwdl").val();
                var url = "ajax-login-click.php?uid=" + uid + "&pwd=" + pwd;
                $.get(url, function(Response) {
                    if (Response == "Citizen")
                        location.href = "dash-citizen.php";
                    
                   else if (Response == "Worker") {
                        location.href = "dash-worker.php";
                    } 
                    else{
                         $("#responseidl").html(Response).css("color","red");
                    }

                });
            });

            $("#responsef").click(function() {


                var uid = $("#txtUidf").val();
                var url = "forgotpwd.php?uid=" + uid;
                $.get(url, function(jsonAryResponse) {
                    //alert(JSON.stringify(jsonAryResponse));

                    
                        
                    $("#responseidf").html(jsonAryResponse).css("color","blue");
                });
 });
           
            $('#modalpassword').on('shown.bs.modal', function() {
                $('#modallogin').modal('hide')
            });


        });

    </script>

</head>

<body>
<span id="hidden"></span>
    <nav class="navbar navbar-expand-lg navbar-light bar">

        <img src="pics/mps-icon.svg" class="img-responsive" width="100" height="80">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-light" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-light" href="#services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-light" href="#team">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link font-weight-bold text-light" href="#map">
                        Reach Us
                    </a>
                </li>
               
            </ul>
            <button class="btn btn-warning  font-weight-bold button" type="button" data-toggle="modal" data-target="#modalSignup">
                <i class="fa fa-user-plus sign" aria-hidden="true"></i>&nbsp;
                SIGN UP
            </button>
            &emsp;&emsp;&emsp;
            <button class="btn btn-info font-weight-bold text-light button1" type="button" data-toggle="modal" data-target="#modallogin">

                <i class="fa fa-sign-in" aria-hidden="true"></i>&nbsp;
                LOGIN
            </button>
            &emsp;&emsp;&emsp;


        </div>
    </nav>

    <div class="modal fade" tabindex="-1" role="dialog" id="modalSignup">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h3 class="modal-title">Signup</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="txtUid">Email</label>
                            <input type="text"  autofocus class="form-control" id="txtUid">
                            <small id="emailHelp" class="form-text text-muted">error message area</small>
                        </div>
                        <div class="form-group">
                            <label for="txtpwd">Password</label>
                            <input type="password" class="form-control" id="txtpwd"><span id="btnpwd"><i class="fa fa-eye" aria-hidden="true"></i></span>
                            <small id="emailHelp1" class="form-text text-muted">error message area</small>
                        </div>
                        <div class="form-group">
                            <label for="txtMob">Mobile Number</label>
                            <input type="text" class="form-control" id="txtmob">
                            <small id="emailHelp2" class="form-text text-muted">error message area</small>

                        </div>

                        <div class="form-group">
                            <label for="txtcat">Category</label>
                            <br>
                            <input type="radio" class="form-control" name="txtcat" value="Citizen" id="txtcit">&nbsp;Citizen &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;

                            <input type="radio" class="form-control" name="txtcat" value="Worker" id="txtwor">&nbsp;Worker
                        </div>


                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="form-control" id="response" name="signedup">Signup</button>
                    <span id="responseid">message area</span>
                </div>
            </div>
        </div>
    </div>


    <!-- login-->

    <div class="modal fade" tabindex="-1" role="dialog" id="modallogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title">Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="txtUidl">Email</label>
                            <input type="text" class="form-control" name="txtUidl" id="txtUidl"  autofocus>
                            <small id="emailHelpl" class="form-text text-muted">error message area</small>
                        </div>
                        <div class="form-group">
                            <label for="txtpwdl">Password</label>
                            <input type="password" class="form-control" name="txtpwdl" id="txtpwdl"><span id="btnpwd1"><i class="fa fa-eye" aria-hidden="true"></i></span>
 
                        </div>

                        <a href="#" data-toggle="modal" data-target="#modalpassword">? Forgot Password</a>

                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="form-control" name="responsel" id="responsel" name="login">Login</button>
                    <span id="responseidl">message area</span>
                </div>
            </div>
        </div>
    </div>

    <!------------------------------------->
    <div class="modal fade" tabindex="-1" role="dialog" id="modalpassword">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title">Forgot password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="txtUidf">Email address</label>
                            <input type="text" class="form-control" name="txtUidf" id="txtUidf"  autofocus>
                            <small id="emailHelpf" class="form-text text-muted">*</small>
                        </div>



                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="form-control" name="responsef" id="responsef" name="forgotpassword">Forgot password</button>
                    <span id="responseidf">message area</span>
                </div>
            </div>
        </div>
    </div>





    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="pics/mpmp.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h6>www.mps.com</h6>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pics/m2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h3>----WE PROVIDE YOU WITH THE BEST ----</h3>
                    <p>GET YOUR WORK DONE NOW IN YOUR CITY</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pics/m3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color:orangered">BASIC SERVICES </h2>
                    <p>GET READY TO EARN .</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="pics/m4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h2 style="color:white">BASIC SERVICES </h2>
                    <p>GET READY TO EARN .</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <!------------------->
    <div class="row rowcol">
        <div class="col-md-12 text-danger mt-2" id="services">
            <center>
                <h1>
                    <marquee behavior="alternate" scrollamount="19"><i class="fa fa-handshake-o" aria-hidden="true">&ensp;<u>Our Services&ensp;<i class="fa fa-handshake-o" aria-hidden="true"></i></u></i></marquee>
                </h1>
            </center>
        </div>
    </div>
    <div class="container">
        <div class="row mt-4">
            <div class="col-md-3">
                <div class="card border-primary bg-danger">
                    <center><img src="pics/workerr.jpg" width="100" height="100" alt="..."></center>
                    <div class="card-body">
                        <h5 class="card-title">WORKER_SEARCH</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-primary bg-success">
                    <center><img src="pics/reaquest.jpg" width="100" height="100" alt="..."></center>
                    <div class="card-body">
                        <h5 class="card-title">REQUEST_WORK</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-primary bg-info">
                    <center><img src="pics/mp1.jpg" width="100" height="100" alt="..."></center>
                    <div class="card-body">
                        <h5 class="card-title">POST_WORK</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card border-primary bg-warning">
                    <center><img src="pics/rattt.jpg" width="100" height="100" alt="..."></center>
                    <div class="card-body">
                        <h5 class="card-title">RATING</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="#" class="btn btn-dark">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!----------------------------->
    <div class="team" id="team">
        <div class="container">

            <h1 class="text-center">
                <marquee behavior="alternate" scrollamount="13"><i class="fa fa-users" aria-hidden="true"><u>MEET-THE-DEVELOPER</u></i></marquee>
            </h1>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <img src="pics/SIR.jpeg" class="img-fluid" alt="team">
                    <div class="des">
                        RAJESH BANSAL
                    </div>
                    <span class="text-muted">MENTOR</span>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <img src="pics/jatin.jpg" class="img-fluid" alt="team">
                    <div class="des">
                        JATIN GOYAL
                    </div>
                    <span class="text-muted">DEVELOPER</span>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-12 item">
                    <img src="pics/inder.jpg" class="img-fluid" alt="team">
                    <div class="des">
                        InderPreet Dhaliwal
                    </div>
                    <span class="text-muted">Friend in Help</span>
                </div>





            </div>
        </div>
    </div>

    <div class="row rowcol1" id="map">
        <div class="col-md-12 text-danger mt-2">
            <center>
                <h1>
                    <marquee behavior="alternate" scrollamount="19"><i class="fa fa-map-marker" aria-hidden="true"></i>&ensp;<u>REACH US</u>&nbsp;<i class="fa fa-map-marker" aria-hidden="true"></i></marquee>
                </h1>
            </center>
        </div>
    </div>
    <br>
    <div class="row col-md-8">
      <center>
        <div style="margin-left:280px;background-color:pink">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3447.8807337916087!2d74.9501394142981!3d30.211951281821694!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391732a4f07278a9%3A0x4a0d6293513f98ce!2sBanglore%20Computer%20Education%20(C%20C%2B%2B%20Android%20J2EE%20PHP%20Python%20AngularJs%20Spring%20Java%20Training%20Institute)!5e0!3m2!1sen!2sin!4v1594648798531!5m2!1sen!2sin" width="620" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div></center>
    </div>

</body>

</html>
