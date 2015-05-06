<?php
/**
 * Created by PhpStorm.
 * User: Fahziar
 * Date: 15/04/2015
 * Time: 20:45
 */
include 'sql_connect.php';
include 'auth.php';
if ((isset($_POST['submit'])) && (isset($_POST['username'])) && (isset($_POST['password'])))
{
    $username = sprintf("%s", $_POST['username']);
    $password = "".$_POST['password'];
    echo $username;
    echo " ";
    echo $password;
    $login = prosesLogin($username, $password, $con);

} else {
    if (cekCookie($con))
    {
        $login = true;
    } else {
        $login = false;
    }
}

?>
<DOCTYPE html>
<html>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<body>
<?php if($login) { ?>
<div class="container">
    <h1>Loged In</h1>
</div>
<?php } ?>

<div class="container">
<div class="form-control">
<form action="cobaAuth.php" method="post">
    <div class="form-group">
    <input name="username" type="text" placeholder="username">
    </div>

    <div class="form-group">
    <input name="password" type="password" placeholder="password">
    </div>

    <div class="form-group">
    <input name="submit" type="submit" class="btn btn-default">
        </div>
</form>
</div>
</div>

</body>
</html>