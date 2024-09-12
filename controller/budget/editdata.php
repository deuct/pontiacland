<?php
include_once("../../config/dbconnection.php");
include_once("../global/global.php");

$res = new stdClass();

$leaseNo = $_POST["leaseNo"];
$year = $_POST["year"];
$dateValue = $_POST["dateValue"];
$budgetType = $_POST["budgetType"];

try {
    $qDelData = "DELETE FROM budget WHERE lease_code = '$leaseNo' AND year = '$year' AND budget_type='$budgetType'";
    $qDelData = $conn->query($qDelData);

    for ($i = 0; $i < count($dateValue); $i++) {
        $month = $i + 1;
        $qInsertData = "INSERT INTO budget (
            lease_code,
            month,
            year,
            budget_value,
            budget_type,
            created_at,
            created_by,
            modified_at,
            modified_by
        ) VALUES (
            '$leaseNo',
            $month,
            $year,
            $dateValue[$i],
            '$budgetType',
            NOW(),
            'farhan',
            NOW(),
            'farhan'
        )";
        $qInsertData = $conn->query($qInsertData);
        if (!$qInsertData) throw new Exception("Failed insert data");
    }

    $res->status = 200;
    $res->msg = "Success insert data";
} catch (Exception $e) {
    $res->status = 500;
    $res->msg = $e->getMessage();
}

echo json_encode($res);
