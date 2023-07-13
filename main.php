<?php

	if($_SERVER['REQUEST_METHOD'] === 'POST') {

		$placeholder = $_POST['youremail'];
		$type = $_POST['password'];
		$placeholder = $_POST['Enter_your_name'];
		$placeholder = $_POST['confirm_Password'];

		$filename = str_replace(' ', '_', $nama) . '.txt';

		$data = "placeholder: $youremail\n";
		$data .= "type: $password\n";
		$data .= "placeholder: $Enter_your_name\n";
		$data .= "placeholder: $confirm_Password\n";

		file_put_contents($filename, $data);

	}
?>