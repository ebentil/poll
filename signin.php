<?php
include 'config.php';
if ($_POST['key'] == 'signup') {
	$query = 'SELECT username from community where username="' . $_POST['username'] . '"';
	$result = mysqli_query($link, $query);
	if (mysqli_num_rows($result) > 0) {
		echo "Selected username is not available";
	} else {
		$query = 'INSERT INTO `poll`.`community` (
	`name`,
	`email`,
	`phone`,
	`age`,
	`nationality`,
	`location`,
	`sex`,
	`married`,
	`username`,
	`password`
)
VALUES
	(
		"' . $_POST['name'] . '",
		"' . $_POST['email'] . '",
		"' . $_POST['phone'] . '",
		"' . $_POST['age'] . '",
		"' . $_POST['nationality'] . '",
		"' . $_POST['location'] . '",
		"' . $_POST['sex'] . '",
		"' . $_POST['married'] . '",
		"' . $_POST['username'] . '",
		"' . $_POST['password'] . '"
	);';
		$result = mysqli_query($link, $query);
	}
	if ($result) {
		echo "done";
	} else {
		echo "Signup unsuccessful" . mysqli_error($link);
	}

} elseif ($_POST['key'] == 'signin') {
	$query = 'SELECT username from community where username="' . $_POST['username'] . '"';
	$result = mysqli_query($link, $query);
	if (mysqli_num_rows($result) > 0) {
		echo "done";
	}else {
		echo "Invalid credentials";
	}
}
?>