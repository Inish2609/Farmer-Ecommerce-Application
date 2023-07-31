<?php
include("../Functions/functions.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <a href="https://icons8.com/icon/83325/roman-soldier"></a>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
</head>
<style>
        .guard {
        width: 100%;
        text-align: center;
        border-bottom: 1px solid #ffc857;
        /* background-color: #ffc857; */
        line-height: 0.1em;
        margin: 10px 0 20px;
        font-family: serif;
    }



    .guard span {
        background-color: white;
        padding: 0 10px;
    }
    .myfooter {
        background-color: #292b2c;

        color: goldenrod;
        margin-top: 15px;
    }

    .aligncenter {
        text-align: center;
    }

    a {
        color: goldenrod;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    nav {
        background-color: #292b2c;
    }

    .navbar-custom {
        background-color: #292b2c;
    }

    /* change the brand and text color */
    .navbar-custom .navbar-brand,
    .navbar-custom .navbar-text {
        background-color: #292b2c;
    }

    .navbar-custom .navbar-nav .nav-link {
        background-color: #292b2c;
    }

    .navbar-custom .nav-item.active .nav-link,
    .navbar-custom .nav-item:hover .nav-link {
        background-color: #292b2c;
    }


    .mybtn {
        border-color: green;
        border-style: solid;
    }


    .right {
        display: flex;
    }

    .left {
        display: none;
    }

    .cart {
        /* margin-left:10px; */
        margin-right: -9px;
    }

    .profile {
        margin-right: 2px;

    }

    .login {
        margin-right: -2px;
        margin-top: 12px;
        display: none;
    }

    .searchbox {
        width: 60%;
    }

    .lists {
        display: inline-block;
    }

    .moblists {
        display: none;
    }

    .logins {
        text-align: center;
        margin-right: -30%;
        margin-left: 35%;
    }
.card{
 width: 14rem;

}
    @media only screen and (min-device-width:320px) and (max-device-width:480px) {
        /* .mycarousel {
            display: none;
        }

        .firstimage {
            height: auto;
            width: 90%;
        }
*/
        .card {
            width: 90%;
            margin-left: 5%;
            margin-right: 5%;
            margin-bottom:10%;

        }

       /* .col {
            margin-top: 20px;
        } */

        .right {
            display: none;
            background-color: #ff5500;
        }

        /* 
            .settings{
            margin-left:79%;
        } */
        .left {
            display: flex;
        }

        .moblogo {
            display: none;
        }

        .logins {
            text-align: center;
            margin-right: 35%;
            padding: 15px;
        }

        .searchbox {
            width: 95%;
            margin-right: 5%;
            margin-left: 0%;
        }

        .moblists {
            display: inline-block;
            text-align: center;
            width: 100%;
               }

        /* .pic{
        height:auto;
    } */

        /* .mobtext{
        display:none;
    }
    .destext{
        display:inline-block;
        width:90%;
        margin-left: 5%;
        margin-right: 5%;
    } */

    }
</style>

<body>




<nav class="navbar navbar-expand-xl ">

        <div class=" flex-row-reverse left ">

            <div class="p-2">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green ;margin-top:2px;">&#61562;</i></a>
                    <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="p-2 ml-5"><i class='far fa-user-circle' style='font-size:30px; color: green;margin-top:2px;'></i></div>
            <a class="float-left" href="bhome.php">
                <img src="agro.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px;">
            </a>
        </div>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;margin-right:-9%;font-size:28px;"></i></span>
        </button>
        <a class="float-left" href="farmerHomepage.php">
            <img src="1.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px;">
        </a>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <div class="list-group moblists">

                          <?php
                              if (isset($_SESSION['phonenumber'])) {

                                   echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                                   echo "<a href='Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                                   echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                              } else {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                              }
                              ?>
                          <div class='loginz' style="text-align:center;">
                               <?php getFarmerUsername(); ?>
                          </div>
                     </div>
        </div>




        <div class=" flex-row-reverse right ">
            <div class="p-2 cart">
                <div class="icon2">
                    <a href="CartPage.php"> <i class="fa" style="font-size:30px; color:green">&#61562;</i></a>
                    <span id="icon" style="color:green"> <?php echo totalItems(); ?> </span>
                </div>
            </div>
            <div class="dropdown p-2 settings ">
                <button class="btn  dropdown-toggle text-success" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Settings
                </button>
                 <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <?php
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                                        echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
                                        echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                                   } else {
                                        echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                                   }
                                   ?>
                          </div>
            </div>


            <div class="text-success  login">Login</div>
        </div>

    </nav>
    <div class="text-center container">
            <br>

            <b>
                <h1 class="guard text-center"style="  font-family: 'Times New Roman', Times, serif;"><span><b>Developers</b></span>
                </h1>
            </b>
        </div>
    <div class="container mt-5" style='margin-left:350px;'>
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ">
                <div class="card border-dark border" >
                    <div class="card-body ">
                        <h5 class="card-title text-center"><img src="inish.JPG" style=" margin-bottom:  10px; width:150px;height;150px;"></h5>
                        <h4 class="card-subtitle mb-2  text-center">Inish</h4>
                        <p class="card-text text-center">Avaraikulam,Tirunelveli</p>
                         <p class="card-text text-center">9500462466<br><br>

                            <button type="button" class="btn  border-dark border" style="background-color:#FFD700;color:black">View Profile </button>
                        </p>
                        <!-- <a href="#" class="card-link text-center">Card link</a>
                      <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ">
                <div class="card border-dark border" >
                    <div class="card-body ">
                        <h5 class="card-title text-center"><img src="bharath.jpg" style=" margin-bottom:  10px;width:150px;height:220px;"></h5>
                        <h4 class="card-subtitle mb-2  text-center">Bharath</h4>
                        <p class="card-text text-center">Avaraikulam,Tirunelveli</p>
                         <p class="card-text text-center">6385201842<br><br>

                            <button type="button" class="btn  border-dark border" style="background-color:#FFD700;color:black">View Profile </button>
                        </p>
                        <!-- <a href="#" class="card-link text-center">Card link</a>
                      <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3 ">
                <div class="card border-dark border" >
                    <div class="card-body ">
                        <h5 class="card-title text-center"><img src="hissha.JPG" style=" margin-bottom:  10px;width:150px;height:200px;"></h5>
                        <h4 class="card-subtitle mb-2  text-center">Hishaamudin</h4>
                        <p class="card-text text-center">Mandapam,Ramanathapuram</p>
                         <p class="card-text text-center">9655641107<br><br>
                            <button type="button" class="btn  border-dark border" style="background-color:#FFD700;color:black">View Profile </button>
                        </p>
                        <!-- <a href="#" class="card-link text-center">Card link</a>
                      <a href="#" class="card-link text-center">Another link</a> -->
                    </div>
                </div>
            </div>
            

        </div>


    </div>
</body>

</html>