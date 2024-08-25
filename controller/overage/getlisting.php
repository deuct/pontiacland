<?php
include_once("../../config/dbconnection.php");

$res = new stdClass();

try {
    $qGetOverage = "SELECT overage_code, b.lease_no, DATE_FORMAT(CONCAT(year, '-',month,'-01'),'%Y-%m-%d') startdate, LAST_DAY(CONCAT(year, '-',month,'-01')) enddate,
    charge_code, unit 
    FROM overage a
    LEFT JOIN leasedata b ON a.lease_code = b.lease_code
    ";
    $qGetOverage = $conn->query($qGetOverage);

    if ($qGetOverage->num_rows > 0) {
        $rows = array();
        while ($r = mysqli_fetch_assoc($qGetOverage)) {
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
