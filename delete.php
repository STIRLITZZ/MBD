<?php
$id = $_GET['id'];
if ( isset($_GET['id'])){

    header ('location:index.php');

    $conn = new mysqli('localhost','root','','banca1');


    $sql = "DELETE FROM banca WHERE id_banca=$id";
    $conn->query( ($sql));

    $sql_2 = "DELETE FROM indecele WHERE id_indece=$id";
    $conn->query( ($sql_2));

    $sql_3 = "DELETE FROM rezultatele WHERE id_rezultate=$id";
    $conn->query( ($sql_3));

    $sql_4 = "DELETE FROM soldul WHERE id_soldul=$id";
    $conn->query( ($sql_4));

    $sql_5 = "DELETE FROM tarifele WHERE id_tarifele=$id";
    $conn->query( ($sql_5));
}
?>
