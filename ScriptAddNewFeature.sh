#!/bin/bash



ls | while IFS=' ' read item
do 
	if [[ "$item" == *".php"* ]]
	then
		cat $item | while IFS=' ' read row
		do
			echo "$row" >> temp.php;
			if [[ "$row" == *"/OwnerViewExpense.php"* ]] 
			then
				#string to insert where we stop
				echo "                <li><a href="/OwnerApproveExpense.php">Approve Expenses</a></li>" >> temp.php;
				echo "DONE MASTER";
			fi
		done
		#copy the temp file to the orginal file

		echo $item; 
		cat temp.php  > "$item"
		#remove the temp file
		rm temp.php
	fi
done
