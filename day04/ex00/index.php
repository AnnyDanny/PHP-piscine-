<?php

session_start();

if ($_GET['submit'] == 'OK')
{
	$_SESSION['login'] = $_GET['login'];
	$_SESSION['passwd'] = $_GET['passwd'];
}

?>

<!DOCTYPE html>
<html>
<body>
<form action="index.php" method="get" id="nameform">
   Username: <input type="text" name="login" value="<?php echo $_SESSION['login']; ?>"><br>
  Password: <input type="text" name="passwd" value="<?php echo $_SESSION['passwd']; ?>"><br>
  <input type="submit" name="submit" value="OK"><br>
</form>
</body>
</html>