<!DOCTYPE html>
<html lang="en">
    
    <!-- HEADER -->
    <?php
        require_once("../ui-elements/header.php");
        require_once("../classes/Roles.php");

        if($_SESSION['user_role'] === "user") { // if a user is logged in, deny him the admin access
            header("Location: ../admin-access-denied.html"); // Added Relative path again
        }
    ?>

    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <?php
                require_once("../ui-elements/navigation.php");
            ?>

            <div id="page-wrapper">
                <div class="container-fluid container-fluid-mine effect8 padding-mine">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">All Roles</h1>
                        </div>
                        <!-- /.col-lg-12 -->
                    </div>

                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-condensed" id="roles-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Role ID</th>
                                        <th>Role Name</th>
                                    </tr>
                                </thead>
                                <tbody class="hover-mine">
                                    <?php
                                        $sr_no = 1;
                                        $roles = new Roles();
                                        $result_set = $roles->getAllRoles();
                                        while($row = mysqli_fetch_assoc($result_set)) {
                                            extract($row);
                                    ?>
                                            <tr>
                                                <td><?php echo $sr_no; ?></td>
                                                <td><?php echo $role_id; ?></td>
                                                <td><?php echo $role_name; ?></td>
                                                <td><a class='btn btn-outline btn-danger' onclick="deleteRoleClicked(event, <?php echo $role_id; ?>, this);"><span class='fa fa-trash'></span> Delete</a></td>
                                            </tr>
                                    <?php    
                                            $sr_no++;
                                        } // End of while loop
                                    ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.table-responsive -->                    
                    </div>
                </div>
                <!-- /container-fluid -->
            </div>    
            <!-- /#page-wrapper -->
        </div>
        <!-- /#wrapper -->

        <!-- FOOTER -->
        <?php
            require_once("../ui-elements/footer.php");
        ?>
    </body>
</html>