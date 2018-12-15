<?php include('views/elements/header.php');?>

<div class="container">
	<div class="page-header">
   <h1>Delete Post</h1>
  </div>

  <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

  <div class="row">
      <div class="span8">
				<?php foreach($posts as $p){?>
				<form action="<?php echo BASE_URL?>manageusers/<?php echo $task?>" method="post">
		        <input type="hidden" name="pID" value="<?php echo $p['pID'];?>">
		        <button type="submit" class="btn btn-primary">Confirm Post Delete</button>
		    </form>
			<?php }?>


      </div>
    </div>
</div>

<?php include('views/elements/footer.php');?>
