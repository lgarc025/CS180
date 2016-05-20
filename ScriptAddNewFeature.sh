#!/bin/bash

ls | while IFS=' ' read item
do
	if [[ "$item" != *"iOS"* ]] && [[ "$item" != *"Web"* ]]
	then
		cat $item | while IFS=' ' read row
		do

$dbname = $_COOKIE[db];
			then
				echo '$dbname = $_COOKIE['db'];' >> temp.php;
				echo "DONE MASTER";
				echo $item;
			else
		    	echo "$row" >> temp.php;
			fi
		done
		#copy the temp file to the orginal file

		#echo $item;
		cat temp.php  > "$item"
		#remove the temp file
		rm temp.php
	fi
done
