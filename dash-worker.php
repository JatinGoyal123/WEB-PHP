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
    <title>program</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <style>
        h1 {

            font-family: sans-serif;
            color: darkgreen;
            text-decoration: underline;
        }

        img {
            border-radius: 50%;
        }
       
         div.card {
            transition: ease all 2sec;
        }

        div.card:hover {
            box-shadow: 0 4px 8px 0 gray, 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            transform: rotate(-10deg);
            transition: ease all 2sec;
        }
        .co
        {
            margin-left: 150px;
        }
        h3
        {
            color: darkcyan;
        }

      
       
    </style>
    <script>
    $(document).ready(function(){
        $("#responsel").click(function(){
           var cuid=$("#txtcuid").val();
            var wuid=$("#txtwuid").val();
            var url="worker-rating-postwork.php?cuid="+cuid+"&wuid="+wuid;
            $.get(url,function(response){
                  $("#emailHelpl").html(response);
                  });
    });
    });
     
    
    
    
    
    </script>
</head>

<body>
    
    
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="0.6" d="M0,0L7.7,10.7C15.5,21,31,43,46,85.3C61.9,128,77,192,93,186.7C108.4,181,124,107,139,117.3C154.8,128,170,224,186,234.7C201.3,245,217,171,232,133.3C247.7,96,263,96,279,112C294.2,128,310,160,325,181.3C340.6,203,356,213,372,197.3C387.1,181,403,139,418,138.7C433.5,139,449,181,465,186.7C480,192,495,160,511,176C526.5,192,542,256,557,245.3C572.9,235,588,149,604,144C619.4,139,635,213,650,245.3C665.8,277,681,267,697,266.7C712.3,267,728,277,743,256C758.7,235,774,181,790,165.3C805.2,149,821,171,836,176C851.6,181,867,171,883,144C898.1,117,914,75,929,90.7C944.5,107,960,181,975,218.7C991,256,1006,256,1022,234.7C1037.4,213,1053,171,1068,160C1083.9,149,1099,171,1115,154.7C1130.3,139,1146,85,1161,58.7C1176.8,32,1192,32,1208,53.3C1223.2,75,1239,117,1254,117.3C1269.7,117,1285,75,1301,69.3C1316.1,64,1332,96,1347,128C1362.6,160,1378,192,1394,218.7C1409,245,1425,267,1432,277.3L1440,288L1440,0L1432.3,0C1424.5,0,1409,0,1394,0C1378.1,0,1363,0,1347,0C1331.6,0,1316,0,1301,0C1285.2,0,1270,0,1254,0C1238.7,0,1223,0,1208,0C1192.3,0,1177,0,1161,0C1145.8,0,1130,0,1115,0C1099.4,0,1084,0,1068,0C1052.9,0,1037,0,1022,0C1006.5,0,991,0,975,0C960,0,945,0,929,0C913.5,0,898,0,883,0C867.1,0,852,0,836,0C820.6,0,805,0,790,0C774.2,0,759,0,743,0C727.7,0,712,0,697,0C681.3,0,666,0,650,0C634.8,0,619,0,604,0C588.4,0,573,0,557,0C541.9,0,526,0,511,0C495.5,0,480,0,465,0C449,0,434,0,418,0C402.6,0,387,0,372,0C356.1,0,341,0,325,0C309.7,0,294,0,279,0C263.2,0,248,0,232,0C216.8,0,201,0,186,0C170.3,0,155,0,139,0C123.9,0,108,0,93,0C77.4,0,62,0,46,0C31,0,15,0,8,0L0,0Z"></path></svg>
<center>
        <h1>Worker's Dashboard</h1>
        <br>
        <h3>--Welcome: <?php echo $_SESSION["activeuser"];?>--</h3>
    </center>
    <div class="container">
        <div class="row mt-4 bg">
            <div class="col-md-3 co">
                <div> <a href="profile-worker-front.php">
                        <div class="card border-primary bg-warning">
                            <center><img src="pics/workerr.jpg" width="100" height="100" alt="..."></center>
                            <a href="profile-worker-front.php">
                                <div class="card-body">
                                    <h5 class="card-title text-dark">Profile-Card</h5>
                                    <p class="card-text text-dark">Worker can update his profile pic here.This is the dashboard for only worker for updation purposes.This card will open profile page.</p>
                                    <a href="profile-worker-front.php" class="btn btn-dark">Go somewhere</a>

                                </div>
                            </a>

                        </div>
                    </a>
                </div>
            </div>

            <div class="col-md-3">
                <div data-toggle="modal" data-target="#modallogin">
                    <div class="card border-primary bg-danger">
                        <center><img src="pics/rating.webp" width="100" height="100" alt="..."></center>
                        <div class="card-body">
                            <h5 class="card-title">Post-Work</h5>
                            <p class="card-text">This Card is meant for the citizen.In this, citizen can do rating of a worker.The cuid and uid is required.. to fill.</p>
                            <a href="#" class="btn btn-dark">Rating Request</a>
                        </div>
                    </div>
                </div>
            </div>
               <div class="col-md-3">
                
                    <div class="card border-primary bg-info">
                        <center><img src="pics/rating.webp" width="100" height="100" alt="..."></center>
                        <div class="card-body">
                            <h5 class="card-title">Search</h5>
                            <p class="card-text">This Card is meant for the citizen.In this, citizen can do rating of a worker.The cuid and uid is required.. to fill.</p>
                            <a href="citizen-search-by-worker.php" class="btn btn-dark">Search For Work</a>
                        </div>
                    </div>
               
            </div>
        </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#00cba9" fill-opacity="0.6" d="M0,0L7.7,10.7C15.5,21,31,43,46,85.3C61.9,128,77,192,93,186.7C108.4,181,124,107,139,117.3C154.8,128,170,224,186,234.7C201.3,245,217,171,232,133.3C247.7,96,263,96,279,112C294.2,128,310,160,325,181.3C340.6,203,356,213,372,197.3C387.1,181,403,139,418,138.7C433.5,139,449,181,465,186.7C480,192,495,160,511,176C526.5,192,542,256,557,245.3C572.9,235,588,149,604,144C619.4,139,635,213,650,245.3C665.8,277,681,267,697,266.7C712.3,267,728,277,743,256C758.7,235,774,181,790,165.3C805.2,149,821,171,836,176C851.6,181,867,171,883,144C898.1,117,914,75,929,90.7C944.5,107,960,181,975,218.7C991,256,1006,256,1022,234.7C1037.4,213,1053,171,1068,160C1083.9,149,1099,171,1115,154.7C1130.3,139,1146,85,1161,58.7C1176.8,32,1192,32,1208,53.3C1223.2,75,1239,117,1254,117.3C1269.7,117,1285,75,1301,69.3C1316.1,64,1332,96,1347,128C1362.6,160,1378,192,1394,218.7C1409,245,1425,267,1432,277.3L1440,288L1440,320L1432.3,320C1424.5,320,1409,320,1394,320C1378.1,320,1363,320,1347,320C1331.6,320,1316,320,1301,320C1285.2,320,1270,320,1254,320C1238.7,320,1223,320,1208,320C1192.3,320,1177,320,1161,320C1145.8,320,1130,320,1115,320C1099.4,320,1084,320,1068,320C1052.9,320,1037,320,1022,320C1006.5,320,991,320,975,320C960,320,945,320,929,320C913.5,320,898,320,883,320C867.1,320,852,320,836,320C820.6,320,805,320,790,320C774.2,320,759,320,743,320C727.7,320,712,320,697,320C681.3,320,666,320,650,320C634.8,320,619,320,604,320C588.4,320,573,320,557,320C541.9,320,526,320,511,320C495.5,320,480,320,465,320C449,320,434,320,418,320C402.6,320,387,320,372,320C356.1,320,341,320,325,320C309.7,320,294,320,279,320C263.2,320,248,320,232,320C216.8,320,201,320,186,320C170.3,320,155,320,139,320C123.9,320,108,320,93,320C77.4,320,62,320,46,320C31,320,15,320,8,320L0,320Z"></path></svg>

    <div class="modal fade" tabindex="-1" role="dialog" id="modallogin">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h3 class="modal-title">Request Rating</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form>
                        <div class="form-group">
                            <center><label for="txtcuid">Customer User Id:</label></center>
                            <input type="text" required class="form-control" name="txtcuid" id="txtcuid" >
                            <small id="emailHelp" class="form-text text-muted">error message area</small>
                        </div>
                        <div class="form-group">
                            <center><label for="txtwuid">Worker User Id:</label></center>
                            <input type="text" required class="form-control" name="txtwuid" id="txtwuid" >
                           
                        </div> 
                    </form>
                </div>
                <center>
                <div class="modal-footer">
                    <center>
                        <button type="button" class="form-control btn btn-light" name="responsel" id="responsel" name="post" width="70">SEND REQUEST</button></center>
                    <small id="emailHelpl" class="form-text text-muted">Error Message Area</small>
                </div>
                </center>
            </div>
        </div>
    </div>

</body>

</html>
