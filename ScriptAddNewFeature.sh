a#!/bin/bash



ls | while IFS=' ' read item
do 
	if [[ "$item" == *".php"* ]]
	then
		cat $item | while IFS=' ' read row
		do

		    echo "$row" >> temp.php;
			if [[ "$row" == *'OwnerPaidTicket.php">Update Paid Tickets'* ]] 
			then
				#string to insert where we stop
				echo '   			<li><a href=/TicketSearch.php>Unpaid Ticket Search</a></li>'  >> temp.php;
				echo "DONE MASTER";
				echo $item;
			fi
		done
		#copy the temp file to the orginal file

		#echo $item; 
		cat temp.php  > "$item"
		#remove the temp file
		rm temp.php
	fi
done
