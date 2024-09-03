<?php
include_once("../../../config/dbconnection.php");
include_once("../../global/global.php");

$res = new stdClass();

$year = $_POST["year"];
$month = $_POST["month"];

try {
    $qGetData = "SELECT a.lease_code, a.lease_no,
    CONCAT('01/$month/$year') startdate,
    CONCAT('31/$month/$year') enddate,
    charge_code,
    unit,
    partial_year,
    sales_amount,
    breakpoint_salesamt,
    breakpoint_percent,
    gross_overage, 
    offset,
    offset_applied,
    net_overage,
    prior_adhoc,
    charge_subtotal,
    tax_amount,
    charge_total,
    billed_amount,
    due_amount,
    c.sales_name
    FROM leasedata a 
    INNER JOIN overage b ON a.lease_code = b.lease_code
    LEFT JOIN sales c ON b.sales_type = c.sales_type
    WHERE b.month = '$month'
    AND b.year = '$year'
    ";
    $qGetData = $conn->query($qGetData);

    if ($qGetData->num_rows > 0) {
        $rows = array();
        while ($r = mysqli_fetch_assoc($qGetData)) {
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
