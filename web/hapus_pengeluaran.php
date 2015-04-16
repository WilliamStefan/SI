<?php
/**
 * Created by PhpStorm.
 * User: Fahziar
 * Date: 16/04/2015
 * Time: 20:24
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
    $query = "DELETE FROM `pengeluaran` WHERE `tanggal` = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $_GET['tgl']);
    $stmt->execute();
    $stmt->close();
}