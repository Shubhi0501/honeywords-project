<?php
if(isset($_POST['getusers']) && $_POST['getusers'] == 1) {
	include_once('db.php');
	$users = array();
	$sql = ("select id,username from `users` where `user_type` = 2");
	$result = $db->query($sql);
	while ($user = mysqli_fetch_assoc($result)) {
		$users[$user['id']] = $user['username'];
	}
	echo json_encode($users);
	exit;
}else {
	
	echo "Invalid request.";
	exit;
}