<?php include_once("includes/header.php"); ?>

  <body>
  <body>
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

            <?php include_once('includes/header-nav.php') ?>
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <?php include_once('includes/sidebar.php') ?>
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">
                                      <div class="row">

                                      <?php 
                                            if($views){
                                                if($views == "dashboard"){
                                                    require_once("views/dashboard-views.php");
                                                }else if($views == "add-category"){
                                                    require_once("views/add-category-views.php");
                                                }else if($views == "edit-category"){
                                                    require_once("views/edit-category-views.php");
                                                }else if($views == "add-product"){
                                                    require_once("views/add-product-views.php");
                                                }else if($views == "edit-product"){
                                                    require_once("views/edit-product-views.php");
                                                }else if($views == "add-user"){
                                                    require_once("views/add-user-views.php");
                                                }else if($views == "manage-user"){
                                                    require_once("views/manage-user-views.php");
                                                }
                                            }
                                                
                                       
                                      ?>      
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Warning Section Starts -->
        <!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->
<?php include_once('includes/footer.php'); ?>
