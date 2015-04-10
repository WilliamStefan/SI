<!DOCTYPE html>
<html lang="en"></html>
<!-- CSS -->
<link href="../assets/bootstrap/css/bootstrap.css" rel="stylesheet">
<link href="../assets/css/login.css" rel="stylesheet">

<!-- Scripts -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script type="text/javascript" src="../assets/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../assets/js/ajax.js"></script>

<head>
  <title>Ganesha Mocktail</title>
</head>
<body>
  <div id="header">
    <p id="white" style="font-size:40px" class="text-center"><strong>Ganesha Mocktail</strong></p>
  </div>
  <div id="content">
    <form class="form-horizontal">
      <div class="form-group">
        <div class="col-xs-4"></div>
        <div class="col-xs-2 control-label">
          <p><strong>Username</strong></p>
        </div>
        <div class="col-xs-2">
          <input type="text" placeholder="Username" id="username" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-4"></div>
        <div class="col-xs-2 control-label">
          <p><strong>Password</strong></p>
        </div>
        <div class="col-xs-2">
          <input type="password" placeholder="Password" id="password" class="form-control">
        </div>
      </div>
      <div class="form-group">
        <div class="col-xs-offset-6">
          <button type="submit" class="btn btn-default">Masuk</button>
        </div>
      </div>
    </form>
  </div>
</body>