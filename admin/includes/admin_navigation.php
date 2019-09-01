<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Teddy Admin</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li><a href="../index.php">Visit site</a></li>


                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Admin <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="../includes/logout.php"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="./heading.php"><i class="fa fa-fw fa-desktop"></i>Page Title</a>
                    </li>
                   
                    <li class="">
                        <a href="./aboutus.php"><i class="fa fa-fw fa-file"></i>About us</a>
                    </li>
                    <li class="">
                        <a href="./services.php"><i class="fa fa-fw fa-file"></i>Services</a>
                    </li>
                    <li class="">
                        <a href="./contact.php"><i class="fa fa-fw fa-file"></i>Contact</a>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#review_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Reviews <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="review_dropdown" class="collapse">
                            <li>
                                <a href="./review.php">View All Reviews</a>
                            </li>
                            <li>
                                <a href="./review.php?source=add_review">Add Reviews</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#users_dropdown"><i class="fa fa-fw fa-arrows-v"></i> Users <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="users_dropdown" class="collapse">
                            <li>
                                <a href="./users.php">View All Users</a>
                            </li>
                            <li>
                                <a href="./users.php?source=add_user">Add Users</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>