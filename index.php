<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Power Fuel Dashboard</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <script src="https://kit.fontawesome.com/4e60d43ec8.js" crossorigin="anonymous"></script>
</head>
<script src="js/jquery-3.6.1.min.js"></script>

<body id="page-top">
    
<div id="wrapper">
    <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0">
        <div class="container-fluid d-flex flex-column p-0"><a class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0" href="#">
                <div class="sidebar-brand-icon "><img width="45px" src="assets/img/icons/icons8-fire-60.png"></div>
                <div class="sidebar-brand-text mx-3"><span>PowerFuel</span></div>
            </a>
            <hr class="sidebar-divider my-0">
            <ul class="navbar-nav text-light" id="accordionSidebar">
                <li id="nav-fuel-allocation" class="nav-item"><a class="nav-link" href="#fuel-allocation"><i class="fa-sharp fa-solid fa-right-to-bracket"></i><span>Fuel Allocations</span></a></li>
                <li id="nav-fuel-dispatch" class="nav-item"><a class="nav-link" href="#fuel-dispatch"><i class="fa-sharp fa-solid fa-truck-fast"></i><span>Fuel Dispatches</span></a></li>

                <li id="nav-station-tokenReader" class="nav-item"><a class="nav-link" href="#"><i class="fas fa-ticket-alt"></i><span>Token Reader</span></a></li>
                <li id="nav-station-dashboard" class="nav-item"><a class="nav-link" href="#"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>

                <li id="nav-station-register" class="nav-item"><a class="nav-link" href="#register-station"><i class="fas fa-map-marked-alt"></i><span>Register Stations</span></a></li>
                <li id="nav-fuel-request" class="nav-item"><a class="nav-link" href="#fuel-request"><i class="fa-solid fa-gas-pump"></i><span>Fuel Requests</span></a></li>
                <li id="nav-employee-register" class="nav-item"><a class="nav-link" href="#emp-register"><i class="fas fa-users"></i><span>Register Employees</span></a></li>



            </ul>


                <!--<li class="nav-item"><a class="nav-link" href="register.php"><i class="fas fa-user-circle"></i><span>Register</span></a></li> ----->
            </ul>

            <div class="text-center d-none d-md-inline mt-4"><button class="btn rounded-circle border-0" id="sidebarToggle" type="button"></button></div>
        </div>
    </nav>
    <div class="d-flex flex-column" id="content-wrapper">
        <div id="content">
            <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle mr-3" id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>
                    <ul class="navbar-nav flex-nowrap ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <div class="nav-item dropdown no-arrow mt-3">
                                <span class="d-none d-lg-inline mr-4 text-gray-600 small">Welcome ! <span id="logger-name"></span> </span>
                            </div>
                        </li>
                        <div class="d-none d-sm-block topbar-divider"></div>
                        <li class="nav-item dropdown no-arrow">
                            <a id="logout-btn" class="text-decoration-none" href=""><i class="fas fa-sign-out-alt fa-sm fa-fw mt-3 text-gray-400"></i>&nbsp;Logout</a>
                        </li>

                    </ul>
                </div>
            </nav>
            <div class="container-fluid">
               <!---Please Include all the page paths here ---->
                <?php include("pages/register-station.php") ?>
                <?php include("pages/fuel-request.php") ?>

                <?php include("pages/fuel-allocation.php") ?>
                <?php include("pages/fuel-dispatch.php") ?>


                <?php include("pages/employee-register.php") ?>



            </div>
        </div>
        <footer class="bg-white sticky-footer">

        </footer>
    </div>
</div>

<!--dashboard related modal imports-->
<?php include "modals/stationRegisterModal.php"?>
<?php include "modals/fuelRequestModal.php" ?>
<?php include "modals/employeeRegisterModal.php" ?>
<?php include "modals/employeeDetailsUpdateModal.php"; ?>


<script src="assets/js/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/chart.min.js"></script>
<script src="assets/js/bs-init.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="assets/js/theme.js"></script>
<script src="js/navigation.js"></script>
<script src="js/fuelStationRegistration.js"></script>
<script src="js/requestFuel.js"></script>

<script src="js/fuelAllocation.js"></script>
<script src="js/fuelDispatch.js"></script>


<script src="js/employeeRegister.js"></script>

<script>
    $(document).ready(function(){
        sessionHandler();
        function sessionHandler(){
            var logindata=localStorage.getItem('loginData');
            if(logindata===null){
                window.location.replace("http://localhost/powerFuelFrontendWeb/pages/login.php");
            }else{
                var convertedData=JSON.parse(logindata);

                var role=convertedData.role;
                var name=convertedData.name;
                console.log(role);
                console.log(name);
                $('#logger-name').html(name);
                if(role=="Admin"){
                    $('#nav-fuel-dispatch').css({'visibility':'hidden'});
                    $('#nav-fuel-allocation').css({'visibility':'hidden'});
                    $('#nav-station-tokenReader').css({'visibility':'hidden'});

                }else if(role == 'Office'){
                    $('#nav-station-dashboard').css({'visibility':'hidden'});
                    $('#nav-station-register').css({'visibility':'hidden'});
                    $('#nav-employee-register').css({'visibility':'hidden'});
                    $('#nav-fuel-request').css({'visibility':'hidden'});
                    $('#nav-station-tokenReader').css({'visibility':'hidden'});

                }else if(role == 'Fuel Handler'){
                    $('#nav-fuel-dispatch').css({'visibility':'hidden'});
                    $('#nav-fuel-allocation').css({'visibility':'hidden'});
                    $('#nav-station-dashboard').css({'visibility':'hidden'});
                    $('#nav-station-register').css({'visibility':'hidden'});
                    $('#nav-employee-register').css({'visibility':'hidden'});
                    $('#nav-fuel-request').css({'visibility':'hidden'});


                }

            }


        }

        /*----logout btn handler----*/
        $('#logout-btn').on('click',function(event){
            event.preventDefault();
            localStorage.clear();
            window.location.replace("http://localhost/powerFuelFrontendWeb/pages/login.php");
        })

    });
</script>

</body>

</html>