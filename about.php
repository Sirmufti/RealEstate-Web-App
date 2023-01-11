<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
?>

<?php include "include/header2.php"; ?>


<div id="page-wrapper">
    <div class="row">
        <!--	Header start  -->
        <?php include("include/header.php"); ?>

        <div class="full-row">
            <div class="container">


                <?php

                $query = mysqli_query($con, "SELECT * FROM about");
                while ($row = mysqli_fetch_array($query)) {
                ?>
                    <div class="row">
                        <div class="col-md-12 col-lg-12">
                            <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4"><?php echo $row['1']; ?></h3>
                        </div>
                    </div>
                    <div class="row about-company">
                        <div class="col-md-12 col-lg-7">
                            <div class="about-content">
                                <?php echo $row['2']; ?>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-5 mt-5">
                            <div class="about-img"> <img src="admin/upload/<?php echo $row['3']; ?>" alt="about image"> </div>
                        </div>
                    </div>

                <?php } ?>

            </div>
        </div>
        <!--	About Our Company -->

        <!--	Footer   start-->
        <?php include("include/footer.php"); ?>
        <!--	Footer   start-->

        <?php include("include/footer2.php"); ?>