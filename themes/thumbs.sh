#!/bin/bash

if [ $# -ne 1 ] 
then
    echo "Usage:" `basename $0` "[filename]"
    exit 1
fi

FILE=$1

while read in; 
do 
	wget "http://templated.co/items/thumbnails/$in.jpg"; 
done < $FILE
