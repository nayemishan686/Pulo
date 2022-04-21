<?php include('class/adminBack.php'); ?>
<?php 
    session_start();
    $adminId = $_SESSION['adminId'];
    $adminUserName = $_SESSION['adminUser'];
    $adminEmail = $_SESSION['adminEmail'];
    if($adminId == null){
        header('Location: index.php');
    }

    if(isset($_GET['adminLogout'])){
        $obj_adminBack = new Admin();
        $obj_adminBack->adminLogout();
    }
?>
<!-- Include Header Part  -->
<?php include('includes/header.php');?>

  <body>
	  <div class="fixed-button">
		<a href="https://codedthemes.com/item/gradient-able-admin-template" target="_blank" class="btn btn-md btn-primary">
			<i class="fa fa-shopping-cart" aria-hidden="true"></i> Upgrade To Pro
		</a>
	  </div>
       <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Include Header Nav -->
            <?php include ('includes/header_nav.php');?>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- Include Sidebar -->
                    <?php include('includes/sidebar.php'); ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                        <!-- include dashboard view -->
                                        <?php 
                                            if($views){
                                                if('dashboard' == $views){
                                                    include('views/dashboard-view.php');
                                                }elseif('add-cat' == $views){
                                                    include('views/add-cat-view.php');
                                                }elseif('manage-cat' == $views){
                                                    include('views/manage-cat-view.php');
                                                }elseif('add-product' == $views){
                                                    include('views/add-product-view.php');
                                                }elseif('manage-product' == $views){
                                                    include('views/manage-product-view.php');
                                                }elseif('add-user' == $views){
                                                    include('views/add-user-view.php');
                                                }elseif('manage-user' == $views){
                                                    include('views/manage-user-view.php');
                                                }
                                            }
                                        
                                        ?>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<!-- Include Footer section -->
<?php include ('includes/footer.php');?>