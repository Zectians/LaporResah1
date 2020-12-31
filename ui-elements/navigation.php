<!-- NAVIGATION -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation" style="margin-bottom: 0;">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <?php 
                    if($_SESSION['user_role'] === "admin") {
                        echo '<a class="navbar-brand" href="http://localhost/laporResah-main/admin/index.php">Lapor Resah</a>';
                    } else {
                        echo '<a class="navbar-brand" href="http://localhost/laporResah-main/index.php">Lapor Resah</a>';
                    }
                ?>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                    <button style="background: none; color: inherit; border: none; padding: 0; font: inherit; outline: inherit; padding-left: 22px; margin-top:14px; margin-right: 10px;" onclick="logoutButtonClicked(event);">
                    <i class="fa fa-sign-out fa-fw"></i> Logout</button>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar sidebar-mine background-white-mine" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search nav-link-margin">
                            <!-- <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div> -->
                            <!-- /input-group -->
                        </li>
                        <li class="nav-link-margin">
                            <?php
                                // Setting absolute path 
                                $path = "";
                                if($_SESSION['user_role'] === "admin") {
                                    $path = "http://localhost/laporResah-main/admin/index.php";
                                } else {
                                    $path = "http://localhost/laporResah-main/index.php";
                                }
                            ?>
                            <a href="http://localhost/laporResah-main/index.php"><i class="fa fa-home fa-fw"></i> Home</a>
                        </li>
        
                        <li class="nav-link-margin">
                            <a href="http://localhost/laporResah-main/posts/view-all-posts.php"><i class="fa fa-window-restore"></i> Lihat Resah</a>
                        </li>
                        <li class="nav-link-margin">
                            <a href="http://localhost/laporResah-main/posts/add-post.php"><span class="fa fa-question"></span> Lapor Resah</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
