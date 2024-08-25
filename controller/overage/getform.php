<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

$overageCode = $_GET["overage_code"];

try {
    $qGetFormData = "SELECT overage_code, 
    sales_type,
    lease_code,
    unit,
    month,
    year,
    charge_code,
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
    due_amount
    FROM overage
    WHERE overage_code = '$overageCode'";
    $qGetFormData = $conn->query($qGetFormData);
    $resGetFormData = $qGetFormData->fetch_assoc();

    if ($qGetFormData->num_rows > 0) {
        $res->status = 200;
        $res->msg = "Success get data form";
        $res->data = $resGetFormData;
    } else {
        throw new Exception("Failed get data");
    }
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
