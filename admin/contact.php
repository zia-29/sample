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
                            <small>Contacts</small>
                        </h1>

                        
                        <?php 
                        if(isset($_GET['source'])){
                            $source=$_GET['source'];
                        }else{
                            $source='';
                        }
                        switch($source){
                            case 'add_post';
                            include "includes/add_post.php";
                            break;

                            case 'edit_post';
                            include "includes/edit_contact.php";
                            break;

                            default:
                        
                          include "includes/view_contact.php"; 
                        break;
                        } 
                        ?><tr><br>
 <div class="col-xs-6">

                    </div>
                </div>
  
  </div>

              
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <?php include "includes/admin_footer.php"; ?>
