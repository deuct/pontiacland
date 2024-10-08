<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pontiacland/environment.php") ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="../home/home.php">
            <img src="<?= $baseURL ?>/assets/Pontiac_Land_Logo.jpg" alt="Bootstrap" width="60">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../home/home.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Transaction
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/sales/listing.php">Sales Master Data</a></li>
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/overage/listing.php">Overage</a></li>
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/lease/listing.php">Lease Data</a></li>
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/rentdata/listing.php">Rent Data</a></li>
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/budget/listing.php">Budget</a></li>
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/percentage/listing.php">Percentage Revenue</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Report
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/report/report-a/filter.php">Report A</a></li>
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/report/report-b/filter.php">Report B</a></li>
                        <li><a class="dropdown-item" href="<?= $baseURL ?>/view/report/report-c/filter.php">Report C</a></li>
                    </ul>
                </li>
            </ul>
            <div class="me-2"><button class="btn btn btn-danger">Logout</button></div>
        </div>
    </div>
</nav>