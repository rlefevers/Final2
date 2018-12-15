<?php
include('views/elements/header.php');
?>

<div class="container">
	<div class="page-header">

   <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

	<form id="profile_form" action="<?php echo BASE_URL?>members/<?php echo $task?>" method="post">

	<fieldset>
	<legend>Edit Profile</legend>
	<label for="first_name">First Name: <?=REQFIELD?></label>
	<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20" required="first_name" />
	<br />

	<label for="last_name">Last Name: <?=REQFIELD?></label>
	<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20" required="last_name" />
	<br />

	<label for="email">E-mail Address: <?=REQFIELD?></label>
	<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100" required="email" />
	<br />

	<label for="password">Password: <?=REQFIELD?></label>
	<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100"/>

	<label for="passConfirm">Confirm Password: <?=REQFIELD?></label>
	<input type="password" class="txt" id="passConfirm" name="passConfirm" value="<?php echo $passConfirm;?>" maxlength="100"/>

	<br />

	<input type="hidden" name="uID" value="<?php echo $uID ?>"/>

	<button id="submit" type="submit" class="btn btn-primary" >Confirm Changes</button>
	</fieldset>
	</form>

<?php
echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
?>




<script src="https://cdn.jsdelivr.net/jquery/1.12.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
<script src="form.js"></script>
<script>
$('.registration_form').validate({
  rules: {
    first_name: {
    required: true,
  },
  last_name: {
    required: true,
  },
  password: {
    required: true,
  },
  passdConfirm: {
    required: true,
    equalTo: "#password"
  },
  email: {
    required: true,
    email: true
  }
  },

  messages: {
    first_name: {
      required: "Please enter your first name",
  },
    last_name: {
      required: "Please enter your last name",
  },
    password: {
      required: "Please enter an arrival date",
  },
    passConfirm: {
      required: "Please confirm your chosen password",
      equalTo: "Password is case sensitive"
  },
    email: {
      required: "Please enter an email address",
      email: "Please enter a valid email address"
  }
  },
  submitHandler: function (form) {
  $(".registration_form").submit();
  }
});
</script>



</div>
</div>

<?php include('views/elements/footer.php');
?>
