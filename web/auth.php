<?php
/**
 * Created by PhpStorm.
 * User: Fahziar
 * Date: 15/04/2015
 * Time: 19:44
 */

include "sql_connect.php";

function prosesLogin($username, $password, mysqli $con)
{
    $query = "SELECT nama, password FROM manajer WHERE nama=? AND password=?";
    $found = false;
    $stmt = $con->prepare($query);
    $hashed_password = hash("sha1", $password);


    if (!$stmt->bind_param('ss', $username, $hashed_password))
    {
        echo " ".$stmt->error;
    }

    if (!$stmt->execute())
    {
        echo " Error: ".$stmt->error;
    }
    $stmt->store_result();

    if ($stmt->num_rows == 1)
    {
        //Ketemu bro!
        $found = true;
        setcookie('username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
        setcookie('password', $hashed_password, time() + (86400 * 30), "/"); // 86400 = 1 day
        $stmt->close();

    } else
    {
        $stmt->close();

        $query = "SELECT nama, password FROM kasir WHERE nama LIKE ? AND password LIKE ?";
        $stmt_cari_kasir = $con->prepare($query);

        $stmt_cari_kasir->bind_param("ss", $username, $hashed_password);
        $stmt_cari_kasir->execute();
        $stmt_cari_kasir->store_result();

        if ($stmt_cari_kasir->num_rows == 1)
        {
            //Ketemu bro
            $found = true;
            setcookie('username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
            setcookie('password', $hashed_password, time() + (86400 * 30), "/"); // 86400 = 1 day
        }

        $stmt_cari_kasir->close();
    }

    return $found;
}

function cekCookie(mysqli $con)
{
    if(isset($_COOKIE['username']) && isset($_COOKIE['password']))
    {
        $query = "SELECT nama, password FROM manajer WHERE nama LIKE ? AND password LIKE ?";
        $found = false;
        $stmt = $con->prepare($query);
        $hashed_password = $_COOKIE['password'];
        $username = $_COOKIE['username'];

        $stmt->bind_param("ss", $username, $hashed_password);

        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows == 1)
        {
            //Ketemu bro!
            $found = true;
            $stmt->close();

        } else
        {
            $stmt->close();
            $query = "SELECT nama, password FROM kasir WHERE nama LIKE ? AND password LIKE ?";
            $stmt_cari_kasir = $con->prepare($query);
            $stmt_cari_kasir->bind_param("ss", $username, $hashed_password);
            $stmt_cari_kasir->execute();
            $stmt_cari_kasir->store_result();

            if ($stmt_cari_kasir->num_rows == 1)
            {
                //Ketemu bro
                $found = true;
                setcookie('username', $username, time() + (86400 * 30), "/"); // 86400 = 1 day
                setcookie('password', $hashed_password, time() + (86400 * 30), "/"); // 86400 = 1 day
            }

            $stmt_cari_kasir->close();
        }

        return $found;
    } else {
        return false;
    }
}