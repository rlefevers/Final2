<?php
include('views/elements/header.php');?>

<div class="container">
<div class="page-header">

<h1><?php echo $title;?></h1>

<?php if($message){?>
 <div class="alert alert-success">
 <button type="button" class="close" data-dismiss="alert">×</button>
   <?php echo $message ?>
 </div>
<?php }?>

  </div>

	<?php foreach($users as $u){?>
    <h3><a href="<?php echo BASE_URL?>members/users/<?php echo $u['uID'];?>" title="<?php echo $u['first_name'];?> <?php echo $u['last_name'];?>"><?php echo $u['email'];?></a></h3>
    <p><?php echo $u['first_name'];?> <?php echo $u['last_name'];?></p>
    <p><a href="mailto:<?php echo $u['email'];?>"><?php echo $u['email'];?></a></p>
    <p><?php echo $u['active'];?></p>
    <br>
    <p>
    <form action="<?php echo BASE_URL?>manageusers/update/" method="post">
        <input type="hidden" name="uID" value="<?php echo $u['uID'];?>">
        <button type="submit" class="btn btn-primary">Approve User</button>
    </form>
    <form action="<?php echo BASE_URL?>manageusers/delete/" method="post">
        <input type="hidden" name="uID" value="<?php echo $u['uID'];?>">
        <button type="submit" class="btn btn-primary">Delete User</button>
    </form>
  </p>







    <br>
    <br>
    <?php }?>


</div>

<?php include('views/elements/footer.php');?>
