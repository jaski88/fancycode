#!/bin/bash

INPUT=names.txt
OUTPUT=output.html

rm $OUTPUT

cat names.txt | while read name
do
echo "<a href=\"https://templated.co/items/demos/${name}/\"><img src=\"thumbs/${name}.jpg\" /></a>" >> $OUTPUT
done


