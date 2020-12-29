<!DOCTYPE html>
<html lang="en">

<!-- HEADER -->
<?php 
    require_once("../ui-elements/header.php");
?>
    
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <?php 
            require_once("../ui-elements/navigation.php");
        ?>

        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid container-fluid-mine effect8 padding-mine">
                <form action="" method="POST" id="post-question-form">
                    <div>
                        <h3>Ask a Question</h3>
                        <input type="text" name="question_tags" id="question_tags" class="form-control" autocomplete="off" placeholder="Add comma separated tags">
                        <br>
                        <div class="form-group shadow-textarea-mine">
                            <textarea id="askedQuestion" class="form-control z-depth-1-mine" rows="5" placeholder="Write your question..."></textarea>
                        </div>
                        <div id="askedQuestion-error" class="text-danger hidden">Cannot submit empty Post!</div>
                        <br>
                        <button name="post-question" id="post-question" class="btn btn-outline btn-primary" onclick="postQuestionClicked(event);">Post Question</button>
                    </div>
                </form>    
            </div>
            <!-- /.container-fluid -->
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