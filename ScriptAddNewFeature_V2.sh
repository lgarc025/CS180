#!/bin/bash



ls | while IFS=' ' read item
do 
	if [[ "$item" == *".php"* ]]
	then
		cat $item | while IFS=' ' read row
		do
			if [[ "$row" == *"AddDriver.php\">Add Ticket<"* ]] 
			then
				#string to insert where we stop
				echo "               	<li><a href="/AddTicketOwner.php">Add Ticket</a></li>" >> temp.php;
				echo "DONE MASTER";
			else
				echo "$row" >> temp.php;
			fi
		done
		#copy the temp file to the orginal file

		echo $item; 
		cat temp.php  > "$item"
		#cat temp.php
		#remove the temp file
		rm temp.php
	fi
done
