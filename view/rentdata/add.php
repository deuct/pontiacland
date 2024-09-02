<?php include_once("../components/header.php") ?>
<?php include_once("../components/checklogin.php") ?>

<body>
    <?php include_once("../components/navbar.php") ?>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card mb-2 mt-2 p-2 text-center">
                    <h3>Add Rent Data</h3>
                </div>
            </div>
        </div>
        <div class="card mb-2 p-2">
            <div class="row justify-content-center main-content">
                <div class="col-lg-10 col-md-10 col-sm-12">
                    <form>
                        <div class="mb-3">
                            <label for="lease-no" class="form-label">Lease No</label>
                            <select class="form-select" aria-label="lease-no" id="lease-no">
                                <option selected>Open this select menu</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="unit" class="form-label">Unit No.</label>
                            <input type="text" class="form-control" id="unit">
                        </div>
                        <div class="mb-3">
                            <label for="storey" class="form-label">Storey Level</label>
                            <select class="form-select" aria-label="storey" id="storey">
                                <option selected>Open this select menu</option>
                                <option value="1">1st Storey</option>
                                <option value="2">2nd Storey</option>
                                <option value="3">3rd Storey</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="startdate" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="startdate">
                        </div>
                        <div class="mb-3">
                            <label for="enddate" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="enddate">
                        </div>
                        <div class="mb-3">
                            <label for="lettable-area" class="form-label">Lettable Area</label>
                            <input type="number" class="form-control" id="lettable-area">
                        </div>
                        <div class="mb-3">
                            <label for="leased-area" class="form-label">Leased Area</label>
                            <input type="number" class="form-control" id="leased-area">
                        </div>
                        <span>Net Rent & Service Charge Yearly(psf)</span>
                        <table class="table table-striped hovered" id="nrsc-yearly-table">
                            <tr>
                                <td>Year</td>
                                <td>Net Rent (psf)</td>
                                <td>Service Charge (psf)</td>
                                <td><button type="button" class="btn btn-secondary btn-sm" id="nrsc-yearly-add">+</button></td>
                            </tr>
                            <tr class="nrsc-yearly" id="nrsc-yearly-1">
                                <td>
                                    <select class="form-select" id="nrsc-yearly-select-1">
                                        <?php for ($i = 2015; $i <= 2099; $i++) { ?>
                                            <option value=<?= $i ?>><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <input type=" number" class="form-control nr-yearly-val" />
                                </td>
                                <td>
                                    <input type=" number" class="form-control sc-yearly-val" />
                                </td>
                            </tr>
                        </table>
                        <span>Net Rent & Service Charge Monthly(psf)</span>
                        <table class="table table-striped hovered" id="nrsc-monthly-table">
                            <tr>
                                <td>Month</td>
                                <td>Year</td>
                                <td>Net Rent (psf)</td>
                                <td>Service Charge (psf)</td>
                                <td><button type="button" class="btn btn-secondary btn-sm" id="nrsc-monthly-add">+</button></td>
                            </tr>
                            <tr class="nrsc-monthly" id="nrsc-monthly-1">
                                <td>
                                    <select class="form-select" id="nrsc-monthly-select-1">
                                        <?php $arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"] ?>
                                        <?php for ($i = 1; $i <= 12; $i++) {
                                            if ($i === 1) {
                                        ?>
                                                <option value=<?= $i ?> selected><?= $arrMonth[$i - 1] ?></option>
                                            <?php } else { ?>
                                                <option value=<?= $i ?>><?= $arrMonth[$i - 1] ?></option>
                                        <?php }
                                        } ?>
                                    </select>
                                </td>
                                <td>
                                    <select class="form-select">
                                        <?php for ($i = 2015; $i <= 2099; $i++) { ?>
                                            <option value=<?= $i ?>><?= $i ?></option>
                                        <?php } ?>
                                    </select>
                                </td>
                                <td>
                                    <input type="number" class="form-control nr-monthly-val" />
                                </td>
                                <td>
                                    <input type="number" class="form-control sc-monthly-val" />
                                </td>
                            </tr>
                        </table>
                        </table>
                        <div class="text-end">
                            <button type="button" onclick="window.location.href='./listing.php'" class="btn btn-secondary">Cancel</button>
                            <button type="button" onclick="submitform()" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        var leaseNo = document.getElementById("lease-no"),
            unit = document.getElementById("unit"),
            storey = document.getElementById("storey"),
            startdate = document.getElementById("startdate"),
            enddate = document.getElementById("enddate"),
            lettableArea = document.getElementById("lettable-area"),
            leasedArea = document.getElementById("leased-area");

        var nrscYearlyAdd = document.getElementById("nrsc-yearly-add"),
            nrscYearlyTable = document.getElementById("nrsc-yearly-table"),
            nrscYearlyCounter = document.querySelectorAll(".nrsc-yearly");

        var nrscMonthlyAdd = document.getElementById("nrsc-monthly-add"),
            nrscMonthlyTable = document.getElementById("nrsc-monthly-table"),
            nrscMonthlyCounter = document.querySelectorAll(".nrsc-monthly");

        window.addEventListener('load', () => {
            nrscYearlyCounter = nrscYearlyCounter[nrscYearlyCounter.length - 1];
            nrscYearlyCounter = nrscYearlyCounter.id;
            nrscYearlyCounter = nrscYearlyCounter.split("-");
            nrscYearlyCounter = parseInt(nrscYearlyCounter[2]);

            nrscMonthlyCounter = nrscMonthlyCounter[nrscMonthlyCounter.length - 1];
            nrscMonthlyCounter = nrscMonthlyCounter.id;
            nrscMonthlyCounter = nrscMonthlyCounter.split("-");
            nrscMonthlyCounter = parseInt(nrscMonthlyCounter[2]);
        })

        /* DOM Net Yearly */
        nrscYearlyAdd.addEventListener("click", () => {
            let trEl = document.createElement("tr");
            trEl.classList.add("nrsc-yearly");
            nrscYearlyCounter += 1;
            let nrscYearlySelect = "nrsc-yearly-select-" + nrscYearlyCounter;
            trEl.id = "nrsc-yearly-" + nrscYearlyCounter;
            trEl.innerHTML = `
                <td>
                    <select class="form-select" id="` + nrscYearlySelect + `">
                    </select>
                </td>
                <td>
                    <input type="number" class="form-control nr-yearly-val" />
                </td>
                <td>
                    <input type="number" class="form-control sc-yearly-val" />
                </td>
                <td>
                    <button type="button" class="btn btn-danger" onclick="deleteRow('nrsc-yearly-` + nrscYearlyCounter + `')"><i class="bi bi-x-lg"></i></button>
                </td>
            `;
            nrscYearlyTable.appendChild(trEl);

            appendYearSelect(nrscYearlySelect);
        })
        /* /DOM Net Yearly */

        /* DOM Net Monthly */
        nrscMonthlyAdd.addEventListener("click", () => {
            let trEl = document.createElement("tr");
            trEl.classList.add("nrsc-monthly");
            nrscMonthlyCounter += 1;
            let nrscMonthlySelectMonth = "nrsc-monthly-selectmonth-" + nrscMonthlyCounter;
            let nrscMonthlySelectYear = "nrsc-monthly-selectyear-" + nrscMonthlyCounter;
            trEl.id = "nrsc-monthly-" + nrscMonthlyCounter;
            trEl.innerHTML = `
                  <tr class="nrsc-monthly" id="nrsc-monthly-1">
                    <td>
                        <select class="form-select" id="` + nrscMonthlySelectMonth + `">
                        </select>
                    </td>
                    <td>
                        <select class="form-select" id="` + nrscMonthlySelectYear + `">
                        </select>
                    </td>
                    <td>
                        <input type="number" class="form-control nr-monthly-val" />
                    </td>
                    <td>
                        <input type="number" class="form-control sc-monthly-val" />
                    </td>
                    <td>
                        <button type="button" class="btn btn-danger" onclick="deleteRow('nrsc-monthly-` + nrscMonthlyCounter + `')"><i class="bi bi-x-lg"></i></button>
                    </td>
                </tr>
            `;
            nrscMonthlyTable.appendChild(trEl);

            appendMonthSelect(nrscMonthlySelectMonth);
            appendYearSelect(nrscMonthlySelectYear);
        })
        /* /DOM Net Monthly */

        /* Append Year Select */
        function appendYearSelect(selectId) {
            selectId = document.getElementById(selectId);
            for (let i = 2015; i <= 2099; i++) {
                let year = document.createElement("option");
                year.value = i;
                year.innerHTML = i;
                selectId.appendChild(year);
            }
        }
        /* /Append Year Select */

        /* Append Month Select */
        function appendMonthSelect(selectId) {
            selectId = document.getElementById(selectId);
            let arrMonth = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Des"];
            for (let i = 1; i <= 12; i++) {
                let month = document.createElement("option");
                month.value = i;
                month.innerHTML = arrMonth[i - 1];
                selectId.appendChild(month);
            }
        }
        /* /Append Month Select */

        /* Delete Row */
        function deleteRow(rowId) {
            rowId = document.getElementById(rowId);
            if (rowId) {
                rowId.remove();
            }
        }
        /* /Delete Row */

        /* Submit Form */
        function submitform() {
            /* NRSC Yearly */
            let arrNrscYearly = [];
            let nrscYearlyEl = document.querySelectorAll(".nrsc-yearly");

            for (let i = 0; i < nrscYearlyEl.length; i++) {
                let data = nrscYearlyEl[i];
                data = data.getElementsByTagName("td");
                let year = data[0].getElementsByTagName("select");
                year = year[0].value;
                let nrVal = data[1].querySelector(".nr-yearly-val");
                nrVal = nrVal.value;
                let scVal = data[2].querySelector(".sc-yearly-val");
                scVal = scVal.value;
                jsonNrscYearly = {
                    year: year,
                    nr: nrVal,
                    sc: scVal,
                }
                arrNrscYearly.push(jsonNrscYearly);
            }
            /* /NRSC Yearly */

            console.log("yearly");
            console.log(arrNrscYearly);

            /* NRSC Monthly */
            let arrNrscMonthly = [];
            let nrscMonthlyEl = document.querySelectorAll(".nrsc-monthly");

            console.log("monthly");
            console.log(arrNrscMonthly);

            for (let i = 0; i < nrscMonthlyEl.length; i++) {
                let data = nrscMonthlyEl[i];
                data = data.getElementsByTagName("td");
                let month = data[0].getElementsByTagName("select");
                month = month[0].value;
                let year = data[1].getElementsByTagName("select");
                year = year[0].value;
                let nrVal = data[2].querySelector(".nr-monthly-val");
                nrVal = nrVal.value;
                let scVal = data[3].querySelector(".sc-monthly-val");
                scVal = scVal.value;
                jsonNrscMonthly = {
                    month: month,
                    year: year,
                    nr: nrVal,
                    sc: scVal
                }
                arrNrscMonthly.push(jsonNrscMonthly);
            }
            /* /NRSC Monthly */

            $.ajax({
                type: "POST", //type of method
                url: "../../controller/rentdata/adddata.php", //your page
                data: {
                    leaseNo: leaseNo.value,
                    unit: unit.value,
                    storey: storey.value,
                    startdate: startdate.value,
                    enddate: enddate.value,
                    lettableArea: lettableArea.value,
                    leasedArea: leasedArea.value,
                    arrNrscYearly: JSON.stringify(arrNrscYearly),
                    arrNrscMonthly: JSON.stringify(arrNrscMonthly),
                }, // passing the values
                success: function(res) {
                    res = JSON.parse(res);
                    console.log(res);
                    if (res.status === 200) {
                        alert(res.msg);
                        window.location.href = "./listing.php";
                    } else {
                        alert(res.msg);
                    }
                    //do what you want here...
                }
            });
        }
        /* /Submit Form */

        function getLease() {
            $.ajax({
                type: "GET", //type of method
                url: "../../controller/lease/getlistlease.php", //your page
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    if (res.status === 200) {
                        let data = res.data;
                        for (let i = 0; i < data.length; i++) {
                            let optEl = document.createElement("option");
                            optEl.value = data[i].lease_code;
                            optEl.innerHTML = data[i].lease_no;
                            leaseNo.appendChild(optEl);
                        }
                    }

                    //do what you want here...
                }
            });
        }

        window.onload = getLease();
    </script>
    <?php include_once("../components/footer.php") ?>