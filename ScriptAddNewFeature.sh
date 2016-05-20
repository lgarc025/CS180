#!/bin/bash

ls | while IFS=' ' read item
do
	if [[ "$item" != *"iOS"* ]] && [[ "$item" != *"Web"* ]]
	then
		cat $item | while IFS=' ' read row
		do
			if [[ "$row" == *'ChangeOwnerPassword.php">Change Password'* ]]
			then
				echo '				<li><a href="/RemoveAdmin.php.php">Remove Admin Account</a></li>' >> temp.php;
				echo "DONE MASTER";
				echo $item;
			fi

		    echo "$row" >> temp.php;
		done
		#copy the temp file to the orginal file

		#echo $item;
		cat temp.php  > "$item"
		#remove the temp file
		rm temp.php
	fi
done
