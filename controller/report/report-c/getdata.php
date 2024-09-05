<?php
include_once("../../../config/dbconnection.php");
include_once("../../global/global.php");

$res = new stdClass();

$year = $_POST["year"];

try {
    $qGetData = "SELECT a.unit_code, b.lease_no, a.unit_no, a.lease_startdate,
    a.lease_enddate, a.lettable_area, a.leased_area, a.storey_level,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '1') nr_jan,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '1') sc_jan,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '2') nr_feb,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '2') sc_feb,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '3') nr_mar,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '3') sc_mar,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '4') nr_apr,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '4') sc_apr,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '5') nr_may,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '5') sc_may,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '6') nr_jun,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '6') sc_jun,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '7') nr_jul,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '7') sc_jul,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '8') nr_aug,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '8') sc_aug,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '9') nr_sep,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '9') sc_sep,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '10') nr_oct,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '1') sc_oct,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '11') nr_nov,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '11') sc_nov,
    (SELECT net_rent FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '12') nr_dec,
    (SELECT service_charge FROM rentdata_monthly WHERE unit_code = a.unit_code AND year = '$year' AND month = '12') sc_dec
    FROM rentdata a
    LEFT JOIN leasedata b ON a.lease_code = b.lease_code
    WHERE DATE_FORMAT(a.lease_startdate,'%Y') <= '$year' AND DATE_FORMAT(a.lease_enddate,'%Y') >= '$year'
    ORDER BY a.storey_level ASC, b.lease_no ASC
    ";
    // print_r($qGetData);
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
