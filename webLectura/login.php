<!DOCTYPE html>
<html>
<head>
  <title>Biblioteca Admin V.1</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="assets/css/vendor.css">
  <link rel="stylesheet" type="text/css" href="assets/css/flat-admin.css">

  <!-- Theme -->
  <link rel="stylesheet" type="text/css" href="assets/css/theme/blue-sky.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/blue.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/red.css">
  <link rel="stylesheet" type="text/css" href="assets/css/theme/yellow.css">
  
  <script src="assets/js/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="assets/js/knockout-3.2.0.js" type="text/javascript"></script>
  
  <script src="script/viewModel/_global.js" type="text/javascript"></script>
  <script src="script/viewModel/proxyUrl.js" type="text/javascript"></script>
  <script src="script/model/mUsuario.js" type="text/javascript"></script>
  <script src="script/viewModel/vmUsuario.js" type="text/javascript"></script>

</head>
<body>
  <div class="app app-default">

<div class="app-container app-login">
  <div class="flex-center">
    <div class="app-header"></div>
    <div class="app-body">
      <div class="loader-container text-center">
          <div class="icon">
            <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div>
          <div class="title">Logging in...</div>
      </div>
      <div class="app-block">
      <div class="app-form">
        <div class="form-header">
          <div class="app-brand"><span class="highlight">Biblioteca</span> Admin</div>
        </div>
<!--        <form action="" method="POST">
            
        </form>-->
          
          <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">
                <i class="fa fa-user" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Username" data-bind="value: mUsuario.nomUsuario" aria-describedby="basic-addon1">
            </div>
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon2">
                <i class="fa fa-key" aria-hidden="true"></i></span>
              <input type="text" class="form-control" placeholder="Password" data-bind="value: mUsuario.clave" aria-describedby="basic-addon2">
            </div>
            <div class="text-center">
                <input type="button" class="btn btn-success btn-default" data-bind="click: validarUsurio" value="Login">
            </div>

      </div>
      </div>
    </div>
    <div class="app-footer">
    </div>
  </div>
</div>

  </div>
  
  <script type="text/javascript" src="assets/js/vendor.js"></script>
  <script type="text/javascript" src="assets/js/app.js"></script>

</body>
</html>