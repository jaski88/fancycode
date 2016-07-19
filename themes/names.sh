#!/bin/bash

#OUTPUT="$(date "+%Y_%M_%d-%H-%M-%S")-names"
OUTPUT=names.txt

echo "Writing output to $OUTPUT"

for i in {1..5}; 
do 
	
	if [ $i == 1 ]
	then
		i=""
	fi

	PAGE="https://templated.co/$i"

	echo "Processing page $PAGE " 
	wget wget -qO- $PAGE | grep -oh /items/thumbnails/[a-z]*.jpg | while read in; do echo `basename $in .jpg` >> $OUTPUT; done ; 
done
