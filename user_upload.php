
<?php

	//check if we don't have an argument
	if ($argc != 2 ) 
	{
		echo 'Please provide an argument'. PHP_EOL;
		echo 'FORMAT: user_upload.php users.csv'. PHP_EOL;
	}
	//check if the argument is not users.csv
	else if($argv[1] != 'users.csv') 
	{
    	echo  'Please provide users.cvs as argument'  . PHP_EOL;
	}
	else
	{
		echo  'My argument is: ' . $argv[1]  . PHP_EOL;
	}
?>