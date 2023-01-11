<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
///code								
?>
<!-- # -->

<?php include "include/header2.php"; ?>




<div id="page-wrapper">
    <div class="row">
        <!--	Header One -->
        <!--	Header start  -->
        <?php include("include/header.php"); ?><!-- # -->
        <!--	Header end  -->




        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center mb-5">Agent</h2>
                    </div>
                </div>
                <div class="row">
                    <!-- # -->
                    <?php
                    $query = mysqli_query($con, "SELECT * FROM user WHERE utype='agent'");
                    while ($row = mysqli_fetch_array($query)) {
                    ?>

                        <div class="col-md-6 col-lg-4">
                            <div class="hover-zoomer bg-white shadow-one mb-4">
                                <div class="overflow-hidden"> <img src="admin/user/<?php echo $row['6']; ?>" alt="aimage"> </div>
                                <div class="py-3 text-center">
                                    <h5 class="text-secondary hover-text-success"><a href="#"><?php echo $row['1']; ?></a></h5>
                                    <span>Real Estate - Agent</span>
                                </div>
                            </div>
                        </div>

                    <?php } ?>


                </div>
            </div>
        </div>


        <!--	Footer   start-->
        <?php include("include/footer.php"); ?>
        <!--	Footer   start-->


        <?php include("include/footer2.php"); ?>