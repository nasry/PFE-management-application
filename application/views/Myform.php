<html>
<head>
<title>My Form</title>
</head>
<body>

<!-- <?php echo validation_errors(); ?>  pour afficher la liste des erreurs-->

<?php echo form_open('form'); ?>

<h5>Username</h5>
<input type="text" name="username" value="<?php echo set_value('username'); ?>" size="50" />
<?php echo form_error('username'); ?>

<h5>Password</h5>
<input type="text" name="password" value="<?php echo set_value('password'); ?>" size="50" />
<?php echo form_error('password'); ?>

<h5>Password Confirm</h5>
<input type="text" name="passconf" value="<?php echo set_value('passconf'); ?>" size="50" />
<?php echo form_error('passconf'); ?>

<h5>Email Address</h5>
<input type="text" name="email" value="<?php echo set_value('email'); ?>" size="50" />
<?php echo form_error('email'); ?>

<h5>Date</h5>
<input type="text" name="date" value="<?php echo set_value('date'); ?>" size="50" />
<?php echo form_error('date'); ?>




<div><input type="submit" value="Submit" /></div>

</form>

</body>
</html>