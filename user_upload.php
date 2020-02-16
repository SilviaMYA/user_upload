
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
		$csv_file = $argv[1];  //file name
		$first_line = true;	  // we have a first line in csv file
		// Open the file for reading
		if (($file_pointer = fopen($csv_file, "r")) !== FALSE) 
		{
			// iterrate through all the rows of the file
			while(! feof($file_pointer)){
				$content=fgetcsv($file_pointer); //parses a line from an open file, checking for CSV fields
				//We dont't want to include the first line, beacuse it's a header
				if(!$first_line) 
				{
					echo print_r($content); // print the content 
					echo "<br>";
				}
				$first_line = false;  //sets first line false to start using the content
			}
				
			fclose($file_pointer);//close csv file
		}
	}
?>