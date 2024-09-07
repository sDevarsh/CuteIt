<?php

    session_start();
    $_SESSION['type']='offline';
include("head.php");

    $c=mysqli_connect("localhost","root","");
$db=mysqli_select_db($c,"cureit");

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="website.css">
    <style type="text/css">
        h6 {
            /*#e12454*/
            /* color: #223a66; */
            display: inline;
        }

        h2 {
            color: #e12454;
            display: inline;
        }

        h2:hover {
            color: #e12454;
        }

        .m {
            border: 2px solid;
            border-color: white;
        }

        .m:hover {

            border-color: #223a66;

        }

        .card {
            display: flex;
        }

        .borders1 {
            box-shadow: 0px 0px 5px #dcdcdc !important;
        }

        .display1 {
            display: flex;

        }

        .btn {
            border: none;
        }


        @media (max-width:1400px) {
            .m {
                min-height: 280px !important;
            }
        }

        @media (max-width:575px) {
            .m {
                min-height: 350px !important;
            }
        }
    </style>
</head>

<body>
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-8">
                <h2><a href="make_appointment1.php"><i class='fas fa-angle-left' style='font-size:36px; color: #e12454;'></i></a></h2>
                <h2><b class="offset-1">Select Specialty</b></h2>
            </div>
            <div class="col-md-4">


            </div>
        </div><br> <br>

        <div class="container">
            <div class="row">
                <?php
                $q = "select * from doctor";
                $r = mysqli_query($c, $q);
                if (mysqli_num_rows($r) > 0) {
                    while ($row = mysqli_fetch_array($r)) {
                ?>
                        <div class="col-lg-4 ">
                            <div class="card mb-3 m" style=" min-height:280px;">
                                <div class="row">
                                    <div class="col-sm-5">
                                        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($row['img']) . '"style="border-radius: 0px 30px 30px 0px; max-width:150px !important" width="100%" height="150px"  />';  ?>
                                    </div>
                                    <div class="col-sm-7">
                                        <h5 class="card-title"><?php echo $row['username']; ?></h5>
                                        <p><?php echo $row['address']; ?></p>
                                    </div>
                                </div>
                                <div class="col-sm-12" style=" position: absolute;bottom: 0px;">
                                    <div class="col-12">
                                        <p class="offset-2"><a href="calander.php?id=<?php echo $row['id'];?>"><button class="btn btn-primary" type="button" style="border-radius: 10px; width:220px; "><i class="fas fa-briefcase-medical"> </i>
                                                Book Appointment</button></p></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                <?php
                    }
                }
                ?>

            </div>
        </div>

    </div>

    </div>
</body>

</html>
<?php
include("footer.php");
?>