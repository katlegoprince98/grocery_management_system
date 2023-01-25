<?php

    $emp = '10584';
    $surname = date("Y-m-d");
    $name = 'Administrator';
    $assigned = '10584';
    $type = 'Fixed-Term';
    $position = 'Welcome';
    $user = 'faizel';
?>


<!DOCTYPE>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="assets/media/image/favicon.png"/>
    <!-- Plugin styles -->
    <link rel="stylesheet" href="vendors/bundle.css" type="text/css">
    <!-- Datepicker -->
    <link rel="stylesheet" href="vendors/datepicker/daterangepicker.css">
    <!-- Slick -->
    <link rel="stylesheet" href="vendors/slick/slick.css">
    <link rel="stylesheet" href="vendors/slick/slick-theme.css">
    <!-- Vmap -->
    <link rel="stylesheet" href="vendors/vmap/jqvmap.min.css">
    <!-- App styles -->
    <link rel="stylesheet" href="assets/css/app.min.css" type="text/css">
    <!-- Fullcalendar -->
    <link rel="stylesheet" href="vendors/fullcalendar/fullcalendar.min.css" type="text/css">
    <!-- DataTable -->
    <link rel="stylesheet" href="vendors/dataTable/dataTables.min.css" type="text/css">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/media/image/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" href="assets/media/image/favicon/favicon-32x32.png" sizes="32x32">
    <link rel="icon" type="image/png" href="assets/media/image/favicon/favicon-16x16.png" sizes="16x16">

</head>

<body>
<!--- BEGIN BODY ---------------------->

<!-- begin::preloader-->
<div class="preloader">
    <svg xmlns="http://www.w3.org/2000/svg" version="1.1" width="50px" height="50px" viewBox="0 0 128 128"
         xml:space="preserve">
        <rect x="0" y="0" width="100%" height="100%" fill="#FFFFFF"/>
        <g>
            <path d="M75.4 126.63a11.43 11.43 0 0 1-2.1-22.65 40.9 40.9 0 0 0 30.5-30.6 11.4 11.4 0 1 1 22.27 4.87h.02a63.77 63.77 0 0 1-47.8 48.05v-.02a11.38 11.38 0 0 1-2.93.37z">
                  fill="#000000" fill-opacity="1"/>
            <animateTransform attributeName="transform" type="rotate" from="0 64 64" to="360 64 64"
                              dur="500ms" repeatCount="indefinite">
            </animateTransform>
        </g>
    </svg>
</div>
<!-- end::preloader -->

<!-- begin::navigation -->
<div class="navigation">

    <!-- begin::logo -->
    <div id="logo">
        <a href="index.php">
            <img class="logo" src="assets/media/image/logo.png" alt="logo">
            <img class="logo-sm" src="assets/media/image/logo-sm.png" alt="small logo">
            <img class="logo-dark" src="assets/media/image/logo-dark.png" alt="dark logo">
        </a>
    </div>
    <!-- end::logo -->

    <!-- begin::navigation header -->
    <header class="navigation-header">

<!-- AVATAR 
-----BODY TAG = onload="loadAvatar()"

    <figure class="avatar avatar-lg">
      <span class="avatar-title bg-danger rounded-circle"><span id="avatar"></span></span>
    </figure>
<script>
function loadAvatar() {
  var str = "<?php echo $name; ?>";
  var res = str.substring(0, 1);
  document.getElementById("avatar").innerHTML = res;
}
</script>
--><!-- END AVATAR -->

        <div>
            <h5><?php echo $position; ?></h5>
            <p class="text-muted"><?php echo $name ?></p>
            <p class="text-muted"><?php echo $surname ?></p>
			
            <ul class="nav">
                <li class="nav-item">
                    <button onclick="window.close();" class="btn nav-link bg-danger-bright" title="Logout" data-toggle="tooltip">
                        <i data-feather="log-out"></i>
                    </button>
                </li>
            </ul>
        </div>
    </header>
    <!-- end::navigation header -->

    <!-- begin::navigation menu -->
    <div class="navigation-menu-body">
        <ul>
            <!-- MAIN -->
            <li class="navigation-divider">MAIN</li>
            <!--<li>
                <a href="index.php">
                    <i class="nav-link-icon" data-feather="bar-chart-2"></i>
                    <span>Home</span>
                </a>
            </li>--> 
            <li>
                <a href="index.php">
                    <i class="nav-link-icon" data-feather="home"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="capture.php">
                    <i class="nav-link-icon" data-feather="file-text"></i>
                    <span>Capture</span>
                </a>
            </li>
            <li>
                <a href="view.php">
                    <i class="nav-link-icon" data-feather="list"></i>
                    <span>View Items</span>
                </a>
            </li>
            <li>
                <a href="take.php">
                    <i class="nav-link-icon" data-feather="check-square"></i>
                    <span>Take Out</span>
                </a>
            </li>


        </ul>
    </div>
    <!-- end::navigation menu -->

