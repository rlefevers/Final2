<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Add Comment</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
        <form action="<?php echo BASE_URL?>blog/add<?php echo $task?>" method="post">

          <label for="cdate">Date</label>
          <?php // set timezone
					date_default_timezone_set('America/Indiana/Indianapolis');?>
          <input name="cdate" id="cdate" size="16" type="date" value="<?php echo $date = date('Y-m-d H:i:s'); ?>">

          <label>Comment</label>
          <textarea id="tinyeditor" name="commentText" style="width:556px;height: 200px"><?php echo $commentText?></textarea>
    			<br/>
          <input type="hidden" name="commentID" value="<?php echo $commentID?>"/>

          <button id="submit" type="submit" class="btn btn-primary" >Submit</button>


					<form action="<?php echo BASE_URL ?>blog/add" method="post">
			 	 	<label for="category">New Category</label>
			 		<input type="text" name="category" class="input-sm" id="category" required="category">
			 		<input type="submit" class='btn btn-primary' value="Submit">
			 	 </form>

        </form>


      </div>
    </div>
</div>
<?php include('views/elements/footer.php');?>
