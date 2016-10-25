<!DOCTYPE html>
<html>
    <head>
        <title>Flat Admin V.3 - Free flat-design bootstrap administrator templates</title>

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" type="text/css" href="./assets/css/vendor.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/flat-admin.css">

        <!-- Theme -->
        <link rel="stylesheet" type="text/css" href="assets/css/theme/blue-sky.css">
<!--        <link rel="stylesheet" type="text/css" href="./assets/css/theme/blue.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/theme/red.css">
        <link rel="stylesheet" type="text/css" href="./assets/css/theme/yellow.css">-->

    </head>
    <body>
        <div class="app app-default">

            <!--menu--> 
            <?php include 'master/SideBar.php'; ?>
            <!-- end menu--> 
            
            <div class="app-container">

                <!--top--> 
                <?php include 'master/Top.php'; ?>
                <!-- end top--> 

                
                
                <!--Contenido-->
 
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <a class="card card-banner card-green-light">
                            <div class="card-body">
                                <i class="icon fa fa-shopping-basket fa-4x"></i>
                                <div class="content">
                                    <div class="title">Sale Today</div>
                                    <div class="value"><span class="sign">$</span>420</div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <a class="card card-banner card-blue-light">
                            <div class="card-body">
                                <i class="icon fa fa-thumbs-o-up fa-4x"></i>
                                <div class="content">
                                    <div class="title">Page Likes</div>
                                    <div class="value"><span class="sign"></span>2453</div>
                                </div>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12">
                        <a class="card card-banner card-yellow-light">
                            <div class="card-body">
                                <i class="icon fa fa-user-plus fa-4x"></i>
                                <div class="content">
                                    <div class="title">New Registration</div>
                                    <div class="value"><span class="sign"></span>50</div>
                                </div>
                            </div>
                        </a>

                    </div>
                </div>

                
                <!--end Contenido-->
                
                
                <!--footer-->
                <?php include 'master/Footer.php'; ?>
                <!--end footer-->
                
                
            </div>

        </div>

        <script type="text/javascript" src="./assets/js/vendor.js"></script>
        <script type="text/javascript" src="./assets/js/app.js"></script>

    </body>
</html>