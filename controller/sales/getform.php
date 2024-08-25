<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

$salesType = $_GET["sales_type"];

try {
    $qGetSales = "SELECT sales_name, sales_type FROM sales WHERE sales_type = '$salesType'";
    $qGetSales = $conn->query($qGetSales);

    $resGetSales = $qGetSales->fetch_assoc();

    if ($qGetSales->num_rows > 0) {
        $res->status = 200;
        $res->msg = "Success get data form";
        $res->data = $resGetSales;
    } else {
        throw new Exception("Failed get data");
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
