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
            <td colspan="2">Jan 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Feb 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Mar 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Apr 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">May 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Jun 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Jul 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Aug 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Sep 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Oct 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Nov 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Dec 2023</td>
            <td rowspan="2">Gross Rent</td>
            <td colspan="2">Jan 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Feb 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Mar 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Apr 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">May 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Jun 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Jul 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Aug 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Sep 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Oct 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Nov 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="2">Dec 2023</td>
            <td rowspan="2">Monthly Total Gross Rent</td>
            <td colspan="12">NET RENT REVENUE FOR 2023</td>
            <td colspan="12">SERVICE CHARGE REVENUE FOR 2023</td>
          </tr>
          <tr>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>
            <td>Net Rent</td>
            <td>Service Charge</td>

            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>
            <td>Monthly Leased Net Rent</td>
            <td>Monthly Lease Service Charge</td>

            <td>Jan-23 <br />ACT</td>
            <td>Feb-23 <br />ACT</td>
            <td>Mar-23 <br />ACT</td>
            <td>Apr-23 <br />ACT</td>
            <td>May-23 <br />ACT</td>
            <td>Jun-23 <br />ACT</td>
            <td>Jul-23 <br />ACT</td>
            <td>Aug-23 <br />ACT</td>
            <td>Sep-23 <br />ACT</td>
            <td>Oct-23 <br />ACT</td>
            <td>Nov-23 <br />ACT</td>
            <td>Dec-23 <br />ACT</td>

            <td>Jan-23 <br />ACT</td>
            <td>Feb-23 <br />ACT</td>
            <td>Mar-23 <br />ACT</td>
            <td>Apr-23 <br />ACT</td>
            <td>May-23 <br />ACT</td>
            <td>Jun-23 <br />ACT</td>
            <td>Jul-23 <br />ACT</td>
            <td>Aug-23 <br />ACT</td>
            <td>Sep-23 <br />ACT</td>
            <td>Oct-23 <br />ACT</td>
            <td>Nov-23 <br />ACT</td>
            <td>Dec-23 <br />ACT</td>
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

    var tableData = document.getElementById("table-data");

    $.ajax({
      type: "POST", //type of method
      url: "../../../controller/report/report-c/getdata.php", //your page
      data: {
        year: getCurrentURL("year"),
      }, // passing the values
      success: function (res) {
        // console.log(res);
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
                  <td colspan="102">` +
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
                  <td colspan="102">` +
                  data[i].storey_level +
                  ` Storey</td>
                </tr>
                `;
                tableData.appendChild(trStorey);
              }
            }
            /* /add storey */

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
              data[i].nr_jan +
              `</td>
                  <td>` +
              data[i].sc_jan +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_jan) + parseFloat(data[i].sc_jan)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_feb +
              `</td>
                  <td>` +
              data[i].sc_feb +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_feb) + parseFloat(data[i].sc_feb)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_mar +
              `</td>
                  <td>` +
              data[i].sc_mar +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_mar) + parseFloat(data[i].sc_mar)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_apr +
              `</td>
                  <td>` +
              data[i].sc_apr +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_apr) + parseFloat(data[i].sc_apr)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_may +
              `</td>
                  <td>` +
              data[i].sc_may +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_may) + parseFloat(data[i].sc_may)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_jun +
              `</td>
                  <td>` +
              data[i].sc_jun +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_jun) + parseFloat(data[i].sc_jun)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_jul +
              `</td>
                  <td>` +
              data[i].sc_jul +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_jul) + parseFloat(data[i].sc_jul)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_aug +
              `</td>
                  <td>` +
              data[i].sc_aug +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_aug) + parseFloat(data[i].sc_aug)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_sep +
              `</td>
                  <td>` +
              data[i].sc_sep +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_sep) + parseFloat(data[i].sc_sep)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_oct +
              `</td>
                  <td>` +
              data[i].sc_oct +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_oct) + parseFloat(data[i].sc_oct)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_nov +
              `</td>
                  <td>` +
              data[i].sc_nov +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_nov) + parseFloat(data[i].sc_nov)).toFixed(
                2
              ) +
              `</td>
              <td>` +
              data[i].nr_dec +
              `</td>
                  <td>` +
              data[i].sc_dec +
              `</td>
                  <td>` +
              (parseFloat(data[i].nr_dec) + parseFloat(data[i].sc_dec)).toFixed(
                2
              ) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jan)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jan)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jan) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jan)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_feb)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_feb)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_feb) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_feb)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_mar)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_mar)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_mar) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_mar)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_apr)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_apr)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_apr) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_apr)
              ).toFixed(2) +
              `</td>
              <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_may)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_may)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_may) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_may)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jun)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jun)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jun) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jun)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jul)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jul)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_jul) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_jul)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_aug)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_aug)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_aug) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_aug)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_sep)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_sep)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_sep) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_sep)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_oct)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_oct)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_oct) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_oct)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_nov)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_nov)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_nov) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_nov)
              ).toFixed(2) +
              `</td>
                 <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_dec)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_dec)
              ).toFixed(2) +
              `</td>
                  <td>` +
              (
                parseFloat(data[i].leased_area) * parseFloat(data[i].nr_dec) +
                parseFloat(data[i].leased_area) * parseFloat(data[i].sc_dec)
              ).toFixed(2) +
              `</td>
              </tr>
            `;
            tableData.appendChild(trRentData);

            /*
            if(month(jan-23)=month(leaseenddate)){
	if(year(jan-23)=year(leaseenddate)){return 0}
} else {
	if(month(jan-23)=month(leasestart)){
		if(year(jan-23)=year(leasestart)){return 0}
	}else 
}
            */

            // // let trEl = document.createElement("tr");
            // trEl.innerHTML =
            //   `
            //   <td colspan="19">` +
            //   data[i].lease_no +
            //   `</td>
            // `;
            // tableData.appendChild(trEl);
            // let trElSecond = document.createElement("tr");
            // trElSecond.innerHTML =
            //   `
            //   <td>` +
            //   data[i].sales_name +
            //   `</td>
            //   <td>` +
            //   data[i].startdate +
            //   `</td>
            //   <td>` +
            //   data[i].enddate +
            //   `</td>
            //   <td>` +
            //   data[i].charge_code +
            //   `</td>
            //   <td>` +
            //   data[i].unit +
            //   `</td>
            //   <td>` +
            //   data[i].partial_year +
            //   `</td>
            //   <td>` +
            //   data[i].sales_amount +
            //   `</td>
            //   <td>` +
            //   data[i].breakpoint_salesamt +
            //   `</td>
            //   <td>` +
            //   data[i].breakpoint_percent +
            //   `</td>
            //   <td>` +
            //   data[i].gross_overage +
            //   `</td>
            //   <td>` +
            //   data[i].offset +
            //   `</td>
            //   <td>` +
            //   data[i].offset_applied +
            //   `</td>
            //   <td>` +
            //   data[i].net_overage +
            //   `</td>
            //   <td>` +
            //   data[i].prior_adhoc +
            //   `</td>
            //   <td>` +
            //   data[i].charge_subtotal +
            //   `</td>
            //   <td>` +
            //   data[i].tax_amount +
            //   `</td>
            //   <td>` +
            //   data[i].charge_total +
            //   `</td>
            //   <td>` +
            //   data[i].billed_amount +
            //   `</td>
            //   <td>` +
            //   data[i].due_amount +
            //   `</td>
            // `;
            // tableData.appendChild(trElSecond);
          }
        } else {
          alert(res.msg);
        }
        //do what you want here...
      },
    });
  </script>
</body>
