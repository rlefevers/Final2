<?php
include('views/elements/header.php');
?>

<div class="container">
	<div class="page-header">
   <h1>Register</h1>

   <?php if($message){?>
    <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">×</button>
    	<?php echo $message?>
    </div>
  <?php }?>

	<form id="registration_form" action="<?php echo BASE_URL;?>register/<?php echo $task?>" onsubmit="return validateForm()" method="post">

	<fieldset>
	<legend>Register Today!</legend>
	<label for="first_name">First Name: <?=REQFIELD?></label>
	<input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>" maxlength="20"/>
	<br />

	<label for="last_name">Last Name: <?=REQFIELD?></label>
	<input type="text" class="txt" id="last_name" name="last_name" value="<?php echo $last_name;?>" maxlength="20"/>
	<br />

	<label for="email">E-mail Address: <?=REQFIELD?></label>
	<input type="text" class="txt" id="email" name="email" value="<?php echo $email;?>" maxlength="100"/>
	<br />

	<label for="password">Password: <?=REQFIELD?></label>
	<input type="password" class="txt" id="password" name="password" value="<?php echo $password;?>" maxlength="100" />

	<label for="passConfirm">Confirm Password: <?=REQFIELD?></label>
	<input type="password" class="txt" id="passConfirm" name="passConfirm" value="<?php echo $passConfirm;?>" maxlength="100" onchange="check_pass();"/>

	<br />

	<input type="hidden" name="uID" value="<?php echo $uID ?>"/>

	<button id="submit" type="submit" class="btn btn-primary" >Sign Up</button>
	</fieldset>
	</form>

<?php
echo '<p><a href="'.BASE_URL.'">Back to home page</a></p>';
?>
<script>
function validateForm() {
  var firstname = document.forms["registration_form"]["first_name"].value;
  if (firstname == "") {
    alert("First Name must be filled out");
    return false;
  }
	var lastname = document.forms["registration_form"]["last_name"].value;
  if (lastname == "") {
    alert("Last Name must be filled out");
    return false;
  }
	var email = document.forms["registration_form"]["email"].value;
  if (email == "") {
    alert("Email must be filled out");
    return false;
  }
	var password = document.forms["registration_form"]["password"].value;
  if (password == "") {
    alert("You must create a password");
    return false;
  }
	var passwordConfirm = document.forms["registration_form"]["passConfirm"].value;
  if (passwordConfirm == "") {
    alert("Make sure your passwords match");
    return false;
  }
}
function check_pass() {
	if (document.getElementById('password').value ==
					document.getElementById('passConfirm').value) {
						alert("Make sure your passwords match");
						document.getElementById('submit').disabled = false;
	} else {
			document.getElementById('submit').disabled = true;
	}
}
</script>



</div>
</div>

<?php include('views/elements/footer.php');
?>
