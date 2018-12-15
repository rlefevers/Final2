
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

}?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
        <br>
        <br>

          <!--COMMENT STUFF-->
        <a href="<?php echo BASE_URL;?>blog/addcomment" class="btn btn-primary">Add Comment</a>

        <!--COMMENT CONTENT-->

        <p><?php echo $comments;?></p>




    </div>


<?php include('views/elements/footer.php');?>
