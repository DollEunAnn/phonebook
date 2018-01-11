<html>
	<body>

	<?php
	
	$file = fopen('phonebook.txt',"a");
	$fname = $_POST["first_name"];
	$lname = $_POST["last_name"];
	$number = $_POST["number"];
	$fullname = "$lname,$fname,$number \n";

	fwrite($file,$fullname);
	fclose($file);

	// $file = file_put_contents('phonebook.txt', $fullname.PHP_EOL , FILE_APPEND | LOCK_EX);

	echo "$lname,$fname,$number";
	?>

	</body>
</html>