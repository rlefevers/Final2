
<?php include('views/elements/header.php');?>
<?php
if( is_array($post) ) {
    extract($post);

  }

if( is_array($comment) ) {
    extract($comment);

}?>

    <div class="container">
        <div class="page-header">

            <h1><?php echo $title;?></h1>
            <h4><a href="<?php echo BASE_URL?>blog/category/<?php echo $p['categoryid'];?>" title="<?php echo $p['name'];?>"><?php echo $p['name'];?></a></h4>
        </div>
        <p><?php echo $content;?></p>
        <sub><?php echo 'Posted on ' . $date . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a> in <a href="'.BASE_URL.'category/view/'. $categoryid.'">' . $name .'</a>'; ?>
        </sub>
        <br>
        <br>

        <h2>Comments</h2>


          <!--COMMENT CONTENT-->
          <?php foreach($comments as $c){?>
              <sub><?php echo 'Posted on ' . $c[date] . ' by <a href="'.BASE_URL.'members/view/'. $uid.'">'. $first_name . ' ' . $last_name . '</a>'; ?></sub>
                <p><?php echo $commentText;?></p>
                <?php
                if($u->isAdmin()) {
                    ?>
                    <a href="<?php echo BASE_URL;?>manageposts/delete" class="btn btn-primary">Delete Comment</a>
                <?php
                }
                ?>
          <?php }?>
          <br>
          <br>
          <!--COMMENT OPTIONS-->

          <?php
          if($u->isRegistered()) {
          ?>
              <form action="<?php echo BASE_URL?>blog/add<?php echo $task?>">
                <input type="hidden" name="pid" id='pid' value="">
              </form>
              <form action="<?php echo BASE_URL?>blog/<?php echo $task?>" method="post.editor()">
                 <textarea  class='form-control' id="commentText" name="commentText" value="comments" placeholder="Comment Here" rows="3" style="width:75%;"></textarea>
              <br>
                <input type="submit" id='submitComment' class='btn btn-primary' value="Submit">
                <input type="hidden" name="pid" id='pid' value="">
                <input type="hidden" name="uid" id='uid' value="">
          </form>

          <?php
          }
          else {
          ?>
              <p><a href="<?php echo BASE_URL;?>login/index">You must be logged in to comment.</a></p>

          <?
          }
          ?>

    </div>


<?php include('views/elements/footer.php');?>
