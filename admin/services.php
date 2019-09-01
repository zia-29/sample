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
                            <small>Our Services</small>
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
                            include "includes/edit_service.php";
                            break;

                            default:
                        
                          include "includes/view_service.php"; 
                        break;
                        } 
                        ?><tr><br>
 <div class="col-xs-6">
<?php
if(isset($_POST['submit'])){
    $service_title = $_POST['service_title'];
    $service_content = $_POST['service_content'];
    

    $query = "INSERT INTO service(service_title,service_content)";
    $query .="VALUES ('{$service_title}','{$service_content}')";
    $add_aboutus=mysqli_query($connection,$query);
    
    conform($add_aboutus);
    header("Location:services.php");

}
?>
                        <form action="services.php" method="POST">
                        <h2 class="page-header">
                            
                            <small>Add New Services</small>
                        </h2>
                            <div class="form-group">
                                <label for="heading_title">Title</label>
                                <input type="text" class="form-control" name="service_title">
                            </div>
                            <div class="form-group">
                                <label for="heading_title">Content</label>
                                <input type="text" class="form-control" name="service_content">
                            </div>
                          <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add New Service">
                            </div>
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
