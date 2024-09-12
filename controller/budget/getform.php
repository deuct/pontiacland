<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

$leaseCode = $_GET["lease_code"];
$budgetType = $_GET["budgetType"];

try {
    $qGetFormData = "SELECT lease_code,
    month, year, budget_value, budget_type   
    FROM budget
    WHERE lease_code = '$leaseCode'
    AND budget_type = '$budgetType'
    ORDER BY month ASC
    ";
    $qGetFormData = $conn->query($qGetFormData);

    if ($qGetFormData->num_rows > 0) {
        $rows = array();
        while ($r = mysqli_fetch_assoc($qGetFormData)) {
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
