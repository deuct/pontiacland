<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pontiacland/environment.php") ?>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pontiacland/view/components/header.php") ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pontiacland/view/components/checklogin.php") ?>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div class="report-title">
          <h3>
            Rental & Service Charge Revenue For Year
            <?= $_GET["year"] ?>
          </h3>
        </div>
        <table id="table-data" class="table table-bordered table-hovered">
          <tr>
            <td rowspan="2">Lease No</td>
            <td rowspan="2">Unit No</td>
            <td rowspan="2">Lease Start Date</td>
            <td rowspan="2">Lease End Date</td>
            <td rowspan="2">Lettable Area (sq ft)</td>
            <td rowspan="2">Leased Area (sq ft)</td>
            <td rowspan="2">Net Rent(psf)</td>
            <td rowspan="2">Service Charge(psf)</td>
            <td rowspan="2">Gross Rent(psf)</td>
            <td rowspan="2">Monthly Lease Net Rent</td>
            <td rowspan="2">Monthly Lease Service Charge</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="48" style="text-align:center">Net Revenue For <?= $_GET["year"] ?></td>
            <td colspan="48" style="text-align:center">Service Charge For <?= $_GET["year"] ?></td>
            <td></td>
            <td colspan="12" style="text-align:center">Percentage Revenue For <?= $_GET["year"] ?></td>
          </tr>
          <tr>
            <td>Jan <?= $_GET["year"] ?> <br />ACT</td>
            <td>Jan <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Jan <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Jan <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Feb <?= $_GET["year"] ?> <br />ACT</td>
            <td>Feb <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Feb <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Feb <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Mar <?= $_GET["year"] ?> <br />ACT</td>
            <td>Mar <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Mar <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Mar <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Apr <?= $_GET["year"] ?> <br />ACT</td>
            <td>Apr <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Apr <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Apr <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>May <?= $_GET["year"] ?> <br />ACT</td>
            <td>May <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>May <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">May <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Jun <?= $_GET["year"] ?> <br />ACT</td>
            <td>Jun <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Jun <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Jun <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Jul <?= $_GET["year"] ?> <br />ACT</td>
            <td>Jul <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Jul <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Jul <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Aug <?= $_GET["year"] ?> <br />ACT</td>
            <td>Aug <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Aug <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Aug <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Sep <?= $_GET["year"] ?> <br />ACT</td>
            <td>Sep <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Sep <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Sep <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Oct <?= $_GET["year"] ?> <br />ACT</td>
            <td>Oct <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Oct <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Oct <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Nov <?= $_GET["year"] ?> <br />ACT</td>
            <td>Nov <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Nov <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Nov <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Dec <?= $_GET["year"] ?> <br />ACT</td>
            <td>Dec <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Dec <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Dec <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>

            <td>Jan <?= $_GET["year"] ?> <br />ACT</td>
            <td>Jan <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Jan <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Jan <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Feb <?= $_GET["year"] ?> <br />ACT</td>
            <td>Feb <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Feb <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Feb <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Mar <?= $_GET["year"] ?> <br />ACT</td>
            <td>Mar <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Mar <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Mar <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Apr <?= $_GET["year"] ?> <br />ACT</td>
            <td>Apr <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Apr <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Apr <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>May <?= $_GET["year"] ?> <br />ACT</td>
            <td>May <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>May <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">May <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Jun <?= $_GET["year"] ?> <br />ACT</td>
            <td>Jun <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Jun <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Jun <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Jul <?= $_GET["year"] ?> <br />ACT</td>
            <td>Jul <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Jul <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Jul <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Aug <?= $_GET["year"] ?> <br />ACT</td>
            <td>Aug <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Aug <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Aug <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Sep <?= $_GET["year"] ?> <br />ACT</td>
            <td>Sep <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Sep <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Sep <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Oct <?= $_GET["year"] ?> <br />ACT</td>
            <td>Oct <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Oct <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Oct <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Nov <?= $_GET["year"] ?> <br />ACT</td>
            <td>Nov <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Nov <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Nov <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>
            <td>Dec <?= $_GET["year"] ?> <br />ACT</td>
            <td>Dec <?= $_GET["year"] ?> <br />BUDGET</td>
            <td>Dec <?= $_GET["year"] ?> <br />VARIANCE</td>
            <td style="background:yellow">Dec <?= (int)$_GET["year"] - 1 ?> <br />ACT</td>

            <td></td>

            <td>Jan <?= $_GET["year"] ?> <br />ACT</td>
            <td>Feb <?= $_GET["year"] ?> <br />ACT</td>
            <td>Mar <?= $_GET["year"] ?> <br />ACT</td>
            <td>Apr <?= $_GET["year"] ?> <br />ACT</td>
            <td>May <?= $_GET["year"] ?> <br />ACT</td>
            <td>Jun <?= $_GET["year"] ?> <br />ACT</td>
            <td>Jul <?= $_GET["year"] ?> <br />ACT</td>
            <td>Aug <?= $_GET["year"] ?> <br />ACT</td>
            <td>Sep <?= $_GET["year"] ?> <br />ACT</td>
            <td>Oct <?= $_GET["year"] ?> <br />ACT</td>
            <td>Nov <?= $_GET["year"] ?> <br />ACT</td>
            <td>Dec <?= $_GET["year"] ?> <br />ACT</td>
          </tr>
        </table>
      </div>
    </div>
  </div>

  <script type="text/javascript">
    /* Get URL */
    function getCurrentURL(param) {
      const queryString = window.location.search;
      const urlParams = new URLSearchParams(queryString);
      const res = urlParams.get(param);
      return res;
    }
    /* /Get URL */

    function getActBefore(unitCode, month, year){
      $.ajax({
      type: "POST", //type of method
      url: "../../../controller/report/report-a/getactbefore.php", //your page
      data: {
        year: year,
        month: month,
        unitCode: unitCode,
      }, // passing the values
      success: function(res) {
        res = JSON.parse(res);
        console.log("res");
        
        console.log(res);
      }
    })
    }

    function getAct(leasestart, leaseend, compareMonth, monthlyLeaseCharge) {
      compareMonth = new Date(compareMonth);
      let compareMonthNumber = compareMonth.getMonth() + 1;
      leasestart = new Date(leasestart);
      let leasestartNumber = leasestart.getMonth() + 1;
      leaseend = new Date(leaseend);
      let leaseendNumber = leaseend.getMonth() + 1;

      let leaseendPlusOne = new Date(leaseend + (3600 * 1000 * 24));
      let compareMonthPlusOne = new Date(compareMonth + (3600 * 1000 * 24));

      if (compareMonthNumber == leaseendNumber && compareMonth.getFullYear() == leaseend.getFullYear()) {
        return 0;
      }
      if (compareMonthNumber == leasestartNumber && compareMonth.getFullYear() == leasestart.getFullYear()) {
        return 0;
      }
      if (compareMonth < leaseendPlusOne && compareMonthPlusOne > leasestart) {
        return parseFloat(monthlyLeaseCharge).toFixed(2);
      }
    }


    var tableData = document.getElementById("table-data");

    $.ajax({
      type: "POST", //type of method
      url: "../../../controller/report/report-a/getdata.php", //your page
      data: {
        year: getCurrentURL("year"),
      }, // passing the values
      success: function(res) {
        res = JSON.parse(res);
        console.log(res);
        if (res.status === 200) {
          let data = res.data;
          for (let i = 0; i < data.length; i++) {
            /* add storey */
            let trStorey = document.createElement("tr");
            if (i === 0) {
              trStorey.innerHTML =
                `<tr>
                  <td colspan="121">` +
                data[i].storey_level +
                ` Storey</td>
                </tr>
                `;
              tableData.appendChild(trStorey);
            }
            if (i >= 1) {
              if (data[i].storey_level !== data[i - 1].storey_level) {
                trStorey.innerHTML =
                  `<tr>
                  <td colspan="121">` +
                  data[i].storey_level +
                  ` Storey</td>
                </tr>
                `;
                tableData.appendChild(trStorey);
              }
            }
            /* /add storey */

            let monthlyLeaseNrJan = parseFloat(data[i].nr_jan) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrFeb = parseFloat(data[i].nr_feb) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrMar = parseFloat(data[i].nr_mar) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrApr = parseFloat(data[i].nr_apr) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrMay = parseFloat(data[i].nr_may) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrJun = parseFloat(data[i].nr_jun) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrJul = parseFloat(data[i].nr_jul) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrAug = parseFloat(data[i].nr_aug) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrSep = parseFloat(data[i].nr_sep) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrOct = parseFloat(data[i].nr_oct) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrNov = parseFloat(data[i].nr_nov) * parseFloat(data[i].leased_area);
            let monthlyLeaseNrDec = parseFloat(data[i].nr_dec) * parseFloat(data[i].leased_area);

            let monthlyLeaseScJan = parseFloat(data[i].sc_jan) * parseFloat(data[i].leased_area);
            let monthlyLeaseScFeb = parseFloat(data[i].sc_feb) * parseFloat(data[i].leased_area);
            let monthlyLeaseScMar = parseFloat(data[i].sc_mar) * parseFloat(data[i].leased_area);
            let monthlyLeaseScApr = parseFloat(data[i].sc_apr) * parseFloat(data[i].leased_area);
            let monthlyLeaseScMay = parseFloat(data[i].sc_may) * parseFloat(data[i].leased_area);
            let monthlyLeaseScJun = parseFloat(data[i].sc_jun) * parseFloat(data[i].leased_area);
            let monthlyLeaseScJul = parseFloat(data[i].sc_jul) * parseFloat(data[i].leased_area);
            let monthlyLeaseScAug = parseFloat(data[i].sc_aug) * parseFloat(data[i].leased_area);
            let monthlyLeaseScSep = parseFloat(data[i].sc_sep) * parseFloat(data[i].leased_area);
            let monthlyLeaseScOct = parseFloat(data[i].sc_oct) * parseFloat(data[i].leased_area);
            let monthlyLeaseScNov = parseFloat(data[i].sc_nov) * parseFloat(data[i].leased_area);
            let monthlyLeaseScDec = parseFloat(data[i].sc_dec) * parseFloat(data[i].leased_area);

            let monthlyLeaseNetRent = parseFloat(data[i].nr) * parseFloat(data[i].leased_area); 
            let monthlyLeaseServiceCharge = parseFloat(data[i].sc) * parseFloat(data[i].leased_area); 
            let monthlyTotalGrossRent = monthlyLeaseNetRent + monthlyLeaseServiceCharge;

            /* ACT Year Before */
            getActBefore(data[i].unit_code, 1, getCurrentURL("year"));
            /* /ACT Year Before */

            let trRentData = document.createElement("tr");
            trRentData.innerHTML =
              `
              <tr>
                  <td>` +
              data[i].lease_no +
              `</td>
                  <td>` +
              data[i].unit_no +
              `</td>
                  <td>` +
              data[i].lease_startdate +
              `</td>
                  <td>` +
              data[i].lease_enddate +
              `</td>
                  <td>` +
              data[i].lettable_area +
              `</td>
                  <td>` +
              data[i].leased_area +
              `</td>
                <td>` +
              data[i].nr +
              `</td>
                <td>` +
              data[i].sc +
              `</td>
              <td></td>
                <td>` +
              monthlyLeaseNetRent +
              `</td>
                <td>` +
              monthlyLeaseServiceCharge +
              `</td>
                <td>` +
                monthlyTotalGrossRent +
              `</td>
                  <td>` +
              parseFloat(data[i].nr_jan).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_jan).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_jan) + parseFloat(data[i].sc_jan)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_feb).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_feb).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_feb) + parseFloat(data[i].sc_feb)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_mar).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_mar).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_mar) + parseFloat(data[i].sc_mar)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_apr).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_apr).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_apr) + parseFloat(data[i].sc_apr)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_may).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_may).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_may) + parseFloat(data[i].sc_may)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_jun).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_jun).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_jun) + parseFloat(data[i].sc_jun)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_jul).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_jul).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_jul) + parseFloat(data[i].sc_jul)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_aug).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_aug).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_aug) + parseFloat(data[i].sc_aug)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_sep).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_sep).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_sep) + parseFloat(data[i].sc_sep)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_oct).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_oct).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_oct) + parseFloat(data[i].sc_oct)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_nov).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_nov).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_nov) + parseFloat(data[i].sc_nov)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              parseFloat(data[i].nr_dec).toFixed(2) +
              `</td>
                  <td>` +
              parseFloat(data[i].sc_dec).toFixed(2) +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_dec) + parseFloat(data[i].sc_dec)).toFixed(
                2
              ) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jan)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jan)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jan) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jan)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_feb)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_feb)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_feb) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_feb)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_mar)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_mar)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_mar) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_mar)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_apr)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_apr)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_apr) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_apr)
              ).toFixed(2)) +
              `</td>
              <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_may)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_may)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_may) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_may)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jun)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jun)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jun) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jun)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jul)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jul)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jul) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jul)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_aug)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_aug)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_aug) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_aug)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_sep)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_sep)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_sep) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_sep)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_oct)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_oct)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_oct) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_oct)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_nov)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_nov)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_nov) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_nov)
              ).toFixed(2)) +
              `</td>
                 <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_dec)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_dec)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round((
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_dec) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_dec)
              ).toFixed(2)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-01-01', monthlyLeaseNrJan)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-02-01', monthlyLeaseNrFeb)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-03-01', monthlyLeaseNrMar)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-04-01', monthlyLeaseNrApr)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-05-01', monthlyLeaseNrMay)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-06-01', monthlyLeaseNrJun)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-07-01', monthlyLeaseNrJul)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-08-01', monthlyLeaseNrAug)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-09-01', monthlyLeaseNrSep)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-10-01', monthlyLeaseNrOct)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-11-01', monthlyLeaseNrNov)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-12-01', monthlyLeaseNrDec)) +
              `</td>
              <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-01-01', monthlyLeaseScJan)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-02-01', monthlyLeaseScFeb)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-03-01', monthlyLeaseScMar)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-04-01', monthlyLeaseScApr)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-05-01', monthlyLeaseScMay)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-06-01', monthlyLeaseScJun)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-07-01', monthlyLeaseScJul)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-08-01', monthlyLeaseScAug)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-09-01', monthlyLeaseScSep)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-10-01', monthlyLeaseScOct)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-11-01', monthlyLeaseScNov)) +
              `</td>
                  <td>` +
              Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-12-01', monthlyLeaseScDec)) +
              `</td>
              </tr>
            `;
            tableData.appendChild(trRentData);
          }
        } else {
          alert(res.msg);
        }
        //do what you want here...
      },
    });
  </script>
</body>