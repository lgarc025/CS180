#!/bin/bash

ls | while IFS=' ' read item
do 
	if [[ "$item" != *"iOS"* ]] && [[ "$item" != *"Web"* ]]
	then
		cat $item | while IFS=' ' read row
		do

		    echo "$row" >> temp.php;
			if [[ "$row" == *'$dbname = "LuisTrucking";'* ]] 
			then
				#string to insert where we stop
				echo "DONE MASTER";
				echo $item;
			fi
		done
		#copy the temp file to the orginal file

		#echo $item; 
		#cat temp.php  > "$item"
		#remove the temp file
		rm temp.php
	fi
done
