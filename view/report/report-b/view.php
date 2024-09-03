<?php include_once("../../components/header.php") ?>
<?php include_once("../../components/checklogin.php") ?>

<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col">
        <div class="report-title">
          <h3>Overage Calculation</h3>
          <span
            >as Of Month:
            <?= $_GET["month"] ?>/<?= $_GET["year"] ?></span
          >
        </div>
        <table class="table table-striped table-hovered">
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
    console.log("test123");
    // $.ajax({
    //     type: "POST", //type of method
    //     url: "../../controller/report/report-b/view.php", //your page
    //     data: {
    //         year: year.value,
    //         month: month.value
    //     }, // passing the values
    //     success: function(res) {
    //         console.log(res);
    //         // res = JSON.parse(res);
    //         // console.log(res);
    //         // if (res.status === 200) {
    //         //     alert(res.msg);
    //         //     window.location.href = "./listing.php";
    //         // } else {
    //         //     alert(res.msg);
    //         // }
    //         //do what you want here...
    //     }
    // });
  </script>
  <?php include_once("../components/footer.php") ?>
</body>
