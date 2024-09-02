<?php
// include_once("../../config/dbconnection.php");

function generateID($tableName, $conn)
{
    try {
        $dateNow = date("Ymd");

        if ($tableName === "sales") {
            $format = "SALES-YYYYMMDDXXXX";
            $lastId = "SELECT sales_type FROM sales WHERE created_at >= '$dateNow 00:00:00' ORDER BY created_at DESC LIMIT 1";
            $lastId = $conn->query($lastId);
            $resLastId = $lastId->fetch_assoc();
            if ($lastId->num_rows > 0) {
                $lastId = strval($resLastId["sales_type"]);
                $lastId = substr($lastId, 14, 4);
                $lastId = (int)$lastId + 1;
                $lastId = strval($lastId);
                if (strlen($lastId) === 1) {
                    $lastId = "000" . (int)$lastId;
                } else if (strlen($lastId) === 2) {
                    $lastId = "00" . (int)$lastId;
                } else if (strlen($lastId) === 3) {
                    $lastId = "0" . (int)$lastId;
                } else if (strlen($lastId) === 4) {
                    $lastId = (int)$lastId;
                }
            } else {
                $lastId = "0001";
            }
            $format = str_replace("YYYYMMDD", $dateNow, $format);
            $format = str_replace("XXXX", $lastId, $format);
            return $format;
        } else if ($tableName === "leasedata") {
            $format = "LEASE-YYYYMMDDXXXX";
            $lastId = "SELECT lease_code FROM leasedata WHERE created_at >= '$dateNow 00:00:00' ORDER BY created_at DESC LIMIT 1";
            $lastId = $conn->query($lastId);
            $resLastId = $lastId->fetch_assoc();
            if ($lastId->num_rows > 0) {
                $lastId = strval($resLastId["lease_code"]);
                $lastId = substr($lastId, 14, 4);
                $lastId = (int)$lastId + 1;
                $lastId = strval($lastId);
                if (strlen($lastId) === 1) {
                    $lastId = "000" . (int)$lastId;
                } else if (strlen($lastId) === 2) {
                    $lastId = "00" . (int)$lastId;
                } else if (strlen($lastId) === 3) {
                    $lastId = "0" . (int)$lastId;
                } else if (strlen($lastId) === 4) {
                    $lastId = (int)$lastId;
                }
            } else {
                $lastId = "0001";
            }
            $format = str_replace("YYYYMMDD", $dateNow, $format);
            $format = str_replace("XXXX", $lastId, $format);
            return $format;
        } else if ($tableName === "overage") {
            $format = "OVERAGE-YYYYMMDDXXXX";
            $lastId = "SELECT overage_code FROM overage WHERE created_at >= '$dateNow 00:00:00' ORDER BY created_at DESC LIMIT 1";
            $lastId = $conn->query($lastId);
            $resLastId = $lastId->fetch_assoc();
            if ($lastId->num_rows > 0) {
                $lastId = strval($resLastId["overage_code"]);
                $lastId = substr($lastId, 16, 4);
                $lastId = (int)$lastId + 1;
                $lastId = strval($lastId);
                if (strlen($lastId) === 1) {
                    $lastId = "000" . (int)$lastId;
                } else if (strlen($lastId) === 2) {
                    $lastId = "00" . (int)$lastId;
                } else if (strlen($lastId) === 3) {
                    $lastId = "0" . (int)$lastId;
                } else if (strlen($lastId) === 4) {
                    $lastId = (int)$lastId;
                }
            } else {
                $lastId = "0001";
            }
            $format = str_replace("YYYYMMDD", $dateNow, $format);
            $format = str_replace("XXXX", $lastId, $format);
            return $format;
        } else if ($tableName === "rentdata") {
            $format = "RDT-YYYYMMDDXXXX";
            $lastId = "SELECT unit_code FROM rentdata WHERE created_at >= '$dateNow 00:00:00' ORDER BY created_at DESC LIMIT 1";
            $lastId = $conn->query($lastId);
            $resLastId = $lastId->fetch_assoc();
            if ($lastId->num_rows > 0) {
                $lastId = strval($resLastId["unit_code"]);
                $lastId = substr($lastId, 12, 4);
                $lastId = (int)$lastId + 1;
                $lastId = strval($lastId);
                if (strlen($lastId) === 1) {
                    $lastId = "000" . (int)$lastId;
                } else if (strlen($lastId) === 2) {
                    $lastId = "00" . (int)$lastId;
                } else if (strlen($lastId) === 3) {
                    $lastId = "0" . (int)$lastId;
                } else if (strlen($lastId) === 4) {
                    $lastId = (int)$lastId;
                }
            } else {
                $lastId = "0001";
            }
            $format = str_replace("YYYYMMDD", $dateNow, $format);
            $format = str_replace("XXXX", $lastId, $format);
            return $format;
        } else if ($tableName === "percentage_revenue") {
            $format = "PRRV-YYYYMMDDXXXX";
            $lastId = "SELECT pr_code FROM percentage_revenue WHERE created_at >= '$dateNow 00:00:00' ORDER BY created_at DESC LIMIT 1";
            $lastId = $conn->query($lastId);
            $resLastId = $lastId->fetch_assoc();
            if ($lastId->num_rows > 0) {
                $lastId = strval($resLastId["pr_code"]);
                $lastId = substr($lastId, 13, 4);
                $lastId = (int)$lastId + 1;
                $lastId = strval($lastId);
                if (strlen($lastId) === 1) {
                    $lastId = "000" . (int)$lastId;
                } else if (strlen($lastId) === 2) {
                    $lastId = "00" . (int)$lastId;
                } else if (strlen($lastId) === 3) {
                    $lastId = "0" . (int)$lastId;
                } else if (strlen($lastId) === 4) {
                    $lastId = (int)$lastId;
                }
            } else {
                $lastId = "0001";
            }
            $format = str_replace("YYYYMMDD", $dateNow, $format);
            $format = str_replace("XXXX", $lastId, $format);
            return $format;
        }
    } catch (Exception $e) {
        print_r($e);
    }
}
