<?php
    require "sql_connect.php";
    require "auth.php";
    $login = cekCookie($con);
    $loginFailed = false;

    if($login)
    {
        header("location: ". "home.php");
    } else {
        if ((isset($_POST['username']) && (isset($_POST['password']))))
        {
            $login = prosesLogin($_POST['username'], $_POST['password'], $con);
            if($login)
            {
                header("location: ". "home.php");
            } else {
                $loginFailed = true;
            }
        }
    }

    if (!$login)
    {
?>
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
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading text-center"><h1>Login</h1></div>

            <div class="panel-body">
                <?php if($loginFailed) { ?>

                    <div class="alert alert-danger" role="alert">
                        <strong>Login failed!</strong> Wrong username or password
                    </div>
                <?php }  ?>
                <form class="form-horizontal" method="post">
                    <div class="form-group">
                        <label for="username" class="col-xs-1 col-xs-offset-3">Username:</label>
                        <div class="col-xs-5">
                            <input type="text" placeholder="Username" id="username" name="username" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-xs-1 col-xs-offset-3">Password</label>
                        <div class="col-xs-5">
                            <input type="password" placeholder="Password" id="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-xs-offset-6">
                            <button name="submit" type="submit" class="btn btn-default">Masuk</button>
                        </div>
                    </div>
                </form>
            </div>
        </div> <!-- panel -->
    </div>
  </div>
</body>
<?php } ?>