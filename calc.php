<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

// codeing

if (isset($_REQUEST['calc'])) {
    $amount = $_REQUEST['amount'];
    $mon = $_REQUEST['month'];
    $int = $_REQUEST['interest'];

    $interest = $amount * $int / 100;
    $pay = $amount + $interest;
    $month = $pay / $mon;
}
?>
<?php include "include/header2.php"; ?>




<div id="page-wrapper">
    <div class="row">
        <!--	Header start  -->
        <?php include("include/header.php"); ?>
        <!--	Header end  -->



        <!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center">EMI Calculator</h2>
                    </div>
                </div>
                <center>
                    <table class="items-list col-lg-6 table-hover" style="border-collapse:inherit;">
                        <thead>
                            <tr class="bg-secondary">
                                <th class="text-white font-weight-bolder">Term</th>
                                <th class="text-white font-weight-bolder">Amount</th>
                            </tr>
                        </thead>
                        <tbody>


                            <tr class="text-center font-18">
                                <td><b>Amount</b></td>
                                <td><b><?php echo '$' . $amount; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Total Duration</b></td>
                                <td><b><?php echo $mon . ' Months'; ?></b></td>
                            </tr><!-- # -->
                            <tr class="text-center">
                                <td><b>Interest Rate</b></td>
                                <td><b><?php echo $int . '%'; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Total Interest</b></td>
                                <td><b><?php echo '$' . $interest; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Total Amount</b></td>
                                <td><b><?php echo '$' . $pay; ?></b></td>
                            </tr>
                            <tr class="text-center">
                                <td><b>Pay Per Month (EMI)</b></td>
                                <td><b><?php echo '$' . $month; ?></b></td>
                            </tr>

                        </tbody>
                    </table>
                </center>
            </div>
        </div><!-- # -->
        <!--	Submit property   -->


        <!--	Footer   start-->
        <?php include("include/footer.php"); ?>
        <!--	Footer   start-->

        <?php include("include/footer2.php"); ?>