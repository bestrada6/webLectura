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


                <div class="col-sm-12 col-xs-12">



                    <!--end Contenido-->

                    <div class="col-sm-12 col-xs-12">
                        <div class="card">
                            <div class="card-header">
                                Registrar libro
                            </div>
                            <div class="card-body">

                                <div class="section">
                                    <div class="section-body">
                                        <div class="step">
                                            <ul class="nav nav-tabs nav-justified" role="tablist">
                                                <li role="step">
                                                    <a href="#step1" id="step1-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">
                                                        <div class="icon fa fa-shopping-cart"></div>
                                                        <div class="heading">
                                                            <div class="title">Libro</div>
                                                            <div class="description">Enter your address</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="step" class="active">
                                                    <a href="#step2" role="tab" id="step2-tab" data-toggle="tab" aria-controls="profile">
                                                        <div class="icon fa fa-credit-card"></div>
                                                        <div class="heading">
                                                            <div class="title">Lecciones</div>
                                                            <div class="description">Billing Information.</div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li role="step">
                                                    <a href="#step3" role="tab" id="step3-tab" data-toggle="tab" aria-controls="profile">
                                                        <div class="icon fa fa-check"></div>
                                                        <div class="heading">
                                                            <div class="title">Publicar</div>
                                                            <div class="description">Confirmation your purchases</div>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>
                                            <!-- Tab panes -->
                                            <div class="tab-content">
                                                <div role="tabpanel" class="tab-pane" id="step1">

                                                    <div class="row">
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Name</label>
                                                            <div class="col-md-9">
                                                                <input type="text" class="form-control" placeholder="">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-md-3">
                                                                <label class="control-label">Description</label>
                                                                <p class="control-label-help">( short detail of products , 150 max words )</p>
                                                            </div>
                                                            <div class="col-md-9">
                                                                <textarea class="form-control"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-3 control-label">Price</label>
                                                            <div class="col-md-9">
                                                                <div class="input-group">
                                                                    <span class="input-group-addon">$</span>
                                                                    <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>




                                                </div>
                                                <div role="tabpanel" class="tab-pane active" id="step2">
                                                    <b>Step2</b> : Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore
                                                </div>
                                                <div role="tabpanel" class="tab-pane" id="step3">
                                                    <b>Step3</b> : Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--footer-->
                    <?php include 'master/Footer.php'; ?>
                    <!--end footer-->


                </div>

            </div>

            <script type="text/javascript" src="./assets/js/vendor.js"></script>
            <script type="text/javascript" src="./assets/js/app.js"></script>

    </body>
</html>