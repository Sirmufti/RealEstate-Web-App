<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");
if (!isset($_SESSION['uemail'])) {
    header("location:login.php");
}
?>


<?php include("include/header2.php"); ?>


<div id="page-wrapper">
    <div class="row">
        <!--	Header start  -->
        <?php include("include/header.php"); ?>
        <!--	Header end  -->

        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>User Listed Property</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">User Listed Property</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <!--	Banner   --->


        <!--	Submit property   -->
        <div class="full-row bg-gray">
            <div class="container"><!-- # -->
                <div class="row mb-5">
                    <div class="col-lg-12">
                        <h2 class="text-secondary double-down-line text-center">User Listed Property</h2>
                        <?php
                        if (isset($_GET['msg']))
                            echo $_GET['msg'];
                        ?>
                    </div>
                </div><!-- # -->
                <table class="items-list col-lg-12 table-hover" style="border-collapse:inherit;">
                    <thead>
                        <tr class="bg-dark">
                            <th class="text-white font-weight-bolder">Properties</th>
                            <th class="text-white font-weight-bolder">BHK</th>
                            <th class="text-white font-weight-bolder">Type</th>
                            <th class="text-white font-weight-bolder">Added Date</th>
                            <th class="text-white font-weight-bolder">Status</th>
                            <th class="text-white font-weight-bolder">Update</th>
                            <th class="text-white font-weight-bolder">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- # -->
                        <?php
                        $uid = $_SESSION['uid'];
                        $query = mysqli_query($con, "SELECT * FROM `property` WHERE uid='$uid'");
                        while ($row = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td>
                                    <img src="admin/property/<?php echo $row['18']; ?>" alt="pimage">
                                    <div class="property-info d-table">
                                        <h5 class="text-secondary text-capitalize"><a href="propertydetail.php?pid=<?php echo $row['0']; ?>"><?php echo $row['1']; ?></a></h5>
                                        <span class="font-14 text-capitalize"><i class="fas fa-map-marker-alt text-success font-13"></i>&nbsp; <?php echo $row['14']; ?></span>
                                        <div class="price mt-3">
                                            <span class="text-success">$&nbsp;<?php echo $row['13']; ?></span>
                                        </div>
                                    </div>
                                </td>
                                <td><?php echo $row['4']; ?></td>
                                <td class="text-capitalize">For <?php echo $row['5']; ?></td>
                                <td><?php echo $row['29']; ?></td>
                                <td class="text-capitalize"><?php echo $row['24']; ?></td>
                                <td><a class="btn btn-info" href="submitpropertyupdate.php?id=<?php echo $row['0']; ?>">Update</a></td>
                                <td><a class="btn btn-danger" href="submitpropertydelete.php?id=<?php echo $row['0']; ?>">Delete</a></td>
                            </tr>
                        <?php } ?>
                        <!-- # -->
                    </tbody>
                </table>
            </div>
        </div>
        <!--	Submit property   -->


        <!--	Footer   start-->
        <?php include("include/footer.php"); ?>
        <!--	Footer   start-->

        <?php include("include/footer2.php"); ?>