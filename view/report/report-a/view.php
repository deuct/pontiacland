<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pontiacland/environment.php") ?>

<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pontiacland/view/components/header.php") ?>
<?php include_once($_SERVER['DOCUMENT_ROOT'] . "/pontiacland/view/components/checklogin.php") ?>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div class="report-title">
          <h3>Overage Calculation</h3>
          <span>as Of Month:
            <?= $_GET["month"] ?>/<?= $_GET["year"] ?></span>
        </div>
        <table id="table-data" class="table table-bordered table-striped table-hovered">
          <tr>
            <td>Sales Type</td>
            <td>From Date</td>
            <td>To Date</td>
            <td>Charge Code</td>
            <td>Unit(s)</td>
            <td>Partial Year</td>
            <td>Sales Amount</td>
            <td>Break Point Sales Amt.</td>
            <td>BreakPoint %</td>
            <td>Gross Overage</td>
            <td>Offset</td>
            <td>Offset Applied</td>
            <td>Net Overage</td>
            <td>Prior Adhoc</td>
            <td>Charge Subtotal</td>
            <td>Tax Amount</td>
            <td>Charge Total</td>
            <td>Billed Amount</td>
            <td>Due Amount</td>
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
      url: "../../../controller/report/report-b/getdata.php", //your page
      data: {
        year: getCurrentURL("year"),
        month: getCurrentURL("month")
      }, // passing the values
      success: function(res) {
        // console.log(res);
        res = JSON.parse(res);
        console.log(res);
        if (res.status === 200) {
          let data = res.data;
          for (let i = 0; i < data.length; i++) {
            let trEl = document.createElement("tr");
            trEl.innerHTML = `
              <td colspan="19">` + data[i].lease_no + `</td>
            `;
            tableData.appendChild(trEl);
            let trElSecond = document.createElement("tr");
            trElSecond.innerHTML = `
              <td>` + data[i].sales_name + `</td>
              <td>` + data[i].startdate + `</td>
              <td>` + data[i].enddate + `</td>
              <td>` + data[i].charge_code + `</td>
              <td>` + data[i].unit + `</td>
              <td>` + data[i].partial_year + `</td>
              <td>` + data[i].sales_amount + `</td>
              <td>` + data[i].breakpoint_salesamt + `</td>
              <td>` + data[i].breakpoint_percent + `</td>
              <td>` + data[i].gross_overage + `</td>
              <td>` + data[i].offset + `</td>
              <td>` + data[i].offset_applied + `</td>
              <td>` + data[i].net_overage + `</td>
              <td>` + data[i].prior_adhoc + `</td>
              <td>` + data[i].charge_subtotal + `</td>
              <td>` + data[i].tax_amount + `</td>
              <td>` + data[i].charge_total + `</td>
              <td>` + data[i].billed_amount + `</td>
              <td>` + data[i].due_amount + `</td>
            `;
            tableData.appendChild(trElSecond);
          }
        } else {
          alert(res.msg);
        }
        //do what you want here...
      }
    });
  </script>
</body>