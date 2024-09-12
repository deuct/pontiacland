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

    async function getPercentage(unitCode, month, year){
      let resVal = await $.ajax({
        type: "POST", //type of method
        url: "../../../controller/report/report-a/getpercentage.php", //your page
        data: {
          year: parseInt(year),
          month: parseInt(month),
          unitCode: unitCode,
        }, // passing the values
      })

      resVal = JSON.parse(resVal);
      if(resVal.status == 200) {
        resVal = resVal.data[0];
        return resVal;
      } else {
        return 0;
      }
    }    

    async function getActBefore(unitCode, month, year){
      let resVal = await $.ajax({
        type: "POST", //type of method
        url: "../../../controller/report/report-a/getactbefore.php", //your page
        data: {
          year: (parseInt(year) - 1),
          month: month,
          unitCode: unitCode,
        }, // passing the values
      })

      resVal = JSON.parse(resVal);
      if(resVal.status == 200) {
        resVal = resVal.data[0];
        return resVal;
      } else {
        return 0;
      }
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
      success: async function(res) {
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
            let ActBeforeJan = await getActBefore(data[i].unit_code, 1, getCurrentURL("year"));
            let ActBeforeFeb = await getActBefore(data[i].unit_code, 2, getCurrentURL("year"));
            let ActBeforeMar = await getActBefore(data[i].unit_code, 3, getCurrentURL("year"));
            let ActBeforeApr = await getActBefore(data[i].unit_code, 4, getCurrentURL("year"));
            let ActBeforeMay = await getActBefore(data[i].unit_code, 5, getCurrentURL("year"));
            let ActBeforeJun = await getActBefore(data[i].unit_code, 6, getCurrentURL("year"));
            let ActBeforeJul = await getActBefore(data[i].unit_code, 7, getCurrentURL("year"));
            let ActBeforeAug = await getActBefore(data[i].unit_code, 8, getCurrentURL("year"));
            let ActBeforeSep = await getActBefore(data[i].unit_code, 9, getCurrentURL("year"));
            let ActBeforeOct = await getActBefore(data[i].unit_code, 10, getCurrentURL("year"));
            let ActBeforeNov = await getActBefore(data[i].unit_code, 11, getCurrentURL("year"));
            let ActBeforeDec = await getActBefore(data[i].unit_code, 12, getCurrentURL("year"));
            /* /ACT Year Before */

            /* Percentage */
            // let percentage = await getPercentage(data[i].unit_code, 1, getCurrentURL("year"));
            
            let percentageJan = await getPercentage(data[i].unit_code, 1, getCurrentURL("year"));
            let percentageFeb = await getPercentage(data[i].unit_code, 2, getCurrentURL("year"));
            let percentageMar = await getPercentage(data[i].unit_code, 3, getCurrentURL("year"));
            let percentageApr = await getPercentage(data[i].unit_code, 4, getCurrentURL("year"));
            let percentageMay = await getPercentage(data[i].unit_code, 5, getCurrentURL("year"));
            let percentageJun = await getPercentage(data[i].unit_code, 6, getCurrentURL("year"));
            let percentageJul = await getPercentage(data[i].unit_code, 7, getCurrentURL("year"));
            let percentageAug = await getPercentage(data[i].unit_code, 8, getCurrentURL("year"));
            let percentageSep = await getPercentage(data[i].unit_code, 9, getCurrentURL("year"));
            let percentageOct = await getPercentage(data[i].unit_code, 10, getCurrentURL("year"));
            let percentageNov = await getPercentage(data[i].unit_code, 11, getCurrentURL("year"));
            let percentageDec = await getPercentage(data[i].unit_code, 12, getCurrentURL("year"));
            
            /* /Percentage */

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
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-01-01', monthlyLeaseNrJan)) +
              `</td>
                <td>` +
                data[i].budget_nr_jan +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-01-01', monthlyLeaseNrJan)) - data[i].budget_nr_jan) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-01-01', ActBeforeJan.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-02-01', monthlyLeaseNrFeb)) +
              `</td>
                <td>` +
                data[i].budget_nr_feb +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-02-01', monthlyLeaseNrFeb)) - data[i].budget_nr_feb) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-02-01', ActBeforeFeb.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-03-01', monthlyLeaseNrMar)) +
              `</td>
                <td>` +
                data[i].budget_nr_mar +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-03-01', monthlyLeaseNrMar)) - data[i].budget_nr_mar) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-03-01', ActBeforeMar.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-04-01', monthlyLeaseNrApr)) +
              `</td>
                <td>` +
                data[i].budget_nr_apr +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-04-01', monthlyLeaseNrApr)) - data[i].budget_nr_apr) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-04-01', ActBeforeApr.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-05-01', monthlyLeaseNrMay)) +
              `</td>
                <td>` +
                data[i].budget_nr_may +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-05-01', monthlyLeaseNrMay)) - data[i].budget_nr_may) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-05-01', ActBeforeMay.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-06-01', monthlyLeaseNrJun)) +
              `</td>
                <td>` +
                data[i].budget_nr_jun +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-06-01', monthlyLeaseNrJun)) - data[i].budget_nr_jun) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-05-01', ActBeforeJun.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-07-01', monthlyLeaseNrJul)) +
              `</td>
                <td>` +
                data[i].budget_nr_jul +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-07-01', monthlyLeaseNrJul)) - data[i].budget_nr_jul) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-07-01', ActBeforeJul.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-08-01', monthlyLeaseNrAug)) +
              `</td>
                <td>` +
                data[i].budget_nr_aug +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-08-01', monthlyLeaseNrAug)) - data[i].budget_nr_aug) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-08-01', ActBeforeAug.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-09-01', monthlyLeaseNrSep)) +
              `</td>
                <td>` +
                data[i].budget_nr_sep +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-09-01', monthlyLeaseNrSep)) - data[i].budget_nr_sep) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-09-01', ActBeforeSep.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-10-01', monthlyLeaseNrOct)) +
              `</td>
                <td>` +
                data[i].budget_nr_oct +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-10-01', monthlyLeaseNrOct)) - data[i].budget_nr_oct) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-10-01', ActBeforeOct.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-11-01', monthlyLeaseNrNov)) +
              `</td>
                <td>` +
                data[i].budget_nr_nov +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-11-01', monthlyLeaseNrNov)) - data[i].budget_nr_nov) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-11-01', ActBeforeNov.net_rent))+`
              </td>
                <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-12-01', monthlyLeaseNrDec)) +
              `</td>
                <td>` +
                data[i].budget_nr_dec +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-01-01', monthlyLeaseNrDec)) - data[i].budget_nr_dec) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-01-01', ActBeforeDec.net_rent))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-01-01', monthlyLeaseScJan)) +
              `</td>
                <td>` +
                data[i].budget_sc_jan +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-01-01', monthlyLeaseScJan)) - data[i].budget_sc_jan) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-01-01', ActBeforeJan.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-02-01', monthlyLeaseScFeb)) +
              `</td>
                <td>` +
                data[i].budget_sc_feb +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-02-01', monthlyLeaseScFeb)) - data[i].budget_sc_feb) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-02-01', ActBeforeFeb.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-03-01', monthlyLeaseScMar)) +
              `</td>
                <td>` +
                data[i].budget_sc_mar +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-03-01', monthlyLeaseScMar)) - data[i].budget_sc_mar) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-03-01', ActBeforeMar.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-04-01', monthlyLeaseScApr)) +
              `</td>
                <td>` +
                data[i].budget_sc_apr +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-04-01', monthlyLeaseScApr)) - data[i].budget_sc_apr) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-04-01', ActBeforeApr.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-05-01', monthlyLeaseScMay)) +
              `</td>
                <td>` +
                data[i].budget_sc_may +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-05-01', monthlyLeaseScMay)) - data[i].budget_sc_may) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-05-01', ActBeforeMay.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-06-01', monthlyLeaseScJun)) +
              `</td>
                <td>` +
                data[i].budget_sc_jun +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-06-01', monthlyLeaseScJun)) - data[i].budget_sc_jun) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-06-01', ActBeforeJun.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-07-01', monthlyLeaseScJul)) +
              `</td>
                <td>` +
                data[i].budget_sc_jul +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-07-01', monthlyLeaseScJul)) - data[i].budget_sc_jul) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-07-01', ActBeforeJul.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-08-01', monthlyLeaseScAug)) +
              `</td>
                <td>` +
                data[i].budget_sc_aug +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-08-01', monthlyLeaseScAug)) - data[i].budget_sc_aug) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-08-01', ActBeforeAug.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-09-01', monthlyLeaseScSep)) +
              `</td>
                <td>` +
                data[i].budget_sc_sep +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-09-01', monthlyLeaseScSep)) - data[i].budget_sc_sep) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-09-01', ActBeforeSep.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-10-01', monthlyLeaseScOct)) +
              `</td>
                <td>` +
                data[i].budget_sc_oct +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-10-01', monthlyLeaseScOct)) - data[i].budget_sc_oct) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-10-01', ActBeforeOct.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-11-01', monthlyLeaseScNov)) +
              `</td>
                <td>` +
                data[i].budget_sc_nov +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-11-01', monthlyLeaseScNov)) - data[i].budget_sc_nov) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-11-01', ActBeforeNov.service_charge))+`
              </td>
              <td>` +
                Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-12-01', monthlyLeaseScDec)) +
              `</td>
                <td>` +
                data[i].budget_sc_dec +
              `</td>
              <td>` +
              (Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= $_GET["year"] ?> + '-12-01', monthlyLeaseScDec)) - data[i].budget_sc_dec) +
              `</td>
              <td>
              `+Math.round(getAct(data[i].lease_startdate, data[i].lease_enddate, <?= ((int)$_GET["year"] - 1) ?> + '-12-01', ActBeforeDec.service_charge))+`
              </td>
              <td></td>
              <td>`
              +percentageJan.value+
              `</td>
              <td>`
              +percentageFeb.value+
              `</td>
              <td>`
              +percentageMar.value+
              `</td>
              <td>`
              +percentageApr.value+
              `</td>
              <td>`
              +percentageMay.value+
              `</td>
              <td>`
              +percentageJun.value+
              `</td>
              <td>`
              +percentageJul.value+
              `</td>
              <td>`
              +percentageAug.value+
              `</td>
              <td>`
              +percentageSep.value+
              `</td>
              <td>`
              +percentageOct.value+
              `</td>
              <td>`
              +percentageNov.value+
              `</td>
              <td>`
              +percentageDec.value+
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