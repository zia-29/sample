<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome Admin
                            <small>Customer Reviews</small>
                        </h1>

                        
                        <?php 
                        if(isset($_GET['source'])){
                            $source=$_GET['source'];
                        }else{
                            $source='';
                        }
                        switch($source){
                            case 'add_review';
                            include "includes/addreview.php";
                            break;

                            case 'edit_post';
                            include "includes/edit_review.php";
                            break;

                            case '3';
                            echo "333";
                            break;

                            default:
                        
                          include "includes/view_all_review.php"; 
                        break;
                        } 
                        ?>
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php include "includes/admin_footer.php"; ?>