</div>
<!-- end::navigation -->

<!-- begin::main -->
<div id="main">
    <!-- begin::header -->
    <div class="header">

        <!-- begin::header left -->
        <ul class="navbar-nav">
            <!-- begin::navigation-toggler -->
            <li class="nav-item navigation-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="menu"></i>
                </a>
            </li>
            <!-- end::navigation-toggler -->

            <!-- begin::header-logo -->
            <li class="nav-item" id="header-logo">
                <a href="index.php">
                    <img class="logo" src="assets/media/image/logo.png" alt="logo">
                    <img class="logo-sm" src="assets/media/image/logo-sm.png" alt="small logo">
                    <img class="logo-dark" src="assets/media/image/logo-dark.png" alt="dark logo">
                </a>
            </li>
            <!-- end::header-logo -->

        </ul>
        <!-- end::header left -->

        <!-- begin::header-right -->

        <div class="header-right">
            <ul class="navbar-nav">

                <!-- begin::search-form -->
                <li class="nav-item search-form">
                    <div class="row">
                        <div class="col-md-6">
                            <form>
                                <div class="input-group">
                                    <!-- EMPTY SUB -->
                                    <div class="input-group-append">
                                        <h2><span style="color: #8aca38">Employee</span><span style="color: #00b2f2"> Admin</span></h2>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
                <!-- end::search-form -->

                <!-- begin::header minimize/maximize -->
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link" title="Fullscreen" data-toggle="fullscreen">
                        <i class="maximize" data-feather="maximize"></i>
                        <i class="minimize" data-feather="minimize"></i>
                    </a>
                </li>
                <!-- end::header minimize/maximize -->

                <!-- begin::header app list -->
                <!-- end::header app list -->


                <!-- begin::header messages dropdown -->
                <!-- end::header notification dropdown -->
            </ul>


            <!-- begin::mobile header toggler -->
            <ul class="navbar-nav d-flex align-items-center">
                <li class="nav-item header-toggler">
                    <a href="#" class="nav-link">
                        <i data-feather="arrow-down"></i>
                    </a>
                </li>
            </ul>
            <!-- end::mobile header toggler -->
        </div>
        <!-- end::header-right -->
    </div>
    <!-- end::header -->



<!----------------------------------------------------------------------- BEGIN CONTENT ---------------------------------------------------------->

    <!-- begin::main-content -->
    <main class="main-content">
        <div class="container">

            <!-- begin::page-header -->
            <div class="page-header">
                <h4 style="color: #ff0000"><?php echo $pageName; ?></h4>
            </div>
            <!-- end::page-header -->

<!----------------------------------------------------------------------- CONTENT ---------------------------------------------------------->

            <?php

            echo $content;

            ?>

<!----------------------------------------------------------------------- CONTENT ---------------------------------------------------------->
        </div>
    </main>
    <!-- end::main-content -->
<!----------------------------------------------------------------------- BEGIN CONTENT ---------------------------------------------------------->
    <!-- begin::footer -->

<?php

echo $footer;

?>

<!-- end::footer -->

</div>
<!-- end::main -->

<script>
    $(document).ready(function (){
    $('#myTable').DataTable();
        });
</script>

<!-- begin::global scripts -->
<script src="vendors/bundle.js"></script>
<!-- end::global scripts -->
<!-- Slick slide -->
<script src="vendors/slick/slick.min.js"></script>
<script src="assets/js/examples/slick.js"></script>
<!-- Prism -->
<script src="vendors/prism/prism.js"></script>
<!-- begin::custom scripts -->
<script src="assets/js/custom.js"></script>
<script src="assets/js/app.min.js"></script>
<!-- end::custom scripts -->
<!-- Fullcalendar -->
<script src="vendors/fullcalendar/moment.min.js"></script>
<script src="vendors/fullcalendar/fullcalendar.min.js"></script>
<script src="assets/js/examples/fullcalendar.js"></script>

<!-- DataTable -->
<script src="vendors/dataTable/jquery.dataTables.min.js"></script>
<script src="vendors/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="vendors/dataTable/dataTables.responsive.min.js"></script>
<script src="assets/js/examples/datatable.js"></script>

<!-- END BODY ------------------------->
</body>
</html>
