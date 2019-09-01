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
                            <small>About Us</small>
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
                            include "includes/edit_post.php";
                            break;

                            default:
                        
                          include "includes/view_aboutus.php"; 
                        break;
                        } 
                        ?><tr><br>
 <div class="col-xs-6">
<?php
if(isset($_POST['submit'])){
    $about_title = $_POST['about_title'];
    $about_content = $_POST['about_content'];
    

    $query = "INSERT INTO aboutus(about_title,about_content)";
    $query .="VALUES ('{$about_title}','{$about_content}')";
    $add_aboutus=mysqli_query($connection,$query);
    
    conform($add_aboutus);
    header("Location:aboutus.php");

}
?>
                        <form action="aboutus.php" method="POST">
                            <div class="form-group">
                                <label for="heading_title">Title</label>
                                <input type="text" class="form-control" name="about_title">
                            </div>
                            <div class="form-group">
                                <label for="heading_title">Content</label>
                                <input type="text" class="form-control" name="about_content">
                            </div>
                          <div class="form-group">
                                <input class="btn btn-primary" type="submit" name="submit" value="Add New Content">
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
