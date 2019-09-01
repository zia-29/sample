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
                            <small>Introduction</small>
                        </h1>
                        
                        <div class="col-xs-6">
                        <?php
                          
                          insert_heading();

                        ?>
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="heading_title">Add heading</label>
                                <input type="text" class="form-control" name="heading_title">
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add Heading">
                            </div>
                        </form>

                        <?php //update and include query

                        if(isset($_GET['edit'])){
                        $heading_id=$_GET['edit'];
                        include "includes/update_heading.php";

                        }

                        ?>

                        </div>
                        <div class="col-xs-6">
                        
                        <table class="table table-bordered table-hover" >
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Heading</th>
                                    </tr>
                                </thead>
                                <tbody>
        


                <?php  //find all categories query
                
                find_all_heading();

                ?> 
                <!-- //delete query -->
                <?php
                   delete_heading();

                    ?>
                                </tbody>
                            </table>
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
