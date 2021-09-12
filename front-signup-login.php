<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Hello, world!</title>
    
    <style>
        body {
            background-image: url(pics/Manpower_service.jpg);
        }

        input[type="radio"] {
            width: 15px;
            height: 15px;
            display: inline-block;
            margin-left: 150px;

        }

    </style>


    <!--=-=-======================     jquery      ========--------------------------->
    <script>
        $(document).ready(function() {

            $("#txtUid").blur(function() {
                //alert("hello");
                var uid = $("#txtUid").val();
                var actionurl = "ajax-signup-blur.php?uid=" + uid;
                $.get(actionurl, function(response) {
                    $("#emailHelp").html(response);
                });
            });

            $("#txtwor").click(function() {
                if (1) {
                    $("#hidden").val("");
                    var uidd = "";
                    var uidd = $("#txtwor").val();
                    $("#hidden").val(uidd);
                    alert(uidd);
                }
            });
            $("#txtcit").click(function() {
                if (1) {
                    $("#hidden").val("");
                    var uidd = "";
                    var uidd = $("#txtcit").val();
                    $("#hidden").val(uidd);
                    alert(uidd);
                }
            });
            $("#response").click(function() {
                var uid = $("#txtUid").val();
                var pwd = $("#txtpwd").val();
                var mob = $("#txtmob").val();
                var uidd = $("#hidden").val();
                var actionurls = "ajax-signup-click.php?uid=" + uid + "&pwd=" + pwd + "&mob=" + mob + "&uidd=" + uidd;
                $.get(actionurls, function(result) {
                    $("#responseid").html(result);
                });
            });
            $("#responsel").click(function() {
                var uid = $("#txtUidl").val();
                var pwd = $("#txtpwdl").val();
                var url = "ajax-login-click.php?uid=" + uid + "&pwd=" + pwd;
                $.getJSON(url, function(jsonAryResponse) {
                    JSON.stringify(jsonAryResponse);
                    var pwd1 = jsonAryResponse[0].pwd;
                    var uid1 = jsonAryResponse[0].uid;
                    var uiddd = jsonAryResponse[0].category;
                     if((pwd1==pwd) && (uid1==uid) )
                         {
                             $("#responseidl").html(uiddd); 
                         }
                     else
                     {
                         $("#responseidl").html("Incorrect Pwd or Email");
                     }
                    
                });

            });

        });

    </script>
</head>

<body>
    <h1>Hello, world!</h1>
    <span id="hidden"></span>
    &emsp;
    <div class="btn btn-primary" data-toggle="modal" data-target="#modalSignup">Signup</div>

    <div class="btn btn-danger" data-toggle="modal" data-target="#modallogin">Login</div>


    <!-- Signup Modal -->
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
                            <label for="txtUid">Email address</label>
                            <input type="text" class="form-control" id="txtUid" name="txtUid">
                            <small id="emailHelp" class="form-text text-muted">error message area</small>
                        </div>
                        <div class="form-group">
                            <label for="txtpwd">Password</label>
                            <input type="password" class="form-control" id="txtpwd" name="txtpwd">
                        </div>
                        <div class="form-group">
                            <label for="txtmob">Mobile Number</label>
                            <input type="text" class="form-control" id="txtmob" name="txtmob">
                            <small id="emailHelp" class="form-text text-muted">*</small>
                        </div>
                        <div class="form-group">
                            <label for="txtcat">Category</label>
                            <br>
                            <input type="radio" class="form-control" id="txtwor" name="txtcat" value="Worker">&emsp;Worker
                            <input type="radio" class="form-control" id="txtcit" name="txtcat" value="Citizen">&emsp;Citizen

                        </div>

                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="form-control" id="response" name="signedup">Signup</button>
                    <small id="responseid">error message area</small>
                </div>
            </div>
        </div>
    </div>
    <!-- login  -->

    <div class="modal fade" tabindex="-2" role="dialog" id="modallogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h3 class="modal-title">Login</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <label for="txtUidl">Email address</label>
                            <input type="text" class="form-control" name="txtUidl" id="txtUidl">
                            <small id="emailHelpl" class="form-text text-muted">*</small>
                        </div>
                        <div class="form-group">
                            <label for="txtpwdl">Password</label>
                            <input type="password" class="form-control" name="txtpwdl" id="txtpwdl">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">

                    <button type="button" class="form-control" name="responsel" id="responsel" name="login">Login</button>
                    <span id="responseidl"><i class="fa fa-info-circle" aria-hidden="true"></i></span>

                </div>
            </div>
        </div>
    </div>

</body>

</html>
