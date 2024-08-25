<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

try {
    $qGetSales = "SELECT sales_name, sales_type FROM sales";
    $qGetSales = $conn->query($qGetSales);

    if ($qGetSales->num_rows > 0) {
        $rows = array();
        while ($r = mysqli_fetch_assoc($qGetSales)) {
            $rows[] = $r;
        }

        $res->status = 200;
        $res->msg = "Success get data list";
        $res->data = $rows;
    } else {
        throw new Exception("Failed get data");
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
