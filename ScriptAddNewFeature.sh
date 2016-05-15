a#!/bin/bash



ls | while IFS=' ' read item
do 
	if [[ "$item" == *".php"* ]]
	then
		cat $item | while IFS=' ' read row
		do
			if [[ "$row" == *'setcookie($cookie_name, $cookie_value, time() + (60 * 1),'* ]] 
			then
				#string to insert where we stop
				echo '   	setcookie($cookie_name, $cookie_value, time() + (60 * 10), "/");'  >> temp.php;
				echo '  	setcookie($cookie_name, $cookie_value, time() + (60 * 10), "/" );'
				echo "DONE MASTER";
			else
				 echo "$row" >> temp.php;
			fi
		done
		#copy the temp file to the orginal file

		echo $item; 
		cat temp.php  > "$item"
		#remove the temp file
		rm temp.php
	fi
done
