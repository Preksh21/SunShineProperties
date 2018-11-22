<?php
    session_start();
    require_once 'conn.php';
    if($_SESSION['login']=="")
    {
        header('location:login.php');
    }
 ?>
<?php
    require_once 'conn.php';
    $del=  mysql_query("delete from inquery where id='$_REQUEST[id]'");
    header('location:inquery.php');
?>