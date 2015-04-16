<?php
/**
 * Created by PhpStorm.
 * User: Fahziar
 * Date: 16/04/2015
 * Time: 13:35
 */

    setcookie("username", null, -1, "/");
    setcookie("password", null, -1, "/");

    header("location: login.php");