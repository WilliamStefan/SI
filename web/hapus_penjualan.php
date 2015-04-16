<?php
/**
 * Created by PhpStorm.
 * User: Fahziar
 * Date: 16/04/2015
 * Time: 17:47
 */

require "sql_connect.php";
require "auth.php";

if (!cekCookie($con))
{
    header("location: login.php");
    echo "Not Authenticated";
    die();
}

if (isset($_GET['tgl']))
{
    $query = "DELETE FROM `penjualan` WHERE `tanggal` = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $_GET['tgl']);
    $stmt->execute();
    $stmt->close();
}